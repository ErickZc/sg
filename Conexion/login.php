<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: php/main.php');
	}else{
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
</head>
<body>
	<center>
	<h1>Iniciar Sesión</h1>
		<form method="POST" action="php/control.php">
			<input type="text" name="txtUsuario" placeholder="Usuario" required="">
			<input type="password" name="txtPassword" placeholder="Password" required="">
			<input type="submit" name="Enviar">
		</form>
	</center>

</body>
</html>

<?php 
	}
 ?>