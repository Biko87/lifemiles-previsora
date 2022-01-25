<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Previsora</title>
	<link href="tres/tres.css" rel="stylesheet" type="text/css">
</head>
<body>
	
<form action="terminos1.php" method="post">
	
		<header>
		
			
	<div class="felicitaciones"><img src="images/felicitaciones.png" style="width:100%;"></div>	


<!-- <div style="max-width:400px; margin:0 auto;">

<div class="millas" style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#1D263C;">
				
				<h2>MILLAS</h2>

</div>
			
<div class="codigo" style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#1D263C;">
				
				<h2>CÓDIGO</h2>

</div>

</div> -->

<div style="clear:both;"></div>


<div class="contador">

	<table border="1"  align="center" width="333" height="200" style="margin-top:31px; ">

		<thead>
			<tr>
				<th style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#1D263C;">MILLAS</th>				
				<th style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#1D263C;">CÓDIGO</th>
			</tr>
		</thead>
		<tbody>
		
		
<?php

$codigo = $_SESSION['codigo'];



$conexion = mysql_connect('localhost','root',''); //REALIZA LA CONEXION 

mysql_select_db("benditap_registros",$conexion);//SELECCIONA LA BASE DE DATOS "USUARIOS"



$resultado = mysql_query("SELECT * FROM resultado WHERE codigo ='$codigo'");



//$sql = mysql_query("SELECT SUM(millas) FROM resultado WHERE codigo ='".$codigo."'"); 

while ($fila = mysql_fetch_array($resultado,MYSQL_NUM)) {
	echo "<tr>";
    echo "<td>".$fila[2]. "</td>";
    echo "<td>".$fila[1]."</td>";
    echo "</tr>";
    $sql = mysql_query("SELECT SUM(millas) FROM resultado WHERE codigo ='$codigo'");
   
}




mysql_free_result($resultado);
mysql_close($conexion);







?>	



		</tbody>
	</table>

	</strong></div>


 <!-- <div style="max-width:480px; padding:10px; margin:0 auto; background-color:#000; -webkit-box-shadow: inset 0px 0px 11px 0px rgba(255,255,255,1);-moz-box-shadow: inset 0px 0px 11px 0px rgba(255,255,255,1);box-shadow: inset 0px 0px 11px 0px rgba(255,255,255,1);">

<div style="float:left; max-width:400px;">
	<div style="float:left; background-color:#FFFFFF; color:#9E1933; margin:5px; padding:10px 20px 10px 20px; font-size:30px;" name="miles"><strong> 
	 <div style="float:left; background-color:#FFFFFF; color:#9E1933; margin:5px; padding:10px 20px 10px 20px; font-size:30px;" name="miles"><strong>
	<?php 
	
	?>
	</strong></div>
	<div style="float:left; background-color:#FFFFFF; color:#9E1933; margin:5px; padding:10px 20px 10px 20px; font-size:30px;" name="miles"><strong>
	<?php 
	
	?>
	</strong></div>
	<div style="float:left; background-color:#FFFFFF; color:#9E1933; margin:5px; padding:10px 20px 10px 20px; font-size:30px;" name="miles"><strong>
	<?php 
	
	?>
	</strong></div>
</div>

<div class="code">
	<div align="center" class="codenum" name="codigo"><strong>
	<?php 
	echo $_SESSION['codigo'];
	?>
	</strong></div>
</div>


<div style="clear:both;"></div>
</div>	
</div> -->

























<div style="clear:both;"></div>
</div>	
</div>































         <div class="miles" style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#1D263C;">
				
				<h2>Ingresa a <span style="color:#9E1933">www.lifemiles.com</span><br>
				y redime este código.</h2>

			</div>


			<div class="marca"><img src="images/marca.jpg"></div>
			
		</header>

		
</form>


		
	
</body>
</html>


