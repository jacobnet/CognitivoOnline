function validarH() {
	lunesEn     = document.getElementById('time1_5').value;

	lunesSa     = document.getElementById('time2_5').value;
	martesEn    = document.getElementById('time3_5').value;
	martesSa    = document.getElementById('time4_5').value;
	miercolesEn = document.getElementById('time5_5').value;
	miercolesSa = document.getElementById('time6_5').value;
	juevesEn    = document.getElementById('time7_5').value;
	juevesSa    = document.getElementById('time8_5').value;
	viernesEn   = document.getElementById('time9_5').value;
	viernesSa   = document.getElementById('time10_5').value;
	sabadoEn    = document.getElementById('time11_5').value;
	sabadoSa    = document.getElementById('time12_5').value;
	EqlunesEn     = document.getElementById('time13_5').value;
	EqlunesSa     = document.getElementById('time14_5').value;
	EqmartesEn    = document.getElementById('time15_5').value;
	EqmartesSa    = document.getElementById('time16_5').value;
	EqmiercolesEn = document.getElementById('time17_5').value;
	EqmiercolesSa = document.getElementById('time18_5').value;
	EqjuevesEn    = document.getElementById('time19_5').value;
	EqjuevesSa    = document.getElementById('time20_5').value;
	EqviernesEn   = document.getElementById('time21_5').value;
	EqviernesSa   = document.getElementById('time22_5').value;
	EqsabadoEn    = document.getElementById('time23_5').value;
	EqsabadoSa    = document.getElementById('time24_5').value;
	expresion = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;

	if (!expresion.test(lunesEn)){
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(lunesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(martesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(martesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(miercolesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(miercolesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(juevesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(juevesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(viernesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(viernesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(sabadoEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(sabadoSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqlunesEn)){
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqlunesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmartesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmartesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmiercolesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqmiercolesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqjuevesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqjuevesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqviernesEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqviernesSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqsabadoEn)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}else if (!expresion.test(EqsabadoSa)) {
		alert("Sigue el formato '00:00' de 24 hrs");
		return false;
	}
	
}