<?php 

class Ubah_petani extends Controller {
    public function index($id) 
    {
        session_start();
        $data = $this->model('Petani_model')->getpetaniById($id);
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