<?php 
$conexión = mysql_connect("localhost", "brayam_lifesmile", "brayam198716");

mysql_select_db("brayam_lifesmilesprevisora");

$sql = "SELECT * FROM Registro WHERE nombres = '$nombres'";

$resultado = mysql_query($sql);

while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila["nombres"];
    echo $fila["apellidos"];
    echo $fila["direccion"];
    echo $fila["telefono"];
    echo $fila["email"]; 
}




?>

