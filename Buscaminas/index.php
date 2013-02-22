<?php
/**
 * Buscaminas
 * Author: Adrián Amor Zapata
 * Copyright: 2013
 * License: GPL
 *
 */
$filas = 10;
$columnas = 10;
$casillasTotales = $filas * $columnas;
$numeroDeMinas = rand(1, (($casillasTotales)/3));
$tabla = array();


function mostrarTabla($tabla, $filas, $columnas){
		echo "<table border=1 cellspacing=0 cellpadding=20>";
	for ($i=1;$i < $filas; $i++){
		echo "<tr>";
		for($j=1;$j < $columnas;$j++){
			echo "<td>".$tabla[$i][$j]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}



for ($i=0;$i < $filas+1; $i++){
		for($j=0;$j < $columnas+1;$j++){
			$tabla[$i][$j] = "&nbsp";
		}
	}

$minasPuestas = 0;
while($minasPuestas < $numeroDeMinas){
$casillaf = rand(1,$filas-1);
$casillac = rand(1,$columnas-1);

if($tabla[$casillaf][$casillac] != '*'){
	$tabla[$casillaf][$casillac] = '*';
	$minasPuestas++;
	} 
}

for ($i=1;$i < $filas; $i++){
	for($j=1;$j < $columnas;$j++){
		if($tabla[$i][$j] == '*'){
			
		} else {
		if($tabla[$i][$j+1] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i][$j-1] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i-1][$j-1] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i+1][$j-1] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i-1][$j] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i+1][$j] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i-1][$j+1] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
		if($tabla[$i+1][$j+1] == '*')
				$tabla[$i][$j] = $tabla[$i][$j] + 1;
	}
	}
}

mostrarTabla($tabla, $filas, $columnas);