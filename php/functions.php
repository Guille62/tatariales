<?php

if( isset($_POST['action']) ) {
  		acciones($_POST['action']);
	} else {
  		die("Solicitud no válida.");
}



function acciones( $id ) {

  //Cambia por los detalles de tu base datos

  $acciones=$_POST['action'];
  //correo","marca":marca,"modelo":modelo,"anio":anio,"nombre":nombre,"email":email,"telefono":telefono,"ciudad":ciudad,"comuna":comuna,"detalle":detalle
  if($acciones=="correo"){

    confirmarCorreo($_POST['nombre'],$_POST['email'],$_POST['telefono'],$_POST['tipo']);

  }
  
  
  
}


function confirmarCorreo($nombre,$email,$telefono,$tipo){
    iconv_set_encoding("internal_encoding", "UTF-8");
    
    $to = $email;
    
    $subject = utf8_decode('Usa este código y pedalea');

    $headers = "From: Oxford Store <contacto@descubretuciclista.cl>\r\n";
    $headers .= "Reply-To: contacto@descubretuciclista.cl\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    if($tipo=="ENELCERRO"){
    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
<title>Oxford</title>
</head>

<body>
<style type="text/css">
    /* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
    body{
        margin:0;
        padding:0;
    }

    img{
        border:0 none;
        height:auto;
        line-height:100%;
        outline:none;
        text-decoration:none;
    }
	a{ border:0 none}
    a img{
        border:0 none !important;
    }
    .imageFix{
        display:block;
    }

    table, td{
        border-collapse:collapse;
    }

    #bodyTable{
        height:100% !important;
        margin:0;
        padding:0;
        width:100% !important;
    }
	.ExternalClass{
    width:100%;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div{
    line-height: 100%;
}
.MsoNormal {
    line-height: 0 !important;
    margin: 0 !important;}
</style>
<table cellpadding="0" cellspacing="0" border="0" bgcolor="#000000" style="border:solid 1px #cccccc;" align="center">
<tr>
       <td style="line-height: 1px">
       		<table cellpadding="0" cellspacing="0" border="0">
       			<tr>
       				<td style="line-height:1px" width="785" height="462">
       					<img 	src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r1_c1.jpg" alt="20% descuento" width="785" height="462" style="display:block"/>
       				</td>
       			</tr>
       			<tr>
       				<td style="line-height:1px">
       					<table cellpadding="0" cellspacing="0" border="0">
       						<tr>
       							<td style="line-height:1px" width="267" height="31">
       								<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r2_c1.jpg" style="display:block" width="267" height="31"/>
       							</td>
       							<td style="line-height:1px" width="251" height="31" align="center" valign="middle" bgcolor="#FFFFFF">
       								<span style="font-family:Arial,Helvetica, sans-serif;color:#000000;font-size:24px;line-height:26px">Ciclistainterior</span>
       							</td>
       							<td style="line-height:1px" width="267" height="31">
       								<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r2_c5.jpg" style="display:block" width="267" height="31"/>
       							</td>
       						</tr>
       						<tr>
       							<td style="line-height:1px" width="785" colspan="3">
       								<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r3_c1.jpg" style="display:block" width="785" height="77"/>
       							</td>
       						</tr>	       						
       					</table>
       				</td>
       			</tr>
       			<tr>
       				<td style="line-height:1px">
       				<table cellpadding="0" cellspacing="0" border="0">
       					<tr>
       						<td style="line-height:1px" width="208" height="30">
       							<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r4_c1.jpg" style="display:block" width="208" height="30"/>
       						</td>
       						<td style="line-height:1px" width="168" height="30"><a href="https://www.oxfordstore.cl"><img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r4_c2.jpg" alt="oxfordstore" width="168" height="30" border="0" style="display:block"/></a>
       						</td>
       						<td style="line-height:1px"  width="409" height="30">
       							<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r4_c4.jpg" style="display:block" width="409" height="30"/>
       						</td>
       					</tr>
       					<tr>
       						<td style="line-height:1px" colspan="3">
       							<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r5_c1.jpg" alt="en cualquier bicicleta oxford" width="785" height="147" style="display:block"/>
       						</td>
       					</tr>	       					
       				</table>
       				</td>
       			</tr>
       			<tr>
       				<td style="line-height:1px">
       					<table cellpadding="0" cellspacing="0" border="0">
       						<tr>
       							<td style="line-height:1px" width="587" height="40">
       								<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r6_c1.jpg" alt="legal" width="587" height="40" style="display:block"/>
       							</td>
       							<td style="line-height:1px">
       								<table cellpadding="0" cellspacing="0" border="0">
       									<tr>
       										<td style="line-height:1px" width="117" height="14"><a href="https://www.oxfordstore.cl"><img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r6_c6.jpg" alt="web" width="117" height="14" border="0" style="display:block"/></a>
       										</td>
       									</tr>
       									<tr>
       										<td style="line-height:1px" width="117" height="26">
       											<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r7_c6.jpg" style="display:block" width="117" height="26"/>
       										</td>
       									</tr>
       								</table>
       							</td>
       							<td style="line-height:1px">
       								<img src="https://web.bbdodigital.cl/clientes/oxford/mailing/cupon/Cupon_Mailing_r6_c7.jpg" style="display:block" width="81" height="40"/>
       							</td>
       						</tr>
       					</table>
       				</td>
       			</tr>	 

       		</table>
        </td>
</tr>       
</table>
</body>
</html>';
        
        
        }else{
        
          $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
<title>Oxford</title>
</head>

<body>
<style type="text/css">
    /* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
    body{
        margin:0;
        padding:0;
    }

    img{
        border:0 none;
        height:auto;
        line-height:100%;
        outline:none;
        text-decoration:none;
    }
	a{ border:0 none}
    a img{
        border:0 none !important;
    }
    .imageFix{
        display:block;
    }

    table, td{
        border-collapse:collapse;
    }

    #bodyTable{
        height:100% !important;
        margin:0;
        padding:0;
        width:100% !important;
    }
	.ExternalClass{
    width:100%;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div{
    line-height: 100%;
}
.MsoNormal {
    line-height: 0 !important;
    margin: 0 !important;}
</style>
<table cellpadding="0" cellspacing="0" border="0" bgcolor="#000000" style="border:solid 1px #cccccc;" align="center">
<tr>
       <td style="line-height: 1px">
       <table cellpadding="0" cellspacing="0" border="0">
              	<tr>
       		<td style="line-height:1px" colspan="3">
       			<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r1_c1.jpg" style="display:block" width="785" height="429" alt="Descubre tu ciclista interior"/>
       		</td>
       		</tr>
       	<tr>
       		<td style="line-height:1px" colspan="3">
       			<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r2_c1.jpg" style="display:block" width="785" height="32"/>
       		</td>
       	</tr>	       
       	<tr>
       		<td style="line-height:1px">
       			<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r3_c1.jpg" style="display:block" width="273" height="37"/>
       		</td>
       		<td style="line-height:1px" width="242" height="37" bgcolor="#FFFFFF" align="center" valign="middle">
       		<span style="font-family:Arial,Helvetica, sans-serif;color:#000000;font-size:24px;line-height:26px">Ciclistainterior</span>
       		</td>
       		<td style="line-height:1px">
       			<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r3_c5.jpg" style="display:block" width="270" height="37"/>
       		</td>
       	</tr>
       	<tr>
       		<td style="line-height:1px" colspan="3">
       			<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r4_c1.jpg" style="display:block" width="785" height="73"/>
       		</td>
       	</tr>	       	
       </table>
        	
       </td>
</tr>     
<tr>
       <td style="line-height: 1px">
        	<table cellpadding="0" cellspacing="0" border="0">
        		<tr>
        			<td style="line-height:1px">
        				<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r5_c1.jpg" style="display:block" width="208" height="29"/>
        			</td>
        			<td style="line-height:1px"><a href="https://www.oxfordstore.cl"><img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r5_c2.jpg" alt="oxfordstore.cl" width="168" height="29" border="0" style="display:block"/></a>
        			</td>
        			<td style="line-height:1px">
        				<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r5_c4.jpg" style="display:block" width="409" height="29"/>
        			</td>
        		</tr>
        		<tr>
        			<td style="line-height:1px" colspan="3">
        				<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r6_c1.jpg" style="display:block" width="785" height="147" alt="Logo Oxford"/>
        			</td>
        		</tr>        		
        	</table>
       </td>
</tr>     
<tr>
       <td style="line-height: 1px">
        	<table cellpadding="0" cellspacing="0" border="0">
        		<tr>
        			<td style="line-height:1px">
        				<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r7_c1.jpg" style="display:block" width="587" height="15"/>
        			</td>
        			<td style="line-height:1px"><a href="https://www.oxfordstore.cl"><img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r7_c6.jpg" alt="web" width="117" height="15" border="0" style="display:block"/></a>
        			</td>
        			<td style="line-height:1px">
        				<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r7_c7.jpg" style="display:block" width="81" height="15" alt="válido al 15 de octubre"/>
        			</td>
        		</tr>
        		<tr>
        			<td style="line-height:1px" colspan="3">
        				<img src="http://web.bbdodigital.cl/clientes/oxford/mailing/cupon/nuevo/Cupon_Mailing_r8_c1.jpg" style="display:block" width="785" height="25"/>
        			</td>
        		</tr>	        		
        	</table>
       </td>
</tr>            
</table>
</body>
</html>';
        
    }

    
    
    
    if(mail($to, $subject, $message, $headers)){
        
      $jsondata["success"] = true;   
        
    }else{
     
         $jsondata["success"] = false;
         $jsondata["data"] = array('message' => 'No pudimos enviar el correo');
        
    }
    
     header('Content-type: application/json; charset=utf-8');
     echo json_encode((object)$jsondata);
    
}


?>