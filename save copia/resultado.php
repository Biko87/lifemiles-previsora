<?php 

$cedula = strip_tags($_POST['clave']);
$codigo = strip_tags($_POST['codigo']);
$miles = strip_tags($_POST['miles'])


$conexion = mysql_connect("localhost", "root", "");

if (!$conexion) {
    echo "No pudo conectarse a la BD: " . mysql_error();
    exit;
}

if (!mysql_select_db("benditap_registros")) {
    echo "No ha sido posible seleccionar la BD: " . mysql_error();
    exit;
}

if ($cedula = 'clave') {
	$query="SELECT * FROM resultado WHERE clave = '$cedula'";
} else 
if ($clave = 'codigo') {
	$query="SELECT * FROM resultado WHERE codigo = '$codigo'";
}else
if () {
	$query="SELECT * FROM resultado WHERE miles = '$miles'";
}




//$query="SELECT * FROM resultado WHERE clave = '$cedula' AND codigo = '$codigo'";


 

$resultado = mysql_query($query);

if (!$resultado) {
    echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    exit;
} 

if (mysql_num_rows($resultado) == 0) {
echo"<script  language='javascript'>alert('No se encontro registro!');javascript:history.back(1);</script>";  
    exit;
}

 while ($fila = mysql_fetch_assoc($resultado)) {

$millas = $fila['millas'];
$clave = $fila['clave'];
   
}

mysql_free_result($resultado);


?>
