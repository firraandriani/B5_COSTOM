<?php 

class Hapus_SMP extends Controller {
    public function hapus($id)
    {
        session_start();
        if( $this->model('SMP_model')->hapusSMP($id) > 0){
            $_SESSION['is_delete'] = 1;
            header('Location: '. BASEURL . '/lihat_SMP/1');
            exit;
        }
    }
}

?>