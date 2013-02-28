<?php 
// Configuracion
$userFileName = "usuarios.txt";

// Leer datos del archivo de usuarios
$datos = file_get_contents($userFileName);
// Pasar datos a un array
$arrayDatos = explode("\r", $datos);

// Leer posicion id del array
$usuario=$arrayDatos[$_GET['id']];

// Convertir en un array los datos del usuario
$usuario = explode("|", $usuario);

echo "<pre>";
print_r($usuario);
echo "</pre>";

if(!empty($usuario[8]))
	$pets = explode(',', $usuario[8]);
else
	$pets=array();

if(!empty($usuario[9]))
	$sports = explode(',', $usuario[9]);
else
	$sports=array();


?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="<?=(isset($_GET['id']))?'procesa_update.php':'procesa.php';?>" method="POST" ENCTYPE="multipart/form-data">

<ul>
<li>Id: <input type="hidden" name="id" value="1" value='<?=(isset($_GET['id']))?$_GET['id']:'1' ;?>'/></li>
<li>Nombre: <input name="name" type="text" value='<?=($usuario[1]!='')?$usuario[1]:'';?>'/></li>
<li>Email: <input name="email" type="text" value='<?=($usuario[2]!='')?$usuario[2]:'';?>'/></li>
<li>Password: <input name="password" type="password" value='<?=($usuario[3]!='')?$usuario[3]:'';?>'/></li>
<li>Direccion: <input name="address" type="text" value='<?=($usuario[4]!='')?$usuario[4]:'';?>'/></li>
<li>Descripcion: <br/><textarea name="description" cols="10" rows="10"><?=($usuario[5]!='')?$usuario[1]:'';?></textarea></li>
<li>Sexo:	<input name="sex" value="H" type="radio" <?=($usuario[6]=='H')?'checked':'';?>/>H
			<input name="sex" value="M" type="radio" <?=($usuario[6]=='M')?'checked':'';?>/>M
			<input name="sex" value="O" type="radio" <?=($usuario[6]=='O')?'checked':'';?>/>O</li>
<li>Ciudad: <select name="city">
				<option value="santiago" <?=($usuario[7]=='santiago')?'selected':'';?>>Santiago</option>
				<option value="coruna" <?=($usuario[7]=='coruna')?'selected':'';?>>Coruña</option>
			</select></li>
<li>Mascotas: <input name="pets[]" value="tiger" type="checkbox" <?=in_array('tiger', $pets)?'checked':'';?>/>Tigre<input name="pets[]" value="spider" type="checkbox" <?=in_array('spider', $pets)?'checked':'';?>/>Tarantula<input name="pets[]" value="iguana" type="checkbox" <?=in_array('tarantula', $pets)?'checked':'';?>/>Iguana<br/>
<li>Deportes:	<select multiple name="sports[]" size="3">
	    			<option value="football" <?=in_array('football', $sports)?'selected':'';?>>Futbol</option>
	   				<option value="basketball" <?=in_array('basketball', $sports)?'selected':'';?>>Baloncesto</option>
	    			<option value="swim" <?=in_array('swim', $sports)?'selected':'';?>>Natacion</option>
				</select></li>
<li>Foto: <input type=file name="photo">
<img src="<?="/uploads/".$usuario[11];?>" width=100px />
</li>

<li><button type="submit" name="submit" value="Enviar">Enviar</button><button type="button" name="button" value="Button">Button</button><button type="reset" name="reset" value="Reiniciar">Reiniciar</button></li>
</ul>
</form>
</body>
</html>