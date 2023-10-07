<?php
// modelos.php

function cargarArchivosModelos($directorio) {
    // Obtener la lista de archivos y directorios en el directorio actual
    $archivos = scandir($directorio);

    foreach ($archivos as $archivo) {
        // Ignorar los directorios "." y ".."
        if ($archivo !== "." && $archivo !== "..") {
            $ruta = $directorio . '/' . $archivo;

            if (is_dir($ruta)) {
                // Si es un directorio, llamar recursivamente a la función
                cargarArchivosModelos($ruta);
            } elseif (pathinfo($ruta, PATHINFO_EXTENSION) == "php" || pathinfo($ruta, PATHINFO_EXTENSION) == "module") {
                // Si es un archivo PHP o con extensión .module, cargarlo
                require_once $ruta;
            }
        }
    }
}

// Llamar a la función para cargar archivos de modelos
$carpetaModelos = "modelos";
cargarArchivosModelos($carpetaModelos);
?>
