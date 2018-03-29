<?php 
	if(isset($threeImagesArea[$pagina]['imagenes'])){
		$cant = sizeof($threeImagesArea[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){
			if(isset($threeImagesArea[$pagina]['imagenes'][$a]['video'])){
				echo '<div class="modal modalVideo">
				<div class="envio-bad boxArea">
					'.$threeImagesArea[$pagina]['imagenes'][$a]['video'].'
				</div>
  			</div>';
			}
		}
		
	}
?>