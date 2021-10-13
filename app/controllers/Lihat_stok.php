<?php 

class Lihat_stok extends Controller {
    public function index($page) 
    {
        session_start();
        $id_user = $_SESSION['id'];

        $user = $this->model('User_model')->getUserById($id_user);
        $data['stok'] = $this->model('Stok_model')->getList($page);
        $data['nama'] = $user['nama'];

        $this->view('lihat_stok/index', $data);
    }
}


?>