<div class="content-wrapper">
    <section class="content-header">
        <h1>Registro de Usuario</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Complete los siguientes campos:</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="miFormulario" role="form" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <!-- Columna 1: Información Personal del Usuario -->
                                <div class="col-md-6 border-right">
                                    <b class="text-muted"><i class="fa fa-user-circle-o"></i> Información Personal del Usuario</b>
                                    <!-- ENTRADA PARA SUBIR FOTO -->
                                    <div class="form-group">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">SUBIR FOTO</h3>
                                            </div>
                                            <div class="panel-body">
                                                <input type="file" class="nuevaFoto" name="nuevaFoto">
                                                <p class="help-block">Peso máximo de la foto: 2MB</p>
                                                <div class="text-center">
                                                    <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ENTRADAS PARA DATOS DE USUARIO -->
                                    <div class="form-group">
                                        <label for="nuevoUsuario"><i class="fa fa-user"></i> Usuario</label>
                                        <input type="text" class="form-control form-control-sm"  name="nuevoUsuario"  placeholder="Introducir nuevo usuario" id="nuevoUsuario" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nuevoPassword"><i class="fa fa-lock"></i> Contraseña</label>
                                        <input type="password" id="nuevoPassword" name="nuevoPassword" class="form-control form-control-sm" required placeholder="Introducir nueva contraseña">
                                    </div>
                                </div>
                                <!-- Columna 2: Más Información -->
                                <div class="col-md-6">
                                    <b class="text-muted"><i class="fa fa-info-circle"></i> Más Información</b>
                                    <div class="form-group">
                                        <label for="nuevoNombreUsuario"><i class="fa fa-user"></i> Nombre</label>
                                        <input type="text" id="nuevoNombreUsuario" name="nuevoNombreUsuario" class="form-control form-control-sm" required placeholder="Introducir nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="nuevoApellidoUsuario"><i class="fa fa-user"></i> Apellido</label>
                                        <input type="text" id="nuevoApellidoUsuario" name="nuevoApellidoUsuario" class="form-control form-control-sm" required placeholder="Introducir apellido">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                            <select class="form-control" name="nuevoPerfilUsuario" id="nuevoPerfilUsuario">
                                                <option value="">Seleccionar perfil</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Secretaria">Secretaria</option>
                                                <option value="Técnico">Técnico</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nuevoEspecialidadUsuario"><i class="fa fa-user"></i> Especialidad</label>
                                        <select class="form-control" name="nuevoEspecialidadUsuario" id="nuevoEspecialidadUsuario" disabled>
                                            <option value="">Seleccionar especialidad</option>
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
                                    <!-- Campo de número de teléfono -->
                                    <div class="form-group">
                                        <label for="nuevoTelefonoUsuario"><i class="fa fa-phone"></i> Teléfono</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control form-control-sm" name="nuevaNacionalidad" id="nuevaNacionalidad">
                                                    <option value="+591" selected>🇧🇴 Bolivia</option>
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
                                                <input type="text" id="nuevoTelefonoUsuario" name="nuevoTelefonoUsuario" class="form-control form-control-sm" placeholder="Introducir número de teléfono" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Usuario</button>
                            <button type="reset" class="btn btn-secondary"><i class="fa fa-undo"></i> Limpiar</button>
                            <a href="listausuario" class="btn btn-success"><i class="fa fa-arrow-right"></i>Ir registro de usuario</a>

                        </div>
                        <?php

                        $crearUsuario = new ControladorUsuarios();
                        $crearUsuario -> ctrCrearUsuario();

                        ?>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>

<!--Este script se ejecuta cuando el documento HTML ha cargado completamente.-->
<script>
    $(document).ready(function () {
        // Obtener los elementos de selección de perfil y especialidad por sus IDs.
        var perfilSelect = $("#editarPerfilUsuario");
        var especialidadSelect = $("#editarEspecialidadUsuario");

        // Función para actualizar la habilitación de editarEspecialidadUsuario.
        function actualizarEspecialidad() {
            // Obtener el valor seleccionado del perfil.
            var perfilSeleccionado = perfilSelect.val();

            // Obtener el valor actual de editarEspecialidadUsuario.
            var especialidadActual = especialidadSelect.val();

            // Si el perfil no es "Técnico", bloquear y borrar editarEspecialidadUsuario.
            if (perfilSeleccionado !== "Técnico") {
                especialidadSelect.prop("disabled", true);
                especialidadSelect.val(""); // Borra el valor.
            } else {
                // Si el perfil es "Técnico" y editarEspecialidadUsuario no tiene datos, habilitar para crear.
                if (especialidadActual === "") {
                    especialidadSelect.prop("disabled", false);
                } else {
                    // Si editarEspecialidadUsuario tiene datos, habilitar para modificar.
                    especialidadSelect.prop("disabled", false);
                }
            }
        }

        // Llama a la función para configurar el estado inicial de editarEspecialidadUsuario.
        actualizarEspecialidad();

        // Agrega un controlador de eventos para cambiar el perfil.
        perfilSelect.change(function () {
            actualizarEspecialidad();
        });
    });
</script>

<!-- Script para actualizar el campo de nuevo número de teléfono y enviar solo nuevoTelefonoUsuario -->
<script>
    // Obtener el elemento de selección de nacionalidad por su ID
    const nacionalidadSelect = document.getElementById('nuevaNacionalidad');

    // Obtener el elemento de entrada de teléfono por su ID
    const telefonoInput = document.getElementById('nuevoTelefonoUsuario');

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





<!--
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

-->