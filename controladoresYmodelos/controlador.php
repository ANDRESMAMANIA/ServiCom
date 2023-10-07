<?php
// controladores.php

function cargarArchivosControladores($directorio) {
    // Obtener la lista de archivos y directorios en el directorio actual
    $archivos = scandir($directorio);

    foreach ($archivos as $archivo) {
        // Ignorar los directorios "." y ".."
        if ($archivo !== "." && $archivo !== "..") {
            $ruta = $directorio . '/' . $archivo;

            if (is_dir($ruta)) {
                // Si es un directorio, llamar recursivamente a la función
                cargarArchivosControladores($ruta);
            } elseif (pathinfo($archivo, PATHINFO_EXTENSION) == "php") {
                // Si es un archivo PHP, cargarlo
                require_once $ruta;
            }
        }
    }
}

// Llamar a la función para cargar archivos de controladores
$carpetaControladores = "controladores";
cargarArchivosControladores($carpetaControladores);
