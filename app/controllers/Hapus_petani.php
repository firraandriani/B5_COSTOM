<?php 

class Hapus_petani extends Controller {
    public function hapus($id)
    {
        session_start();
        if( $this->model('Petani_model')->hapusPetani($id) > 0){
            $_SESSION['is_delete'] = 1;
            header('Location: '. BASEURL . '/lihat_petani/1');
            exit;
        }
    }
}

?>