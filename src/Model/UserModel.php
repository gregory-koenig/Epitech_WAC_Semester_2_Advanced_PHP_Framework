<?php

namespace src\Model;
use Core\App;

class UserModel
{
    private $db;
    private $email;
    private $pwd;

    public function __construct()
    {
        $this->db = App::getDatabase();

        if (!empty($_POST['input_mail']) && !empty($_POST['input_pwd'])) {
            $this->email = $_POST['input_mail'];
            $this->pwd = $_POST['input_pwd'];
        }
    }

    public function getAll() {
        $sql = 'SELECT * FROM users';
        $data = $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }

    public function save() {
        if (!empty($_POST)) {
            $sql = 'INSERT INTO users (email, password)
                VALUES (?, ?)';
            $this->db->query($sql, [$this->email, $this->pwd]);
            echo "Le compte a bien été créé.<br /><br />";
        }
    }

    public function login() {
        $sql = 'SELECT * FROM users
                WHERE email = ?';
        $this->db->query($sql, [$_POST['input_mail']]);
        echo "Vous êtes maintenant connecté(e).<br /><br />";
    }
}