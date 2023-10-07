<?php

require_once "conexion.php";

class ModeloRepuestos {

    /*=============================================
    MOSTRAR USUARIOS
    =============================================*/

    static public function mdlMostrarRepuesto($tabla, $item, $valor) {

        if($item != null) {
            // Preparar la consulta SQL para seleccionar un usuario específico
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        } else {
            // Preparar la consulta SQL para seleccionar todos los usuarios
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        }

        // Ejecutar la consulta
        $stmt->execute();

        // Devolver el resultado (un solo registro si es consulta específica, o todos los registros si es consulta general)
        return ($item != null) ? $stmt->fetch() : $stmt->fetchAll();
    }

    /*=============================================
    REGISTRO DE USUARIO
    =============================================*/

    static public function mdlIngresarUsuario($tabla, $datos) {
        // Preparar la consulta SQL para insertar un nuevo usuario
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Usuario, Password, Nombre,Apellido, Perfil, Especialidad, Foto, Telefono) VALUES (:Usuario, :Password, :Nombre,:Apellido, :Perfil, :Especialidad, :Foto, :Telefono)");

        // Vincular los valores de los parámetros con los datos recibidos
        $stmt->bindParam(":Usuario", $datos["Usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":Password", $datos["Password"], PDO::PARAM_STR);
        $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":Perfil", $datos["Perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":Especialidad", $datos["Especialidad"], PDO::PARAM_STR);
        $stmt->bindParam(":Foto", $datos["Foto"], PDO::PARAM_STR);
        $stmt->bindParam(":Telefono", $datos["Telefono"], PDO::PARAM_STR);

        // Ejecutar la consulta
        if($stmt->execute()) {
            return "ok"; // Éxito
        } else {
            return "error"; // Error
        }
    }

    /*=============================================
    EDITAR USUARIO
    =============================================*/

    static public function mdlEditarUsuario($tabla, $datos) {

        // Preparar la consulta SQL para actualizar los datos de un usuario
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");

        // Vincular los valores de los parámetros con los datos recibidos
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

        // Ejecutar la consulta
        if($stmt->execute()) {
            return "ok"; // Éxito
        } else {
            return "error"; // Error
        }
    }

    /*=============================================
    ACTUALIZAR USUARIO
    =============================================*/

    static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2) {

        // Preparar la consulta SQL para actualizar un campo específico del usuario
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

        // Vincular los valores de los parámetros con los datos recibidos
        $stmt->bindParam(":".$item1, $valor1, PDO::PARAM_STR);
        $stmt->bindParam(":".$item2, $valor2, PDO::PARAM_STR);

        // Ejecutar la consulta
        if($stmt->execute()) {
            return "ok"; // Éxito
        } else {
            return "error"; // Error
        }
    }

    /*=============================================
    BORRAR USUARIO
    =============================================*/

    static public function mdlBorrarUsuario($tabla, $datos) {

        // Preparar la consulta SQL para borrar un usuario por su ID
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        // Vincular el valor del parámetro con el ID recibido
        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

        // Ejecutar la consulta
        if($stmt->execute()) {
            return "ok"; // Éxito
        } else {
            return "error"; // Error
        }
    }
}
