<?php 

class Ubah_SMP extends Controller {
    public function index($id) 
    {
        session_start();
        $data = $this->model('SMP_model')->getSMPById($id);
        $listProduk = $this->model('Produk_model')->getList();
        $data['produk'] = $listProduk['list_data'];
        $this->view('ubah_SMP/index', $data);
        $_SESSION['is_update'] = 0;  
    }

    public function update()
    {
        session_start();
        if( $this->model('SMP_model')->updateSMP($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_update'] = 1;
            header('Location: '. BASEURL . '/ubah_SMP/index/'. $_POST['id_masuk_produk']);
        exit;
        }
        
    }
}

?>