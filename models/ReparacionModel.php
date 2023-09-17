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

        public function listarReparaciones(){
            try{
                $sql = "SELECT a.id,
                a.id_cliente AS 'Codigo_Cliente',
                CONCAT(b.nombres, ' ', b.apellidos) AS 'Nombre_Cliente',
                a.id_equipo AS 'S/N',
                CONCAT(c.marca, ' ', c.modelo) AS 'Equipo',
                a.accesorios AS 'Accesorios',
                a.problema_reportado AS 'Problema Reportado',
                a.fecha_ingreso AS 'Fecha de Ingreso',
                a.fecha_entrega AS 'Fecha de Entrega',
                CONCAT(t.nombres, ' ', t.apellidos) AS 'Nombre_Tecnico'
            FROM reparacion a
            JOIN personas b ON a.id_cliente = b.id
            JOIN equipos c ON a.id_equipo = c.serial
            LEFT JOIN personas t ON a.id_tecnico = t.id
            ORDER BY a.id DESC";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array(); // Devolver un arreglo vacío si no hay resultados
        }
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        }
    }

?>