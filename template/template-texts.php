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
	if(isset($caracteristicasArea[$pagina])){
		$cant = sizeof($caracteristicasArea[$pagina]['caracteristicas']);
		
		$p = intval($cant / 3) + ($cant%3);

		$caracteristicaContent = '
		<section class="textArea boxCaracteristicas">
 			<div class="container-fluid">
 				<div class="row">
  					<article class="col-sm-12">
  						<h2>'.$caracteristicasArea[$pagina]['titulo'].'</h2>
  						<ul class="row">';
		for($a = 0; $a < $cant; $a++){
			if(($a%$p)==0){
		 		$caracteristicaContent .= '<li class="col-sm-12 col-md-4">
  								<ul>';
 			}
 								
 			$caracteristicaContent .= '<li>- '.$caracteristicasArea[$pagina]['caracteristicas'][$a].'</li>';
  			
  			if(($a%$p)==($p-1)){
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