<?php
include ("seguridad/seguridad.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos al sistema</title>
</head>
<body>
    <h1>Hola <?php echo $_SESSION['username'] ?></h1>
    <h2><a href="segruidad/exit.php?salir=true"> Cerrar sesion</a></h2>
</body>
</html>