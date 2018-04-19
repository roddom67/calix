<?php

	include("data.php");
	
	$pagina = 'disponibilidad';
	$activoD = true;
	$navGris = true;
	include("head.php");

?>
<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
<?php
	include('../template/template-header.php');
	include('../template/template-texts.php');
	include('../template/template-images.php');
?>
	
			<section class="disponibilidadArea">
 				<div class="container-fluid">
 					<div class="row">
  						<article class="col-12 col-md-4 plantaArea">
  							<ul class="pisos">
  								<li>
  									<a href="#planta_4" title="Piso 4" class="piso4"><span>Piso 4</span></a>
  								</li>
  								<li>
  									<a href="#planta_3" title="Piso 3" class="piso3"><span>Piso 3</span></a>
  								</li>
  								<li>
  									<a href="#planta_2" title="Piso 2" class="piso2"><span>Piso 2</span></a>
  								</li>
  								<li>
  									<a href="#planta_1" title="Piso 1" class="piso1 activo"><span>Piso 1</span></a>
  								</li>
  								<li>
  									<a href="#planta_0" title="Planta Baja / Cocheras" class="piso0"><span>Planta Baja / Cocheras</span></a>
  								</li>
  							</ul>
  						</article>
  						<article class="col-12 col-md-8 plantas">
  							<div class="accordion ui-accordion ui-widget ui-helper-reset hidden" id="planta_0" role="tablist">
  								<h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Planta Baja / Cocheras<span>12 + 1 Cocheras</span><strong>Planta</strong></h2>
								<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true">
									<ul class="row">
										<li class="col-8 col-md-6 superficieArea"></li>
										<li class="col-4 col-md-6 linksArea">
											<ul class="row">
												<li>
													<p><a href="plantas/Cocheras.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
												</li>
												<!--li>
													<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
												</li-->
											</ul>
										</li>
									</ul>
									<span class="imgArea">
										<img src="images/planos/planta_0/001.png" alt="Depto 001">
									</span>
								</div>
							</div>
							<!-- accordion -->
							<div class="accordion ui-accordion ui-widget ui-helper-reset" id="planta_1" role="tablist"><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 101 - Frente<span>2 dormitorios / 2 baños completos / Espacio de lavado / Terraza / Patio</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 67 m2</li>
											<li>Terraza 5,1 m2  /  Patio 14.4 m2</li>
											<li><strong>Superficie total: 86,5 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/101.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_1/101.png" alt="Depto 101">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 102 - Frente<span>2 dormitorios / 2 baños completos / Espacio de lavado / Terraza / Patio</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 67 m2</li>
											<li>Terraza 5,1 m2  /  Patio 14.4 m2</li>
											<li><strong>Superficie total: 86,5 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/102.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_1/102.png" alt="Depto 102">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 103 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza / Patio</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza 4,8 m2  /  Patio 14.4 m2</li>
											<li><strong>Superficie total: 71,2 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/103.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_1/103.png" alt="Depto 103">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-9" aria-controls="ui-id-10" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 104 - Contrafrente<span>1  Dormitorio / 2 Baños / Terraza / Patio</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-10" aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza 4,8 m2  /  Patio 14.4 m2</li>
											<li><strong>Superficie total: 71,2 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/104.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_1/104.png" alt="Depto 104">
								</span>
							</div></div>
							<!-- accordion -->
							<div class="accordion ui-accordion ui-widget ui-helper-reset hidden" id="planta_2" role="tablist"><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-11" aria-controls="ui-id-12" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 201 - Frente<span>2 Dormitorios / 2 Baños / Balcón</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-12" aria-labelledby="ui-id-11" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/201.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_2/201.png" alt="Depto 201">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-13" aria-controls="ui-id-14" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 202 - Frente<span>2 Dormitorios / 2 Baños / Balcón</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-14" aria-labelledby="ui-id-13" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 67 m2</li>
											<li>Terraza 5,1 m2</li>
											<li><strong>Superficie total: 72,1 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/202.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_2/202.png" alt="Depto 202">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-15" aria-controls="ui-id-16" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 203 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-16" aria-labelledby="ui-id-15" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza 4,8 m2</li>
											<li><strong>Superficie total: 56,8 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/203.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_2/203.png" alt="Depto 203">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-17" aria-controls="ui-id-18" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 204 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-18" aria-labelledby="ui-id-17" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza 4,8 m2</li>
											<li><strong>Superficie total: 56,8 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/204.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_2/204.png" alt="Depto 204">
								</span>
							</div></div>
							<!-- accordion -->
							<div class="accordion ui-accordion ui-widget ui-helper-reset hidden" id="planta_3" role="tablist"><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-19" aria-controls="ui-id-20" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 301 - Frente<span>2 Dormitorios / 2 Baños / Terraza</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-20" aria-labelledby="ui-id-19" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 67 m2</li>
											<li>Terraza 5,1 m2</li>
											<li><strong>Superficie total: 72,1 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/301.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_3/301.png" alt="Depto 301">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-21" aria-controls="ui-id-22" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 302 - Frente<span>2 Dormitorios / 2 Baños / Terraza</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-22" aria-labelledby="ui-id-21" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 67 m2</li>
											<li>Terraza 5,1 m2</li>
											<li><strong>Superficie total: 72,1 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/302.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_3/302.png" alt="Depto 302">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-23" aria-controls="ui-id-24" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 303 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-24" aria-labelledby="ui-id-23" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/303.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_3/303.png" alt="Depto 303">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-25" aria-controls="ui-id-26" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 304 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-26" aria-labelledby="ui-id-25" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza 4,8 m2</li>
											<li><strong>Superficie total: 56,8 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/304.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_3/304.png" alt="Depto 304">
								</span>
							</div></div>
							<!-- accordion -->
							<div class="accordion ui-accordion ui-widget ui-helper-reset hidden" id="planta_4" role="tablist">
								<h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-27" aria-controls="ui-id-28" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 401 - Frente<span>2 Dormitorios / 2 Baños / Terraza 1 / Terraza 2</span><strong>Planta</strong></h2>
								<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-28" aria-labelledby="ui-id-27" role="tabpanel" aria-hidden="true">
									<ul class="row">
										<li class="col-8 col-md-6 superficieArea">
											<ul>
												<li>Superficie Cubierta 67 m2</li>
												<li>Terraza A 5,1 m2  /  Terraza B 65 m2</li>
												<li><strong>Superficie total: 137,1 m2</strong></li>
											</ul>
										</li>
										<li class="col-4 col-md-6 linksArea">
											<ul class="row">
												<li>
													<p><a href="plantas/401.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
												</li>
												<!--li>
													<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
												</li-->
											</ul>
										</li>
									</ul>
									<span class="imgArea">
										<img src="images/planos/planta_4/401.png" alt="Depto 401">
									</span>
								</div>
								<h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-29" aria-controls="ui-id-30" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 402 - Frente<span>2 Dormitorios / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-30" aria-labelledby="ui-id-29" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 67 m2</li>
											<li>Terraza A 5,1 m2  /  Terraza B 65 m2</li>
											<li><strong>Superficie total: 137,1 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/402.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_4/402.png" alt="Depto 402">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-31" aria-controls="ui-id-32" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 403 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-32" aria-labelledby="ui-id-31" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
											<li><strong>Superficie total: 103,8 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/403.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_4/403.png" alt="Depto 403">
								</span>
							</div><h2 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Depto 404 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
							<div style="display: none;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-34" aria-labelledby="ui-id-33" role="tabpanel" aria-hidden="true"><ul class="row">
									<li class="col-8 col-md-6 superficieArea"><ul>
											<li>Superficie Cubierta 52 m2</li>
											<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
											<li><strong>Superficie total: 103,8 m2</strong></li>
										</ul></li>
									<li class="col-4 col-md-6 linksArea">
										<ul class="row">
											<li>
												<p><a href="plantas/404.pdf" title="Bajar Planta" target="_blank">&gt; Bajar PDF</a></p>
											</li>
											<!--li>
												<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
											</li-->
										</ul>
									</li>
								</ul><span class="imgArea">
									<img src="images/planos/planta_4/404.png" alt="Depto 404">
								</span>
							</div>
							</div>
							<!-- accordion -->
						</article>
  					</div>
  				</div>
  			</section>
	
<?php		


	include('../template/template-form.php');
	

?>
	</main>
<?php 
	include("footer.php");

	include('../template/template-modal.php');
?>

</body>
</html>