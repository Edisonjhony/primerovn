<?php
require_once("Usuarios.php");
$Usuarios=new Usuarios();
$datos=$_REQUEST;
if(empty($datos['usu_id'])){
	$Usuarios->create($datos['usu_nombres'],
						 $datos['usu_apellidos'],
					 	 $datos['usu_cedula'],
					 	 $datos['usu_ciudad'],
					 	 $datos['usu_edad'],
					 	 $datos['usu_genero']);
}else{

		if(isset($datos['usu_nombres'])){

$Usuarios->update($datos['usu_nombres'],
					 $datos['usu_apellidos'],
					 $datos['usu_ciudad'],
					 $datos['usu_cedula'],
					 $datos['usu_edad'],
					 $datos['usu_genero'],$datos['usu_id']);
  }else{
  	$Usuarios->delete($datos['usu_id']);
  }
}


header('Location:http://localhost/primero/lista_usuarios.php');

?>