<?php

class Produk_model {
    private $table = 'produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList($page = null)
    {
        $data = [];

        $jumlahDataSetiapPage = 10;
        $this -> db -> query("SELECT produk.* FROM `" . $this->table . "`");
        $daftarData = $this -> db -> resultSet();
        $jumlahData = count($daftarData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        if ($page != null) {
            $this -> db -> query("SELECT produk.* FROM `" . $this->table . "` LIMIT $dataPertama, $jumlahDataSetiapPage");
            $daftarData = $this -> db -> resultSet();
        }

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getProdukById($id_produk){
        $this->db->query('SELECT * FROM produk WHERE id_produk = '.$id_produk);
        return $this->db->single();
    }

    public function tambahProduk($data, $id_produk){
        $nama_produk= $data['nama_produk'];
        $berat_bersih = $data['berat_bersih'];
        $harga = $data['harga'];
        $produk_kakao_kering = $data['produksi_kakao_kering'];
        $produk_kakao_basah = $data['produksi_kakao_basah'];
        $query = "INSERT INTO produk (nama_produk, berat_bersih, harga, produksi_kakao_kering, produksi_kakao_basah) VALUES ('$nama_produk', $berat_bersih, $harga, $produk_kakao_kering, $produk_kakao_basah)";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusProduk($id_produk)
    {
        $query = "DELETE FROM produk WHERE id_produk = :id_produk";
        $this->db->query($query);
        $this->db->bind('id_produk', $id_produk);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateProduk($data)
    {
        $nama_prod= $data['nama_produk'];
        $bb = $data['berat_bersih'];
        $harga_prod = $data['harga'];
        $pro_kakao_kering = $data['produksi_kakao_kering'];
        $pro_kakao_basah = $data['produksi_kakao_basah'];
        $idProd = $data['id_produk'];

        $query = "UPDATE produk SET nama_produk = '$nama_prod', berat_bersih = $bb, harga = $harga_prod, produksi_kakao_kering = $pro_kakao_kering, produksi_kakao_basah = $pro_kakao_basah WHERE id_produk = $idProd";
    
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}