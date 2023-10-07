<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Inventory System</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/logo.png">
    <link rel="stylesheet" href="vistas/img/banderas/banderas.css">
    <?php
    include "vistas/linkCSS.php"
    ?>

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/plantilla/cabezote.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/plantilla/menu.php";

    /*=============================================
    CONTENIDO
    =============================================*/

      // Verificar la ruta actual para cargar el contenido correspondiente
      if (isset($_GET["ruta"])) {
          $ruta = $_GET["ruta"]; // Almacenar la ruta en una variable

          // Utilizar un switch para manejar las diferentes rutas
          switch ($ruta) {
              // Cargar módulos según la ruta
              case "inicio":
                  include "modulos/" . $ruta . ".php"; // Cargar módulo específico
                  break;

              case "crearusuario":
              case "listausuario":
                  include "modulos/usuario/" . $ruta . ".php"; // Cargar módulo específico
                  break;
              case "cliente":
                  include "modulos/cliente/" . $ruta . ".php"; // Cargar módulo específico
                  break;
              case "tipoEquipo":
              case "ingresoEquipos":
              case "marca":
                  include "modulos/registroEquipos/" . $ruta . ".php"; // Cargar módulo específico
                  break;
              case "registroRepuesto":
                  include "modulos/repuesto/" .$ruta.".php";
                  break;


              case "salir":
                  include "modulos/plantilla/" . $ruta . ".php"; // Cargar módulo específico
                  // Agregar código para "cerrar sesión" si es necesario
                  break;

              default:
                  include "modulos/plantilla/404.php"; // Mostrar página de error por defecto
                  break;
          }
      } else {
          include "modulos/inicio.php"; // Cargar la página de inicio por defecto
      }

    /*=============================================
    FOOTER
    =============================================*/


    include "modulos/plantilla/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }
  ?>
  <?PHP
  include "vistas/linkJS.php"
  ?>


</body>
</html>











