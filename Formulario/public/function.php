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