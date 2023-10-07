<?php

require_once "conexion.php";
class ModeloClientes
{



    /*=============================================
    MOSTRAR USUARIOS
    =============================================*/

    static public function mdlMostrarCliente($tabla, $item, $valor)
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
    /*=============================================
     REGISTRO DE CLIENTE
     =============================================*/
    static public function mdlCrearCliente($tabla, $datos)
    {
        try {
            $conn = conexion::conectar();
            $stmt = $conn->prepare("INSERT INTO $tabla(CI, Nombre, Apellido, Email, Telefono, FechaNacimiento) VALUES (:ci, :nombre, :apellido, :email, :telefono, :fechaNacimiento)");
            $stmt->bindParam(":ci", $datos["CI"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $datos["Nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $datos["Apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["Email"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["Telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":fechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            // Manejar errores de la base de datos aquí si es necesario
            return "error: " . $e->getMessage();
        }
    }

    /*=============================================
EDITAR DE USUARIO
=============================================*/
    static public function mdlEditarCliente($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre, Apellido = :apellido, Email = :email, Telefono = :telefono, FechaNacimiento = :fechaNacimiento WHERE CI = :ci");

            $stmt->bindParam(":nombre", $datos["Nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $datos["Apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["Email"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono",  $datos["Telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":fechaNacimiento",  $datos["FechaNacimiento"], PDO::PARAM_STR);
            $stmt->bindParam(":ci",  $datos["CI"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }
    }

    /*=============================================
     ACTUALIZAR USUARIO
     =============================================*/

    static public function mdlActualizarCliente($tabla, $item1, $valor1, $item2, $valor2)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

        $stmt->bindParam(":" . $item1, $valor1, PDO::PARAM_STR);
        $stmt->bindParam(":" . $item2, $valor2, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
    /*=============================================
     BORRAR USUARIO
     =============================================*/

    static public function mdlBorrarCliente($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}
