<!DOCTYPE HTML>
<html lang="es">
<?php
	$v='1.0.1';
	$page = 'index';
	$headTitulo = 'Viví tu mejor versión | Calix';
	$headDesc ='Calix - Viví tu mejor versión. Departamentos en Núñez, Barrancas de Belgrano, Palermo. 54 911 4773 6619';
	include("head.php");
?>
<body class="home">
	<main class="container-fluid">
  	<!-- Content here -->
  		<section>
  			<article>
  				<div>
   				<h1><img src="images/home/calix-logo.png" alt="Calix" ></h1>
  					<p>Viví tu mejor versión</p>
 				</div>
  				<ul class="row menuCalix">
  					<li class="col-xs-12 col-md-4">
  						<a href="calix-nunez/" title="Calix Núñez" class="calixNunez">
  							<span>Calix Núñez</span>
  							<small>3 de febrero 2399</small>
  						</a>
  					</li>
  					<li class="col-xs-12 col-md-4">
  						<a href="" title="Calix Barrancas" class="calixBarrancas">
  							<span>Calix Barrancas</span>
  							<small>3 de febrero 2399</small>
  						</a>
  					</li>
  					<li class="col-xs-12 col-md-4">
  						<a href="" title="Calix Palermo" class="calixPalermo">
  							<span>Calix Palermo</span>
  							<small>3 de febrero 2399</small>
  						</a>
  					</li>
  				</ul>
  			</article>
  		</section>
	</main>
<?php 
	require("scripts.php");
?>

</body>
</html>