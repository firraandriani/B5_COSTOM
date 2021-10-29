<?php 

class Hapus_SKP extends Controller {
    public function hapus($id)
    {
        session_start();
        if( $this->model('SKP_model')->hapusSKP($id) > 0){
            $_SESSION['is_delete'] = 1;
            header('Location: '. BASEURL . '/lihat_SKP/1');
            exit;
        }
    }
}

?>