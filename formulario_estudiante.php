<?php
require_once('Estudiantes.php');
$Estudiantes=new Estudiantes();
if(isset($_GET['est_id'])){ 
  $datos=$Estudiantes->edit($_GET['est_id']);
}else{
  $datos['est_id']=null;
  $datos['est_nombres']=null;
  $datos['est_apellidos']=null;
  $datos['est_cedula']=null;
  $datos['est_ciudad']=null;
  $datos['est_edad']=null;
  $datos['est_genero']=null;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario</title>
  <style>
  .contenedores{
    margin-top:2px;
    margin-left:50px;
  }
  label{
      background:#0B1D51;
      width: 100px;
      float: left;
      color:#ffffff;
      text-decoration: none;
      font-family:Arial;
      border-radius: 5px;
      box-shadow:5px 5px 10px ;
      border: solid 1px black ;

  }
  </style>
</head>
<body>
  <h1>Formulario de registro de estudiantes</h1>
  <form action="acciones_estudiantes.php"method="POST">
  <input type="hidden" id="est_id" name="est_id" value="<?php echo $datos["est_id"]?>">

<div class="contenedores">
  <label for="est_nombres">Nombres:</label>
  <input type="text" name="est_nombres" id="est_nombres" value="<?php echo $datos['est_nombres']?>">
</div>

<div class="contenedores">
  <label for="est_apellidos">Apellidos:</label>
  <input type="text" name="est_apellidos" id="est_apellidos" value="<?php echo $datos['est_apellidos']?>">  
</div>

<div class="contenedores">
  <label for="est_cedula">Cedula:</label>
  <input type="text" name="est_cedula" id="est_cedula" value="<?php echo $datos['est_cedula']?>">
</div>

<div class="contenedores">
  <label for="est_ciudad">Ciudad:</label>
  <input type="text" name="est_ciudad" id="est_ciudad" value="<?php echo $datos['est_ciudad']?>">
</div>

<div class="contenedores">
  <label for="est_edad">Edad:</label>
  <input type="text" name="est_edad" id="est_edad" value="<?php echo $datos['est_edad']?>">
</div>

<div class="contenedores">
  <label for="est_genero">Genero:</label>
  <input type="text" name="est_genero" id="est_genero" value="<?php echo $datos['est_genero']?>"> 
</div>

<button>Guardar</button>

</form>


</body>
</html>