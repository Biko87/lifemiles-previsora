<?php 
session_start();

$meil = strip_tags($_POST['mail']);
$nit = strip_tags($_POST['nit']);

if (isset($_POST['codigo'])) {

$resultado = count($_POST['codigo']);
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
require("class.phpmailer.php"); //Importamos la función PHP class.phpmailer

    $mail             = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Host       = "mail.benditaess.com";
    $mail->Port       = 587;
    $mail->Username   = 'autogalias@maquinadeleads.com';
    $mail->Password   = "leadsantony2016";
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //====== DE QUIEN ES ========
    
    $mail->From       = "previsoracomunica@previsora.com.co";
    $mail->FromName   = "Previsora";
    //====== PARA QUIEN =========
    $mail->Subject    = utf8_decode("Tus millas Previsora LifeMiles");
   
    $mail->AddAddress($meil,"Contacto");
    //$mail->AddAddress("antony_padilla@benditaess.com","Antony Padilla");
    $mail->AddAddress("brayam_martinez@benditaess.com","Brayam Martinez");
    //$mail->AddAddress("diana_medina@benditaess.com","Diana Medina");



$mail->IsHTML(true);
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

$body  = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' name='viewport'>
  <title>Previsora</title>

  <style type='text/css'>
    /* Cool mobile stuff, please don't touch :) */
.izq{padding-left:50px;}
.der{padding-right:50px;}
.img1 {height:57px; width:205px;}
.img2 {height:61px; width:317px;}
@media only screen and (max-width: 600px) {
  body                    { width: 100% !important; -webkit-text-size-adjust: none; }
  table table             { width: 320px !important; }
  .scaleHeader            { width: 320px !important; }
  .scaleHeaderLogo        { width: 300px !important; }
  .scaleFullwidth         { width: 300px !important; height: 127px !important; }
  .scaleSeperator         { width: 300px !important; }
  .scaleFollowus          { width: 240px !important; }
  .fullWidth              { width: 320px !important; }
  .mobileImage            { margin: 20px auto; }
  .center                 { text-align: center !important; }
  .tableCenter            { margin-left: auto !important; margin-right: auto !important; float: none !important; }
  .columnMargin           { margin-bottom: 20px !important; }
  .button                 { margin-left: auto !important; margin-right: auto !important; float: none !important; }
  .img-resposnive     {width: 60px;}
  .img1, .img2      { width: 200px;}
  .legales        { width: 35px; height:auto;}
  .shadow_lados     {width: 26px; height: auto;}
  .izq{padding-left:0px;}
  .der{padding-right:0px;}
}
.mobileImage {margin: 20px auto; }
</style>
</head>
<body style='margin: 0; padding: 0;' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>      
<font style='font-family: Tahoma, Geneva, sans-serif; font-size:1px; color:#fff;'>





</font>
  <!-- START PAGE WRAPPER -->
  <table width='100%' cellspacing='0' cellpadding='0' align='center' style='background:white; color:#666; font-family: Tahoma, Geneva, sans-serif; font-size:14px;'>
    <tr>
      <td valign='top'>

        <!-- START VIEW ONLINE LINK -->
        <table width='100%' class='fullWidth' cellspacing='0' cellpadding='0' align='center' style='background:white;'>
          <tr>
            <td valign='top'>
              <table width='720' cellspacing='0' cellpadding='0' align='center'>
                <tr>
                  <td style='font-family: Tahoma, Geneva, sans-serif; font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: right;'>

                    <table width='330' cellspacing='0' cellpadding='0' align='left'>
                      <tr>
                        <td style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: left;'>Problemas con la previsualizaci&oacute;n? <a href='http://previpass.co/newsletter/17032016/' style='font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #1D242C; text-decoration: none;'>Clic para ver la versi&oacute;n online</a></td>
                      </tr>
                    </table>                                        

                    <table width='200' cellspacing='0' cellpadding='0' align='right'>
                      <tr>
                        <td style='font-size: 11px; color: #929da7; padding: 10px 0 10px 0; text-align: right;'></td>
                      </tr>
                    </table> 
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!-- END VIEW ONLINE LINK -->

        <!-- START FULL WIDTH QUOTE+LOGO -->
        <table width='100%' cellspacing='0' cellpadding='0' align='center' >
          <tr>
            <td valign='top'>
              <table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#F2F2F2;'>
                <tr>
                  <td width='720' valign='top'><!-- START LOGO --><!-- END LOGO -->
                    <div style=' font-size:10px; color:#FFF; font-family: Tahoma, Geneva, sans-serif;' align='right'><img src='http://previpass.co/newsletter/17032016/images/header.png' style='width:100%;' align='middle'></div>
                  </td>
                </tr>
              </table>   
            </td>
          </tr>
        </table>

        <!-- START LEFT IMAGE RIGHT TEXT -->
        <table width='100%' cellspacing='0' style='background:white;' cellpadding='0' align='center'>
          <tr>
            <td valign='top'>
              <table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#F2F2F2;'>
                <tr>
                  <td>
                    <table  width='680' cellspacing='0' cellpadding='0' align='center'>
                      <tr>
                        <td valign='top'></td>
                        <td align='justify' valign='top'>
                            <div style='font-family: Arial, Helvetica, sans-serif; font-size:28px; color:#004457; line-height:22px;' align='center'><br>
                              <strong>Hola,</strong><br><br>
                            </div>                        
                          <div style='font-family: Arial, Helvetica, sans-serif; padding: 15px 40px 15px 40px; font-size:16px; line-height:20px; color:#727274' align='center'>


                        <strong>Estas son todas las millas que te has ganado</strong>

                          </div>
                        <br>

            <table cellspacing='0' width='150'  cellpadding='0' cellpadding='0' align='left' style='margin-left: 250px;' >
                <tr>
                  <td>
                                        <div style='font-family: Tahoma, Geneva, sans-serif; font-size:15px; color:#727274; line-height:15px;' align='center'>
                                             <strong>Código</strong> </div>
                  </td>
                  <td><div style='font-family: Tahoma, Geneva, sans-serif; font-size:15px; color:#727274; line-height:15px;' align='center'>
                                             <strong>Millas</strong> </div></td>
                </tr>
                <tr><td><td height='5'></td></td></tr>
                <tr>
                  <td align='center' style='font-family: Tahoma, Geneva, sans-serif;  border:2px solid #003D59; background-color: #003D59; padding:10px; font-size:15px; color:#FFFFFF; line-height:15px;'><div style='font-family: Tahoma, Geneva, sans-serif; font-size:15px; color:#FFFFFF; line-height:15px;'>
                                                   <strong>".$codigotabla."</strong> </div>  </td>
                  <td align='center' style='font-family: Tahoma, Geneva, sans-serif; border:2px solid #003D59; background-color: #FFFFFF; font-size:15px; padding:10px; color:#003D59; line-height:15px;'><div style='font-family: Tahoma, Geneva, sans-serif; font-size:15px; color:#003D59; line-height:15px;'>
                                                   <strong>".$millastabla."</strong> </div></td>
                </tr>
            </table>
               
      


                        
              <div style='clear:both;'></div>         

                        

                                              

                        <div>
                          
                        </div>
                        <br><br> 




                        <div style='font-family: Arial, Helvetica, sans-serif; padding: 15px 40px 15px 40px; font-size:16px; line-height:20px; color:#727274; margin-top: 20px;' align='center'>
                        • Ingresa a LifeMiles.com/LifeMilesGift e ingresa el código junto  con tu número LifeMiles para que las millas sean acumuladas a tu cuenta<br><br><br>

                         • Si aún no eres socio de LifeMiles ingresa a LifeMiles.com y afíliate para  acumular millas.
                         </div>

                         <br><br><br>


                            
                              </div>
                           </td>
                        </tr>
                    </table>
                    
                    
                    <img src='http://previpass.co/newsletter/17032016/images/footer.png' width='100%' alt=''/>
                  </td>                 
                </tr>
                <tr>
                  <td align='center'>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!-- END LEFT IMAGE RIGHT TEXT -->

        <!-- START FULL WIDTH QUOTE+LOGO -->
        <table width='100%' cellspacing='0' cellpadding='0' align='center' style='background:#FFF;'>
          <tr>
            <td valign='top'>
              <table width='720' cellspacing='0' cellpadding='0' align='center' style='background:#EFEFF0;'>
                
                </table>   
              </td>
            </tr>
          </table>
          <!-- END FULL WIDTH QUOTE+LOGO -->
        </td>
      </tr>
    </table>
    <!-- END PAGE WRAPPER -->  
    <br/><br/>

  </body>
  </html>

  
  

  "; 



$mail->Body = $body;

if(!$mail->Send()){
   echo '<script language="javascript">alert("No se pudo enviar el Mensaje.");</script>';  
}else{
   echo '<script language="javascript">alert("Mensaje enviado");</script>';  
}
echo '<script language="javascript">alert("Millas asignadas");window.location="dos.php";</script>';
}else{
echo '<script language="javascript">alert("No has seleccionado millas");window.location="dos.php";</script>';
}
















?>