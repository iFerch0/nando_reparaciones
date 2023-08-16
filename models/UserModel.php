<?php

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }


public function createUser($username, $email, $hashedPassword){
    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);
    return $stmt->execute();
}

public function getUserById($userID){
    $query = "SELECT * FROM users WHERE id =?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }else{
        return false;
    }

}
}
?>