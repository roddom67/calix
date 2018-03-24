
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
  						<article class="col-sm-12 col-md-4 plantaArea">
  							<ul class="pisos">';

  		$n = $cant;
  		for($c=0; $c<$cant ;$c++){
  			$n--;
  			
  			$piso = '';
  			if(is_numeric($disponibilidad[$pagina][$n]['piso'])){
  				$piso .= 'Piso ';
  			}
  			$piso .= $disponibilidad[$pagina][$n]['piso'];
  			
  			$disponibilidadContent .= '<li><a href="#'.$carpetas[$n].'" title="'.$piso.'"><span>'.$piso.'</span></a></li>';
  			
  		}
  		
  		$disponibilidadContent .= '</ul>
  						</article>
  						<article class="col-sm-12 col-md-8">';
  		
  		$h = 0;				
  		for($a=0;$a < $cant; $a++){
  		
  			if(is_numeric($disponibilidad[$pagina][$a]['piso'])){
  				if($h!=0){
  					$hidden = ' hidden';	
  				}else{
  					$hidden = '';
  				}
  				$disponibilidadContent .= '<div class="accordion'.$hidden.'" id="planta_'.$a.'">';
  				$h++;
  			}
  			$dept = sizeof($planos[$a]);
  			for($d = 0; $d<$dept;$d++){
  				if(is_numeric($disponibilidad[$pagina][$a]['piso'])){
  					$disponibilidadContent .= '<h2>Depto '.$disponibilidad[$pagina][$a]['piso'].'0'.($d+1);

  					if(isset($disponibilidad[$pagina][$a]['tipo'])&&isset($disponibilidad[$pagina][$a]['tipo'][$d])){
  				
  						$disponibilidadContent .= '<h2>Depto '.($a+1).'0'.($d+1);
  					}
  					if(isset($disponibilidad[$pagina][$a]['deptos'])&&isset($disponibilidad[$pagina][$a]['deptos'][$d])){
  						$disponibilidadContent .= '<span>'.$disponibilidad[$pagina][$a]['deptos'][$d].'</span>';
  						$disponibilidadContent .= '<strong>Planta</strong>';
  					}
  					$disponibilidadContent .= '</h2>
  										<div>
  											<ul class="row linksArea">
  												<li>
  													<p><a href="#" title="Bajar Planta">Bajar Planta</a></p>
  												</li>
  												<li>
  													<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
  												</li>
  											</ul>';
  					$disponibilidadContent .= '<ul class="row superficieArea">
  												<li class="col-sm-12 col-md-6">
  													<ul>
    													<li>Superficie Cubierta: 67 m2 </li>
  														<li>Balcón: 5,1 m2  /  Terraza: 62 m2</li>
  														<li>Superficie total: 94,9 m2</li>
 													</ul>
 												</li>';
 					$disponibilidadContent .= '<li class="col-sm-6 col-md-3">
 													<img src="" alt="planta'.$a.'">
 												</li>';
 					$disponibilidadContent .= '<li class="col-sm-6 col-md-3">
 													<img src="" alt="Orientación">
 												</li>
  											</ul>';
 					$disponibilidadContent .= '<span class="imgArea">
  												<img src="images/planos/'.$carpetas[$a].'/'.$planos[$a][$d].'" alt="Depto '.$disponibilidad[$pagina][$a]['piso'].'0'.($d+1).'">
  											</span>
  										</div>';
  				}
  			}
  			if(is_numeric($disponibilidad[$pagina][$a]['piso'])){
  				$disponibilidadContent .= '</div>';
  			}
  		}
  		$disponibilidadContent .= '</article>
  					</div>
  				</div>
  			</section>
		
		';
	}
?>
