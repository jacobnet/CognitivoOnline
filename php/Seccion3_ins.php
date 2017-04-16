<?php
include("conexion.php");
//Variables del emprendedor 
$EmpLunesE = $_POST['time1_5'];
$EmpLunesS = $_POST['time2_5'];
$EmpMartesE = $_POST['time3_5'];
$EmpMartesS = $_POST['time4_5'];
$EmpMiercolesE = $_POST['time5_5'];
$EmpMiercolesS = $_POST['time6_5'];
$EmpJuevesE = $_POST['time7_5'];
$EmpJuevesS = $_POST['time8_5'];
$EmpViernesE = $_POST['time9_5'];
$EmpViernesS = $_POST['time10_5'];
$EmpSabadoE = $_POST['time11_5'];
$EmpSabadoS = $_POST['time12_5'];

//Variables del Equipo
$EquLunesE  = $_POST['time13_5'];
$EquLunesS = $_POST['time14_5'];
$EquMartesE = $_POST['time15_5'];
$EquMartesS = $_POST['time16_5'];
$EquMiercolesE = $_POST['time17_5'];
$EquMiercolesS = $_POST['time18_5'];
$EquJuevesE = $_POST['time19_5'];
$EquJuevesS = $_POST['time20_5'];
$EquViernesE = $_POST['time21_5'];
$EquViernesS = $_POST['time22_5'];
$EquSabadoE = $_POST['time23_5'];
$EquSabadoS = $_POST['time24_5'];


$query = "INSERT INTO horario(EntradaLunes, SalidaLunes, EntradaMartes, SalidaMartes) VALUES ('$EmpLunesE')";
$resultado = $conexion->query($query);
if ($resultado) {
	echo "Datos ingreados correctamente";
}else
	echo "hubo pedos al ingresar en la BD";
 ?>