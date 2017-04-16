<?php 
	include("conexion.php");
	$modalidad1_1    = $_POST['modalidad11'];
	$modalidad1_2    = $_POST['modalidad12'];
	if ($modalidad1_1 == "No" && $modalidad1_2 == "No") {
		$modalidad2_1 = $_POST["modalidad21"];
		$modalidad2_2 = $_POST['modalidad22'];
		$modalidad2_3 = $_POST['modalidad23'];
		$modalidad1_1 = "vacio";
		$modalidad1_2 = "vacio";
	}else {
		$modalidad2_1 = "vacio";
		$modalidad2_2 = "vacio";
		$modalidad2_3 = "vacio";
	}

	$opcion = $_POST['p3_1'];
	if ($opcion == "Si") {
		$Direccion = $_POST['t1_1'];
	}else{
		$Direccion = $_POST['t2_2'];
	}

	$Persona = $_POST['persona'];
	if ($Persona == "Si") {
		$opPersona = $_POST['op1'];
		$desconoce = "";
		if ($opPersona == "Otro") {
			$opPersona = $_POST['4_1'];
		}//Termina if $opPersona
	}//Termina if $persona
	else if ($Persona =="No") {
		$opPersona = $_POST['op2'];
		$desconoce = "";
		if ($opPersona == "Otro") {
			$opPersona = $_POST['4_2'];
		}//Termina if $OpPersona
	}//Termina else if $persona
	else if (isset($_POST['check']) && $_POST['check'] == '1'){
		$desconoce = $_POST['check'];
		$opPersona = "vacio";
	}


		echo "modalidad1_1 "; var_dump($modalidad1_1);
		echo "<br>modalidad1_2 "; var_dump($modalidad1_2);  
		echo "<br>modalidad2_1 "; var_dump($modalidad2_1);
		echo "<br>modalidad2_2 "; var_dump($modalidad2_2);
		echo "<br>modalidad2_3 "; var_dump($modalidad2_3);   
		echo "<br>opcion "; var_dump($opcion);
		echo "<br>Direccion "; var_dump($Direccion);
		echo "<br>Persona "; var_dump($Persona);
		echo "<br>opPersona "; var_dump($opPersona);
		echo "<br>checkbox "; var_dump($desconoce);


		$query = "INSERT INTO seccion1(M_1_1, M_1_2, M_2_1, M_2_2, M_2_3, Op, OpDireccion, persona, OpPersona, desconoce) VALUES ('$modalidad1_1', '$modalidad1_2', '$modalidad2_1', '$modalidad2_2', '$modalidad2_3', '$opcion', '$Direccion', '$Persona', '$opPersona', '$desconoce')";
		$resultado = $conexion->query($query);
		if ($resultado) {
			echo "<br>Datos ingresados correctamente";
		}else {
			echo "<br>Error al ingresar los datos";
		}

 ?>