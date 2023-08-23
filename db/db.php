<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("localhost","root","","nando_reparaciones");
        $conexion ->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>