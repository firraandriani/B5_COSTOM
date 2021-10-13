<?php 

class Hapus_stok extends Controller {
    public function hapus($id)
    {
        session_start();
        if( $this->model('Stok_model')->hapusStok($id) > 0){
            $_SESSION['is_delete'] = 1;
            header('Location: '. BASEURL . '/lihat_stok/1');
            exit;
        }
    }
}

?>