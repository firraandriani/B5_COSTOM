<?php 

class Tambah_produk extends Controller {
    public function index() 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        // $data['petani'] = $this->model('Petani_model')->getList();
        $data= $user;

        $this->view('tambah_produk/index', $data);
        $_SESSION['is_create'] = 0;
    }

    public function tambah()
    {
        session_start();
        if( $this->model('Produk_model')->tambahProduk($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_create'] = 1;
            header('Location: '. BASEURL . '/tambah_produk');
            exit;
        }
    }
}


?>