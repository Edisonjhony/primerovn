<?php
require_once('estudiantes.php');
$Estudiantes=new Estudiantes();
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Lista de estudiantes</title>
       <style>
              th{
                     padding: 8px;
                     background: #083D77;
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
                     background:black ;
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
       <H1 style="background-color:#083D77;color:#ffffff;"><center>lista estudiantes</center></H1> 

       <a href="formulario_estudiante.php">Nuevo Estudiante</a>




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
                     <td>{$c['est_nombres']}</td>
                     <td>{$c['est_apellidos']}</td>
                     <td>{$c['est_cedula']}</td>
                     <td>{$c['est_ciudad']}</td>
                     <td>{$c['est_edad']}</td>
                     <td>{$c['est_genero']}</td>
                     <td>
                     <a href='formulario_estudiante.php?est_id={$c["est_id"]}'>
                            <img src='imgeditar.png' />
                     </a>

               <a href='acciones_estudiantes.php?est_id={$c['est_id']} 'onclick='return validar()'  >
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
              if(confirm("Esta seguro de eliminar el campo?")){
                     return true;
              }else{
                     return false;
              }
       }
</script>