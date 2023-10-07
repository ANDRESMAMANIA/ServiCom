<?php

/**
 *
 */
class ControladorTipoEquipo
{
    static public function ctrMostrarTipoEquipos($item, $valor)
    {

        $tabla = "tipoequipo";

        $respuesta = ModeloTipoEquipo::mdlMostrarTipoEquipos($tabla, $item, $valor);

        return $respuesta;
    }
    static public function ctrCrearTipoEquipos()
    {
        if (isset($_POST["nombreTipoEquipo"])) {
            // Verifica si se ha enviado el campo "nombreTipoEquipo" desde el formulario

            $nombreTipoEquipo = $_POST["nombreTipoEquipo"];

            // Verifica que el nombre del tipo de equipo no esté vacío
            if (!empty($nombreTipoEquipo)) {
                $tabla = "TipoEquipo"; // Define el nombre de la tabla en la base de datos

                // Crea un arreglo con los datos del tipo de equipo
                $datos = array(
                    "TipoEquipo" => $nombreTipoEquipo
                );

                // Llama a la función en el modelo para insertar el tipo de equipo en la base de datos
                $respuesta = ModeloTipoEquipo::mdlCrearTipoEquipo($tabla, $datos);

                // Si la inserción es exitosa, muestra un mensaje de éxito
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "¡El Tipo de Equipo ha sido guardado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            // Redirige a la página de lista de tipos de equipo
                            window.location = "tipoEquipo"; // Cambia "lista_tipos_equipo.php" por la URL correcta
                        }
                    });
                </script>';
                } else {
                    // Si hay un error en la inserción, muestra un mensaje de error
                    echo '<script>
                    swal({
                        type: "error",
                        title: "¡Hubo un error al guardar el Tipo de Equipo!",
                        text: "Por favor, inténtalo de nuevo.",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    });
                </script>';
                }
            } else {
                // Si el nombre del tipo de equipo está vacío, muestra un mensaje de error
                echo '<script>
                swal({
                    type: "error",
                    title: "¡El nombre del Tipo de Equipo no puede estar vacío!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                });
            </script>';
            }
        }
    }

}