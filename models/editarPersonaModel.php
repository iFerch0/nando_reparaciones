<?php
include '../config/db.php';
    class EditarPersonaModel {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function obtenerPersonaPorID($id){
            $query = "SELECT * FROM personas where id = $id";
            $result = mysqli_query($this->conn, $query);

            if($result && mysqli_num_rows($result) == 1){
                return mysqli_fetch_assoc($result);
            }else{
                return null;
            }
        }
      
        public function actualizarPersona($id, $tipo_id, $identificacion, $nombres, $apellidos, $direccion, $telefono) {
            $query = "UPDATE personas SET tipo_id = '$tipo_id',
                             identificacion = '$identificacion',
                             nombres = '$nombres',
                             apellidos = '$apellidos',
                             direccion = '$direccion',
                             telefono = '$telefono'
                             WHERE id = $id";
            return mysqli_query($this->conn, $query);
        }
    }

    
        ?>