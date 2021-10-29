<?php 

class Lihat_SKP extends Controller {
    public function index($page) 
    {
        session_start();
        $id_user = $_SESSION['id'];

        $user = $this->model('User_model')->getUserById($id_user);
        $data['keluar_produk'] = $this->model('SKP_model')->getList($page);
        $data['nama'] = $user['nama'];

        $this->view('lihat_SKP/index', $data);
    }
}


?>