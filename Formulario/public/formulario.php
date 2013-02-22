<html>
<head>
<title></title>
</head>
<body>
<form action="procesa.php" method="POST" ENCTYPE="multipart/form-data">

<ul>
<li>Id: <input type="hidden" name="id"/></li>
<li>Nombre: <input name="name" type="text"/></li>
<li>Email: <input name="email" type="text"/></li>
<li>Password: <input name="password" type="password"/></li>
<li>Direccion: <input name="address" type="text"/></li>
<li>Descripcion: <br/><textarea name="description" cols="10" rows="10"/></textarea></li>
<li>Sexo:	<input name="sex" value="H" type="radio"/>H
			<input name="sex" value="M" type="radio"/>M
			<input name="sex" value="O" type="radio"/>O</li>
<li>Ciudad: <select name="city">
				<option value="santiago">Santiago</option>
				<option value="coruna">Coruña</option>
			</select></li>
<li>Mascotas: <input name="pets[]" value="tiger" type="checkbox"/>Tigre<input name="pets[]" value="spider" type="checkbox"/>Tarantula<input name="pets[]" value="iguana" type="checkbox"/>Iguana<br/>
<li>Deportes:	<select multiple name="sports[]" size="3">
	    			<option value="football">Futbol</option>
	   				<option value="basketball">Baloncesto</option>
	    			<option value="swim">Natacion</option>
				</select></li>
<li>Foto: <input type=file name="photo"></li>

<li><button type="submit" name="submit" value="Enviar">Enviar</button><button type="button" name="button" value="Button">Button</button><button type="reset" name="reset" value="Reiniciar">Reiniciar</button></li>
</ul>
</form>
</body>
</html>
<?php
?>
