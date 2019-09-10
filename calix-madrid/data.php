<?php

/* 
 * titulo Proyecto 
 *
 ***/
	$proyecto = 'calix-madrid';
	$proyectoNombre = 'Calix Madrid';
	
	/* Paginas */
	/* Home */
	$headTitulo['index'] = 'A 17 minutos de Madrid, a un paso de la tranquilidad. | Calix Madrid';
	$headDesc['index'] = 'Calix Madrid - A 17 minutos de Madrid, a un paso de la tranquilidad. Departamentos en el barrio de Madrid. 54 11 4788 2412';
	$headKeywords['index'] = 'madrid, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';
	
	$titulo['index'] = 'a 17 minutos de Madrid<br>a un paso de la tranquilidad';
	$textGray['index'] = '<p>Cuando pensamos Calix Madrid, <br>pensamos un proyecto en el que quisieras vivir,<br> un lugar donde disfrutar cada momento de tu día.</p>';
	$textImageArea['left']['index'] = array(
		'titulo' => 'El Proyecto',
		'parrafo' => 'Diseño modero, espacios flexibles, ventanales de piso a techo, mucha luz natural.',
		'verMasLink' => 'el-proyecto.php',
		'verMasTitulo' => 'Ver más del proyecto',
		'imagenes' => array (
			'titulo' => 'El barrio',
			//'youtube' => '<iframe width="960" height="540" src="https://www.youtube.com/embed/bdwZODNzWqM?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
		)
	);
	$textImageArea['right']['index'] = array(
		'titulo' => 'San Fernando de Henares',
		'parrafo' => 'Un barrio en plena transformación.',
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
 
	$headTitulo['el-proyecto'] = 'El Proyecto | Calix Barrancas';
	$headDesc['el-proyecto'] = 'Calix Barrancas - El Proyecto. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['el-proyecto'] = 'proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$titulo['el-proyecto'] = 'Un diseño moderno, <br>ambientes luminosos, <br>una vida muy cómoda';
	$textGray['el-proyecto'] = '<p>Calix está diseñado pensando en tu comodidad y disfrute. Ya sea que elijas vivir solo, en familia o con amigos, en Calix M vas a encontrar espacios privados, espacios para socializar y todas las comodidades que estás buscando.</p>';
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
		
		'texto' => '<p>Diseñamos departamenots de 1 a 2 dormitorios pensando cada rincón, cada terminación. Ideales para que cress un "efecto parénteis" de lo cotidiano y construyas un mundo personal donde quieras vivir, disfrutar y relajarte.</p>',
		'caracteristicas' => array(
			'Cómodas cocheras',
			'Seguridad integrada',
			'Bajas expensas',
			'Diseño funcional',
			'Terminaciones de calidad',
			'Carpiterías de piso a techo',
			'Ascensore de Acero Inoxidable',
			'Excelente Accesibilidad hacia / desde el centro y el norte de la ciudad'
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
 
	$headTitulo['el-barrio'] = 'El Barrio | Calix Barrancas';
	$headDesc['el-barrio'] = 'Calix Barrancas - El Barrio. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['el-barrio'] = 'residencial, gastronómicas, paseos, comerciales, proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$titulo['el-barrio'] = 'Vivir a mano,<br>cerca de todo.';

	$textMapArea['el-barrio'] = array(
		'parrafo' => '',
		'coordenadas' => '1Elh79MRwFd_3KXTTb7C-erqDF0-6Ptv2'	
	);
	
	
	$position['el-barrio'] = array('textMapContent');

/* 
 * Disponibilidad 
 *
 ****/
	
	$headTitulo['disponibilidad'] = 'Disponibilidad | Calix Barrancas';
	$headDesc['disponibilidad'] = 'Calix Barrancas - Disponibilidad. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['disponibilidad'] = 'disponibilidad, proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

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
			'texto' => '<h3>Ing. Luis Martínez Di Virgilio<span>Desarrollo y Gerenciamiento Zoning</span></h3><p>Ingeniero civil con más de 28 años de experiencia en desarrollo y gestión de activos inmobiliarios. MDI de la universidad Politécnica de Madrid. Gerenció el desarrollo de más de 25 edificios de vivienda y oficinas.</p><h3>Arq. Diego Alchourrón<span>Desarrollo y Gerenciamiento Zoning</span></h3><p>Arquitecto, MDI de la Universidad Politécnica de Madrid y Martillero Público. Es profesor de Marketing en el Máster de Desarrollo inmobiliario de la UB (MDEI). Tiene más de 15 años de experiencia en desarrollo y comercialización de inmuebles.</p>'
		),
		array(
			'titulo' => 'Proyecto y Dirección',
			'logo' => 'ensalada.png',
			'alt' => 'ENSALADA - office for architecture and beyond',
			'texto' => '<h3>Arg. Diego Boyadjian<span>Arquitecto UBA</span></h3><p>Ha realizado proyectos residenciales, institucionales y corporativos. Entre ellos el 1º premio en el Concurso para el Corredor Turístico Puerto Madero - La Boca. Es profesor de diseño arquitectónico avanzado en la FADU de la UBA.</p>'
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
	)
	
?>
