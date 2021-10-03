<?php

class Petani_model {
    private $table = 'petani';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList()
    {
        $this->db->query('SELECT petani.*, alamat.nama_kategori AS alamat, status_lahan.nama_kategori AS status_lahan FROM ' . $this->table . '  JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_lahan ON status_lahan.id = petani.status_lahan');
        
        return $this->db->resultSet();
        // $data = [];

        // $jumlahDataSetiapPage = 10;
        // $jumlahData = $this -> db_connect -> prepare("SELECT petani.*, alamat.nama_kategori AS alamat, status_lahan.nama_kategori AS status_lahan FROM ' . $this->table . '  JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_lahan ON status_lahan.id = petani.status_lahan");
        // $jumlahData -> execute();
        // $jumlahData = $jumlahData -> fetchAll();
        // $jumlahData = count($jumlahData);

        // $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        // $halamanSaatIni = ( isset($_GET["Page"]) ) ? $_GET["Page"] : 1;
        // $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        // $query = $this -> db_connect -> prepare("SELECT petani.*, alamat.nama_kategori AS alamat, status_lahan.nama_kategori AS status_lahan FROM ' . $this->table . '  JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_lahan ON status_lahan.id = petani.status_lahan LIMIT $dataPertama, $jumlahDataSetiapPage");
        // $query -> execute();
        // $daftarData = $query -> fetchAll();

        // $data['list_data'] = $daftarData;
        // $data['halaman_saat_ini'] = $halamanSaatIni;
        // $data['jumlah_halaman'] = $jumlahPage;

        // return $data;
    }

    public function getpetaniById($id_petani){
        $this->db->query('SELECT * FROM petani WHERE id_petani = '.$id_petani);
        return $this->db->single();
    }

    public function tambahPetani($data, $id_petani){
        $nama_petani= $data['nama_petani'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $alamat_kec = $data['alamat_kec'];
        $status_lahan = $data['status_lahan'];
        $query = "INSERT INTO petani(nama_petani,tanggal_lahir, alamat_kec, status_lahan) VALUES ('$nama_petani', '$tanggal_lahir', $alamat_kec, $status_lahan)";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPetani($id_petani)
    {
        $query = "DELETE FROM petani WHERE id_petani = :id_petani";
        $this->db->query($query);
        $this->db->bind('id_petani', $id_petani);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePetani($data)
    {
        $nama_tani = $data['nama_petani'];
        $tgl_tani = $data['tanggal_lahir'];
        $kec_tani = $data['alamat_kec'];
        $status_tani = $data['status_lahan'];
        $id_tani = $data['id_petani'];

        $query = "UPDATE petani SET nama_petani = '$nama_tani', tanggal_lahir = '$tgl_tani', alamat_kec = $kec_tani, status_lahan = $status_tani WHERE id_petani= $id_tani";
    
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}