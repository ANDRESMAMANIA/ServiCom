<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="<?php echo ($_SESSION["Perfil"] == "Administrador") ? 'active' : ''; ?>">
                <a href="inicio">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <!-- El resto de tus elementos de menú aquí -->
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="crearusuario">Crear usuario</a></li>
                    <li><a href="listausuario">Lista de usuarios</a></li>
                </ul>
            </li>
            <li class=" <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria") ? 'active' : ''; ?>">
                <a href="cliente">
                    <i class="fa fa-users"></i>
                    <span>Clientes</span>

                </a>

            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-desktop"></i>
                    <span>Registro de Equipos</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="marca"><i class="fa fa-cube"></i> Marca</a></li>
                    <li><a href="tipoEquipo"><i class="fa fa-laptop"></i> Tipo Equipo</a></li>
                    <li><a href="ingresoEquipos"><i class="fa fa-plus-circle"></i> Ingreso Equipos</a></li>
                </ul>
            </li>

            <li class="<?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="registroRepuesto">
                    <i class="fa fa-cogs"></i>
                    <span>Repuestos</span>
                </a>
            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>Servicios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Agrega los elementos del menú para Servicios aquí -->
                </ul>
            </li>

            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-sign-in"></i>
                    <span>Ingreso de Equipos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Agrega los elementos del menú para Ingreso de Equipos aquí -->
                </ul>
            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>Pagos de Repuestos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Agrega los elementos del menú para Pagos de Repuestos aquí -->
                </ul>
            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-credit-card"></i>
                    <span>Pagos de Servicios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Agrega los elementos del menú para Pagos de Servicios aquí -->
                </ul>
            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-ticket"></i>
                    <span>Tickets de Soporte</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Agrega los elementos del menú para Tickets de Soporte aquí -->
                </ul>
            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span>Asignaciones Técnicos-Equipos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Agrega los elementos del menú para Asignaciones Técnicos-Equipos aquí -->
                </ul>
            </li>
            <li class="treeview <?php echo ($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Secretaria" || $_SESSION["Perfil"] == "Técnico") ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Reportes</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Cliente</a></li>
                    <li><a href="#"><i class="fa fa-users"></i> Usuario</a></li>
                    <li><a href="#"><i class="fa fa-desktop"></i> Ingreso Equipos</a></li>
                </ul>
            </li>

        </ul>
    </section>
</aside>

