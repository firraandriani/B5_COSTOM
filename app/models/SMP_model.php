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
}