<?php
require_once __DIR__ . '/../models/UserModel.php';

class AuthController{
    private $db;
    private $userModel;

    public function __construct($db){
        $this->db = $db;
        $this->userModel = new UserModel($db);
    }

    public function login($username, $password) {
        $user = $this->userModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])){
            echo "Usuario autenticado";
        }else {
            echo "Usuario no autenticado";
        }

}
}
?>