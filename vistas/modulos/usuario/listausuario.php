<div class="content-wrapper">
    <!-- Encabezado de la sección de contenido -->
    <section class="content-header">
        <h1>Administrar usuarios</h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Administrar usuarios</li>
        </ol>
    </section>
    <!-- Contenido principal -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="crearusuario" class="btn btn-primary">Crear Usuario</a>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                    <tr>
                        <th style="width:10px">#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Foto</th>
                        <th>Perfil</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th>Último login</th>
                        <th>Fecha de Registro</th>
                        <!-- Nuevo campo -->
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $item = null;
                    $valor = null;
                    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                    foreach ($usuarios as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . ($key + 1) . '</td>';
                        echo '<td>' . $value["Nombre"] . '</td>';
                        echo '<td>' . $value["Apellido"] . '</td>';
                        echo '<td>' . $value["Usuario"] . '</td>';

                        // Columna de la foto del usuario
                        echo '<td>';
                        if ($value["Foto"] != "") {
                            echo '<img src="' . $value["Foto"] . '" class="img-thumbnail" width="40px">';
                        } else {
                            echo '<img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px">';
                        }
                        echo '</td>';

                        echo '<td>' . $value["Perfil"] . '</td>';
                        echo '<td>' . ($value["Especialidad"] ? $value["Especialidad"] : "N/A") . '</td>';
                        echo '<td>' . ($value["Telefono"] ? $value["Telefono"] : "N/A") . '</td>';
                        echo '<td>';

                        // Botón para activar o desactivar usuario
                        if ($value["Estado"] != 0) {
                            echo '<button class="btn btn-success btn-xs btnActivar" IDUsuario="' . $value["IDUsuario"] . '" estadoUsuario="0">Activado</button>';
                        } else {
                            echo '<button class="btn btn-danger btn-xs btnActivar" IDUsuario="' . $value["IDUsuario"] . '" estadoUsuario="1">Desactivado</button>';
                        }

                        echo '</td>';
                        echo '<td>' . $value["UltimoLogin"] . '</td>';
                        echo '<td>' . $value["FechaRegistro"] . '</td>';
                        echo '<td>
                                    <div class="btn-group">
                                    <!-- notificacion de lo que me falta que es el desarrollo de la activacion de los botonos ya sea de la activivacion y de la eliminacion -->
                                        <button class="btn btn-warning btnEditarUsuario" IDUsuario="' . $value["IDUsuario"] . '" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btnEliminarUsuario" IDUsuario="' . $value["IDUsuario"] . '" fotoUsuario="' . $value["Foto"] . '" Usuario="' . $value["Usuario"] . '"><i class="fa fa-times"></i></button>
                                    </div>
                                  </td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="modalEditarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h2 class="modal-title">Editar Usuario</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <form id="miFormulario" role="form" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 border-right">
                            <div class="text-muted mb-3"><i class="fa fa-user-circle-o"></i> Información Personal del Usuario</div>
                            <div class="form-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">SUBIR FOTO</h3>
                                    </div>
                                    <div class="panel-body">
                                        <input type="file" class="nuevaFoto form-control-file" name="editarFoto">
                                        <p class="help-block">Peso máximo de la foto: 2MB</p>
                                        <div class="text-center">
                                            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                                        </div>
                                        <input type="hidden" name="fotoActual" id="fotoActual">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editarUsuario"><i class="fa fa-user"></i> Nombre de Usuario</label>
                                <input type="text" class="form-control" name="editarUsuario" placeholder="Introducir nuevo usuario" id="editarUsuario" readonly>
                            </div>
                            <div class="form-group">
                                <label for="editarPassword"><i class="fa fa-lock"></i> Contraseña</label>
                                <input type="password" id="editarPassword" name="editarPassword" class="form-control" required placeholder="Introducir nueva contraseña">
                                <input type="hidden" id="passwordActual" name="passwordActual">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-muted mb-3"><i class="fa fa-info-circle"></i> Más Información</div>
                            <div class="form-group">
                                <label for="editarNombreUsuario"><i class="fa fa-user"></i> Nombre</label>
                                <input type="text" id="editarNombreUsuario" name="editarNombreUsuario" class="form-control" required placeholder="Introducir nombre">
                            </div>
                            <div class="form-group">
                                <label for="editarApellidoUsuario"><i class="fa fa-user"></i> Apellido</label>
                                <input type="text" id="editarApellidoUsuario" name="editarApellidoUsuario" class="form-control" required placeholder="Introducir apellido">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-users"></i> Perfil</label>
                                <select class="form-control" name="editarPerfilUsuario" id="editarPerfilUsuario">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Secretaria">Secretaria</option>
                                    <option value="Técnico">Técnico</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-user"></i> Especialidad</label>
                                <select class="form-control" name="editarEspecialidadUsuario" id="editarEspecialidadUsuario">

                                    <option value="Reparación de computadoras de escritorio">Reparación
                                        de computadoras de escritorio
                                    </option>
                                    <option value="Reparación de laptops y notebooks">Reparación de
                                        laptops y notebooks
                                    </option>
                                    <option value="Reparación de impresoras láser">Reparación de
                                        impresoras láser
                                    </option>
                                    <option value="Reparación de impresoras de inyección de tinta">
                                        Reparación de impresoras de inyección de tinta
                                    </option>
                                    <option value="Reparación de impresoras multifunción">Reparación de
                                        impresoras multifunción
                                    </option>
                                    <option value="Reparación de servidores y estaciones de trabajo">
                                        Reparación de servidores y estaciones de trabajo
                                    </option>
                                    <option value="Recuperación de datos y copias de seguridad">
                                        Recuperación de datos y copias de seguridad
                                    </option>
                                    <option value="Instalación y configuración de sistemas operativos">
                                        Instalación y configuración de sistemas operativos
                                    </option>
                                    <option value="Mantenimiento preventivo de hardware">Mantenimiento
                                        preventivo de hardware
                                    </option>
                                    <option value="Diagnóstico y solución de problemas de red">
                                        Diagnóstico y solución de problemas de red
                                    </option>
                                    <option value="Reparación de problemas de hardware específicos">
                                        Reparación de problemas de hardware específicos
                                    </option>
                                    <option value="Reparación y mantenimiento de periféricos">Reparación
                                        y mantenimiento de periféricos
                                    </option>

                                    <!-- Agrega más opciones de especialidad aquí -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="editarTelefonoUsuario"><i class="fa fa-phone"></i> Teléfono</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control" name="editarNacionalidad" id="editarNacionalidad">
                                            <option value="+591" >🇧🇴 Bolivia</option>
                                            <option value="+52">🇲🇽 México</option>
                                            <option value="+1">🇺🇸 Estados Unidos</option>
                                            <option value="+34">🇪🇸 España</option>
                                            <option value="+44">🇬🇧 Reino Unido</option>
                                            <option value="+49">🇩🇪 Alemania</option>
                                            <option value="+54">🇦🇷 Argentina</option>
                                            <option value="+56">🇨🇱 Chile</option>
                                            <option value="+57">🇨🇴 Colombia</option>
                                            <option value="+58">🇻🇪 Venezuela</option>
                                            <option value="+502">🇬🇹 Guatemala</option>
                                            <option value="+503">🇸🇻 El Salvador</option>
                                            <option value="+504">🇭🇳 Honduras</option>
                                            <option value="+505">🇳🇮 Nicaragua</option>
                                            <option value="+506">🇨🇷 Costa Rica</option>
                                            <option value="+507">🇵🇦 Panamá</option>
                                            <!-- Agrega más opciones de nacionalidad aquí -->
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" id="editarTelefonoUsuario" name="editarTelefonoUsuario" class="form-control" placeholder="Introducir número de teléfono" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cerrar</button>
                </div>
                <?php
                $editarUsuario = new ControladorUsuarios();
                $editarUsuario->ctrEditarUsuario();
                ?>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var perfilSelect = $("#editarPerfilUsuario");
        var especialidadSelect = $("#editarEspecialidadUsuario");

        // Función para actualizar la habilitación de editarEspecialidadUsuario
        function actualizarEspecialidad() {
            // Obtener el valor seleccionado del perfil
            var perfilSeleccionado = perfilSelect.val();

            // Obtener el valor actual de editarEspecialidadUsuario
            var especialidadActual = especialidadSelect.val();

            // Si el perfil no es "Técnico", bloquear y borrar editarEspecialidadUsuario
            if (perfilSeleccionado !== "Técnico") {
                especialidadSelect.prop("disabled", true);
                especialidadSelect.val(""); // Borra el valor
            } else {
                // Si el perfil es "Técnico" y editarEspecialidadUsuario no tiene datos, habilitar para crear
                if (especialidadActual === "") {
                    especialidadSelect.prop("disabled", false);
                } else {
                    // Si editarEspecialidadUsuario tiene datos, habilitar para modificar
                    especialidadSelect.prop("disabled", false);
                }
            }
        }

        // Llama a la función para configurar el estado inicial de editarEspecialidadUsuario
        actualizarEspecialidad();

        // Agrega un controlador de eventos para cambiar el perfil
        perfilSelect.change(function () {
            actualizarEspecialidad();
        });
    });
</script>








<!-- Script para actualizar el campo de nuevo número de teléfono y enviar solo nuevoTelefonoUsuario -->
<script>
    // Obtener el elemento de selección de nacionalidad por su ID
    const nacionalidadSelect = document.getElementById('editarNacionalidad');

    // Obtener el elemento de entrada de teléfono por su ID
    const telefonoInput = document.getElementById('editarTelefonoUsuario');

    // Función para actualizar el número de teléfono con la nacionalidad
    function actualizarNuevoNumero() {
        // Obtener el valor de la nacionalidad seleccionada
        const nacionalidad = nacionalidadSelect.value;

        // Obtener el valor actual del número de teléfono
        const numeroTelefono = telefonoInput.value;

        // Verificar si el número de teléfono comienza con '+'
        if (numeroTelefono.startsWith('+')) {
            // Buscar la posición del primer espacio en el número de teléfono
            const espacio = numeroTelefono.indexOf(' ');

            // Si se encuentra un espacio en el número
            if (espacio > -1) {
                // Obtener el número sin la nacionalidad (lo que está después del espacio)
                const numeroSinNacionalidad = numeroTelefono.substr(espacio + 1);

                // Actualizar el campo de teléfono con la nacionalidad y el número sin nacionalidad
                telefonoInput.value = nacionalidad + ' ' + numeroSinNacionalidad;
            } else {
                // Si no hay espacio, simplemente agregar la nacionalidad al número existente
                telefonoInput.value = nacionalidad + ' ' + numeroTelefono;
            }
        } else {
            // Si el número no comienza con '+', agregar la nacionalidad al número existente
            telefonoInput.value = nacionalidad + ' ' + numeroTelefono;
        }
    }

    // Agregar un evento de escucha para detectar cambios en la selección de nacionalidad
    nacionalidadSelect.addEventListener('change', actualizarNuevoNumero);

    // Llamar a la función para asegurarse de que el número de teléfono se actualice inicialmente
    actualizarNuevoNumero();

    // Agregar un evento de escucha para el envío del formulario
    const formulario = document.getElementById('miFormulario');
    formulario.addEventListener('submit', function(event) {
        // Evitar el envío del formulario aquí
        event.preventDefault();

        // Enviar solo nuevoTelefonoUsuario
        formulario.submit();
    });
</script>



<?php

$borrarUsuario = new ControladorUsuarios();
$borrarUsuario->ctrBorrarUsuario();

?>



