<?php

$nombres = strip_tags($_GET['nombres']);
$apellidos = strip_tags($_GET['apellidos']);
$direccion = strip_tags($_GET['direccion']);
$telefono = strip_tags($_GET['telefono']);
$email = strip_tags($_GET['email']);

$link = mysql_connect('localhost', 'brayam_lifesmile', 'brayam198716') or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('brayam_lifesmilesprevisora') or die('No se pudo seleccionar la base de datos');

$sql = "INSERT INTO Registro (nombres, apellidos, direccion, telefono, email) VALUES ('$nombres', '$apellidos' ,'$direccion', '$telefono', '$email')";
$result = mysql_query($sql) or die('No se pudo seleccionar la base de datos');

echo "¡Gracias! Hemos recibido sus datos.\n";
?>
		
