<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: control.php');
	}else{

 ?>
 	<!DOCTYPE html>
 	<html>
 	<head>
 		<title>Registrate</title>
 		<meta charset="UTF-8">
 	</head>
 	<body>
 		<center>
 			<form action="control.php" method="POST">
 				<input type="text" name="addNombre" placeholder="Ingrese su nombre" required="">
 				<input type="text" name="addApellido" placeholder="Ingrese su apellido" required="">
 				<input type="text" name="addUsuario" placeholder="Ingrese su usuario" required="">
 				<input type="password" name="addPassword" placeholder="Ingrese su password" required="">
 				<select name="addRol">
 					<option value="Admin">Admin</option>
 					<option value="User">User</option>
 				</select>
 				<input type="submit" name="addUser">
 			</form>
 		</center>


 	</body>
 	</html>

 <?php 
 	}
  ?>