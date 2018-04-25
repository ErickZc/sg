<?php 
	session_start();
	require('conexion.php');

	if(isset($_SESSION['usuario'])){
		header('Location: main.php');

	}else if(isset($_POST['Enviar'])){

		$usuario = $_POST['txtUsuario'];
		$password = $_POST['txtPassword'];

		$sql = 'select * from usuario where usuario_usuario = :usuario AND password_usuario = :password';
		$resultado = $conexion->prepare($sql);
		$resultado->execute(array(':usuario' => $usuario, ':password' => $password));

		if($resultado == true){
			while($respuesta = $resultado->fetch()){
				$user = $respuesta['rol_usuario'];
				$_SESSION['rol'] = $user;
			}

			if(isset($_SESSION['rol']) && ($_SESSION['rol'] == 'Admin')){
				header('Location: admin.php');
			}
			else if(isset($_SESSION['rol']) && ($_SESSION['rol'] == 'User')){
				header('Location: main.php');
			}
			else{
				header('Location: main.php');
			}

		}
		else{
			header('Location: ../login.php');
		}
	}

	else if(isset($_POST['addUser'])){
		$rol = $_POST['addRol'];
		$usuario = $_POST['addUsuario'];
		$nombre = $_POST['addNombre'];
		$apellido = $_POST['addApellido'];
		$password = $_POST['addPassword'];

		$sql = 'CALL addUsuario(?, ?, ?, ?, ?)';
		$resultado = $conexion->prepare($sql);
		$resultado->execute(array($rol, $usuario, $nombre, $apellido, $password));

		if($resultado == true){
			header('Location: ../login.php');
		}
		else{
			header('Location: registrate.php');
		}
	}
 ?>