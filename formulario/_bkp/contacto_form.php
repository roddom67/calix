<?php
include_once('contacto_seg.php');
$newToken = generateFormToken('contactoForm');

	include("../global-data.php");
	include("data.php");
	
	$pagina = 'contacto';
	$activoH = true;
include('head.php');
?>

<body id="Contacto">
    <section>
        <section>
        	<h2><span>Portfolio</span></h2>
            <section>
                <article id="content">
					<?php
                if (!isset($ok)) {
                ?>
               		<h3>Fomulario de Contacto</h3>
                    <div class="Box">
                        <p>Para contactarse complete el siguiente formulario o bien escríbanos a <a href="mailto:info@rddiseno.com.ar" title="info@rddiseno.com.ar">info@rddiseno.com.ar</a></p>
                        <div class="container">
                            <h4>Ingrese los datos requeridos y como corresponda según lo solicitado. Gracias.</h4>
                            <ol>
                                <li><label for="name" class="error">Por favor, ingrese un <strong>nombre</strong> mayor a dos caracteres.</label></li>
                                <li><label for="email" class="error">Por favor, ingrese su mail correctamente.</label></li>
                                <li><label for="coment" class="error">Por favor, ingrese un comentario.</label></li>
                            </ol>
                        </div>
                        <form id="contactoForm" method="post" action="contacto_form.php">
                            <fieldset>
                            <div class="Col01">	
                                <p>
                                <label for="name">Nombre</label>
                                <input name="name" id="name" class="required">
                                </p>
                                <p>
                                <label for="email">Email</label>
                                <input name="email" id="email" class="required email">
                                </p>
                            	<p>
                                <label for="coment">Comentario</label>
                                <textarea name="coment" id="coment" class="required"></textarea>
                                </p>
                            </div>
                            <input name="Submit" id="Submit" value="Enviar" type="submit">
                            <input name="Clear" id="Clear" value="Limpiar" type="submit" class="cancel">
                            <input type="hidden" name="token" id="token" value="<?php echo $newToken; ?>">
                            </fieldset>
                        </form>
                    </div>
				<?php
                   } 
                   if (isset($ok) && $ok == '1') {
                ?>
                    <div class="Box Respuesta">
                        <p>Gracias <?php echo $name;?> por comunicarse con nosotros.</p>
                        <p>A la brevedad le estaré respondiendo la consulta realizada. </p>
                        <h4>RD diseño web</h4>
                    </div>
    
				<?php } ?>
                    <!--aside>
                        <h3>Datos Bancarios</h3>
                        <p>Banco Santander Rio</p>
                        <p>Cuenta Unica 036-139398/5</p>
                        <p>Nro. CBU: 072 0036 688 00001393985 4</p>
                    </aside-->
                </article>
        	</section>
        </section>
    </section>
    
	<?php
	include("footer.php");
	?>
