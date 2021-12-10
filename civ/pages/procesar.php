<meta charset="utf-8">
<title>Formulario</title>
<!-- CSS -->
	<link href="../css/form.css" rel="stylesheet"> <br>

<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,200;0,600;0,800;1,200;1,600;1,800&display=swap" rel="stylesheet">
	
<?php

error_reporting(0);

$numero1 = $_POST['num1'];

$numero2 = $_POST['num2'];
echo "<center>";

if($_POST['add']):
	$add = $numero1 + $numero2;
	echo "El resultado de la suma es: ".$add;
	?><br><br><input type="button" onclick="window.location.href='calcular.html'" value="Regresar"><?php
;
elseif($_POST['substract']):
	$substract = $numero1 - $numero2;
	echo "El resultado de la resta es: ".$substract;
	?><br><br><input type="button" onclick="window.location.href='calcular.html'" value="Regresar"><?php
;
elseif($_POST['divide']):
	$divide = $numero1 / $numero2;
	echo "El resultado de la division es: ".$divide;
	?><br><br><input type="button" onclick="window.location.href='calcular.html'" value="Regresar"><?php
;
elseif($_POST['multiply']):
	$multiply = $numero1 * $numero2;
	echo "El resultado de la multiplicacion es: ".$multiply;
	?><br><br><input type="button" onclick="window.location.href='calcular.html'" value="Regresar"><?php
;
else:
    echo "se ha introducido un valor invalido";
	?><br><br><input type="button" onclick="window.location.href='calcular.html'" value="Regresar"><?php
endif;
?>