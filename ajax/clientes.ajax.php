<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes{

    /*=============================================
    EDITAR CLIENTE
    =============================================*/

    public $idCliente;

    public function ajaxEditarCliente(){

        $item = "IDCliente";
        $valor = $this->idCliente;

        $respuesta = ControladorClientes::ctrMostrarCliente($item, $valor);

        echo json_encode($respuesta);


    }

}

/*=============================================
EDITAR CLIENTE
=============================================*/

if(isset($_POST["idCliente"])){

    $cliente = new AjaxClientes();
    $cliente -> idCliente = $_POST["idCliente"];
    $cliente -> ajaxEditarCliente();

}