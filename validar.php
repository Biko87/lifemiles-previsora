<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  
  <link rel="stylesheet" href="example/example.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<body>
		
</body>
</html>
<?php 
	
//include 'cedula.php'
// variables que almacenan los campos a enviar
$cedula  = $_POST['cedula'];
$clave  = $_POST['clave'];

$_SESSION['cedula'] = $_POST["cedula"];
$_SESSION['clave'] =  $_POST["clave"]; 

// Conectando, seleccionando la base de datos
$conexion = mysql_connect("localhost", "benditap_eventos", "eventos2016");

if (!$conexion) {
    echo "No pudo conectarse a la BD: " . mysql_error();
    exit;
}

if (!mysql_select_db("benditap_eventos")) {
    echo "No ha sido posible seleccionar la BD: " . mysql_error();
    exit;
}


if($clave != '' && $cedula != ''){
$queryclave   ="SELECT * FROM millas1 WHERE clave = '$clave'";
$querycedula  ="SELECT * FROM usuarios WHERE cedula = '$cedula'";
$queryexiste  ="SELECT * FROM millas1 WHERE cedula = '$cedula' AND clave = '$clave'";
$queryfail  ="SELECT * FROM millas1 WHERE cedula <> '' AND clave = '$clave'";
$queryasignar  ="SELECT * FROM millas1 WHERE cedula = '$cedula' AND clave <> '' ";


$validarclave = 0;
$validarcedula = 0;
$validarexiste = 0;
$validarfail = 0;
$validarasignar = 0;


	$resultadoclave = mysql_query($queryclave);
	while ($filaclave = mysql_fetch_assoc($resultadoclave)) {    
	$validarclave = 1; //contadores	
    //echo '<script language="javascript">alert("Clave");</script>';	
	}

	$resultadocedula = mysql_query($querycedula);
	while ($filacedula = mysql_fetch_assoc($resultadocedula)) {    
	$validarcedula = 1;	//contadores
	//    echo '<script language="javascript">alert("Cedula");</script>';	
	}

	$resultadoexiste = mysql_query($queryexiste);
	while ($filaexiste = mysql_fetch_assoc($resultadoexiste)) {    
	$validarexiste = 1;	//contadores
	//    echo '<script language="javascript">alert("Existe");</script>';	
	}

	$resultadofail = mysql_query($queryfail);
	while ($filafail = mysql_fetch_assoc($resultadofail)) {    
	$validarfail = 1;	//contadores
    //echo '<script language="javascript">alert("Fail");</script>';	

	}

	$resultadoasignar = mysql_query($queryasignar);
	while ($filaasignar = mysql_fetch_assoc($resultadoasignar)) {    
	$validarasignar = 1;	//contadores
    //echo '<script language="javascript">alert("Asignar	");</script>';	

	}



if ($validarclave == 1 && $validarcedula == 1 && $validarexiste == 0 && $validarfail == 0 && $validarasignar == 0) {//contadores
	echo "<script type=text/javascript>window.location='dos.php';</script>";
}else
if ($validarclave == 1 && $validarcedula == 1 && $validarexiste == 1 && $validarfail == 1 && $validarasignar == 1) {
    echo "<script type=text/javascript>window.location='tres.php';</script>";
}else
if ($validarclave == 1 && $validarcedula == 1 && $validarexiste == 0 && $validarfail == 1 && $validarasignar == 1) {
 echo '<script language="javascript">
 swal({   title: "Error", text: "El código ya ha sido asignado a otro usuario", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
 function(){
 setTimeout(function()
 {
 javascript:history.back(1);
 }, 2000); });</script>';
}else
if ($validarclave == 1 && $validarcedula == 1 && $validarexiste == 0 && $validarfail == 0 && $validarasignar == 1) {
 echo '<script language="javascript">
 swal({   title: "Error", text: "La cédula ya ha sido asignada a otro código", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
 function(){
 setTimeout(function()
 {
 javascript:history.back(1);
 }, 2000); });</script>';
}else
if ($validarclave == 1 && $validarcedula == 1 && $validarexiste == 0 && $validarfail == 1 && $validarasignar == 0) {
echo '<script language="javascript">
swal({   title: "Error", text: "El código ya ha sido asignado a otro usuario", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
function(){
setTimeout(function()
{
javascript:history.back(1);
}, 2000); });</script>';
}else
echo '<script language="javascript">
 swal({   title: "Error", text: "El usuario no se encuentra registrado!, verifique sus datos.", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
 function(){
 setTimeout(function()
 {
 javascript:history.back(1);
 }, 2000); });</script>';
}else{

echo '<script language="javascript">
swal({   title: "Error", text: "El formulario esta incompleto", type: "info", closeOnConfirm: false, showLoaderOnConfirm: true, },
function(){
setTimeout(function()
{
javascript:history.back(1);
}, 2000); });</script>';	
}




?>


