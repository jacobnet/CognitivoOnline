<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>disponibilidad</title>
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/form-basic1.css">
    <script src = "js/ValidarSeccion3.js"></script>
</head>
<body>

	<div class="main-content">
		<form class="form-basic" method="post" action="php/Seccion3_ins.php" onsubmit="return validarH();">
			<div class="form-title-row">
                <h1>DISPONIBILIDAD DE TIEMPO PARA INVERTIR EN CAPACITACION, GESTION EMPRESARIAL Y REALIZACION DE TRAMITES</h1>
            </div>

            <label><span>Horario disponible del emprendedor</span></label>
            <br><br>

            <div class="form-rows">
                <label>
                    <span>Lunes hora inicio</span>
                    <input type="text" name="time1_5" id="time1_5" value="00:00">
                </label>
                <label>
                    <span>Lunes hora termino</span>
                    <input type="text" name="time2_5" id="time2_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Martes hora inicio</span>
                    <input type="text" name="time3_5" id="time3_5" value="00:00">
                </label>
                <label>
                    <span>Martes hora termino</span>
                    <input type="text" name="time4_5" id="time4_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Miercoles hora inicio</span>
                    <input type="text" name="time5_5" id="time5_5" value="00:00">
                </label>

                <label>
                    <span>Miercoles hora termino</span>
                    <input type="text" name="time6_5" id="time6_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Jueves hora inicio</span>
                    <input type="text" name="time7_5" id="time7_5" value="00:00">
                </label>
                <label>
                    <span>Jueves hora termino</span>
                    <input type="text" name="time8_5" id="time8_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>viernes hora inicio</span>
                    <input type="text" name="time9_5" id="time9_5" value="00:00">
                </label>
                <label>
                    <span>viernes hora termino</span>
                    <input type="text" name="time10_5" id="time10_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>sabado hora inicio</span>
                    <input type="text" name="time11_5" id="time11_5" value="00:00">
                </label>
                <label>
                    <span>sabado hora termino</span>
                    <input type="text" name="time12_5" id="time12_5" value="00:00">
                </label>
            </div><br><br>


            	<!-- horario del equipo de trabajo-->

             <label><span>Horario disponible del resto del equipo de trabajo</span></label>
            <br><br>
            <div class="form-rows">
                <label>
                    <span>Lunes hora inicio</span>
                    <input type="text" name="time13_5" id="time13_5" value="00:00">
                </label>
                <label>
                    <span>Lunes hora termino</span>
                    <input type="text" name="time14_5" id="time14_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Martes hora inicio</span>
                    <input type="text" name="time15_5" id="time15_5" value="00:00">
                </label>
                <label>
                    <span>Martes hora termino</span>
                    <input type="text" name="time16_5" id="time16_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Miercoles hora inicio</span>
                    <input type="text" name="time17_5" id="time17_5" value="00:00">
                </label>
                <label>
                    <span>Miercoles hora termino</span>
                    <input type="text" name="time18_5" id="time18_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>Jueves hora inicio</span>
                    <input type="text" name="time19_5" id="time19_5" value="00:00">
                </label>
                <label>
                    <span>Jueves hora termino</span>
                    <input type="text" name="time20_5" id="time20_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>viernes hora inicio</span>
                    <input type="text" name="time21_5" id="time21_5" value="00:00">
                </label>
                <label>
                    <span>viernes hora termino</span>
                    <input type="text" name="time22_5" id="time22_5" value="00:00">
                </label>
            </div>

            <div class="form-rows">
                <label>
                    <span>sabado hora inicio</span>
                    <input type="text" name="time23_5" id="time23_5" value="00:00">
                </label>
                <label>
                    <span>sabado hora termino</span>
                    <input type="text" name="time24_5" id="time24_5" value="00:00">
                </label>
            </div>
            

            <div class="form-rows">
                <button type="submit">Enviar</button>
            </div>
		</form>
	
	</div>

</body>
</html>