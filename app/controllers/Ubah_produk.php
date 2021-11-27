<?php 

class Ubah_produk extends Controller {
    public function index($id) 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $data = $this->model('Produk_model')->getProdukById($id);
        $data = array_merge($data, $user);
        $this->view('ubah_produk/index', $data);
        $_SESSION['is_update'] = 0;
    }

    public function update()
    {
        session_start();
        if( $this->model('Produk_model')->updateProduk($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_update'] = 1;
            header('Location: '. BASEURL . '/ubah_produk/index/'. $_POST['id_produk']);
        exit;
        }
        
    }
}

?>