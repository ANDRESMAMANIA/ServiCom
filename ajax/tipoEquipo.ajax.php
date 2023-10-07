<?php

require_once "../controladores/tipoEquipo.controlador.php";
require_once "../modelos/tipoEquipo.modelo.php";

class AjaxTipoEquipos{

    /*=============================================
    EDITAR CLIENTE
    =============================================*/

    public $idTipoEquipos;

    public function ajaxEditarTipoEquipos(){

        $item = "IDTipoEquipo";
        $valor = $this->idTipoEquipo;

        $respuesta = ControladorTipoEquipo::ctrMostrarTipoEquipos($item, $valor);

        echo json_encode($respuesta);


    }

}

/*=============================================
EDITAR CLIENTE
=============================================*/

if(isset($_POST["idTipoEquipo"])){

    $tipoequipos = new AjaxTipoEquipos();
    $tipoequipos -> idTipoEquipo = $_POST["idTipoEquipo"];
    $tipoequipos -> ajaxEditarTipoEquipos();

}