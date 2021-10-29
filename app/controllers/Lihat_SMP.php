<?php 

class Lihat_SMP extends Controller {
    public function index($page) 
    {
        session_start();
        $id_user = $_SESSION['id'];

        $user = $this->model('User_model')->getUserById($id_user);
        $data['masuk_produk'] = $this->model('SMP_model')->getList($page);
        $data['nama'] = $user['nama'];

        $this->view('lihat_SMP/index', $data);
    }
}


?>