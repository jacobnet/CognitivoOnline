<?php 

	include("conexion.php");


	if (isset($_REQUEST['radio1_1'])) {
		$elemento1 = $_REQUEST['radio1_1'];
	}else{
		$elemento1 = "";
	}
	
	if (isset($_REQUEST['radio1_2'])) {
		$elemento2 = $_REQUEST['radio1_2'];
	}else{
		$elemento2 = "";
	}

	if (isset($_REQUEST['radio1_3'])) {
		$elemento3 = $_REQUEST['radio1_3'];
	}else{
		$elemento3 = "";
	}


	if (isset($_REQUEST['radio1_4'])) {
		$elemento4 = $_REQUEST['radio1_4'];
	}else{
		$elemento4 = "";
	}

	if (isset($_REQUEST['radio1_5'])) {
		$elemento5 = $_REQUEST['radio1_5'];
	}else{
		$elemento5 = "";
	}

	if (isset($_REQUEST['radio1_6'])) {
		$elemento6 = $_REQUEST['radio1_6'];
	}else{
		$elemento6 = "";
	}

	if (isset($_REQUEST['radio1_7'])) {
		$elemento7 = $_REQUEST['radio1_7'];
	}else{
		$elemento7 = "";
	}

	if (isset($_REQUEST['radio1'])) {
		$elemento8 = $_REQUEST['radio1'];
	}else{
		$elemento8 = "";
	}
	var_dump($elemento1);
	var_dump($elemento2);
	var_dump($elemento3);
	var_dump($elemento4);
	var_dump($elemento5);
	var_dump($elemento6);
	var_dump($elemento7);
	var_dump($elemento8);

	if ($elemento8 =="a") {
		$elemento8 = "El número de socios o colaboradores formales en el proyecto o empresa son 2 o má de 2 personas";
	}else if ($elemento8 =="b") {
		$elemento8 = "Soy solo yo el que está iniciando o manejando el negocio pero me gustaría integrar socios";
	}else if ($elemento8 == "c") {
		$elemento8 = "Soy solo yo el que está iniciando o manejando el negocio pero no me interesa formar un equipo de trabajo, siento que puedo tener buenos resultados trabajando yo solo";
	}

	$query = "INSERT INTO seccion2(Administracion, Comercializacion, Procesos, GestionJ, Imagen, Diseno, GestionF, Opcion) VALUES ('$elemento1','$elemento2','$elemento3','$elemento4','$elemento5','$elemento6','$elemento7','$elemento8')";
	$resultado = $conexion->query($query);
	if ($resultado) {
		echo "Datos ingresados satisfactoriamente";
	}else{
		echo "hubo pedos al ingresar los datos";
	}

 ?>