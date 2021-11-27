<?php 

class Grafik extends Controller {
    public function index($year) 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);

        $data= $user;

        $yearNow = date("Y");
        $data['year'] = $year;
        $data['year_select'] = [$yearNow - 2, $yearNow - 1, $yearNow, $yearNow + 1, $yearNow + 2];

        $data['stok_masuk'] = $this->model('Stok_model')->getStockInReport($year);
        $data['stok_keluar'] = $this->model('SKK_model')->getStockOutReport($year);
        $data['stok_masuk_produk'] = $this->model('SMP_model')->getStockInReport($year);
        $data['stok_keluar_produk'] = $this->model('SKP_model')->getStockOutReport($year);

        $this->view('grafik/index', $data);
    }

    public function search()
    {
        $year = $_POST['year'];

        header('Location: '. BASEURL . '/grafik/'. $year);
        exit;
    }
}


?>