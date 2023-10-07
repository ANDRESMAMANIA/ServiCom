<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["Perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

    </div> 

     <div class="row">
       
        <div class="col-lg-12">

          <?php

          if($_SESSION["Perfil"] =="Administrador"){
          
           include "reportes/grafico-ventas.php";

          }

          ?>

        </div>

        <div class="col-lg-6">

          <?php

          if($_SESSION["Perfil"] =="Administrador"){
          
           include "reportes/productos-mas-vendidos.php";

         }

          ?>

        </div>

         <div class="col-lg-6">

          <?php

          if($_SESSION["Perfil"] =="Administrador"){
          
           include "inicio/productos-recientes.php";

         }

          ?>

        </div>

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["Perfil"] =="Administrador" || $_SESSION["Perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["Nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>
 
</div>
