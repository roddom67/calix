<?php
	if(isset($textHeaderForm[$pagina])){
		$textHeaderFormContent = '
		<section class="textArea">
 			<div class="container-fluid">
 				<div class="row">
					<article class="contactTextArea col-sm-12 col-md-6">
						<p>'.$textHeaderForm[$pagina]['parrafo'].'</p>
						<h4>'.$textHeaderForm[$pagina]['titulo'].'</h4>
						<p><a href="mailto:'.$textHeaderForm[$pagina]['email'].'" title="Email de '.$textHeaderForm[$pagina]['titulo'].'">'.$textHeaderForm[$pagina]['email'].'</a></p>
						<p>'.$textHeaderForm[$pagina]['telefono'].'</p>
					</article>
 					<article class="contactFormArea col-sm-12 col-md-8">
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
							<input type="image"  style=" width:100px; height:auto;" name="enviar" id="enviar">
							</form>
                </article>
            </div>
        </div>
        ';
        
        	if(isset($_GET['sent'])){
        		if(($_GET['sent']== 'ok'){
        $textHeaderFormContent .= '<div class="modal">
        		<div class="envio-ok">
        			<p>Su envío fue exitoso</p>
        			<a href="index.php" title="Volver al inicio">Volver al inicio</a>
        		</div>
        </div>';
        		}
        	}
      $textHeaderFormContent .= '</section>';
  	}

?>