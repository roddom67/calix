<?php
	if(isset($titulo[$pagina])){
?>
		<section class="headerImage">
  			<div class="container-fluid">
  				<?php
					include("../nav.php")
				?>
  				<article>
  					<h1><?php echo $titulo[$pagina]; ?></h1>
  				</article>
 			</div>
 		</section>
<?php
	}
?>

<?php
	if(isset($tituloG[$pagina])){
?>
		<section class="header">
  			<div class="container-fluid">
  				<?php
					include("../nav.php")
				?>
  				<article>
  					<h1><?php echo $tituloG[$pagina]; ?></h1>
  				</article>
 			</div>
 		</section>
<?php
	}
?>