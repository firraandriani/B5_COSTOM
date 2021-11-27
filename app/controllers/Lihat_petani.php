<?php 

class Lihat_petani extends Controller {
    public function index($page, $column = null, $orderBy = null) 
    {
        session_start();
        $id_user = $_SESSION['id'];

        $user = $this->model('User_model')->getUserById($id_user);
        $data= $user;
        $data['petani'] = $this->model('Petani_model')->getList($page, $column, $orderBy);

        $this->view('lihat_petani/index', $data);
    }
}


?>