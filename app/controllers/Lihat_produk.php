<?php 

class Lihat_produk extends Controller {
    public function index($page) 
    {
        session_start();
        $id_user = $_SESSION['id'];

        $user = $this->model('User_model')->getUserById($id_user);
        $data= $user;
        $data['produk'] = $this->model('Produk_model')->getList($page);

        $this->view('lihat_produk/index', $data);
    }
}


?>