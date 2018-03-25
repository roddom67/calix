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
 				$threeImagesContent .= '<a href="#video'.$a.'" title="'.$threeImagesArea[$pagina]['imagenes'][$a]['titulo'].'" class="showVideo">';	
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
 				<article class="slider">';
 		if(isset($galeriaArea[$pagina]['titulo'])){
 			$galeriaContent .= '<p>'.$galeriaArea[$pagina]['titulo'].'</p>';
 		}
 		$galeriaContent .= '<ul class="sliderArea">';

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