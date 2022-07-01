<?php
class Conection{

	public $con;

	function __construct(){
		$this->con=mysqli_connect('localhost','root','','primero');
 	}
 }


 
 ?>
