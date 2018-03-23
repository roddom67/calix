<!DOCTYPE HTML>
<html lang="es">

<?php
	include("../global-data.php");
	
	$pagina = 'el-equipo';
	$activoEE = true;
	$navGris = true;
	include("head.php");
	
	include("template.php");
?>

<body class="el-equipo">
	<main>
  		<section class="header">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article>
  					<h1>El Equipo</h1>
  				</article>
 			</div>
 		</section>
	</main>
<?php 
	include("footer.php");
?>
</body>
</html>