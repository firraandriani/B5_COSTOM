<?php

class Petani_model {
    private $table = 'petani';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getListPetani($page = null)
    {
        $data = [];

        $jumlahDataSetiapPage = 10;
        $this -> db -> query("SELECT petani.*, alamat.nama_kategori AS alamat, status_anggota.nama_kategori AS status_anggota FROM `" . $this->table . "` JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_anggota ON status_anggota.id = petani.status_anggota WHERE status_anggota = '25'");
        $daftarData = $this -> db -> resultSet();
        $jumlahData = count($daftarData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        if ($page != null) {
            $this -> db -> query("SELECT petani.*, alamat.nama_kategori AS alamat, status_anggota.nama_kategori AS status_anggota FROM `" . $this->table . "` JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_anggota ON status_anggota.id = petani.status_anggota WHERE status_anggota = '25' LIMIT $dataPertama, $jumlahDataSetiapPage");
            $daftarData = $this -> db -> resultSet();
        }

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getList($page = null, $column = null, $orderBy = null)
    {
        // $this->db->query('SELECT petani.*, alamat.nama_kategori AS alamat, status_lahan.nama_kategori AS status_lahan, status_anggota.nama_kategori AS status_anggota FROM ' . $this->table . '  JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_anggota ON status_anggota.id = petani.status_anggota');
        
        // return $this->db->resultSet();
        
        $data = [];

        $jumlahDataSetiapPage = 10;
        $query = "SELECT petani.*, alamat.nama_kategori AS alamat, status_anggota.nama_kategori AS status_anggota FROM `" . $this->table . "`  JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_anggota ON status_anggota.id = petani.status_anggota";

        if ($column != null && $orderBy != null) {
            if ($column == 'status') {
                $query .= " ORDER BY status_anggota.nama_kategori $orderBy";
            } 
        }

        $this -> db -> query($query);
        $daftarData = $this -> db -> resultSet();
        $jumlahData = count($daftarData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        if ($page != null) {
            $query = "SELECT petani.*, alamat.nama_kategori AS alamat, status_anggota.nama_kategori AS status_anggota FROM `" . $this->table . "`  JOIN kategori AS alamat ON alamat.id = petani.alamat_kec JOIN kategori AS status_anggota ON status_anggota.id = petani.status_anggota";

            if ($column != null && $orderBy != null) {
                if ($column == 'status') {
                    $query .= " ORDER BY status_anggota.nama_kategori $orderBy";
                } 
            }

            $query .= " LIMIT $dataPertama, $jumlahDataSetiapPage";

            $this -> db -> query($query);
            $daftarData = $this -> db -> resultSet();
        }

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getpetaniById($id_petani){
        $this->db->query('SELECT * FROM petani WHERE id_petani = '.$id_petani);
        return $this->db->single();
    }

    public function tambahPetani($data, $id_petani){
        $nama_petani= $data['nama_petani'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $alamat_kec = $data['alamat_kec'];
        $status_anggota = $data['status_anggota'];
        $query = "INSERT INTO petani(nama_petani,tanggal_lahir, alamat_kec, status_anggota) VALUES ('$nama_petani', '$tanggal_lahir', $alamat_kec, $status_anggota)";
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
        $status_anggota = $data['status_anggota'];
        $id_tani = $data['id_petani'];

        $query = "UPDATE petani SET nama_petani = '$nama_tani', tanggal_lahir = '$tgl_tani', alamat_kec = $kec_tani, status_anggota = $status_anggota WHERE id_petani= $id_tani";
    
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}