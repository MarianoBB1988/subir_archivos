<?php

// ----------------------------------------------------
// OBTENER EL ARCHIVO
// ----------------------------------------------------

// $_FILES contiene la información de los archivos
// enviados mediante un formulario.

// "archivo" es el nombre que colocamos en:
// <input type="file" name="archivo">

$archivo = $_FILES["archivo"];


// ----------------------------------------------------
// OBTENER EL NOMBRE DEL ARCHIVO
// ----------------------------------------------------

// Obtenemos el nombre original del archivo.

$nombre = $archivo["name"];


// ----------------------------------------------------
// OBTENER LA UBICACIÓN TEMPORAL
// ----------------------------------------------------

// Cuando PHP recibe un archivo,
// primero lo guarda temporalmente en el servidor.

// tmp_name contiene esa ubicación temporal.

$temporal = $archivo["tmp_name"];


// ----------------------------------------------------
// GUARDAR EL ARCHIVO
// ----------------------------------------------------

// move_uploaded_file() mueve el archivo desde
// la ubicación temporal hasta nuestra carpeta.

// "archivos/" es la carpeta donde queremos guardarlo.
//
// $nombre es el nombre original del archivo.

move_uploaded_file(
    $temporal,
    "archivos/" . $nombre
);


// ----------------------------------------------------
// MOSTRAR UN MENSAJE
// ----------------------------------------------------



?>