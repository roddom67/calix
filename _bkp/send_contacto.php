<?php
  session_start();
 
    $fecha=date("d/m/Y H:I");
    $headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\nFrom: ".$_POST["email"]."\nReply-To: ".$_POST["email"]." \nX-Mailer: PHP/". phpversion();
    $subject.= $_POST["nombre"].": Contacto desde la web";
    $content='
      <html>
	  
	  <style>
		 body { font-family:Verdana, Geneva, sans-serif;}
		.fila {font-family:Arial, Helvetica, sans-serif;font-size:12px;}
		.titulo {color:#2d8ec1; font-size:11px; padding:5px 0;}
		.titulo1 {border-bottom:1px; border-bottom-color:#999999; border-bottom-style:solid; color:#111;font-weight:bold; }
		.cont{ color:#a5a5a5; font-size:11px;padding:5px 0;  }
		.line { font-family:Verdana, Geneva, sans-serif; color:#a5a5a5; font-size:7px; letter-spacing:3px;}
		.contenedor { width:600px;}
		h1 { margin:0; padding:20px 0 20px 0; font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#2d8ec1;}
		h2 { margin:0; padding:20px 0 20px 0; font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#2d8ec1;}
		.left { float:left;}
		.clear { clear:both}
		.w_150 { width:150px;}
		.w_550 { width:450px;}
		.linea { border: dotted 1px #CCC; width:600px;}
		</style>

		<body>
				
	
		<div class="contenedor">
		
		
		<h1>Contacto desde la web</h1>
		
		</div>
		
		<div class="linea"></div>
		<div class="titulo left w_150">Nombre</div>
		<div class="cont left w_550">'.$_POST["nombre"].'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<div class="titulo left w_150">E-mail</div>
		<div class="cont left w_550">'.$_POST["email"].'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<div class="titulo left w_150">Tel&eacute;fono</div>
		<div class="cont left w_550">'.$_POST["telefono"].'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<div class="titulo left w_150">Mensaje</div>
		<div class="cont left w_550">'.$_POST["comentario"].'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<br /><br />
				
		<h1>Datos del env&iacute;o</h1>
		
		<div class="linea"></div>
		<div class="titulo left w_150">Fecha y hora</div>
		<div class="cont left w_550">'. $fecha.'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<div class="titulo left w_150">Display IP address</div>
		<div class="cont left w_550">'. $_SERVER['REMOTE_ADDR'].'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<div class="titulo left w_150">Mas detallado host address</div>
		<div class="cont left w_550">'.gethostbyaddr($_SERVER['REMOTE_ADDR']).'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		
		
		<div class="titulo left w_150">Mostrar informaci&oacute;n del navegador</div>
		<div class="cont left w_550">'.$_SERVER['HTTP_USER_AGENT'].'</div>
		<div class="clear"></div>
		<div class="linea"></div>
		<br /><br />
	 
        </body>
      </html>';
   if(mail("diego.alchourron@zoning.com.ar.com",$subject,$content,$headers)){
      echo '<script>window.location.href="contacto.html";</script>';
    }
    else{
      header("Location: index.php");
    }

?>