<?php

class SKP_model {
    private $table = 'stok_keluar_produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList($page)
    {
        $data = [];

        $jumlahDataSetiapPage = 10;
        $this -> db -> query("SELECT stok_keluar_produk.*, produk.nama_produk, DATE_FORMAT(tanggal_keluar, '%Y-%m-%d') AS tanggal_keluar FROM `" . $this->table . "` LEFT JOIN produk ON produk.id_produk = stok_keluar_produk.nama_produk");
        $jumlahData = $this -> db -> resultSet();
        $jumlahData = count($jumlahData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        $this -> db -> query("SELECT stok_keluar_produk.*, produk.nama_produk, DATE_FORMAT(tanggal_keluar, '%Y-%m-%d') AS tanggal_keluar FROM `" . $this->table . "` LEFT JOIN produk ON produk.id_produk = stok_keluar_produk.nama_produk LIMIT $dataPertama, $jumlahDataSetiapPage");
        $daftarData = $this -> db -> resultSet();

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getSKPById($id_keluar_produk){
        $this->db->query('SELECT * FROM stok_keluar_produk WHERE id_keluar_produk = '.$id_keluar_produk);
        return $this->db->single();
    }

    public function tambahSKP($data, $id_keluar_produk){
        $nama_produk= $data['nama_produk'];
        $stok_keluar = $data['stok_keluar'];
        $query = "INSERT INTO stok_keluar_produk (nama_produk, stok_keluar) VALUES ($nama_produk, $stok_keluar)";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusSKP($id_keluar_produk)
    {
        $query = "DELETE FROM stok_keluar_produk WHERE id_keluar_produk = :id_keluar_produk";
        $this->db->query($query);
        $this->db->bind('id_keluar_produk', $id_keluar_produk);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateSKP($data)
    {
        $nama_prod= $data['nama_produk'];
        $stok_SKP = $data['stok_keluar'];
        $id_SKP = $data['id_keluar_produk'];

        $query = "UPDATE stok_keluar_produk SET nama_produk = '$nama_prod', stok_keluar = $stok_SKP WHERE id_keluar_produk = $id_SKP";
    
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getStockOutReport($year)
    {
        $query = "SELECT 
                    DATE_FORMAT(`stok_keluar_produk`.`tanggal_keluar`, '%m-%Y') as date,
                    SUM(`stok_keluar_produk`.`stok_keluar`) as stok,
                    `produk`.`nama_produk` as produk
                FROM `stok_keluar_produk`
                JOIN produk ON `produk`.`id_produk` = `stok_keluar_produk`.`nama_produk`
                WHERE DATE_FORMAT(`stok_keluar_produk`.`tanggal_keluar`, '%Y') = '$year'
                GROUP BY `produk`.`nama_produk`, DATE_FORMAT(`stok_keluar_produk`.`tanggal_keluar`, '%m-%Y')";

        $this->db->query($query);
        $result = $this->db->resultSet();

        $query = "SELECT `produk`.`nama_produk` FROM produk";
        $this->db->query($query);
        $produk = $this->db->resultSet();

        $produk = array_map(function($row) {
            return $row['nama_produk'];
        }, $produk);

        $data = [];
        foreach ($produk as $x) {
            $keyIndex = array_keys(array_column($result, "produk"), $x);

            for ($i = 1; $i <= 12; $i++) {
                foreach ($keyIndex as $y) {
                    $date = sprintf('%s-%s', $i < 10 ? '0' . $i : $i, $year);
                    if ($date == $result[$y]['date']) {
                        $data[$x][$i-1] = $result[$y]['stok'];
                    }
                }

                if (empty($data[$x][$i-1])) {
                    $data[$x][$i-1] = 0;
                }
            }
        }

        return $data;
    }
}