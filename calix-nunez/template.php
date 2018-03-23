<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
<?php
	if(isset($titulo[$pagina])){
?>
		<section class="headerImage">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
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
					include("nav.php")
				?>
  				<article>
  					<h1><?php echo $tituloG[$pagina]; ?></h1>
  				</article>
 			</div>
 		</section>
<?php
	}
?>

<?php
	if(isset($textGray[$pagina])){
		$textGrayContent = '
		<section class="textGray">
 			<div class="container-fluid">
  				<article>
  					'.$textGray[$pagina].'
  				</article>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($textImageArea['left'][$pagina])){
		$textImageLeftContent = '
		<section class="textImageArea imageBgLeft bgColor boxElProyecto">
 			<div class="container-fluid">
 				<div class="row">
  					<article class="col-sm-12 col-md-6">
  					</article>
  					<article class="col-sm-12 col-md-6">
  						<h2>'.$textImageArea['left'][$pagina]['titulo'].'</h2>
  						<p>'.$textImageArea['left'][$pagina]['parrafo'].'</p>
  						<a href="'.$textImageArea['left'][$pagina]['verMasLink'].'" title="Ver más sobre '.$textImageArea['left'][$pagina]['verMasTitulo'].'">Ver más sobre '.$textImageArea['left'][$pagina]['verMasTitulo'].' ></a>
  					</article>
 				</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($textImageArea['right'][$pagina])){
		$textImageRightContent ='
		<section class="textImageArea imageBgRight bgGray boxElBarrio">
 			<div class="container-fluid">
 				<div class="row">
   				<article class="col-sm-12 col-md-6">
  						<h2>'.$textImageArea['right'][$pagina]['titulo'].'</h2>
  						<p>'.$textImageArea['right'][$pagina]['parrafo'].'</p>
  						<a href="'.$textImageArea['right'][$pagina]['verMasLink'].'" title="Ver más sobre '.$textImageArea['right'][$pagina]['verMasTitulo'].'">Ver más sobre '.$textImageArea['right'][$pagina]['verMasTitulo'].' ></a>
  					</article>
 					<article class="col-sm-12 col-md-6">
  					</article>
 				</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($threeImagesArea[$pagina])){
		$threeImagesContent = '
		<section class="threeImagesArea">
 			<div class="">
 				<ul class="row">';

		$cant = sizeof($threeImagesArea[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){

 			$threeImagesContent .= '<li class="col-sm-12 col-md-4">';
 			
 			if(isset($threeImagesArea[$pagina]['imagenes'][$a]['video'])){
 				$threeImagesContent .= '<a href="" title="'.$threeImagesArea[$pagina]['imagenes'][$a]['titulo'].'">';	
 			}
 			
 			$threeImagesContent .= '<span class="imgArea">
 							<img src="images/'.$threeImagesArea[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$threeImagesArea[$pagina]['imagenes'][$a]['titulo'].'">
 						</span>';
 			if(isset($threeImagesArea[$pagina]['imagenes'][$a]['video'])){
 				$threeImagesContent .= '</a>';	
 			}
 			$threeImagesContent .= '</li>';
		}

 		$threeImagesContent .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($oneImagesArea[$pagina])){
		$oneImagesContent = '
		<section class="oneImagesArea">
 			<div class="">
 				<ul class="row">';
		$oneImagesContent .= '<li class="col-sm-12">';
 			
		$oneImagesContent .= '<span class="imgArea">
						<img src="images/'.$oneImagesArea[$pagina]['imagen'].'" alt="'.$oneImagesArea[$pagina]['titulo'].'">
					</span>';
		$oneImagesContent .= '</li>';

 		$oneImagesContent .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($galeriaArea[$pagina])){
		$galeriaContent = '
		<section class="galeriaArea">
 			<div class="container-fluid">
 				<article class="slider">
 					<p>'.$galeriaArea[$pagina]['titulo'].'</p>
 					<ul class="sliderArea">';

 						$cant = sizeof($galeriaArea[$pagina]['imagenes']);
 						for($a = 0; $a < $cant; $a++){

 		$galeriaContent .= '<li>
 							<img src="images/'.$galeriaArea[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$galeriaArea[$pagina]['imagenes'][$a]['titulo'].'">
 						</li>';
 						}
 		$galeriaContent .= '	</ul>
 				</article>
 			</div>
 		</section> 
		';
	}
?>
<?php
	if(isset($caracteristicasArea[$pagina])){
		$caracteristicaContent = '
		<section class="textArea boxCaracteristicas">
 			<div class="container-fluid">
 				<div class="row">
  					<article class="col-sm-12">
  						<h2>'.$caracteristicasArea[$pagina]['titulo'].'</h2>
  						<ul class="row">';
		$cant = sizeof($caracteristicasArea[$pagina]['caracteristicas']);
		for($a = 0; $a < $cant; $a++){
			if(($a%3)==0){
		 		$caracteristicaContent .= '<li class="col-sm-12 col-md-4">
  								<ul>';
 			}
 								
 			$caracteristicaContent .= '<li>- '.$caracteristicasArea[$pagina]['caracteristicas'][$a].'</li>';
  			
  			if(($a%3)==2){
  				$caracteristicaContent .= '</ul>
  							</li>';
			}
		}
 		$caracteristicaContent .= '</ul>
  					</article>
 				</div>
 				
  			</div>
 		</section>	
		';
	}
?>

<?php
	if(isset($textMapArea[$pagina])){
		$textMapContent = '
		<section class="textMapArea bgGray">
 			<div class="container-fluid">
 				<div class="row">
   				<article class="col-sm-12 col-md-6 textos">
  						<h2>'.$textMapArea[$pagina]['titulo'].'</h2>';
  		$cant = sizeof($textMapArea[$pagina]['listado']);
  		$textMapContent .= '<ul class="accordion">';
  		for($a = 0; $a < $cant; $a++){
  			$textMapContent .= '<li>';
  			$textMapContent .= '<h4>'.$textMapArea[$pagina]['listado'][$a]['titulo'].'</h4>';
  			
  			$lug = sizeof($textMapArea[$pagina]['listado'][$a]['lugares']);
  			$textMapContent .= '<div><ul>';
  			for($l = 0; $l < $lug; $l++){
  				$textMapContent .= '<li>_'.$textMapArea[$pagina]['listado'][$a]['lugares'][$l].'</li>';
  			}
  			
  			$textMapContent .= '</ul></div></li>';
  		}
  		$textMapContent .= '</ul>';			
  						
  		$textMapContent .= '';				
  		$textMapContent .= '</article>
 					<article class="col-sm-12 col-md-6">
 						
  					</article>
 				</div>
  			</div>
  			<div class="mapArea">
  				<iframe src="https://www.google.com/maps/d/embed?mid='.$textMapArea[$pagina]['coordenadas'].'&hl=es" width="100%" height="100%"></iframe>
  			</div>
 		</section>
		';
	}
?>

<?php
	if(isset($elequipo[$pagina])){
		$elequipoContent = '<section class="elequipoArea">
			<div class="container-fluid">
				<ul class="row">';

		$cant = sizeof($elequipo[$pagina]);
		for($a = 0; $a < $cant; $a++){

			$elequipoContent .= '<li class="col-sm-12 col-md-4">
											<h2>'.$elequipo[$pagina][$a]['titulo'].'</h2>
											<span class="imgArea">
												<img src="../images/equipo/'.$elequipo[$pagina][$a]['logo'].'" alt="">
											</span>
											<div>'.$elequipo[$pagina][$a]['texto'].'</div>';
			$elequipoContent .= '</li>';
		}

		$elequipoContent .= '</ul>

 			</div>
 		</section>
		';
	}
?>


<?php
//http://rod.calixdesarrollos.com.ar/
	if(isset($position[$pagina])){
		
		$pos = sizeof($position[$pagina]);
	
		for($p=0;$p < $pos; $p++){
			echo ${$position[$pagina][$p]};
		}
	}
?>
	</main>
<?php 
	include("footer.php");
?>

</body>