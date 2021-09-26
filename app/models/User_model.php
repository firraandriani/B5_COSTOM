<?php

class User_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getUserByUsernameAndPassword($data)
    {
        $this->db->query('SELECT * FROM user WHERE email=:email AND password=:password');
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->single();
    }

    public function userLogin($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $this->db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $this->db->execute();

        return $this->db->single();
    }
}