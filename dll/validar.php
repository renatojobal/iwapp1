<?php
	session_start();
   if(($_POST['correo']) && ($_POST['clave']))
   {
         $username=$_POST['correo'];
         $userpass=md5($_POST['clave']); 
         include ("config.php");
			include ("class_mysqli.php");
			$miconexion = new clase_mysqli;
			$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
			$miconexion->consulta("select * from usuarios where correo='$username' and clave='$userpass'");
			$list=$miconexion->consulta_lista();
			if ($list[0]) {
               $_SESSION['autentificado'] = TRUE;
               $_SESSION['username'] = $list[1];
		         $_SESSION['iduser'] = $list[0];
		         $_SESSION['roll'] = $list[4]; 
               $_SESSION['local_path']=$local_path;
               echo "<script>location.href='../administrator/dashboard.php'</script>";
			}else{
				echo '<script>alert("Datos Incorrectos...");</script>';
		        echo "<script>location.href='../'</script>";
			}
   }else{
	echo '<script>alert("Datos Incorrectos...");</script>';
	echo "<script>location.href='../'</script>";
}
?>