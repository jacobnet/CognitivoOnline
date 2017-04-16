<?php 

	include("conexion.php");
	session_start();
	if (isset($_SESSION['u_usuario'])) {
		$usuario=$_SESSION['u_usuario'];
	}else{
    	header("Location: index.php");
	}


	$Nombre = $_POST['Nombre'];
	$Establecido = $_POST['Establecido'];
	if ($Establecido == "Si") {
		$Calle = $_POST['Calle'];
		$Colonia = $_POST['Colonia'];
		$Num = $_POST['Num'];
		$Municipio = $_POST['Municipio'];
		$Region = $_POST['Region'];
		$Estado = $_POST['Estado'];
		$CP = $_POST['CodigoPostal'];
	 } else {
	 	$Calle = "No Tiene";
		$Colonia = "No Tiene";
		$Num = "No Tiene";
		$Municipio = "No Tiene";
		$Region = "No Tiene";
		$Estado = "No Tiene";
		$CP = "No Tiene";

	 }

	 $query = "INSERT INTO cedula_proyecto (id_email, Nombre, Establecido, Calle, Colonia, Num, Municipio, Region, Estado, CP,Contestado) VALUES ('$usuario','$Nombre', '$Establecido', '$Calle', '$Colonia', '$Num', '$Municipio', '$Region', '$Estado', '$CP','Si')";

	 $resultado = $conexion->query($query);

	 if ($resultado) {
	 	header("Location: ../Seccion1.php");
	 }else {
	 	echo '<script> 
					alert("Hubo problemas al intetar registrar los datos");
					window.history.go(-1);
					</script>';
	 }




 ?>