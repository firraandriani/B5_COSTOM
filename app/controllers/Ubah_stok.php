<?php 

class Ubah_stok extends Controller {
    public function index($id) 
    {
        session_start();
        $id_user = $_SESSION['id'];
        $user = $this->model('User_model')->getUserById($id_user);
        $data = $this->model('Stok_model')->getStokKakaoById($id);
        $listPetani = $this->model('Petani_model')->getListPetani();
        $data['petani'] = $listPetani['list_data'];
        $data = array_merge($data, $user);
        $this->view('ubah_stok/index', $data);
        $_SESSION['is_update'] = 0;  
    }

    public function update()
    {
        session_start();
        if( $this->model('Stok_model')->updateStok($_POST, $_SESSION["id"]) > 0){
            $_SESSION['is_update'] = 1;
            header('Location: '. BASEURL . '/ubah_stok/index/'. $_POST['id_stok']);
        exit;
        }
        
    }
}

?>