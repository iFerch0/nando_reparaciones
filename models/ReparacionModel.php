<?php

    class ReparacionModel{
        private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function procesarOrden($id_cliente, $id_equipo, $accesorios, $problema_reportado, $fecha_ingreso, $fecha_entrega, $id_tecnico){
            try{
                $sql = "INSERT INTO reparacion (id_cliente, id_equipo, accesorios, problema_reportado, fecha_ingreso, fecha_entrega, id_tecnico) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("sssssss", $id_cliente, $id_equipo, $accesorios, $problema_reportado, $fecha_ingreso, $fecha_entrega, $id_tecnico);

                if($stmt->execute()){
                    $stmt->close();
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                return false;
            }
        }
        }

?>