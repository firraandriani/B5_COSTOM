<?php 

class Ubah_produk extends Controller {
    public function index($id) 
    {
        session_start();
        $data = $this->model('Produk_model')->getProdukById($id);
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