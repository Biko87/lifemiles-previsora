<?php
session_start();

$var1 = $_SESSION['cedula'];
$var2 = $_SESSION['clave'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Previsora</title>
	<link href="dos/dos.css" rel="stylesheet" type="text/css">
	<link href="terminos.php" rel="stylesheet" type="text/css">
</head>
<body>
	

	
		<header>

			
			<div style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#fff;">
				
				<h1>Términos y condiciones de Gift Cards</h1>

			</div>





				
			
		</header>



		

		<div id="borde"  style="align:center;font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#000;">

		<ul>


	<li>Gift Card es un código que tiene una cantidad de millas y que es entregado por un Aliado para que el Socio pueda acumular estas millas. Estos códigos tienen una fecha de vigencia determinada después de la cual ya no se podrán acumular las millas asociadas al código.</li>

	<li>Para tener derecho a la acumulación de millas a través de Gift Cards es necesario ser Socio LifeMiles.</li>

	<li>La acumulación de millas a través de Gift Cards únicamente podrá realizar a través de esta página web y no esta habilitada en canales como Centros de Atención Avianca y Call Cneter.</li>

	<li>El número de millas a acreditar en la cuenta del Socio es la cantidad de millas que aparece con el Gift Card. Dichas millas se verán reflejadas<br> en la cuenta del Socio 5 días después de ingresado el código en la página web.</li>

	<li>La acumulación de millas a través de Gift Cards está sujeta a las condiciones y restricciones de cada Aliado. Consulta con cada Aliado<br> sus propias condiciones y restricciones.</li>

	<li>LifeMiles no se hace responsable por la dinámica que utilicen los Aliados para distribuir los Gift Cards. Por lo tanto, los Aliados son los únicos responsables de la atención de reclamos relacionados con la estrategia promocional y con el manejo y distribución de los Gift Cards.</li>

	<li>LifeMiles no se hace responsable si el Gift Card entregado por el Aliado es incorrecto y el Socio no puede acumular millas</li>

	<li>No se podrá acumular millas al ingresar Gift Cards que hayan expirado, es responsabilidad de cada Aliado informar sobre la fecha<br> de expiración<br> del Gift Card cuando este es distribuido o entregado al Socio y es responsabilidad del Socio verificar la fecha de expiración del Gift Card.</li>


	<li>LifeMiles no es responsable si las millas son acumuladas a otra cuenta en caso que se digite erróneamente el número de cuenta LifeMiles; la acumulación de millas es irreversible.</li>

	<li>Las millas obtenidas a través de los Gift Cards entregados por los Aliados no se toman en cuenta para acceder a un estatus élite dentro del Programa y una vez ingresadas a la cuenta del Socio las mismas se encuentran sujetas a los Términos y Condiciones del Progra,a LIfeMiles.</li>

	<li>LifeMiles se reserva el derecho de modificar, ampliar o eliminar en su totalidad la acumulación a través de Gift Card, a su entera discreción, sin necesidad de notificar al Socio en dichos casos.</li>


		</ul>	

<form action="checkbox.php" method="post">
		<div id="container">

		<strong><input type="checkbox" style="border:1px solid #9E1933;" name="terminos" value="si">Acepto los términos y condiciones.</strong>	
		<button type="submit" style="background: #9E1933; border: 1px solid #FFFFFF; margin-left:50px; padding: 5px 30px 5px 30px; border-radius: 15px 15px 15px 15px; color:#FFFFFF; text-decoration:none;" name="siguiente">Siguiente</button>	

</form>

		</div>



<div align="left" class="legal1"><img src="images/legal.png" alt="Legales"></div>



</div>


<div class="marca" align="center"><img src="images/marca.jpg"></div>

		



		
	
	
</body>
</html>