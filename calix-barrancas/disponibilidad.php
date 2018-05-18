<?php
	include("data.php");
	include("../global-data.php");
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
  							<ul class="pisos"><li>
  					<a href="#planta_7" title="7 piso / SUM" class="piso7"><span>7 piso / SUM</span></a></li><li>
  					<a href="#planta_6" title="Piso 6" class="piso6"><span>Piso 6</span></a></li><li>
  					<a href="#planta_5" title="Piso 5" class="piso5"><span>Piso 5</span></a></li><li>
  					<a href="#planta_4" title="Piso 4" class="piso4"><span>Piso 4</span></a></li><li>
  					<a href="#planta_3" title="Piso 3" class="piso3"><span>Piso 3</span></a></li><li>
  					<a href="#planta_2" title="Piso 2" class="activo piso2"><span>Piso 2</span></a></li><li>
  					<a href="#planta_1" title="Primer Piso / Cocheras" class="piso1"><span>Primer Piso / Cocheras</span></a></li><li>
  					<a href="#planta_0" title="Planta Baja / Cocheras" class="piso0"><span>Planta Baja / Cocheras</span></a></li></ul>
  								<h4>Seleccioná el piso</h4>
  						</article>
  						<article class="col-12 col-md-8 plantas"><div class="accordion hidden" id="planta_0"><h2>Planta Baja / Cocheras<span>12 + 1 Cocheras</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/Cocheras.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_0/001.png" alt="Depto 001">
											</span></div></div><!-- accordion --><div class="accordion hidden" id="planta_1"><h2>Primer piso / Cocheras<span>10 + 1 Cocheras</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/Cocheras.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_1/101.png" alt="Depto 101">
											</span></div></div><!-- accordion --><div class="accordion" id="planta_2"><h2>Depto 201 - Frente<span>2 dormitorios / 2 baños completos / Espacio de lavado / Terraza / Patio</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza 5,1 m2  /  Patio 14.4 m2</li>
													<li><strong>Superficie total: 86,5 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/101.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_2/201.png" alt="Depto 201">
											</span></div><h2>Depto 202 - Frente<span>2 dormitorios / 2 baños completos / Espacio de lavado / Terraza / Patio</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza 5,1 m2  /  Patio 14.4 m2</li>
													<li><strong>Superficie total: 86,5 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/102.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_2/202.png" alt="Depto 202">
											</span></div><h2>Depto 203 - Frente<span>1 Dormitorio / 2 Baños / Terraza / Patio</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2  /  Patio 14.4 m2</li>
													<li><strong>Superficie total: 71,2 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/103.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_2/203.png" alt="Depto 203">
											</span></div><h2>Depto 204 - Contrafrente<span>1  Dormitorio / 2 Baños / Terraza / Patio</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2  /  Patio 14.4 m2</li>
													<li><strong>Superficie total: 71,2 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/104.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_2/204.png" alt="Depto 204">
											</span></div><h2>Depto 205 - Contrafrente<span>1  Dormitorio / 2 Baños / Terraza / Patio</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2  /  Patio 14.4 m2</li>
													<li><strong>Superficie total: 71,2 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/105.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul></div></div><!-- accordion --><div class="accordion hidden" id="planta_3"><h2>Depto 301 - Frente<span>2 Dormitorios / 2 Baños / Balcón</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/201.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_3/301.png" alt="Depto 301">
											</span></div><h2>Depto 302 - Frente<span>2 Dormitorios / 2 Baños / Balcón</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza 5,1 m2</li>
													<li><strong>Superficie total: 72,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/202.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_3/302.png" alt="Depto 302">
											</span></div><h2>Depto 303 - Frente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2</li>
													<li><strong>Superficie total: 56,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/203.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_3/303.png" alt="Depto 303">
											</span></div><h2>Depto  304 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2</li>
													<li><strong>Superficie total: 56,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/204.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_3/304.png" alt="Depto 304">
											</span></div><h2>Depto  305 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2</li>
													<li><strong>Superficie total: 56,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/204.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul></div></div><!-- accordion --><div class="accordion hidden" id="planta_4"><h2>Depto 401 - Frente<span>2 Dormitorios / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza 5,1 m2</li>
													<li><strong>Superficie total: 72,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/301.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_4/401.png" alt="Depto 401">
											</span></div><h2>Depto 402 - Frente<span>2 Dormitorios / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza 5,1 m2</li>
													<li><strong>Superficie total: 72,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/302.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_4/402.png" alt="Depto 402">
											</span></div><h2>Depto 403 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/303.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_4/403.png" alt="Depto 403">
											</span></div><h2>Depto 404 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza 4,8 m2</li>
													<li><strong>Superficie total: 56,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/304.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_4/404.png" alt="Depto 404">
											</span></div></div><!-- accordion --><div class="accordion hidden" id="planta_5"><h2>Depto 501 - Frente<span>2 Dormitorios / 2 Baños / Terraza 1 / Terraza 2</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza A 5,1 m2  /  Terraza B 65 m2</li>
													<li><strong>Superficie total: 137,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/401.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_5/401.png" alt="Depto 501">
											</span></div><h2>Depto 502 - Frente<span>2 Dormitorios / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza A 5,1 m2  /  Terraza B 65 m2</li>
													<li><strong>Superficie total: 137,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/402.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_5/402.png" alt="Depto 502">
											</span></div><h2>Depto 503 - Frente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
													<li><strong>Superficie total: 103,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/403.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_5/403.png" alt="Depto 503">
											</span></div><h2>Depto 504 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
													<li><strong>Superficie total: 103,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/404.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_5/404.png" alt="Depto 504">
											</span></div><h2>Depto 505 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
													<li><strong>Superficie total: 103,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/404.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul></div></div><!-- accordion --><div class="accordion hidden" id="planta_6"><h2>Depto 601 - Frente<span>2 Dormitorios / 2 Baños / Terraza 1 / Terraza 2</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza A 5,1 m2  /  Terraza B 65 m2</li>
													<li><strong>Superficie total: 137,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/401.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_6/401.png" alt="Depto 601">
											</span></div><h2>Depto 602 - Frente<span>2 Dormitorios / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 67 m2</li>
													<li>Terraza A 5,1 m2  /  Terraza B 65 m2</li>
													<li><strong>Superficie total: 137,1 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/402.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_6/402.png" alt="Depto 602">
											</span></div><h2>Depto 603 - Frente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
													<li><strong>Superficie total: 103,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/403.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_6/403.png" alt="Depto 603">
											</span></div><h2>Depto 604 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
													<li><strong>Superficie total: 103,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/404.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_6/404.png" alt="Depto 604">
											</span></div><h2>Depto 605 - Contrafrente<span>1 Dormitorio / 2 Baños / Terraza A / Terraza B</span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"><ul>
													<li>Superficie Cubierta 52 m2</li>
													<li>Terraza A 4,8 m2  /  Terraza B 47 m2</li>
													<li><strong>Superficie total: 103,8 m2</strong></li>
												</ul></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/404.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul></div></div><!-- accordion --><div class="accordion hidden" id="planta_7"><h2>7 piso / SUM<span></span><strong>Planta</strong></h2>
									<div><ul class="row">
											<li class="col-8 col-md-6 superficieArea"></li><li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/sum.pdf" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li></ul><span class="imgArea">
												<img src="images/planos/planta_7/401.png" alt="Depto 701">
											</span></div></div><!-- accordion --></article>
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
