<?php
  require_once "../../clases/Conexion.php";
  require_once "../../clases/Articulos.php";

  $idart=$_POST['idarticulo'];
  $obj=new articulos();
  echo json_encode($obj->obtenDatosUsuario($_POST['idusuario']));
?>