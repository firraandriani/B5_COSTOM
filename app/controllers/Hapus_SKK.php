<?php 

class Hapus_SKK extends Controller {
    public function hapus($id)
    {
        session_start();
        if( $this->model('SKK_model')->hapusSKK($id) > 0){
            $_SESSION['is_delete'] = 1;
            header('Location: '. BASEURL . '/lihat_SKK/1');
            exit;
        }
    }
}

?>