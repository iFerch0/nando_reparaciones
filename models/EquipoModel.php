<?php
class EquipoModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerEquipoPorID($id) {
        $id = mysqli_real_escape_string($this->conn, $id);
        $query = "SELECT * FROM equipos WHERE id = $id";
        $resultado = mysqli_query($this->conn, $query);

        if ($resultado && mysqli_num_rows($resultado) == 1) {
            return mysqli_fetch_assoc($resultado);
        } else {
            return null;
        }
    }

    public function editarEquipo($id, $tipo_equipo, $marca, $modelo, $serial, $fecha_compra) {
        $id = mysqli_real_escape_string($this->conn, $id);
        $tipo_equipo = mysqli_real_escape_string($this->conn, $tipo_equipo);
        $marca = mysqli_real_escape_string($this->conn, $marca);
        $modelo = mysqli_real_escape_string($this->conn, $modelo);
        $serial = mysqli_real_escape_string($this->conn, $serial);
        $fecha_compra = mysqli_real_escape_string($this->conn, $fecha_compra);

        $query = "UPDATE equipos SET
            tipo_equipo='$tipo_equipo',
            marca='$marca',
            modelo='$modelo',
            serial='$serial',
            fecha_compra='$fecha_compra'
            WHERE id = $id";

        return mysqli_query($this->conn, $query);
    }

    public function eliminarEquipo($id) {
        $id = mysqli_real_escape_string($this->conn, $id);
        $query = "DELETE FROM equipos WHERE id = $id";
        return mysqli_query($this->conn, $query);
    }
}
?>
