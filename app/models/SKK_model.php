<?php

class SKK_model {
    private $table = 'stok_keluar_kakao';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList($page)
    {
        $data = [];

        $jumlahDataSetiapPage = 10;
        $this -> db -> query("SELECT stok_keluar_kakao.*, status_kakao.nama_kategori AS status_kakao, produk.nama_produk, DATE_FORMAT(tanggal_keluar, '%Y-%m-%d') AS tanggal_keluar FROM `" . $this->table . "` LEFT JOIN produk ON produk.id_produk = stok_keluar_kakao.nama_produk JOIN kategori AS status_kakao ON status_kakao.id = stok_keluar_kakao.status_kakao");
        $jumlahData = $this -> db -> resultSet();
        $jumlahData = count($jumlahData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        $this -> db -> query("SELECT stok_keluar_kakao.*, status_kakao.nama_kategori AS status_kakao, produk.nama_produk, DATE_FORMAT(tanggal_keluar, '%Y-%m-%d') AS tanggal_keluar FROM `" . $this->table . "` LEFT JOIN produk ON produk.id_produk = stok_keluar_kakao.nama_produk JOIN kategori AS status_kakao ON status_kakao.id = stok_keluar_kakao.status_kakao LIMIT $dataPertama, $jumlahDataSetiapPage");
        $daftarData = $this -> db -> resultSet();

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getSKKById($id_keluar_kakao){
        $this->db->query('SELECT * FROM stok_keluar_kakao WHERE id_keluar_kakao = '.$id_keluar_kakao);
        return $this->db->single();
    }

    public function tambahSKK($data, $id_keluar_kakao){
        $nama_produk= $data['nama_produk'];
        $stok_keluar = $data['stok_keluar'];
        $status_kakao = $data['status_kakao'];
        $query = "INSERT INTO stok_keluar_kakao (nama_produk, stok_keluar, status_kakao) VALUES ($nama_produk, $stok_keluar, $status_kakao)";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusSKK($id_keluar_kakao)
    {
        $query = "DELETE FROM stok_keluar_kakao WHERE id_keluar_kakao = :id_keluar_kakao";
        $this->db->query($query);
        $this->db->bind('id_keluar_kakao', $id_keluar_kakao);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateSKK($data)
    {
        $nama_prod= $data['nama_produk'];
        $stok_kk= $data['stok_keluar'];
        $status_kk = $data['status_kakao'];
        $id_skk = $data['id_keluar_kakao'];
        
        $query = "UPDATE stok_keluar_kakao SET nama_produk = '$nama_prod', stok_keluar = $stok_kk, status_kakao = $status_kk WHERE id_keluar_kakao = $id_skk";
        
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getStockOutReport($year)
    {
        $query = "SELECT 
                    DATE_FORMAT(`stok_keluar_kakao`.`tanggal_keluar`, '%m-%Y') as date,
                    SUM(`stok_keluar_kakao`.`stok_keluar`) as stok,
                    `status_kakao`.`nama_kategori` as status_kakao
                FROM `stok_keluar_kakao`
                JOIN kategori as status_kakao ON `status_kakao`.id = `stok_keluar_kakao`.`status_kakao`
                WHERE DATE_FORMAT(`stok_keluar_kakao`.`tanggal_keluar`, '%Y') = '$year'
                GROUP BY `stok_keluar_kakao`.`status_kakao`, DATE_FORMAT(`stok_keluar_kakao`.`tanggal_keluar`, '%m-%Y')";

        $this->db->query($query);
        $result = $this->db->resultSet();

        $stokKeluarKering = [];
        $stokKeluarBasah = [];
        foreach ($result as $x) {
            if ($x['status_kakao'] == 'Kering') $stokKeluarKering[] = $x;
            else if ($x['status_kakao'] == 'Basah') $stokKeluarBasah[] = $x;
        }

        $data = [];
        for ($i = 1; $i <= 12; $i++) {
            $keyIndexStokKeluarKering = array_search(sprintf('%s-%s', $i < 10 ? '0' . $i : $i, $year), array_column($stokKeluarKering, 'date'));
            $keyIndexStokKeluarBasah = array_search(sprintf('%s-%s', $i < 10 ? '0' . $i : $i, $year), array_column($stokKeluarBasah, 'date'));

            if (is_numeric($keyIndexStokKeluarKering)) $data['stok_keluar_kering'][] = $stokKeluarKering[$keyIndexStokKeluarKering]['stok'];
            else $data['stok_keluar_kering'][] = 0;

            if (is_numeric($keyIndexStokKeluarBasah)) $data['stok_keluar_basah'][] = $stokKeluarBasah[$keyIndexStokKeluarBasah]['stok'];
            else $data['stok_keluar_basah'][] = 0;
        }

        return $data;
    }
}