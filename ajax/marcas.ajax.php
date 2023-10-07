<?php

require_once "../controladores/marcas.controlador.php";
require_once "../modelos/marcas.modelo.php";

class AjaxMarcas{

    /*=============================================
    EDITAR CLIENTE
    =============================================*/

    public $idMarca;

    public function ajaxEditarMarcas(){

        $item = "IDMarca";
        $valor = $this->idMarca;

        $respuesta = ControladorMarcas::ctrMostrarMarcas($item, $valor);

        echo json_encode($respuesta);


    }

}

/*=============================================
EDITAR CLIENTE
=============================================*/

if(isset($_POST["idMarca"])){

    $marcas = new AjaxMarcas();
    $marcas -> idMarca = $_POST["idMarca"];
    $marcas -> ajaxEditarMarcas();

}