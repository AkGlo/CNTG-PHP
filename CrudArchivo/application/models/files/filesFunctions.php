<?php

/**
 * Read pipe sepparated file to array
 * @param string $filename
 * @return array $arrayLine
 */
function readDataFromFile($filename)
{
	$content=file_get_contents($filename);
	$arrayFile=explode("\r",$content);
	foreach($arrayFile as $key => $line)
		$arrayLine[] = explode('|', $line);
	
	return $arrayLine;
}

/**
 * Write or rewrite array to file
 * @param string $filename
 * @param array $data
 * @param string $rewrite
 * @return void
 */
function writeDataToFile ($filename, $data, $rewrite = FALSE)
{
	// Reescribir el archivo usuarios
	if ($rewrite === TRUE)
	{
		foreach($data as $key => $value)
			$pipes[] = arrayToPipes($value);
		$data = implode("\r", $pipes);
		file_put_contents($filename, $data);
	}
	else
	{
		$data = arrayToPipes($data);
		$data.="\r";
		file_put_contents($filename, $data, FILE_APPEND);
	}
	return;
}


/**
 * Upload a file to directory with counter rename
 * @param array $arrayFiles
 * @return string $name
 */
function uploadFile($arrayFiles, $uploadDir)
{
	$tmp_name = $arrayFiles["photo"]["tmp_name"];
	$name = $arrayFiles["photo"]["name"];
	$ruta = $_SERVER['DOCUMENT_ROOT'].$uploadDir;

	// Comprobar si el nombre existe en el diretorio
	if(file_exists($ruta."/".$name))
	{	// Si existe BuscarNombre
		$a=0;
		$path_parts = pathinfo($ruta."/".$name);
		// Mientras que Nombre-[contador].jpg EXISTA en directorio
		while(file_exists($ruta."/".$name))
		{
			// Aumento contador
			$a++;
			// Cambiar el nombre y volver a intenter
			$name=$path_parts['filename']."-".$a.".".$path_parts['extension'];
		}
		// Al salir tendre el contador que no existe
		// Subir el fichero al directorio con el nuevo nombre
		move_uploaded_file($tmp_name, $ruta."/".$name);
	}

	else	// No existe
	{
		// Subir el fichero al directorio con el mismo nombre
		move_uploaded_file($tmp_name, $ruta."/".$name);
	}

	return $name;
}


/**
 * Delete file from directory
 * @param string $fileName
 * @param string $uploadDir
 * @return void
 */
function deleteFile($fileName, $uploadDir)
{
	$ruta = $_SERVER['DOCUMENT_ROOT'].$uploadDir;
	unlink($ruta."/".$fileName);

	return;
}