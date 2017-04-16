<?php
include("conexion.php");

	$email = $_POST["Correo"];
	$contrasena = $_POST["Contrasena"];

	$validacion = "SELECT email FROM usuarios WHERE email = '$email'";
	$resultado = $conexion->query($validacion);
		if ($resultado->num_rows > 0) {
			echo '<script> 
					alert("El email ya ha sido registrado con anterioridad");
					window.history.go(-1);
					</script>';

	}//Termina primer if
	else{ // else 1
		$pass=password_hash($contrasena, PASSWORD_DEFAULT);
		$query = "INSERT INTO usuarios (email,contrasena) VALUES ('$email','$pass')";
		if ($conexion->query($query)) {
			# code...
			header("Location: ../index.php");
		}else{
			echo '<script> 
					alert("Error al registrar en el sistema");
					window.history.go(-1);
					</script>';
		}

	}// Termina else 1

  ?>	
