<?php
session_start();  

// variables que almacenan los campos a enviar
$cedula  = $_POST['cedula'];
$clave  = $_POST['clave'];

// Conectando, seleccionando la base de datos
$conexión = mysql_connect("localhost", "root", "");

if (!$conexión) {
    echo "No pudo conectarse a la BD: " . mysql_error();
    exit;
}

if (!mysql_select_db("benditap_registros")) {
    echo "No ha sido posible seleccionar la BD: " . mysql_error();
    exit;
}


$query="SELECT * FROM resultado WHERE cedula = '$cedula' ";

$resultado = mysql_query($query);


while ($fila = mysql_fetch_assoc($resultado)) {
$_SESSION['cedula'] = $fila["cedula"];
$_SESSION['clave'] =  $fila["clave"]; 
$_SESSION['millas'] = $fila["millas"]; 
    echo "<script type=text/javascript>window.location='tres.php'</script>";

}




?>


