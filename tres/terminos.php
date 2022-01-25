<?php

// variables que almacenan los campos a enviar
$cedula  = strip_tags($_POST['cedula']);
$clave  =  strip_tags($_POST['clave']);

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

$query="SELECT * FROM resultado WHERE clave = '$clave' ";

$número_filas = mysql_num_rows($resultado);

echo $número_filas = $cedula, $clave,$millas;



$resultado = mysql_query($query);


while ($fila = mysql_fetch_assoc($resultado)) {
 	
$cedula = $fila['cedula'];
$clave  = $fila['clave']; 
$millas = $fila['millas']; 
    

}
echo "<script type=text/javascript>window.location='tres.php'</script>";

mysql_free_result($resultado);



?>