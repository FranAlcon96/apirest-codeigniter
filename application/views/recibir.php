<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Saludar</title>
</head>
<body>

<div id="container">
	<form method="post">
		<label>Nombre:</label>
		<br>
		<input type="text" name="nombre">
		<br>
		<input type="submit" name="enviar">
	</form>
</div>

<?php 

if(!isset($_POST['nombre'])) {
	echo "<p>Introduzca un nombre: </p>";
}else{
	echo "<p> Hola señor / a ". $_POST['nombre'] . " </p>";
}

?>

</body>
</html>