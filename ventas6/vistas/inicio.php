<!-- En esta parte del codigo reivsa que ingreses con el usuario correcto y para restringir a otros formularios -->
<!-- ------------------------------------------------------------------------------------------- -->
<?php 
	session_start();
	if(isset($_SESSION['usuario'])){	//Si esta seteada, ingresa 
		
 ?>
<!-- ------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>     <!-- Manda llamar al menu -->
</head>
<body>


</body>
</html>
<?php 
	}else{
		header("location../index.php");   //Regresa a index
	}
 ?>