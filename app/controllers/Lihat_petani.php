<?php 

class Lihat_petani extends Controller {
    public function index() 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $data['petani'] = $this->model('Petani_model')->getList();
        $data['nama'] = $user['nama'];

        $this->view('lihat_petani/index', $data);
    }
}


?>