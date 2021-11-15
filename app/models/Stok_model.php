<?php

class Stok_model {
    private $table = 'stok_kakao';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList($page)
    {
        // $this->db->query('SELECT stok_kakao.*, status_kakao.nama_kategori AS status_kakao, petani.nama_petani, DATE_FORMAT(tanggal_setor, "%Y-%m-%d") AS tanggal_setor FROM ' . $this->table . ' LEFT JOIN petani ON petani.id_petani = stok_kakao.nama_petani JOIN kategori AS status_kakao ON status_kakao.id = stok_kakao.status_kakao');

        $data = [];

        $jumlahDataSetiapPage = 10;
        $this -> db -> query("SELECT stok_kakao.*, status_kakao.nama_kategori AS status_kakao, petani.nama_petani, DATE_FORMAT(tanggal_setor, '%Y-%m-%d') AS tanggal_setor FROM `" . $this->table . "` LEFT JOIN petani ON petani.id_petani = stok_kakao.nama_petani JOIN kategori AS status_kakao ON status_kakao.id = stok_kakao.status_kakao");
        $jumlahData = $this -> db -> resultSet();
        $jumlahData = count($jumlahData);

        $jumlahPage = ceil($jumlahData / $jumlahDataSetiapPage);
        $halamanSaatIni = ( isset($page) ) ? $page : 1;
        $dataPertama = ($jumlahDataSetiapPage * $halamanSaatIni) - $jumlahDataSetiapPage;

        $this -> db -> query("SELECT stok_kakao.*, status_kakao.nama_kategori AS status_kakao, petani.nama_petani, DATE_FORMAT(tanggal_setor, '%Y-%m-%d') AS tanggal_setor FROM `" . $this->table . "` LEFT JOIN petani ON petani.id_petani = stok_kakao.nama_petani JOIN kategori AS status_kakao ON status_kakao.id = stok_kakao.status_kakao LIMIT $dataPertama, $jumlahDataSetiapPage");
        $daftarData = $this -> db -> resultSet();

        $data['list_data'] = $daftarData;
        $data['halaman_saat_ini'] = $halamanSaatIni;
        $data['jumlah_halaman'] = $jumlahPage;

        return $data;
    }

    public function getStokKakaoById($id_stok){
        $this->db->query('SELECT * FROM stok_kakao WHERE id_stok = '.$id_stok);
        return $this->db->single();
    }

    public function tambahStok($data, $id_stok){
        $nama_petani= $data['nama_petani'];
        $stok_masuk = $data['stok_masuk'];
        $status_kakao = $data['status_kakao'];
        $harga = $data['harga'];
        $query = "INSERT INTO stok_kakao (nama_petani, stok_masuk, status_kakao, harga) VALUES ($nama_petani, $stok_masuk, $status_kakao, $harga)";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusStok($id_stok)
    {
        $query = "DELETE FROM stok_kakao WHERE id_stok = :id_stok";
        $this->db->query($query);
        $this->db->bind('id_stok', $id_stok);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStok($data)
    {
        $nama_tani= $data['nama_petani'];
        $status_stok_kakao = $data['status_kakao'];
        $harga_kakao = $data['harga'];
        $id_stokKakao = $data['id_stok'];

        $query = "UPDATE stok_kakao SET nama_petani = '$nama_tani', status_kakao = $status_stok_kakao, harga = $harga_kakao WHERE id_stok = $id_stokKakao";
    
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getStockInReport($year)
    {
        $query = "SELECT 
                    DATE_FORMAT(`stok_kakao`.`tanggal_setor`, '%m-%Y') as date,
                    SUM(`stok_kakao`.`stok_masuk`) as stok,
                    `status_kakao`.`nama_kategori` as status_kakao
                FROM `stok_kakao`
                JOIN kategori as status_kakao ON `status_kakao`.id = `stok_kakao`.`status_kakao`
                WHERE DATE_FORMAT(`stok_kakao`.`tanggal_setor`, '%Y') = '$year'
                GROUP BY `stok_kakao`.`status_kakao`, DATE_FORMAT(`stok_kakao`.`tanggal_setor`, '%m-%Y')";

        $this->db->query($query);
        $result = $this->db->resultSet();

        $stokMasukKering = [];
        $stokMasukBasah = [];
        foreach ($result as $x) {
            if ($x['status_kakao'] == 'Kering') $stokMasukKering[] = $x;
            else if ($x['status_kakao'] == 'Basah') $stokMasukBasah[] = $x;
        }

        $data = [];
        for ($i = 1; $i <= 12; $i++) {
            $keyIndexStokMasukKering = array_search(sprintf('%s-%s', $i < 10 ? '0' . $i : $i, $year), array_column($stokMasukKering, 'date'));
            $keyIndexStokMasukBasah = array_search(sprintf('%s-%s', $i < 10 ? '0' . $i : $i, $year), array_column($stokMasukBasah, 'date'));

            if (is_numeric($keyIndexStokMasukKering)) $data['stok_masuk_kering'][] = $stokMasukKering[$keyIndexStokMasukKering]['stok'];
            else $data['stok_masuk_kering'][] = 0;

            if (is_numeric($keyIndexStokMasukBasah)) $data['stok_masuk_basah'][] = $stokMasukBasah[$keyIndexStokMasukBasah]['stok'];
            else $data['stok_masuk_basah'][] = 0;
        }

        return $data;
    }
}