<?php

class Logout {
    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        setcookie('id', '', time() - 3600);
        setcookie('key', '', time() - 3600);

        header('Location: ' . BASEURL . '/login');
        exit;
    }
}