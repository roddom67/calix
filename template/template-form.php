<?php
	if(isset($textHeaderForm[$pagina])){
		$textHeaderFormContent = '
		<section class="textArea">
 			<div class="container-fluid">
  				<article class="contactTextArea">
  					<p>'.$textHeaderForm[$pagina]['parrafo'].'</p>
  					<h4>'.$textHeaderForm[$pagina]['titulo'].'</h4>
  					<p><a href="mailto:'.$textHeaderForm[$pagina]['email'].'" title="Email de '.$textHeaderForm[$pagina]['titulo'].'">'.$textHeaderForm[$pagina]['email'].'</a></p>
  					<p>'.$textHeaderForm[$pagina]['telefono'].'</p>
  				</article>';

  		if(isset($_GET['ok'])){
  			$textHeaderFormContent .= '<article class="contactGraciasArea">
  					<p>Gracias por contactarse con nosotros.</p>
  				</article>';
  		}else{
  					
      	$textHeaderFormContent .= '<article class="contactFormArea">
      		<form method="post" name="contactoForm" action="form-to-email.php">
      			<fieldset>
						<ul class="row">
							<li class="col-sm-12 col-md-4">
								<ul>
									<li>
										<label for="name">Nombre</label>
										<input type="text" name="name">
										<span id="myform_Name_errorloc"></span>
									</li>
									<li>
										<label for="surname">Apellido</label>
										<input type="text" name="surname">
										<span id="myform_Name_errorloc"></span>
									</li>
									<li>
										<label for="email">Email</label>
										<input type="text" name="email">
										<span id="myform_Name_errorloc"></span>
									</li>
									<li>
										<label for="phone">Teléfono</label>
										<input type="text" name="phone">
										<span id="myform_Name_errorloc"></span>
									</li>
									<li>
										<label for="depto">Tipo de departamento</label>
										<select type="text" name="depto">
											<option></option>
										</select>
										<span id="myform_Name_errorloc"></span>
									</li>
									<li>
										<label for="price">Rango de precio</label>
										<select type="text" name="price">
											<option></option>
										</select>
										<span id="myform_Name_errorloc"></span>
									</li>
								</ul>
							</li>
							<li class="col-sm-12 col-md-4">
								<ul>
									<li>
										<label for="medios">¿Cómo se enteró de Calix?</label>
										<select type="text" name="medios">
											<option></option>
										</select>
										<span id="myform_Name_errorloc"></span>
									</li>
									<li>
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