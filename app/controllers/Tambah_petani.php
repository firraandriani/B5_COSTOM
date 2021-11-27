<?php 

class Tambah_petani extends Controller {
    public function index() 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        // $data['petani'] = $this->model('Petani_model')->getList();
        $data= $user;

        $this->view('tambah_petani/index', $data);
        $_SESSION['is_create'] = 0;
    }

    public function tambah()
    {
        session_start();
        if( $this->model('Petani_model')->tambahPetani($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_create'] = 1;
            header('Location: '. BASEURL . '/tambah_petani');
            exit;
        }
    }
}


?>