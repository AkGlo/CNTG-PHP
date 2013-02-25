<?php
function  muestraArray($array){
	foreach($array as $key => $value){
		if (is_array($value)){
			echo $key.": ";
			echo implode(",", $value);
		} else {
			echo $key.": ".$value;
			echo "<br/>";
		}

	}
	return TRUE;
}


/**
 * Upload a file to directory
 * @param unknown $arrayFiles
 * @return string $name
 */
function uploadFile($arrayFiles)
{
	$uploads_dir = "/CNTG-PHP/Formulario/public/uploads";
	$tmp_name = $arrayFiles["photo"]["tmp_name"];
	$name = $arrayFiles["photo"]["name"];
	$ruta=$_SERVER['DOCUMENT_ROOT'].$uploads_dir;
	$url=$uploads_dir;
	if(file_exists($ruta."/".$name))
	{
		// Si existe BuscarNombre
		$a=0;
		// Mientras que Nombre-[contador].jpg EXISTA en directorio
		$path_parts = pathinfo($ruta."/".$name);
		while(file_exists($ruta."/".$name))
		{
			// Aumento contador
			$a++;
			// Cambiar el nombre y volver a intentar
			$name = $path_parts['filename']."-".$a.".".$path_parts['extension'];
		}
		// Al salir tendre el contador que no existe
		// Subir el fichero al directorio con el nuevo nombre
		move_uploaded_file($tmp_name, $ruta."/".$name);
	}
	// No existe
	else
	{
		// Subir el fichero al directorio con el mismo nombre
		move_uploaded_file($tmp_name, $ruta."/".$name);
	}
	return $name;
}

/**
 * Recibe un array, de máximo dos dimensaiones,
 * y lo separa por comas.
 * 
 * @param array array de entrada
 * @return array comma separated
 */
function  cambiaArray($array)
{
	$array2 = array();
	
	foreach($array as $key => $value)
	{
		if (is_array($value))
			$array2[]=implode(",", $value);
		else 
			$array2[]=$value;
	}
	return $array2;
}