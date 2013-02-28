<?php

include_once 'function.php';

// Configuracion
$usersFileName = "usuarios.txt";

// Leer datos de usuarios
$datos = file_get_contents($usersFileName);

// Convertirlo en array datos
$datos = explode("\r", $datos);

// Tomar el usuario
$user = explode("|", $datos[$_POST['id']]);
// Tomar imagen anterior
$name_org = $user[11];

// Sobreescribir imagen si hay nueva
if(isset($_FILES["photo"]["tmp_name"]) && $_FILES["photo"]["tmp_name"] != '')
{
	$uploads_dir = "uploads";
	$tmp_name = $_FILES["photo"]["tmp_name"];
	$name = $_FILES["photo"]["name"];
	$ruta = $_SERVER['DOCUMENT_ROOT'].$uploads_dir;
	$url = $uploads_dir;
	$name = uploadFile($_FILES);

	// Borrar imagen anterior
	unlink($ruta."/".$name_org);
}
else 
{
	// Usar imagen anterior
	$name = $name_org;
}
// Convertir datos del update en string
$updateUser=cambiaArray($_POST);
$updateUser=implode('|',$updateUser);
$updateUser.="|".$name;


// Modificar linea de datos
$datos[$_POST['id']] = $updateUser;


// Convertir a un string datos
$datos = implode("\r", $datos);

// Reescribir el archivo usuarios
file_put_contents($usersFileName, $datos);