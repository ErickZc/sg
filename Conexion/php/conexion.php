<?php 
	try{
		$base = 'mysql:host=localhost;dbname=ejemplo';
		$conexion = new PDO($base, 'root', '');
		//echo 'bien';
	}
	catch(PDOException $e){
		echo "Error: ".$e->getMessage();
	}
 ?>