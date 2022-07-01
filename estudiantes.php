<?php
require_once('Conection.php');
       class Estudiantes extends Conection{

              function listar_estudiantes(){
              $resultado=$this->con->query('SELECT * FROM estudiantes order by est_apellidos');
              return $resultado->fetch_all(MYSQLI_ASSOC);//
        }

              function create($est_nombres,$est_apellidos,$est_cedula,$est_ciudad,$est_edad,$est_genero){
                     $this->con->query("INSERT INTO estudiantes (est_nombres,est_apellidos,est_cedula,est_ciudad,est_edad,est_genero)
                     VALUES('$est_nombres',
                                          '$est_apellidos',
                                          '$est_cedula',
                                          '$est_ciudad',
                                          '$est_edad',
                                          '$est_genero')
                            ");

}


      function edit($est_id){
             $resultado=$this->con->query("SELECT * FROM estudiantes WHERE est_id=$est_id "); 
             return $resultado->fetch_all(MYSQLI_ASSOC)[0];
      }


      function update($est_nombres,$est_apellidos,$est_cedula,$est_ciudad,$est_edad,$est_genero,$est_id){
             $this->con->query("UPDATE estudiantes 
                                SET est_nombres='$est_nombres',
                                est_apellidos='$est_apellidos',
                                est_cedula='$est_cedula',
                                est_ciudad='$est_ciudad',
                                est_edad='$est_edad',
                                est_genero='$est_genero'
                                WHERE est_id=$est_id
                ");  
      }
      
       function delete($est_id){
            $this->con->query("DELETE FROM estudiantes WHERE est_id=$est_id");
      }
    }


?>