<?php

class SMP_model {
    private $table = 'stok_masuk_produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList($page)
    {
        $data = [];

        $jumlahDataSetiapPage = 10;
        $this -> db -> query("SELECT stok_masuk_produk.*, produk.nama_produk, DATE_FORMAT(tanggal_masuk, '%Y-%m-%d') AS tanggal_masuk FROM `" . $this->table . "` LEFT JOIN produk ON produk.id_produk = stok_masuk_produk.nama_produk");
        $jumlahData = $this -> db -> resultSet();
        $jumlahData = count($jumlahData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        $this -> db -> query("SELECT stok_masuk_produk.*, produk.nama_produk, DATE_FORMAT(tanggal_masuk, '%Y-%m-%d') AS tanggal_masuk FROM `" . $this->table . "` LEFT JOIN produk ON produk.id_produk = stok_masuk_produk.nama_produk LIMIT $dataPertama, $jumlahDataSetiapPage");
        $daftarData = $this -> db -> resultSet();

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getSMPById($id_masuk_produk){
        $this->db->query('SELECT * FROM stok_masuk_produk WHERE id_masuk_produk = '.$id_masuk_produk);
        return $this->db->single();
    }

    public function tambahSMP($data, $id_masuk_produk){
        $nama_produk= $data['nama_produk'];
        $stok_masuk = $data['stok_masuk'];
        $query = "INSERT INTO stok_masuk_produk (nama_produk, stok_masuk) VALUES ($nama_produk, $stok_masuk)";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusSMP($id_masuk_produk)
    {
        $query = "DELETE FROM stok_masuk_produk WHERE id_masuk_produk = :id_masuk_produk";
        $this->db->query($query);
        $this->db->bind('id_masuk_produk', $id_masuk_produk);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateSMP($data)
    {
        $nama_prod= $data['nama_produk'];
        $stok_SMP= $data['stok_masuk'];
        $id_SMP = $data['id_masuk_produk'];

        $query = "UPDATE stok_masuk_produk SET nama_produk = '$nama_prod', stok_masuk = $stok_SMP WHERE id_masuk_produk = $id_SMP";
    
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getStockInReport($year)
    {
        $query = "SELECT 
                    DATE_FORMAT(`stok_masuk_produk`.`tanggal_masuk`, '%m-%Y') as date,
                    SUM(`stok_masuk_produk`.`stok_masuk`) as stok,
                    `produk`.`nama_produk` as produk
                FROM `stok_masuk_produk`
                JOIN produk ON `produk`.`id_produk` = `stok_masuk_produk`.`nama_produk`
                WHERE DATE_FORMAT(`stok_masuk_produk`.`tanggal_masuk`, '%Y') = '$year'
                GROUP BY `produk`.`nama_produk`, DATE_FORMAT(`stok_masuk_produk`.`tanggal_masuk`, '%m-%Y')";

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