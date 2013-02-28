<!-- 
Maqueta inicial

<table border=1>
<tr>
	<th>id</th>
	<th>name</th>
	<th>email</th>
	<th>password</th>
	<th>address</th>
	<th>description</th>
	<th>sex</th>
	<th>city</th>
	<th>pets</th>
	<th>sports</th>
	<th>photo</th>
	<th>submit</th>
	<th>options</th>
</tr>
<tr>
	<td>1</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td>a</td>
	<td><a href="#">update</a>&nbsp;<a href="#">options</a></td>
								
	
</tr>
</table>
-->
<?php
// Configuracion
$file = "usuarios.txt";

// Leer el fichero de datos
$content = file_get_contents($file);
$arrayFile = explode("\r", $content);

echo "<a href=\"formulario.php\">Add</a><br/>
			<table border=1>
			<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>password</th>
			<th>address</th>
			<th>description</th>
			<th>sex</th>
			<th>city</th>
			<th>pets</th>
			<th>sports</th>
			<th>submit</th>
			<th>photo</th>
			<th>options</th>";


// Recorrer para cada linea
foreach($arrayFile as $key => $line)
{
	echo "<tr>";
	$arrayLine = explode("|", $line);
	// Recorrer para cada elemento
		foreach($arrayLine as $key1 => $value)
		{
			echo "<td>";
				echo $value;
			echo "</td>";
		}
	echo "<td><a href=\"formulario.php?id=".$key."\">update</a>&nbsp;<a href=\"confirm_delete.php?=".$key."\">delete</a></td>";
	
	echo "</tr>";
}
//die("HASTA AQUI");


// Mostrar en la tabla



/*
$file = "usuarios.txt";
$usuarios = file_get_contents($file);
$fields = explode('|', $usuarios);
$fields = explode(',', $usuarios);

echo "<table border=1>";
echo "<tr>";
foreach($fields as $field) {
	echo "<td>";
	echo $field;
	echo "</td>";
}
echo "</tr>";
echo "</table>";

/*
foreach($fields as $field) {
	echo $field;
}
*/