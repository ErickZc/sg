<?php 
	session_start();
	if(isset($_SESSION['rol']) == "User"){

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="UTF-8">
</head>
<body>
<header>
	<nav>
		<ul>
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