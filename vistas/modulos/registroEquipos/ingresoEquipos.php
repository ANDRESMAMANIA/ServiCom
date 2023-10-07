<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar de registros de equipos

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar de registro de equipos</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRegistroEquipos">

                    Registrar equipos

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                    <thead>

                    <tr>
                        <th>#</th>
                        <th>C.I</th>
                        <th>Nombre y apellido</th>
                        <th>Marca</th>
                        <th>Modelo Equipo</th>
                        <th>Tipo equipo</th>
                        <th>foto</th>
                        <th>Descripcion</th>
                        <th>Fecha </th>
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
<div class="modal fade" id="modalAgregarRegistroEquipos" tabindex="-1" role="dialog"
     aria-labelledby="modalAgregarRegistroEquiposLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formCrearRegistroEquipos" role="form" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalAgregarRegistroEquipos">Registrar Equipos</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <label>Cliente</label>
                            <select class="form-control select2" id="seleccionarEstudiante" name="seleccionarEstudiante"
                                    style="width: 100%;">
                                <option selected="selected">Seleccionar CI cliente</option>
                                <?php
                                $item = null;
                                $valor = null;
                                $clientes = ControladorClientes::ctrMostrarCliente($item, $valor);
                                foreach ($clientes as $key => $value) {
                                    echo '<option value="' . $value["IDCliente"] . '">' . $value["CI"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion"><i class="fa fa-info-circle"></i> Descripción del equipo:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="6"
                                  placeholder="Ingrese la descripción del repuesto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nuevaGarantiaEquipo">Garantia:</label>
                        <select class="form-control" name="nuevaGarantiaEquipo" id="nuevaGarantiaEquipo">
                            <option value="">Seleccionar la garantia</option>
                            <option value="15 dias">15 dias</option>
                            <option value="30 dias">30 dias</option>
                            <option value="45 dias">45 dias</option>
                            <option value="60 dias">60 dias</option>
                            <option value="90 dias">90 dias</option>
                            <!-- Agrega más opciones de especialidad aquí -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modeloEquipo">Modelo del equipo:</label>
                        <input type="text" class="form-control" id="modeloEquipo" name="modeloEquipo"
                               placeholder="Ingrese el modelo del equipo">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label>Marca</label>
                            <select class="form-control select2" id="seleccionarEstudiante" name="seleccionarEstudiante"
                                    style="width: 100%;">
                                <option selected="selected">Seleccionar la Marca</option>
                                <?php
                                $item = null;
                                $valor = null;
                                $marca = ControladorMarcas::ctrMostrarMarcas($item, $valor);
                                foreach ($marca as $key => $value) {
                                    echo '<option value="' . $value["IDMarca"] . '">' . $value["Marca"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label>Tipo del equipo</label>
                            <select class="form-control select2" id="seleccionarEstudiante" name="seleccionarEstudiante"
                                    style="width: 100%;">
                                <option selected="selected">Seleccionar el tipo del equipo</option>
                                <?php
                                $item = null;
                                $valor = null;
                                $tipoequipo = ControladorTipoEquipo::ctrMostrarTipoEquipos($item, $valor);
                                foreach ($tipoequipo as $key => $value) {
                                    echo '<option value="' . $value["IDTipoEquipo"] . '">' . $value["TipoEquipo"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fechaRegistroEquipo">Fecha y hora de registro:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" id="fechaRegistroEquipo" name="fechaRegistroEquipo" class="form-control" readonly>
                        </div>
                        <script>
                            // Obtén la fecha y hora actual
                            var fechaHoraActual = new Date();
                            // Formatea la fecha y hora como una cadena legible
                            var formattedDate = fechaHoraActual.toLocaleString();
                            // Asigna la fecha formateada al campo de entrada
                            document.getElementById("fechaRegistroEquipo").value = formattedDate;
                        </script>
                    </div>

                    <div class="form-group">
                        <label for="fechaSalidaEquipo">Fecha de entrega de equipos:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class=|"form-control pull-right" name="fechaSalidaEquipo" id="fechaSalidaEquipo">
                            <script>
                                $('#fechaSalidaEquipo').datepicker({
                                    autoclose: true,
                                    format: 'yyyy-mm-dd' // Establece el formato deseado
                                });
                            </script>
                        </div>
                        <!-- /.input group -->
                    </div>

                    <!-- Time Picker -->
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Hora de entrega:</label>
                            <div class="input-group">
                                <input type="text" class="form-control timepicker" name="horaSalidaEquipo" id="horaSalidaEquipo">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>

                    <script>
                        $('#fechaSalidaEquipo').change(function() {
                            // Obtén los valores de fecha y hora
                            var fechaSalida = $('#fechaSalidaEquipo').val();
                            var horaSalida = $('#horaSalidaEquipo').val();

                            // Combina la fecha y la hora en un solo dato
                            var fechaHoraSalida = fechaSalida + ' ' + horaSalida;

                            // Obtén la fecha y hora de registro
                            var fechaRegistro = new Date($('#fechaRegistroEquipo').val());
                            var fechaSalidaDatetime = new Date(fechaHoraSalida);

                            // Verifica la restricción
                            if (fechaSalidaDatetime <= fechaRegistro) {
                                alert('La fecha y hora de entrega deben ser posteriores a la fecha de registro.');
                                // Puedes tomar medidas adicionales, como borrar los campos o deshabilitar el botón de envío.
                            }
                        });
                    </script>



                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Registro
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



<script>
    $(document).ready(function () {
        // Obtener el select
        var select = $("#selectCliente");

        // Obtener los options y convertirlos en un arreglo
        var options = select.find("option");

        // Ordenar los options por el valor de CI
        options.sort(function (a, b) {
            var ciA = $(a).text();
            var ciB = $(b).text();
            return ciA.localeCompare(ciB);
        });

        // Limpiar el select
        select.empty();

        // Agregar los options ordenados de nuevo al select
        select.append(options);
    });
</script>


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
                ?>
            </form>
        </div>
    </div>
</div>



