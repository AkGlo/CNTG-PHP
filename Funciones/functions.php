<?php
/**
 * Recibe un array, de máximo dos dimensiones
 * y lo muestra por pantalla.
 *
 * @param array array de entrada
 * @return true
 */

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