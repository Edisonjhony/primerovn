<?php
require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();
$datos=$_REQUEST;

if(empty($datos['est_id'])){
    $Estudiantes->create($datos['est_nombres'],
                         $datos['est_apellidos'],
                         $datos['est_cedula'],
                         $datos['est_ciudad'],
                         $datos['est_edad'],
                         $datos['est_genero']);
}else{

        if(isset($datos['est_nombres'])){

$Estudiantes->update($datos['est_nombres'],
                     $datos['est_apellidos'],
                     $datos['est_cedula'],
                     $datos['est_ciudad'],
                     $datos['est_edad'],
                     $datos['est_genero'],$datos['est_id']);
  }else{
    $Estudiantes->delete($datos['est_id']);
  }
}


//redireccion de archivo php
header('Location:http://localhost/primero/lista_estudiantes.php');

?>