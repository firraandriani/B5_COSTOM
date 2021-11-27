<?php 

class Tambah_SKP extends Controller {
    public function index() 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $listProduk = $this->model('Produk_model')->getList();
        $data= $user;
        $data['produk'] = $listProduk['list_data'];

        $this->view('tambah_SKP/index', $data);
        $_SESSION['is_create'] = 0;
    }

    public function tambah()
    {
        session_start();
        if( $this->model('SKP_model')->tambahSKP($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_create'] = 1;
            header('Location: '. BASEURL . '/tambah_SKP');
            exit;
        }
    }
}


?>