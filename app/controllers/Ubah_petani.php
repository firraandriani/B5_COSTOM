<?php 

class Ubah_petani extends Controller {
    public function index($id) 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $data = $this->model('Petani_model')->getpetaniById($id);
        $data = array_merge($data, $user);
        $this->view('ubah_petani/index', $data);
        $_SESSION['is_update'] = 0;  
    }

    public function update()
    {
        session_start();
        if( $this->model('Petani_model')->updatePetani($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_update'] = 1;
            header('Location: '. BASEURL . '/ubah_petani/index/'. $_POST['id_petani']);
        exit;
        }
        
    }
}

?>