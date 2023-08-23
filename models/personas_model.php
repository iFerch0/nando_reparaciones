<?php
class personas_model{
   public function guardarPersonas($identificacion, $nombres){
    $conexion = Conectar::conexion();

    $identificacion = $conexion->real_escape_string($identificacion);
    $nombres = $conexion->real_escape_string($nombres);

    $query = "INSERT INTO personas (identificacion, nombres) VALUES ('$identificacion','$nombres')";

    if ($conexion->query($query)){
        return true;
    }else{
        return false;
    } 
}

public function obtenerPersonas(){
    $conexion = Conectar::conexion();
    $query = "SELECT * FROM personas";
    $resultado = $conexion->query($query);
    $personas = array();
    while($row = $resultado->fetch_assoc()){
        $personas[] = $row;
    }
    return $personas;
}
}
?>