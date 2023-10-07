<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar clientes

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar clientes</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

                    Agregar cliente

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                    <thead>

                    <tr>
                        <th>#</th>
                        <th>C.I</th>
                        <th>Nombre</th>
                        <th>Apellifo</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Fecha nacimiento</th>
                        <th>Fecha de registro</th>
                        <th>Fecha de modificacion</th>
                        <th>ESTADO</th>
                    </tr>

                    </thead>

                    <tbody>

                    <?php

                    $item = null;
                    $valor = null;

                    $clientes = ControladorClientes::ctrMostrarCliente($item, $valor);

                    foreach ($clientes as $key => $value) {
                        echo '<tr>
              <td>' . ($key + 1) . '</td>
              <td>' . $value["CI"] . '</td>
              <td>' . $value["Nombre"] . '</td>
              <td>' . $value["Apellido"] . '</td>
              <td>' . $value["Telefono"] . '</td>
              <td>' . $value["Email"] . '</td>
              <td>' . $value["FechaNacimiento"] . '</td>
              <td>' . $value["FechaRegistro"] . '</td>
              <td>' . $value["FechaModificacion"] . '</td>
              <td>
    <div class="btn-group">
        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="' . $value["IDCliente"] . '"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-danger btnEliminarCliente" idCliente="' . $value["IDCliente"] . '"><i class="fa fa-times"></i></button>
    </div>
</td>

          </tr>';
                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

<!-- Modal Agregar Cliente -->
<div class="modal fade" id="modalAgregarCliente" tabindex="-1" role="dialog" aria-labelledby="modalAgregarClienteLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formCrearUsuario" role="form" method="POST" enctype="multipart/form-data">
                <div class="modal-header">

                    <h4 class="modal-title" id="modalAgregarClienteLabel">Agregar Cliente</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cicliente"><i class="fa fa-id-card"></i> Carnet de Identidad (CI)</label>
                        <input type="number" class="form-control" id="cicliente" name="cicliente"
                               placeholder="Número de Carnet" required>
                        <input type="hidden" id="idCliente" name="idCliente">
                    </div>
                    <div class="form-group">
                        <label for="nombrecliente"><i class="fa fa-user"></i> Nombre</label>
                        <input type="text" class="form-control" id="nombrecliente" name="nombrecliente"
                               placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidocliente"><i class="fa fa-user"></i> Apellido</label>
                        <input type="text" class="form-control" id="apellidocliente" name="apellidocliente"
                               placeholder="Apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="nuevoTelefonoCliente"><i class="fa phone-user"></i> Teléfono</label>
                        <input type="text" class="form-control" id="nuevoTelefonoCliente" name="nuevoTelefonoCliente"
                               placeholder="nuevoTelefonoCliente" required>
                    </div>
                    <div class="form-group">
                        <label for="emailcliente"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" id="emailcliente" name="emailcliente"
                               placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Fecha de Nacimiento:</label>

                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" name="nuevaFechaNacimiento" id="nuevaFechaNacimiento">
                            <script>
                                $('#nuevaFechaNacimiento').datepicker({
                                    autoclose: true,
                                    format: 'yyyy-mm-dd' // Establece el formato deseado
                                });
                            </script>
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cliente
                    </button>
                    <button type="reset" class="btn btn-secondary"><i class="fa fa-undo"></i> Limpiar</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i
                                class="fa fa-sign-out"></i> Salir
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

?>
<!-- Modal Editar Cliente -->
<div class="modal fade" id="modalEditarCliente" tabindex="-1" role="dialog" aria-labelledby="modalEditarClienteLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalEditarClienteLabel">Editar Cliente</h4>
                </div>
                <div class="modal-body"> <!-- Cambia la clase a "modal-body" para el contenido del formulario -->

                    <div class="form-group">
                        <label for="editarcicliente"><i class="fa fa-id-card"></i> Carnet de Identidad (CI)</label>
                        <input type="number" class="form-control" id="editarcicliente" name="editarcicliente" required>
                        <input type="hidden" id="idEditarCliente" name="idEditarCliente">
                    </div>
                    <div class="form-group">
                        <label for="editarnombrecliente"><i class="fa fa-user"></i> Nombre</label>
                        <input type="text" class="form-control" id="editarnombrecliente" name="editarnombrecliente"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="editarapellidocliente"><i class="fa fa-user"></i> Apellido</label>
                        <input type="text" class="form-control" id="editarapellidocliente" name="editarapellidocliente"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="editarTelefonoCliente"><i class="fa fa-phone"></i> Teléfono</label>
                        <div class="col-md-9">
                            <input type="text" id="editarTelefonoCliente" name="editarTelefonoCliente"
                                   class="form-control form-control-sm" placeholder="Introducir número de teléfono"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editaremailcliente"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" id="editaremailcliente" name="editaremailcliente"
                               placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control input-lg datepicker" id="nuevaFechaNacimiento"
                                   name="nuevaFechaNacimiento" placeholder="Ingresar fecha de nacimiento" required>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cliente</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i
                                class="fa fa-sign-out"></i> Salir
                    </button>
                </div>
                <?php
                $crearCliente = new ControladorClientes();
                $crearCliente->ctrCrearCliente();
                ?>
            </form>
        </div>
    </div>
</div>


<script>
    function formatName(inputId) {
        var input = document.getElementById(inputId);
        var inputValue = input.value;

        if (inputValue.length > 0) {
            // Dividir el valor en palabras
            var words = inputValue.split(' ');

            // Capitalizar la primera letra de cada palabra y convertir el resto en minúsculas
            var formattedWords = words.map(function (word) {
                return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
            });

            // Unir las palabras nuevamente con espacios
            var formattedValue = formattedWords.join(' ');

            // Actualizar el valor del campo
            input.value = formattedValue;
        }
    }

    document.getElementById('nombrecliente').addEventListener('input', function () {
        formatName('nombrecliente');
    });

    document.getElementById('apellidocliente').addEventListener('input', function () {
        formatName('apellidocliente');
    });

    document.getElementById('editarnombrecliente').addEventListener('input', function () {
        formatName('editarnombrecliente');
    });

    document.getElementById('editarapellidocliente').addEventListener('input', function () {
        formatName('editarapellidocliente');
    });
</script>

<script>

    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy/mm/dd', // Formato de fecha deseado
            autoclose: true     // Cierra el date picker después de seleccionar una fecha
        });
    });

    $('#editarfechaNacimientocliente').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd' // Establece el formato deseado
    });

</script>
