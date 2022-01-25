<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Previsora</title>
	<link href="tres/tres.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">

    window.location.href = "mensaje.php";

	</script> 
</head>
<body>
	
<form action="terminos1.php" method="post">
	
		<header>
		
			
<div class="felicitaciones"><img src="images/felicitaciones.png" style="width:100%;"></div>	


<div style="clear:both;"></div>


<div class="contador">


	<table border="1" align="center" width="300" height="100" style="max-width:480px; padding:10px; margin:0 auto; background-color:#000; -webkit-box-shadow: inset 0px 0px 11px 0px rgba(255,255,255,1);-moz-box-shadow: inset 0px 0px 11px 0px rgba(255,255,255,1);box-shadow: inset 0px 0px 11px 0px rgba(255,255,255,1); ">

		<thead>
			<tr style="color:#FFFFFF; border-left:1px solid #FFFFFF; padding:15px;">
			<tr>

				<th style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#FFF;" height="40">MILLAS</th>				
				<th style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#FFF;" height="40">CÓDIGO</th>
			</tr>
			</tr>
		</thead>
		<tbody>
		
		
<?php

$clave = $_SESSION['clave'];



$conexion = mysql_connect('localhost','benditap_eventos','eventos2016'); //REALIZA LA CONEXION 

mysql_select_db("benditap_eventos",$conexion);//SELECCIONA LA BASE DE DATOS "USUARIOS"



$resultado = mysql_query("SELECT * FROM millas1 WHERE clave = '$clave'");


while ($fila = mysql_fetch_array($resultado,MYSQL_NUM)) {
	echo "<tr>";
    echo "<td style= color:#FFF>".$fila[3]. "</td>";
    echo "<td style= color:#FFF>".$fila[2]."</td>";
    echo "</tr>";
    
   
}




mysql_free_result($resultado);
mysql_close($conexion);







?>	



		</tbody>
	</table>

	</strong></div>






<div style="clear:both;"></div>
</div>	
</div>

<div align="left" class="legal1"><img src="images/legal.png" alt="Legales"></div>


         <div class="miles" style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#1D263C;">
				
				<h2>Ingresa a <span><a href="https://www.lifemiles.com/indexes.aspx" style="text-decoration:none; color:#9E1933;">www.lifemiles.com</a></span><br>
				y redime este código.</h2>

			</div>



<div style="padding-top: 15px;">
	<a href="logout.php" style="background: #9E1933; border: 1px solid #FFFFFF;  padding: 5px 30px 5px 30px; border-radius: 15px 15px 15px 15px; color:#FFFFFF; text-decoration:none;"  >Cerrar Sesi&oacute;n</a>
</div>





			<div class="marca"><img src="images/marca.jpg"></div>
			
		</header>

		
</form>


		
	
</body>
</html>


