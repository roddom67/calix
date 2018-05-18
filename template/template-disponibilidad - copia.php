
<?php
	if(isset($disponibilidad[$pagina])){

		$directory = "images/planos/";
		$dirint = dir($directory);
		$a = 0;

		$carpetas = array();
		while (($archivo = $dirint->read()) !== false){
			//if(preg_match("/gif/", $archivo) || preg_match("/jpg/", $archivo) || preg_match("/png/", $archivo)){
			if( preg_match("/../", $archivo) || preg_match("/./", $archivo)){
				if($archivo != '..' && $archivo != '.' && !preg_match("/gif/", $archivo) && !preg_match("/jpg/", $archivo) && !preg_match("/png/", $archivo)){
					array_push($carpetas, $archivo);
					
	 		 		$a +=1;
	 		 	}
	 		}
		}
		$dirint->close();
		
		$cant = sizeof($carpetas);
		
		$planos = array();
		$pImg = array();
		
		
		$a = '';
		for($c=0 ; $c<$cant ;$c++){
		
			$directory = 'images/planos/'.$carpetas[$c].'/';
			$dirint = dir($directory);
			
			while (($archivo = $dirint->read()) !== false){
				if(preg_match("/gif/", $archivo) || preg_match("/jpg/", $archivo) || preg_match("/png/", $archivo)){
					
					if($a === ''){
						array_push($pImg, $archivo);
					}else{
						if($a == $c){
							array_push($pImg, $archivo);
						}else{
							array_push($planos,$pImg);
							array_splice($pImg,0);
							array_push($pImg, $archivo);
						}
					}
					$a = $c;
				}
			}
			$dirint->close();
		}
		array_push($planos,$pImg);
		
		$disponibilidadContent = '
			<section class="disponibilidadArea">
 				<div class="container-fluid">
 					<div class="row">
  						<article class="col-12 col-md-4 plantaArea">
  							<ul class="pisos">';

  		$carpetasR = array_reverse($carpetas);
  		$disponibilidadR = array_reverse($disponibilidad[$pagina]);
  		$n = $cant;
  		for($c=0; $c<$cant ;$c++){
  			$n--;
  			$piso = $disponibilidadR[$c]['titulo'];
  			if($disponibilidadR[$c]['planos']){
  				$disponibilidadContent .= '<li>
  					<a href="#planta_'.$n.'" title="'.$piso.'"';
  				if(isset($disponibilidadR[$c]['show']) && $disponibilidadR[$c]['show']){
  					$disponibilidadContent .= ' class="activo piso'.$n.'"';
  				}else{
  					$disponibilidadContent .= ' class="piso'.$n.'"';
  				}
  				$disponibilidadContent .= '><span>'.$piso.'</span></a></li>';
  			}else{
  				$disponibilidadContent .= '<li class="desktop"><span>'.$piso.'</span></li>';
  			}
  		}
  		
  		$disponibilidadContent .= '</ul>
  								<h4>Seleccioná el piso</h4>
  						</article>
  						<article class="col-12 col-md-8 plantas">';
  		
  		$h = 0;				
  		for($a=0;$a < $cant; $a++){
 			if(isset($disponibilidad[$pagina][$a]['show']) && $disponibilidad[$pagina][$a]['show']){
				$hidden = '';	
			}else{
				$hidden = ' hidden';	
			}
			
			$disponibilidadContent .= '<div class="accordion'.$hidden.'" id="planta_'.$a.'">';
			$h++;

  			$dept = sizeof($disponibilidad[$pagina][$a]['deptos']);
  			
  			for($d = 0; $d<$dept;$d++){
				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][0]) && isset($disponibilidad[$pagina][$a]['deptos'][$d][1])){
				$disponibilidadContent .= '<h2>'. $disponibilidad[$pagina][$a]['deptos'][$d][0];
					$disponibilidadContent .= '<span>'.$disponibilidad[$pagina][$a]['deptos'][$d][1].'</span>';
					$disponibilidadContent .= '<strong>Planta</strong>';
				}
				$disponibilidadContent .= '</h2>
									<div>';
				$disponibilidadContent .= '<ul class="row">
											<li class="col-8 col-md-6 superficieArea">';
				if( isset($disponibilidad[$pagina][$a]['deptos'][$d][3]) && isset($disponibilidad[$pagina][$a]['deptos'][$d][4]) && isset($disponibilidad[$pagina][$a]['deptos'][$d][5]) && isset($disponibilidad[$pagina][$a]['deptos'][$d][6])){
					$disponibilidadContent .= '<ul>
													<li>'.$disponibilidad[$pagina][$a]['deptos'][$d][3].'</li>
													<li>'.$disponibilidad[$pagina][$a]['deptos'][$d][4];
					if($disponibilidad[$pagina][$a]['deptos'][$d][5]!=''){
						$disponibilidadContent .= '  /  '.$disponibilidad[$pagina][$a]['deptos'][$d][5];
					}
				
					$disponibilidadContent .= '</li>
													<li><strong>'.$disponibilidad[$pagina][$a]['deptos'][$d][6].'</strong></li>
												</ul>';
				}
				
				$disponibilidadContent .= '</li>';
				
				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][2])){ 	
					$disponibilidadContent .= '<li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/'.$disponibilidad[$pagina][$a]['deptos'][$d][2].'" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li>';
				}
				$disponibilidadContent .= '</ul>';
				if(isset($planos[$a][$d])){
					$disponibilidadContent .= '<span class="imgArea">
												<img src="images/planos/'.$carpetas[$a].'/'.$planos[$a][$d].'" alt="Depto '.$disponibilidad[$pagina][$a]['piso'].'0'.($d+1).'">
											</span>'
											;
				}						
				$disponibilidadContent .= '</div>';
  			}
  			$disponibilidadContent .= '</div><!-- accordion -->';
  		}
  		$disponibilidadContent .= '</article>
  					</div>
  				</div>
  			</section>
		
		';
	}
?>
