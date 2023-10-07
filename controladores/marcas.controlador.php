<?php

/**
 *
 */
class ControladorMarcas
{
    /*=============================================
     REGISTRO DE CLIENTE
     =============================================*/
    static public function ctrMostrarMarcas($item, $valor)
    {

        $tabla = "marcas";

        $respuesta = ModeloMarcas::mdlMostrarMarcas($tabla, $item, $valor);

        return $respuesta;
    }
    static public function ctrCrearMarcas()
    {
        if (isset($_POST["nombreMarca"])) {
            // Verifica si se ha enviado el campo "nombreMarca" desde el formulario

            $nombreMarca = $_POST["nombreMarca"];

            // Verifica que el nombre de la marca no esté vacío
            if (!empty($nombreMarca)) {
                $tabla = "marcas"; // Define el nombre de la tabla en la base de datos

                // Crea un arreglo con los datos de la marca
                $datos = array(
                    "Marca" => $nombreMarca
                );

                // Llama a la función en el modelo para insertar la marca en la base de datos
                $respuesta = ModeloMarcas::mdlCrearMarca($tabla, $datos);

                // Si la inserción es exitosa, muestra un mensaje de éxito
                if ($respuesta == "ok") {
                    echo '<script>
                swal({
                    type: "success",
                    title: "¡La Marca ha sido guardada correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if(result.value){
                        // Redirige a la página de lista de marcas
                        window.location = "marca"; // Cambia "lista_marcas.php" por la URL correcta
                    }
                });
            </script>';
                } else {
                    // Si hay un error en la inserción, muestra un mensaje de error
                    echo '<script>
                swal({
                    type: "error",
                    title: "¡Hubo un error al guardar la Marca!",
                    text: "Por favor, inténtalo de nuevo.",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                });
            </script>';
                }
            } else {
                // Si el nombre de la marca está vacío, muestra un mensaje de error
                echo '<script>
            swal({
                type: "error",
                title: "¡El nombre de la Marca no puede estar vacío!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
            });
            </script>';
            }
        }
    }

}
