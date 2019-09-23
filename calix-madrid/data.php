<?php

/* 
 * titulo Proyecto 
 *
 ***/
	$proyecto = 'calix-madrid';
	$proyectoNombre = 'Calix Madrid';
	
	/* Paginas */
	/* Home */
	$headTitulo['index'] = 'Por fin has encontrado tu casa para vivir en el centro de todo. | Calix Madrid';
	$headDesc['index'] = 'Calix Madrid - Por fin has encontrado tu casa para vivir en el centro de todo. Departamentos en el barrio de San Fernando de Henares. 54 11 4788 2412';
	$headKeywords['index'] = 'madrid, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';
	
	$titulo['index'] = 'Por fin <br> has encontrado tu casa <br> para vivir en el centro <br> de todo';
	$textGray['index'] = '<p>Casas para compartir, un sitio ideal para vivir <br> y en el corazón de la ciudad.</p>';
	$textImageArea['left']['index'] = array(
		'titulo' => 'El Proyecto',
		'parrafo' => 'Diseño moderno, excelente calificación energética (A), cocina abierta, importante iluminación natural. <br><br><br>Posibilidad de financiacion bancaria local (Banco Español), en función del scoring de cada comprador',
		'verMasLink' => 'el-proyecto.php',
		'verMasTitulo' => 'Ver más del proyecto',
		'imagenes' => array (
			'titulo' => 'El barrio',
			//'youtube' => '<iframe width="960" height="540" src="https://www.youtube.com/embed/bdwZODNzWqM?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
		)
	);
	$textImageArea['right']['index'] = array(
		'titulo' => 'San Fernando de Henares',
		'parrafo' => 'Una zona totalmente consolidada.',
		'verMasLink' => 'el-barrio.php',
		'verMasTitulo' => 'Conocer más del barrio'			
	);
	
	$galeriaArea['index'] = array(
		'titulo' => 'Calix',
		'imagenes' => array (
			array (
				'imagen' => 'galeria_0.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => ''
			)
		)
	);
		
	$position['index'] = array('textGrayContent','textImageLeftContent','textImageRightContent');

/* 
 * El proyecto
 *
 ***/
 
	$headTitulo['el-proyecto'] = 'El Proyecto | Calix Madrid';
	$headDesc['el-proyecto'] = 'Calix Madrid - El Proyecto. Departamentos en el barrio de San Fernando de Henares. 54 11 4788 2412';
	$headKeywords['el-proyecto'] = 'proyecto, espacios, Madrid, barrio, luminosos, ambientes, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$titulo['el-proyecto'] = 'Viviendas pensadas <br> para tu bienestar y confort';
	$textGray['el-proyecto'] = '<p>Diseño, cómodo y funcional, alta eficiencia energética y a un paso de todo.</p>';
	$threeImagesArea['el-proyecto']= array(
		'imagenes' => array (
			array (
				'imagen' => 'el-proyecto-m.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'el-proyecto-planta1.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'el-proyecto-planta2.jpg',
				'titulo' => ''
			)
		)
	);
	$galeriaArea['el-proyecto'] = array(
		'imagenes' => array (
			array (
				'imagen' => 'galeria_3.jpg',
				'titulo' => 'Salón 1'
			),
			array (
				'imagen' => 'galeria_2.jpg',
				'titulo' => 'Salón 2'
			),
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => 'Salón 3'
			),
			array (
				'imagen' => 'galeria_0.jpg',
				'titulo' => 'Salón 4'
			),
			array (
				'imagen' => 'galeria_5.jpg',
				'titulo' => 'Dormitorio 1'
			),
			array (
				'imagen' => 'galeria_4.jpg',
				'titulo' => 'Dormitorio 2'
			),
			array (
				'imagen' => 'galeria_6.jpg',
				'titulo' => 'Baño'
			)
			/*,
			array (
				'imagen' => 'PB_piso1.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso2_piso3.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso4_piso5.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso6_piso7.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso8.png',
				'titulo' => ''
			),
			array (
				'360' => 'https://roundme.com/embed/143840/363611',
				'titulo' => ''
			)*/
		)
	);

	$caracteristicasArea['el-proyecto'] = array(
		'titulo' => 'Características generales',
		
		'texto' => '<p>Pisos de 1, 2 y 3 dormitorios pensados para encontrar tu momento perfecto en el día.</p>',
		'caracteristicas' => array(
			'Plaza de garaje',
			'Trastero',
			'Cocina amueblada, mueble altos <br> y bajos',
			'Calefacción suelo radiante, por agua',
			'Preinstalación de aire acondicionado',
			'VIVIENDAS CON CALIFICACION <br> ENERGETICA “A”',
                       
			
		),
		'sep' => false
	);
	$imagenMobile['el-proyecto'] = array(
		'imagen' => 'mobile/el_proyecto_img.jpg',
		'titulo' => ''
	);
	$position['el-proyecto'] = array('textGrayContent','threeImagesContent','caracteristicaContent','galeriaContent','imagenMobileContent');

/* 
 * EL Barrio 
 *
 ****/
 
	$headTitulo['el-barrio'] = 'El Barrio | Calix Madrid';
	$headDesc['el-barrio'] = 'Calix Madrid - El Barrio. Departamentos en el barrio de San Fernando de Henares. 54 11 4788 2412';
	$headKeywords['el-barrio'] = 'residencial, gastronómicas, paseos, comerciales, proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$titulo['el-barrio'] = 'Vive como en la gran ciudad <br> con las ventajas de una pequeña.';

	$textMapArea['el-barrio'] = array(
		'parrafo' => '',
		'coordenadas' => '1Elh79MRwFd_3KXTTb7C-erqDF0-6Ptv2'	
	);
	
	
	$position['el-barrio'] = array('textMapContent');

/* 
 * Disponibilidad 
 *
 ****/
	
	$headTitulo['disponibilidad'] = 'Disponibilidad | Calix Madrid';
	$headDesc['disponibilidad'] = 'Calix Madrid - Disponibilidad. Departamentos en el barrio de San Fernando de Henares. 54 11 4788 2412';
	$headKeywords['disponibilidad'] = 'disponibilidad, proyecto, espacios, madrid, barrio, luminosos, ambientes, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$tituloG['disponibilidad'] = 'Disponibilidad';
	$textGray['disponibilidad'] = '<p></p>';
	
	$disponibilidad['disponibilidad'] = array(
			array(
				'piso' => 0,
				'titulo' => 'Planta Baja / Cocheras',
				'planos' => true,
				'deptos' => array(
					array(
						'Planta Baja / Cocheras',
						'12 + 1 Cocheras',
						'Cocheras.pdf'
					)
				)
			),
			array(
				'piso' => 1,
				'titulo' => 'Primer Piso / Cocheras',
				'planos' => true,
				'deptos' => array(
					array(
						'Primer piso / Cocheras',
						'10 + 1 Cocheras',
						'Cocheras.pdf'
					)
				)
			),
			array(
				'piso' => 2,
				'titulo' => 'Piso 2',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 201 - Frente',
						'1 dormitorio / 2 baños / Terraza',
						'201.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 60,4 m2'
					),
					array(
						'Depto 202 - Frente',
						'1 dormitorio / 2 baños / Terraza',
						'202.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 60,4 m2'
					),
					array(
						'Depto 203 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'203.pdf',
						'Superficie Cubierta 49,6 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 59,8 m2'
					),
					array(
						'Depto 204 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'204.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 78 m2',
						'',
						'Superficie total: 144,5 m2'
					),
					array(
						'Depto 205 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'205.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 79,6 m2',
						'',
						'Superficie total: 121 m2'
					)
				),
				'show' => true
			),
			array(
				'piso' => 3,
				'titulo' => 'Piso 3',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 301 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'301.pdf',
						'Superficie Cubierta 50,2  m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 302 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'302.pdf',
						'Superficie Cubierta 50,2  m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 303 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'303.pdf',
						'Superficie Cubierta 49,6 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 54,8 m2'
					),
					array(
						'Depto  304 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'304.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 71,6 m2'
					),
					array(
						'Depto  305 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'305.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 51,5 m2'
					)
				)
			),
			array(
				'piso' => 4,
				'titulo' => 'Piso 4',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 401 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'401.pdf',
						'Superficie Cubierta 50,2 m2',		
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'					
					),
					array(
						'Depto 402 - Frente',
						'3 Dormitorios / 2 Baños Completos / Terraza',
						'402.pdf',
						'Superficie Cubierta 99,7 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 104,9 m2',
					),
					array(
						'Depto 403 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'403.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 71,6 m2'
					),
					array(
						'Depto 404 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'404.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 46,5 m2'
					)
				)
			),
			array(
				'piso' => 5,
				'titulo' => 'Piso 5',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 501 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'501.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 502 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'502.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 503 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'503.pdf',
						'Superficie Cubierta 49,6 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 54,8 m2'
					),
					array(
						'Depto 504 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'504.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 15,1 m2',
						'',
						'Superficie total: 81,6 m2'
					),
					array(
						'Depto 505 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'505.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 46,4 m2'
					)
				)
			),
			array(
				'piso' => 6,
				'titulo' => 'Piso 6',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 601 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'601.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 602 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'602.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 603 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'603.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 54,8 m2'
					),
					array(
						'Depto 604 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'604.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 71,6 m2'
					),
					array(
						'Depto 605 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'605.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 51,5 m2'
					)
				)
			),
			array(
				'piso' => 7,
				'titulo' => '7 piso / SUM',
				'planos' => true,
				'deptos' => array(
					array('7 piso / SUM','','')
				)
			)
		);
	
	$position['disponibilidad'] = array('disponibilidadContent');

/* El Equipo */
	$headTitulo['el-equipo'] = 'El Equipo | '.$proyectoNombre;
	$headDesc['el-equipo'] = $proyectoNombre.' - El Equipo. Departamentos en el barrio de Núñez. 54 11 4788 2412';
	$headKeywords['el-equipo'] = 'departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$tituloG['el-equipo'] = 'El Equipo';
	
	$elequipo['el-equipo'] = array(
		array(
			'titulo' => 'Desarrolla y Comercializa',
			'logo' => 'zoning.png',
			'alt' => 'Zonning Real Estate',
			'texto' => '<h3>ING. LUIS MARTÍNEZ DI VIRGILIO<span>DESARROLLO Y GERENCIAMIENTO ZONING</span></h3><p>Ingeniero civil con más de 28 años de experiencia en desarrollo y gestión de activos inmobiliarios. MDI de la universidad Politécnica de Madrid. Gerenció el desarrollo de más de 25 edificios de vivienda y oficinas.</p><h3>ARQ. DIEGO ALCHOURRON<span>DESARROLLO Y GERENCIAMIENTO ZONING</span></h3><p>Arquitecto, MDI de la Universidad Politécnica de Madrid y Martillero Público. Es profesor de Marketing en el <strong>Máster de Desarrollo inmobiliario de la UB (MDEI)</strong>. Tiene más de 15 años de experiencia en desarrollo y comercialización de inmuebles.</p>'
		),
		array(
			'titulo' => 'Desarrolla y Comercializa',
			'logo' => 'urbia.png',
			'alt' => 'URBIA',
			'texto' => '<h3>URBIA CAPITAL PARTNERS SL Desarrolladora Inmobiliaria</h3><p>Empresa 100% Española.<br>Sociedad Español con la participación de Zoning y CDAI: <br> CDAI:  Sociedad Española con mas de 20 años de Experiencia <br> Más de 3.600 viviendas desarrolladas, Centros comerciales, oficinas, Hoteles.</p>'
		),
		array(
			'titulo' => 'Proyecto y Dirección',
			'logo' => 'ensalada.png',
			'alt' => 'ENSALADA - office for architecture and beyond',
			'texto' => '<p>Un grupo de arquitectos que trabajan y exploran campos arquitectónicos desde 2015. Estamos interesados ​​en nuevas formas de abordar nuestros entornos y contextos. Tomamos en cuenta las relaciones que las generan, desde el individuo hasta la sociedad, y nos enfocamos en la comprensión de la arquitectura y el urbanismo como una pieza de un rompecabezas interconectado. Siempre trabajando en campos intermedios, desde el urbanismo hasta la comunicación, desde el diseño industrial hasta el arte, desde lo digital hasta lo analógico puro, buscamos formas de expandir nuestro conocimiento y comprensión de nuestro entorno.</p>'
		),
/*
		array(

			'titulo' => 'Construcción',

			'logo' => 'techba.png',

			'alt' => 'Techba SRL',

			'texto' => '<h3>ARQ. HERNAN FERRERO<span>CONSTRUCCIÓN Y PLANIFICACIÓN DE OBRAS</span></h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>'

		),

		array(

			'titulo' => 'Branding & Marketing',

			'logo' => 'Antoni.png',

			'alt' => 'Antoni Branding Shop',

			'texto' => '<h3>ARQ. HERNAN FERRERO<span>CONSTRUCCIÓN Y PLANIFICACIÓN DE OBRAS</span></h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>'

		)*/
	);
	
	$position['el-equipo'] = array('elequipoContent');
	
/*
 * Contacto 
 *
 ****/
	
	$medio['contacto'] = array(
		'Por cartel de Obra',
		'Busqueda en Google',
		'Referido',
		'Por agente inmobiliario',
	);
	
	$tipoDepto['contacto'] = array(
		'1 dormitorio',
		'2 dormitorios',
		'1 dormitorio con terraza',
		'2 dormitorios con terraza'
	);
	
	$mailContact['contacto'] = array(
		'email'=> 'info@zonig.com.ar',
		'titulo'=> 'Equipo de atención',
		'telefono' => ''
	)
	
?>
