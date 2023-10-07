<?php

if($_SESSION["Perfil"] == "Técnico"){

    echo '<script>

    window.location = "inicio";

  </script>';

    return;

}

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Administración de Repuestos</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Crear venta</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- Columna para el Registro -->
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingreso de Repuesto</h3>
                    </div>
                    <div class="box-body">
                        <!-- De aqui se obtiene los datos que crear repuesto -->
                        <?php
                        include "vistas/modulos/repuesto/crearRepuesto.php"
                        ?>
                    </div>
                </div>
            </div>

            <!-- Columna para Mostrar Datos -->
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Registro de Repuesto</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                            <thead>
                            <tr>
                                <th style="width:10px">numerador</th>
                                <th>Foto</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>FechaIngreso</th>
                                <th>Acciones</th> <!-- Columna de acciones -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $item = null;
                            $valor = null;
                            $repuestos = ControladorRepuestos::ctrMostrarRepuesto($item, $valor);

                            foreach ($repuestos as $key => $repuesto) {
                                echo '<tr>';
                                echo '<td>' . ($key + 1) . '</td>';
                                echo '<td>';
                                if ($repuesto["Foto"] != "") {
                                    echo '<img src="' . $repuesto["Foto"] . '" class="img-thumbnail" width="40px">';
                                } else {
                                    echo '<img src="vistas/img/repuesto/default/anonymous.png" class="img-thumbnail" width="40px">'; // Cambia "ruta/a/imagen/por/defecto.jpg" por la ruta de tu imagen por defecto
                                }
                                echo '</td>';
                                echo '<td>' . $repuesto["Descripcion"] . '</td>';
                                echo '<td>' . $repuesto["Cantidad"] . '</td>';
                                echo '<td>' . $repuesto["Precio"] . '</td>';
                                echo '<td>' . $repuesto["FechaIngreso"] . '</td>';
                                // Columna de acciones
                                echo '<td>
            <div class="btn-group">
                <!-- Botones de edición y eliminación -->
                <button class="btn btn-warning btnEditarRepuesto" IDRepuesto="' . $repuesto["IDRepuesto"] . '" data-toggle="modal" data-target="#modalEditarRepuesto"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btnEliminarRepuesto" IDRepuesto="' . $repuesto["IDRepuesto"] . '" fotoRepuesto="' . $repuesto["Foto"] . '" Descripcion="' . $repuesto["Descripcion"] . '"><i class="fa fa-times"></i></button>
            </div>
        </td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



