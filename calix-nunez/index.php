<!DOCTYPE HTML>
<html lang="es">
<?php 
	$page = 'calix-nunez';
	$activoH = true;
	// $logoGris = true;
	require("head.php");
?>

<body class="calix-nunez index">

	<main>
		
  	<!-- Content here -->
  		<section class="headerImage">
  			<div class="container">
   				<?php 
					require("nav.php");
				?>
  				<article>
  					<h1>Tu vida a 5 minutos de todo.</h1>
  				</article>
 			</div>
 		</section>
 		<section class="textGray">
 			<div class="container">
  				<article>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
  				</article>
  			</div>
 		</section>
 		<section class="textImageArea imageBgLeft bgColor boxElProyecto">
 			<div class="container">
 				<div class="row">
  					<article class="col-xs-12 col-md-6">
  						
  					</article>
  					<article class="col-xs-12 col-md-6">
  						<h2>El Proyecto</h2>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
  						<a href="proyecto.php" title="Ver más sobre el proyecto">Ver más sobre el proyecto ></a>
  					</article>
 				</div>
 				
  			</div>
 		</section>
 		<section class="textImageArea imageBgRight bgGray boxElBarrio">
 			<div class="container">
 				<div class="row">
   				<article class="col-xs-12 col-md-6">
  						<h2>El Barrio</h2>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
  						<a href="barrio.php" title="Ver más sobre el barrio">Ver más sobre el barrio ></a>
  					</article>
 					<article class="col-xs-12 col-md-6">
  						
  					</article>
 				</div>
 				
  			</div>
 		</section>
 		<section class="galeriaArea">
 			<div class="container">
 				<article class="slider">
 					<h3>Galería</h3>
 					<ul class="sliderArea">
 						<li>
 							<img src="images/galeria_0.jpg" alt="">
 						</li>
 						<li>
 							<img src="images/galeria_1.jpg" alt="">
 						</li>
 					</ul>
 					
 				</article>
 			</div>
 		</section>  		
	</main>
<?php 
	require("footer.php");
?>

</body>
</html>