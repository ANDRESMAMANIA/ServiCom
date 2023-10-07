<?php

/**
 *
 */
class ControladorClientes

{

    /*=============================================
     REGISTRO DE CLIENTE
     =============================================*/
    static public function ctrCrearCliente()
    {
        if (isset($_POST["cicliente"])) {
            // Verifica si se ha enviado el campo "cicliente" desde el formulario

            if (
                preg_match('/^[0-9]+$/', $_POST["cicliente"]) && // Verifica que "cicliente" sea un número
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombrecliente"]) && // Verifica que "nombrecliente" contenga caracteres alfanuméricos y especiales
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["apellidocliente"]) && // Verifica que "apellidocliente" contenga caracteres alfanuméricos y especiales
                preg_match('/^[+0-9 ]+$/', $_POST["nuevoTelefonoCliente"]) // Verifica que "nuevoTelefonoCliente" contenga caracteres válidos (números, espacios y signo más)
            ) {
                $tabla = "Clientes"; // Define el nombre de la tabla en la base de datos

                // Crea un arreglo con los datos del cliente
                $datos = array(
                    "CI" => $_POST["cicliente"],
                    "Nombre" => mb_strtoupper($_POST["nombrecliente"]), // Convierte el nombre a mayúsculas
                    "Apellido" => mb_strtoupper($_POST["apellidocliente"]), // Convierte el apellido a mayúsculas
                    "Telefono" => $_POST["nuevoTelefonoCliente"],
                    "FechaNacimiento" => $_POST["nuevaFechaNacimiento"] // Agrega la fecha de nacimiento al arreglo
                );

                // Verifica si se proporcionó un correo electrónico y agrega el campo "Email" solo si se proporcionó
                if (!empty($_POST["emailcliente"])) {
                    $datos["Email"] = $_POST["emailcliente"];
                }

                // Llama a la función en el modelo para insertar el cliente en la base de datos
                $respuesta = ModeloClientes::mdlCrearCliente($tabla, $datos);

                // Si la inserción es exitosa, muestra un mensaje de éxito
                if ($respuesta == "ok") {
                    echo '<script>
                swal({
                    type: "success",
                    title: "¡El Cliente ha sido guardado correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if(result.value){
                        window.location = "cliente";
                    }
                });
            </script>';
                }
            } else {
                // Si hay errores en los datos ingresados, muestra un mensaje de error
                echo '<script>
            swal({
                type: "error",
                title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
            }).then(function(result){
                if(result.value){
                    window.location = "cliente";
                }
            });
        </script>';
            }
        }
    }



    /*=============================================
     EDITAR CLIENTE
     =============================================*/

    static public function ctrEditarCliente() {
        // Verifica si se ha enviado el formulario de edición del cliente
        if (isset($_POST["editarcicliente"])) {
            // Validaciones de entrada de datos
            if (
                preg_match('/^[0-9]+$/', $_POST["editarcicliente"]) && // Verifica que "cicliente" sea un número
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarnombrecliente"]) && // Verifica que "nombrecliente" contenga caracteres alfanuméricos y especiales
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarapellidocliente"]) && // Verifica que "apellidocliente" contenga caracteres alfanuméricos y especiales
                preg_match('/^[+0-9 ]+$/', $_POST["editarTelefonoCliente"]) // Verifica que "nuevoTelefonoCliente" contenga caracteres válidos (números, espacios y signo más)
            ) {
                $tabla = "clientes";

                // Preparar los datos para la actualización en la base de datos
                $datos = array(
                    "CI" => $_POST["cicliente"],
                    "Nombre" => mb_strtoupper($_POST["nombrecliente"]), // Convierte el nombre a mayúsculas
                    "Apellido" => mb_strtoupper($_POST["apellidocliente"]), // Convierte el apellido a mayúsculas
                    "Telefono" => $_POST["nuevoTelefonoCliente"],
                    "FechaNacimiento" => $_POST["fechaNacimientocliente"] // Agrega la fecha de nacimiento al arreglo
                );

                // Verifica si se proporcionó un correo electrónico y agrega el campo "Email" solo si se proporcionó
                if (!empty($_POST["editaremailcliente"])) {
                    $datos["Email"] = $_POST["editaremailcliente"];
                }

                // Llama al método en el modelo para editar el cliente
                $respuesta = ModeloClientes::mdlEditarCliente($tabla, $datos);

                if ($respuesta == "ok") {
                    // Muestra una alerta de éxito y redirige a la página de clientes
                    echo '
                <script>
                    swal({
                        type: "success",
                        title: "El cliente ha sido cambiado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {
                            window.location = "clientes";
                        }
                    });
                </script>';
                }
            } else {
                // Muestra una alerta de error si las validaciones fallan y redirige a la página de clientes
                echo '
            <script>
                swal({
                    type: "error",
                    title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result) {
                    if (result.value) {
                        window.location = "clientes";
                    }
                });
            </script>';
            }
        }
    }

    /*=============================================
     MOSTRAR CLIENTE
     =============================================*/

    static public function ctrMostrarCliente($item, $valor)
    {

        $tabla = "clientes";

        $respuesta = ModeloClientes::mdlMostrarCliente($tabla, $item, $valor);

        return $respuesta;
    }
    /*=============================================
     ACTUALIZAR CLIENTE
     =============================================*/

    static public function crtActualizarCliente($tabla, $item1, $valor1, $item2, $valor2)
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
     BORRAR CLIENTE
     =============================================*/

    static public function ctrBorrarClientes()
    {

        if (isset($_GET["idCi"])) {

            $tabla = "clientes";
            $datos = $_GET["idCi"];

            $respuesta = ModeloClientes::mdlBorrarCliente($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>
				Swal.fire({
					title: "El Cliente ha sido borrado correctamente",
					icon: "success",
					showConfirmButton: true,

					confirmButtonColor: "#3085d6",

					confirmButtonText: "Cerrar"
					}).then((result) => {
                  window.location = "usuarios";
					})
            </script>';
            }
        }
    }
}
