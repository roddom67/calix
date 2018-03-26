<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CALIX | Barrancas</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    </head>
    
    <body  id="page-top">
   
        <div class="contacto-back">
        		<div class="container">
            	<div class="row">
                	<div class="col-md-6 col-sm-5 col-xs-12 text-left animated" >
                    	<h1 class="titular">CONTACTO</h1>
                      <form method="post" action="send_contacto.php">
                        <div class="form-txt">NOMBRE:</div>
                        <input name="nombre" id="nombre" type="text">
                        <div class="form-txt">E-MAIL:</div>
                        <input name="email" id="email" type="text">
                        <div class="form-txt">TELÉFONO:</div>
                        <input name="telefono" id="telefono" type="text">
                        <div class="form-txt">COMENTARIO:</div>
                        <textarea name="comentario" id="comentario" cols="" rows=""></textarea>
                        <input type="image" src="assets/img/contacto/btn.jpg" style=" width:100px; height:auto;" name="enviar" id="enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        	if(isset($_GET['sent'])){
        		if(($_GET['sent']== 'ok'){
        ?>
        <div class="modal">
        		<div class="envio-ok">
        			<p>Su envío fue exitoso</p>
        			<a href="index.php" title="Volver al inicio">Volver al inicio</a>
        		</div>
        </div>
        <?php
        		}
        	}
        ?>

    </body>
</html>
