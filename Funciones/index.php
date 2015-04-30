<?php

$alumno = array (
		'nombre' => 'Adrian',
		'apellidos' => 'Primero Segundo',
		'email' => 'akgloaz@gmail.com',
		'edad' => 24,
		'algo',
		'estudiante' => TRUE,
		FALSE => 'cosa',
		'algo mas',
		1.7 => 'y este',
		6 => 'mas aun',
		123,
		array('rojo', 'verde', 'naranja')
		
		
);

echo "<pre>";
print_r($alumno);
echo "</pre>";

//foreach($alumno as $key => $value){
//	echo $key.": ".$value;
//	echo "<br/>";
//}

require_once 'functions.php';

muestraArray($alumno);





//Hoy, Semana 7 del 2013, 21 días del mes 2, Febrero
echo "<hr>";
$fecha = date("\H\o\y\, \s\e\m\a\\n\a W \d\e\l Y\, z \d\i\a\s \d\e\l \m\e\s n F");
print("$fecha");
