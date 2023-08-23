<?php
require_once("models/personas_model.php");
class personas_controller
{

    public function guardar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombres = $_POST['nombre'];
            $identificacion = $_POST['identificacion'];

            $model = new personas_model();
            $resultado = $model->guardarPersonas($nombres, $identificacion);

            if ($resultado) {
                echo "Registro Exitoso";
            } else {
                echo "No se pudo registrar";
            }
        }
    }

    public function mostrarLista()
    {
        $model = new personas_model();
        $personas = $model->obtenerPersonas();
        //var_dump($personas);

        require_once(__DIR__ . '/../views/personas_view.php');
    }
}