<?php

class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function createUser($username, $email, $password){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $this->userModel->createUser($username, $email, $hashedPassword);
    }

    public function getUser($userId){
        return $this->userModel->getUserById($userId);
    }
}

?>