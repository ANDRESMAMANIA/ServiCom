<?php

require_once "conexion.php";
class ModeloTipoEquipo
{
    static public function mdlMostrarTipoEquipos($tabla, $item, $valor)
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
    // Función para insertar un tipo de equipo en la base de datos
    static public function mdlCrearTipoEquipo($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (TipoEquipo) VALUES (:TipoEquipo)");

            $stmt->bindParam(":TipoEquipo", $datos["TipoEquipo"], PDO::PARAM_STR);

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
