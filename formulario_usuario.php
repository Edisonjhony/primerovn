<?php
require_once('Usuarios.php');
$Usuarios=new Usuarios();
if(isset($_GET['usu_id'])){ 
  $datos=$Usuarios->edit($_GET['usu_id']);
}else{
	$datos['usu_id']=null;
	$datos['usu_nombres']=null;
	$datos['usu_apellidos']=null;
	$datos['usu_cedula']=null;
	$datos['usu_ciudad']=null;
	$datos['usu_edad']=null;
	$datos['usu_genero']=null;
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
			background:#344966;
			width: 100px;
			float: left;
			color:#ffffff;
			text-decoration: none;
			font-family:arial;
			border-radius: 5px;
			box-shadow:5px 5px 10px ;
			border: solid 1px black ;

	}
	</style>
</head>
<body>
	<h1>Formulario de registro de Usuarios</h1>
	<form action="acciones_usuarios.php"method="POST">
	<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $datos["usu_id"]?>">

<div class="contenedores">
	<label for="usu_nombres">Nombres:</label>
	<input type="text" name="usu_nombres" id="usu_nombres" value="<?php echo $datos['usu_nombres']?>">
</div>

<div class="contenedores">
	<label for="usu_apellidos">Apellidos:</label>
	<input type="text" name="usu_apellidos" id="usu_apellidos" value="<?php echo $datos['usu_apellidos']?>">	
</div>

<div class="contenedores">
	<label for="usu_cedula">Cedula:</label>
	<input type="text" name="usu_cedula" id="usu_cedula" value="<?php echo $datos['usu_cedula']?>">
</div>

<div class="contenedores">
	<label for="usu_ciudad">Ciudad:</label>
	<input type="text" name="usu_ciudad" id="usu_ciudad" value="<?php echo $datos['usu_ciudad']?>">
</div>

<div class="contenedores">
	<label for="usu_edad">Edad:</label>
	<input type="text" name="usu_edad" id="usu_edad" value="<?php echo $datos['usu_edad']?>">
</div>

<div class="contenedores">
	<label for="usu_genero">Genero:</label>
	<input type="text" name="usu_genero" id="usu_genero" value="<?php echo $datos['usu_genero']?>">	
</div>

<button>Guardar</button>

</form>


</body>
</html>