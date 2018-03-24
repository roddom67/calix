<?php 
	if(isset($threeImagesArea[$pagina]['imagenes'])){
		$cant = sizeof($threeImagesArea[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){
			if(isset($threeImagesArea[$pagina]['imagenes'][$a]['video'])){
				echo '<div class="videoContent" id="video'.$a.'" title="Video">
  					'.$threeImagesArea[$pagina]['imagenes'][$a]['video'].'
				</div>';
			}
		}
		
	}
?>