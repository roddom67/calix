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
				</div>';
  		if(isset($_GET['ok'])){
  			$textHeaderFormContent .= '<article class="contactGraciasArea">
  					<p>Gracias por contactarse con nosotros.</p>
  				</article>';
  		}else{
  					
      	$textHeaderFormContent .= '<article class="contactFormArea">
      		<form method="post" name="contactoForm" id="contactoForm" action="form-to-email.php">
      			<fieldset>
						<ul class="row">
							<li class="col-sm-12 col-md-8">
								<ul class="row">
									<li class="col-sm-12 col-md-6">
										<label for="name">Nombre</label>
										<input type="text" name="name">
										<span id="myform_name_errorloc" class="error"></span>
									</li>
									<li class="col-sm-12 col-md-6">
										<label for="surname">Apellido</label>
										<input type="text" name="surname">
										<span id="myform_surname_errorloc" class="error"></span>
									</li>
									<li class="col-sm-12 col-md-6">
										<label for="email">Email</label>
										<input type="text" name="email">
										<span id="myform_email_errorloc" class="error"></span>
									</li>
									<li class="col-sm-12 col-md-6">
										<label for="phone">Teléfono</label>
										<input type="text" name="phone">
										<span id="myform_phone_errorloc" class="error"></span>
									</li>
									<li class="col-sm-12 col-md-6">
										<label for="depto">Tipo de departamento</label>
										<select type="text" name="depto">
											<option value="">Seleccione un departamento</option>
											<option value="depto_201">201</option>
											<option value="depto_202">202</option>
										</select>
									</li>
									<li class="col-sm-12 col-md-6">
										<label for="price">Rango de precio</label>
										<select type="text" name="price">
											<option value=">Seleccione un rango</option>
											<option value="1">mayor a us$ 100.000</option>
											<option value="2">mayor a us$200.000</option>
										</select>
									</li>
									<li class="col-sm-12 col-md-6">
										<label for="medios">¿Cómo se enteró de Calix?</label>
										<select type="text" name="medios">
											<option></option>
										</select>
									</li>
									<li class="col-sm-12 col-md-12">
										<label for="message">Enter Message:</label> <br>
										<textarea name="message"></textarea>
									</li>
								</ul>
							</li>
							<li class="col-sm-12 col-md-8 buttonArea">
								<input type="submit" name="submit" value="Enviar">
							</li>
						</ul>
      			</fieldset>
				</form>
			</article>';
  	}
  	$textHeaderFormContent .= '</div>
 		</section>
		';
	}
?>