<?php 

class Hapus_produk extends Controller {
    public function hapus($id)
    {
        session_start();
        if( $this->model('Produk_model')->hapusProduk($id) > 0){
            $_SESSION['is_delete'] = 1;
            header('Location: '. BASEURL . '/lihat_produk/1');
            exit;
        }
    }
}

?>