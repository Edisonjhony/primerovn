<?php
require_once('Usuarios.php');
$Usuarios=new Usuarios();
$consulta=$Usuarios->listar_usuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista Usuarios</title>
	<style>
		th{
			padding: 8px;
			background: #0D1821;
			color: white;
		}
		td{
			padding: 5px;
			border: solid 1px #687571;
		}
		table{
			width: 80%;
			border-collapse: collapse;
		}
		a{
			background:#01DFD7 ;
			color:#ffffff;
			text-decoration: none;
			font-family:Arial;
			padding: 2px ;
			border-radius: 5px;
			box-shadow:5px 5px 10px #218380;
			border: solid 1px black ;
		}

		img{
			width:20px
		}
	</style>
</head>
<body>
	<H1 style="background-color:#5998C5;color:#ffffff;"><center>lista Usuarios</center></H1> 

	<a href="formulario_usuario.php">Nuevo Usuario</a>




	<table align="center">
		<tr>
			<th>Nº</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cedula</th>
			<th>Ciudad</th>
			<th>Edad</th>
			<th>Genero</th>
			<th>Acciones</th>

		</tr>
			<a href="index.php">Regresar</a>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['usu_nombres']}</td>
  			<td>{$c['usu_apellidos']}</td>
  			<td>{$c['usu_cedula']}</td>
  			<td>{$c['usu_ciudad']}</td>
  			<td>{$c['usu_edad']}</td>
  			<td>{$c['usu_genero']}</td>
  			<td>
  			<a href='formulario_usuario.php?usu_id={$c["usu_id"]}'>
  				<img src='imgeditar.png' />
  			</a>

  		 <a href='acciones_usuarios.php?usu_id={$c['usu_id']} 'onclick='return validar()'  >
  		 <img src='delete.png'/>
  			</a>


  			</td>
  			</tr>";	
  }
   ?>	
</table>
</body>
</html>
<script>
	function validar(){
		if(confirm("Desea eliminar")){
			return true;
		}else{
			return false;
		}
	}
</script>