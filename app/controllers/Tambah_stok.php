<?php 

class Tambah_stok extends Controller {
    public function index() 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $listPetani = $this->model('Petani_model')->getListPetani();
        $data= $user;
        $data['petani'] = $listPetani['list_data'];
        // var_dump($data['petani']); die;


        $this->view('tambah_stok/index', $data);
        $_SESSION['is_create'] = 0;
    }

    public function tambah()
    {
        session_start();
        if( $this->model('Stok_model')->tambahStok($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_create'] = 1;
            header('Location: '. BASEURL . '/tambah_stok');
            exit;
        }
    }
}


?>