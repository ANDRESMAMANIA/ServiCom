<?php

require_once "conexion.php";
class ModeloMarcas
{



    /*=============================================
    MOSTRAR USUARIOS
    =============================================*/

    static public function mdlMostrarMarcas($tabla, $item, $valor)
    {
        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ($item = :$item)");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();


            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }
    static public function mdlCrearMarca($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (Marca) VALUES (:Marca)");

            $stmt->bindParam(":Marca", $datos["Marca"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok"; // Inserción exitosa
            } else {
                return "error"; // Error en la inserción
            }

            $stmt->close();
        } catch (Exception $e) {
            return "error: " . $e->getMessage(); // Error en la conexión o consulta
        }
    }

}
