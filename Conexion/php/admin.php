<?php 
	session_start();
	if(isset($_SESSION['rol']) == "Admin"){

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
</head>
<body>
<header>
	<nav>
		<ul>
			<li>Administracion</li>
			<li>Empleados</li>
			<li>Producto</li>
			<li>Reporte</li>
			<li><a href="cerrar.php">Cerrar Sesión</a></li>
		</ul>
	</nav>
</header>
</body>
</html>

<?php 
	}else{
		header('Location: ../login.php');
	}
 ?>