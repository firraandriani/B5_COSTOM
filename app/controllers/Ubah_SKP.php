<?php 

class Ubah_SKP extends Controller {
    public function index($id) 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $data = $this->model('SKP_model')->getSKPById($id);
        $listProduk = $this->model('Produk_model')->getList();
        $data['produk'] = $listProduk['list_data'];
        $data = array_merge($data, $user);
        $this->view('ubah_SKP/index', $data);
        $_SESSION['is_update'] = 0;  
    }

    public function update()
    {
        session_start();
        if( $this->model('SKP_model')->updateSKP($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_update'] = 1;
            header('Location: '. BASEURL . '/ubah_SKP/index/'. $_POST['id_keluar_produk']);
        exit;
        }
        
    }
}

?>