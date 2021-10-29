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
}