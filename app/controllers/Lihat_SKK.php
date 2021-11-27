<?php 

class Lihat_SKK extends Controller {
    public function index($page) 
    {
        session_start();
        $id_user = $_SESSION['id'];

        $user = $this->model('User_model')->getUserById($id_user);
        $data= $user;
        $data['keluar_kakao'] = $this->model('SKK_model')->getList($page);

        $this->view('lihat_SKK/index', $data);
    }
}


?>