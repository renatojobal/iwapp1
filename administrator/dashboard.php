<?php
include("seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenidos al sistema</title>
</head>
<body>
<h1>Hola <?php echo $_SESSION['username'];?></h1>
<h2><a href="seguridad/exit.php?salir=true">Cerrar sesion</a></h2>
</body>
</html>