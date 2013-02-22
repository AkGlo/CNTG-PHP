<?php
/**
 * Data types in PHP
 * Author: Adrián Amor Zapata
 * Copyright: 2013
 * License: GPL
 *
 */



$name = "Adrian";
$edad = 123;
$direccion = array('Via Julia', 'Barcelona', 123);
$vacio = NULL;
$deporte = FALSE;


var_dump($name);
var_dump($edad);
var_dump($vacio);
var_dump($deporte);

echo @name;

echo $name[2];

echo "<hr/>";

var_dump($direccion);

echo "<pre>";
print_r($direccion);
echo "</pre>";

echo "<hr/>";
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/
//echo $_SERVER['DOCUMENT_ROOT'];

echo 5<<2;

echo "<hr/>";


//EJERCICIO 
$columnas = 4;
$filas = 4;
echo "<table border=1>";

for($a = 0; $a <= $columnas; $a++){
	echo "<tr>";
	for($b = 0; $b <= $filas; $b++){
		if($a==0 && $b==0)
			echo "<td></td>";
		elseif($a==0)
			echo "<td>" .$b."</td>";
		elseif($b == 0)
			echo "<td>".$a."</td>";
		else
			echo "<td>".$a*$b."</td>";
	}
	echo "</tr>";
}

echo "</table>";

//EJERCICIO 2 (FIBONACCI

echo "<hr>";

$max = 22;
echo "F = 0,1,";
$n0=0;
$n1=1;
$n2=$n0+$n1;

while($n2<$max){
	echo $n2. ",";
	$n0=$n1;
	$n1=$n2;
	$n2=$n0+$n1;
}
