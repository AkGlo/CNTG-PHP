<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="procesa_delete.php" method="POST" ENCTYPE="multipart/form-data">

<ul>
<li>Id: <input type="hidden" name="id" value="1" value='<?=(isset($_GET['id']))?$_GET['id']:'1' ;?>'/></li>
<li><button type="submit" name="submit" value="Si">Enviar</button><button type="submit" name="submit" value="No">Enviar</button></li>
</ul>
</form>
</body>
</html>