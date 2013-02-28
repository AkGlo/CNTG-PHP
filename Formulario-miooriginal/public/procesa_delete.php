<?php

include_once 'function.php';

// Configuracion
$usersFileName = "usuarios.txt";

// Si NO no borrar
if($_POST['submit']=='No')
{
	header('Location: /usuarios.php');
	exit;
}
// Si SI borrar

// Leer datos de usuarios
$datos = file_get_contents($usersFileName);

// Convertirlo en array datos
$datos = explode("\r", $datos);


// Tomar el usuario y extraer la imagen
$user = explode("|", $datos[$_POST['id']]);
$name = $user[11];
// Borrar la imagen
$uploads_dir = "/uploads";
$ruta = $_SERVER['DOCUMENT_ROOT'].$uploads_dir;
unlink($ruta."/".$name);



// Quitar la linea de datos
unset($datos[$_POST['id']]);

// Convertir a un string datos
$datos = implode("\r", $datos);

// Reescribir el archivo usuarios
file_put_contents($usersFileName, $datos);