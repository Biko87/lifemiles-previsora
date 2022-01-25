<?php 
	
session_start();



if (isset($_POST['siguiente'])) {

$resultado = count($_POST['siguiente']);
$codigos = $_POST['codigo'];

$codigos = implode(",", $codigos);
$codigosarr = split ("\,", $codigos); 
 

for($i = 0 ; $i<$resultado ; $i++){

$conexion = mysql_connect("localhost", "benditap_eventos", "eventos2016");
if (!mysql_select_db("benditap_eventos")) { echo "No ha sido posible seleccionar la BD: " . mysql_error(); exit; }



$query = "SELECT millas FROM millas WHERE codigo='".$codigosarr[$i]."'"; 
$result = mysql_query($query) or die(mysql_error());

$row = mysql_fetch_array($result) or die(mysql_error());
$millastabla = $millastabla."".$row['millas']."<br>"; 
 

 

   $sql = "UPDATE millas Set mail='".$meil."', codigonitcedula = '".$nit."' WHERE codigo = '".$codigosarr[$i]."';";

$codigotabla = $codigotabla."".$codigosarr[$i]."<br>";


   mysql_query( $sql, $conexion );
   mysql_close($conexion);
}


?>