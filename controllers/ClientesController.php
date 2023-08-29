<?php
    require_once '../models/ClienteModel.php';

    class ClientesController{
        private $db;
        private $clienteModel;

        public function __construct($db){
            $this->db = $db;
            $this->clienteModel = new ClienteModel($db);
        }

        public function agregarCliente($identificacion, $nombre, $apellido, $email, $telefono){
            $resultado = $this->clienteModel->agregarCliente($identificacion, $nombre, $apellido, $email, $telefono);
            if ($resultado){
                echo "Registro guardado exitosamente";
                header("Location: clientes/listar.php");
                exit();
            }else{	
                echo "Error al guardar el registro";
            }
        } 

        public function listarClientes(){
            $clientes = $this->clienteModel->obtenerClientes();
            include '../views/clientes/listar.php';
        }

        public function mostrarFormularioAgregarCliente(){
            include '../views/clientes/agregar.php';
        }
    }
?>