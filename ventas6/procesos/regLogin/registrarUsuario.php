<?php 

	require_once "../../clases/Conexion.php";  //Manda llamar a la clase
	require_once "../../clases/Usuarios.php";

	$obj= new usuarios();	//Creacion de objeto

	$pass=sha1($_POST['password']); //para que el campo salga encriptado
	$datos=array(
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['usuario'],
		$pass
				);

	echo $obj->registroUsuario($datos);

 ?>