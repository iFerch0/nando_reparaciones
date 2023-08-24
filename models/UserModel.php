<?php
    class UserModel{
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function getUserByUsername($username){
            $query = "SELECT * FROM users WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
    }
}
?>