<?php

/* 
 * titulo Proyecto 
 *
 ***/
	$proyecto = 'calix-nunez';
	$proyectoNombre = 'calix-nunez';
	
	/* Paginas */
	/* Home */
	$headTitulo['index'] = 'Tu vida a 5 minutos de todo | Calix Núñez';
	$headDesc['index'] = 'Calix Núñez - Tu vida a 5 minutos de todo. Departamentos en el barrio de Núñez. 54 911 4773 6619';
	
	$titulo['index'] = 'Tu vida a 5 minutos de todo.';
	$textGray['index'] = '<p>Cuando pensamos Calix 3 de Febrero, pensamos un proyecto en el que quisieramos vivir, un lugar donde disfrutar cada momento de tu día.</p>';
	$textImageArea['left']['index'] = array(
		'titulo' => 'El Proyecto',
		'parrafo' => 'Diseño moderno, espacios flexibles, ventanales de piso a techo, mucha luz natural.',
		'verMasLink' => 'el-proyecto.php',
		'verMasTitulo' => 'Ver más del proyecto'			
	);
	$textImageArea['right']['index'] = array(
		'titulo' => 'Núñez',
		'parrafo' => 'Un barrio en plena transformación',
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
		
	$position['index'] = array('textGrayContent','textImageLeftContent','textImageRightContent','galeriaContent');
			
/* 
 * El proyecto
 *
 ***/
 
	$headTitulo['el-proyecto'] = 'El Proyecto | Calix Núñez';
	$headDesc['el-proyecto'] = 'Calix Núñez - El Proyecto. Departamentos en el barrio de Núñez. 54 911 4773 6619';
	
	$titulo['el-proyecto'] = 'Diseñado para capturar<br>lux y aire';
	$textGray['el-proyecto'] = '<p>Calix está diseñado para la máxima habitabilidad, flexibilidad y seguridad. Ya sea que elijas vivir solo, en familia o con amigos, en Calix 3F vas a encontrar espacios privados, espacio para socializar y todas las comodidades que estás buscando.</p>';
	$galeriaArea['el-proyecto'] = array(
		'imagenes' => array (
			array (
				'imagen' => 'galeria_0.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_2.jpg',
				'titulo' => ''
			)
		)
	);
	$caracteristicasArea['el-proyecto'] = array(
		'titulo' => 'Características generales',
		'caracteristicas' => array(
			'20 metros de frente',
			'Vista abierta al Frente y Contrafrente',
			'Edificio de 7 plantas',
			'Acceso de doble altura',
			'Ventanas de piso a techo',
			'Todos los ambientes externos',
			'Cocheras y espacio para motos y bicicletas',
			'Salón de usos múltiples',
			'Solarium con duchones de refresco',
			'Bauleras',
			'Laundry',
			'Cocheras y espacio para motos y bicicletas',
			'Salón de usos múltiples',
			'Solarium con duchones de refresco',
			'Bauleras',
			'Laundry'
		)
	);
	$position['el-proyecto'] = array('textGrayContent','galeriaContent','caracteristicaContent');
	
/* 
 * Los departamentos
 *
 ****/
 
	$headTitulo['los-departamentos'] = 'Los Departamentos | Calix Núñez';
	$headDesc['los-departamentos'] = 'Calix Núñez - Los Departamentos. Departamentos en el barrio de Núñez. 54 911 4773 6619';

	$titulo['los-departamentos'] = 'La suma de sus detalles';
	$textGray['los-departamentos'] = '<p>Diseñamos departamentos de 1 a 2 dormitorios pensando cada rincón, cada terminación. Ideales para crear un <em>“efecto paréntesis”</em> de lo cotidiano y construir una ambiente personal donde quieras vivir, disfrutar y relajarte.</p>';
	
	$threeImagesArea['los-departamentos']= array(
		'imagenes' => array (
			array (
				'imagen' => 'plantas.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'personas.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'lampara.jpg',
				'titulo' => ''
			)
		)
	);
	$galeriaArea['los-departamentos'] = array(
		'imagenes' => array (
			array (
				'imagen' => 'galeria_0.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_2.jpg',
				'titulo' => ''
			)
		)
	);
	$caracteristicasArea['los-departamentos'] = array(
		'titulo' => 'Características generales',
		'caracteristicas' => array(
			'20 metros de frente',
			'Vista abierta al Frente y Contrafrente',
			'Edificio de 7 plantas',
			'Acceso de doble altura',
			'Ventanas de piso a techo',
			'Todos los ambientes externos',
			'Cocheras y espacio para motos y bicicletas',
			'Salón de usos múltiples',
			'Solarium con duchones de refresco',
			'Bauleras',
			'Laundry',
			'Cocheras y espacio para motos y bicicletas',
			'Salón de usos múltiples',
			'Solarium con duchones de refresco',
			'Bauleras',
			'Laundry'
		)
	);
		
	$position['los-departamentos'] = array('textGrayContent','threeImagesContent','galeriaContent','caracteristicaContent');
	
/* 
 * EL Barrio 
 *
 ****/
 
	$headTitulo['el-barrio'] = 'El Barrio | Calix Núñez';
	$headDesc['el-barrio'] = 'Calix Núñez - El Barrio. Departamentos en el barrio de Núñez. 54 911 4773 6619';

	$titulo['el-barrio'] = 'Tu vida a 5 minutos de todo lo que te gusta';
	$textGray['el-barrio'] = '<p>Nuñez es un barrio en transformación, está re inventandose. Es un nuevo polo gastronómico con restaurantes y bares, zonas comerciales y de entretenimiento. Cuenta con un sólido centro de educación primario, secundaria y universitaria. En Buenos Aires no hay otro lugar como este. Sumale las zonas verdes, los extensos enlaces de transporte, los famosos mercados de alimentos, transforman este barrio en un destino tan atractivo y conveniente. Todo esto a solo 5 minutos.</p>';
	
	$threeImagesArea['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'jacaranda.jpg',
				'titulo' => '',
				'video' => '<video width="100%" poster="video/video.jpg" height="auto" controls>
                            <source src="video/video.mp4" type="video/mp4">
                            <source src="video/video.ogg" type="video/ogg">
                            <source src="images/empresa/video.webm" type="video/webm">
                            Your browser does not support the video tag.
                        </video>'
			),
			array (
				'imagen' => 'mural.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'deli_sushi.jpg',
				'titulo' => ''
			)
		)
	);

	$galeriaArea['el-barrio'] = array(
		'imagenes' => array (
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_2.jpg',
				'titulo' => ''
			)
		)
	);
	
	$oneImagesArea['el-barrio'] = array(
		'imagen' => 'mapa.jpg',
		'titulo' => ''
	);
		
	$textMapArea['el-barrio'] = array(
		'titulo' => 'Cerca de todo lo que te gusta',
		'listado' => array(
			array(
				'titulo' => 'Restaurantes y bares',
				'lugares' => array(
					'Francis Plats',
					'Chef Leon',
					'Taco box',
					'POE',
					'Solomia Parrilla',
					'El Pollo Gomez',
					'Luzmala Bar',
					'La Escondida Parrilla',
					'Mc Donald´s',
					'Los Arribeños'
				)
			),
			array(
				'titulo' => 'Interés general',
				'lugares' => array(
					'Supermercado Jumbo',
					'Ferretería Luciano',
					'Patio Los Alces'
				)
			),
			array(
				'titulo' => 'Educación',
				'lugares' => array(
					'Inst. Ind. Luis A. Puerto',
					'UB Universidad de Belgrano',
					'Colegio Las Adoratrices'
				)
			),
			array(
				'titulo' => 'Salud',
				'lugares' => array(
					'Fundación Fleni',
					'CBA Inst. Cardiovascular BA',
					'Stambulian Servicio Médico'
				)
			)
		),
		'parrafo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.',
		'coordenadas' => '1lSuBloUUNKWySzEPyXK5lIMJaM6ixBXS'			
	);
	
	$twoImagesMiddleTextArea['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'jacaranda.jpg',
				'titulo' => ''
			),
			array (
				'text' => 'En Buenos Aires no hay otro lugar como este. Smale a eso las zonas verdes, los innumerables enlaces de transporte, los famosos mercados de alimentos, que transforman a este barrio en un destino tan deseable, atractivo y conveniente. Todo esto a solo 5 minutos.'
			),
			array (
				'imagen' => 'deli_sushi.jpg',
				'titulo' => ''
			)
		)
	);
	
	$position['el-barrio'] = array('threeImagesContent','textGrayContent','oneImagesContent','textMapContent','twoImagesMiddleTextContent','galeriaContent');
	
	
/* 
 * Disponibilidad 
 *
 ****/
	
	$headTitulo['disponibilidad'] = 'Disponibilidad | Calix Núñez';
	$headDesc['disponibilidad'] = 'Calix Núñez - Disponibilidad. Departamentos en el barrio de Núñez. 54 911 4773 6619';

	$tituloG['disponibilidad'] = 'Disponibilidad';
	$textGray['disponibilidad'] = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>';
	
	$disponibilidad['disponibilidad'] = array(
			array(
				'piso' => 0,
				'titulo' => 'Planta Baja / Cocheras',
				'planos' => true,
				'deptos' => array(
					array('Planta Baja / Cocheras','12 + 1 Cocheras','Cocheras.pdf')
				)
			),
			array(
				'piso' => 1,
				'titulo' => 'Piso 1',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 101 - Frente',
						'2 dormitorios / 2 baños completos / Espacio de lavado / Terraza / Patio',
						'101.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza 5,1 m2',
						'Patio 14.4 m2',
						'Superficie total: 86,5 m2'
					),
					array(
						'Depto 102 - Frente',
						'2 dormitorios / 2 baños completos / Espacio de lavado / Terraza / Patio',
						'102.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza 5,1 m2',
						'Patio 14.4 m2',
						'Superficie total: 86,5 m2'
					),
					array(
						'Depto 103 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza / Patio',
						'103.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza 4,8 m2',
						'Patio 14.4 m2',
						'Superficie total: 71,2 m2'
					),
					array(
						'Depto 104 - Contrafrente',
						'1  Dormitorio / 2 Baños / Terraza / Patio',
						'104.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza 4,8 m2',
						'Patio 14.4 m2',
						'Superficie total: 71,2 m2'
					)
				),
				'show' => true
			),
			array(
				'piso' => 2,
				'titulo' => 'Piso 2',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 201 - Frente',
						'2 Dormitorios / 2 Baños / Balcón',
						'201.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza 5,1 m2',
						'Superficie total: 72,1 m2'
					),
					array(
						'Depto 202 - Frente',
						'2 Dormitorios / 2 Baños / Balcón',
						'202.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 72,1 m2'
					),
					array(
						'Depto 203 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza',
						'203.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza 4,8 m2',
						'',
						'Superficie total: 56,8 m2'
					),
					array(
						'Depto 204 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza',
						'204.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza 4,8 m2',
						'',
						'Superficie total: 56,8 m2'
					)
				)
			),
			array(
				'piso' => 3,
				'titulo' => 'Piso 3',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 301 - Frente',
						'2 Dormitorios / 2 Baños / Terraza',
						'301.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 72,1 m2'
					),
					array(
						'Depto 302 - Frente',
						'2 Dormitorios / 2 Baños / Terraza',
						'302.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 72,1 m2'
					),
					array(
						'Depto 303 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza',
						'303.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza 4,8 m2',
						'Superficie total: 56,8 m2'
					),
					array(
						'Depto 304 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza',
						'304.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza 4,8 m2',
						'',
						'Superficie total: 56,8 m2'
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
						'2 Dormitorios / 2 Baños / Terraza 1 / Terraza 2',
						'401.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza A 5,1 m2',
						'Terraza B 65 m2',
						'Superficie total: 137,1 m2'
					),
					array(
						'Depto 402 - Frente',
						'2 Dormitorios / 2 Baños / Terraza A / Terraza B',
						'402.pdf',
						'Superficie Cubierta 67 m2',
						'Terraza A 5,1 m2',
						'Terraza B 65 m2',
						'Superficie total: 137,1 m2'
					),
					array(
						'Depto 403 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza A / Terraza B',
						'403.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza A 4,8 m2',
						'Terraza B 47 m2',
						'Superficie total: 103,8 m2'
					),
					array(
						'Depto 404 - Contrafrente',
						'1 Dormitorio / 2 Baños / Terraza A / Terraza B',
						'404.pdf',
						'Superficie Cubierta 52 m2',
						'Terraza A 4,8 m2',
						'Terraza B 47 m2',
						'Superficie total: 103,8 m2'
					)
				)
			)
		);
	
	$position['disponibilidad'] = array('disponibilidadContent');
	

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