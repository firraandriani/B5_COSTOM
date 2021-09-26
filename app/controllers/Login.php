<?php

class Login extends Controller {
    public function index()
    {
        session_start();
        if ( isset($_COOKIE["id_user"]) && isset($_COOKIE["email"]) ) {
            $dataUser = $this->model('User_model')->getUserById($_COOKIE["id_user"]);
      
            if ( $_COOKIE["email"] === $dataUser["email"] ) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $dataUser["id_user"];
            }
        }
          
        if ( isset($_SESSION["login"]) ) {
            header('Location: ' . BASEURL . '/beranda');
            exit;
        }

        $this->view('login/index');
    }

    public function loginPermission()
    {
        session_start();
        $post = $_POST;

        if ( $this->model('User_model')->userLogin($post) ) {
            $dataUser = $this->model('User_model')->getUserByUsernameAndPassword($post);
            $_SESSION["login"] = true;
            $_SESSION["id"] = $dataUser["id_user"];
            

            if ( isset($_POST["remember"]) ) {
                $dataUser = $this->model('User_model')->userLogin($_POST);
                setcookie('id_user', $dataUser['id_user'], time()+600, BASEURL);
                setcookie('email', $dataUser['email'], time()+600, BASEURL);
            }

            header('Location: ' . BASEURL . '/beranda');
        } 
        
        else {
            $_SESSION['messages'] = 'Kombinasi email dan password salah';
            header('Location: ' . BASEURL . '/login');
        }
    }
}

?>