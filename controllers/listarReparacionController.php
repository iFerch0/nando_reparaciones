<?php
include '../models/ReparacionModel.php';


class ReparacionController {
    public function listarReparaciones(){
            include '../config/db.php';
            $reparacionModel = new ReparacionModel($conn);
            $reparaciones = $reparacionModel->listarReparaciones();
            include '../views/Reparacion/reparacionesView.php';
        }
    }
    $controller = new ReparacionController();
    $controller->listarReparaciones();
?>