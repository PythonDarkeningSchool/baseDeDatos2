<?php 
	session_start();  //se utilizan seciones 

	session_destroy();  //destruye las sesiones cerradas

	header("location:../index.php");  //regresar al index

 ?>