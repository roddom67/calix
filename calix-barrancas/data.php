<?php

/* 
 * titulo Proyecto 
 *
 ***/
	$proyecto = 'calix-barrancas';
	$proyectoNombre = 'Calix Barrancas';
	
	/* Paginas */
	/* Home */
	$headTitulo['index'] = 'Tu vida a 5 minutos de todo | Calix Barrancas';
	$headDesc['index'] = 'Calix Barrancas - Tu vida a 5 minutos de todo. Departamentos en el barrio de Barrancas. 54 911 4773 6619';
	
	$titulo['index'] = 'Tu vida<br>a 5 minutos<br>de todo.';
	$textGray['index'] = '<p>Cuando pensamos Calix 3 de Febrero, <br>pensamos un proyecto en el que quisieramos vivir, <br>un lugar donde disfrutar cada momento de tu día.</p>';
	$textImageArea['left']['index'] = array(
		'titulo' => 'El Proyecto',
		'parrafo' => 'Diseño moderno, espacios <br>flexibles, ventanales de piso <br>a techo, mucha luz natural.',
		'verMasLink' => 'el-proyecto.php',
		'verMasTitulo' => 'Ver más del proyecto'			
	);
	$textImageArea['right']['index'] = array(
		'titulo' => 'Barrancas',
		'parrafo' => 'Un barrio en plena <br>transformación',
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
	$headDesc['el-proyecto'] = 'Calix Barrancas - El Proyecto. Departamentos en el barrio de Barrancas. 54 911 4773 6619';
	
	$titulo['el-proyecto'] = 'Diseñado<br>para capturar <br>la luz y el aire';
	$textGray['el-proyecto'] = '<p>Calix está diseñado pensando en tu comodidad y disfrute. <br>Ya sea que elijas vivir solo, en familia o con amigos, en Calix 3F vas a <br>encontrar espacios privados, espacios para socializar y todas las <br>comodidades que estás buscando.</p>';
	$threeImagesArea['el-proyecto']= array(
		'imagenes' => array (
			array (
				'imagen' => 'el-proyecto-3f.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'el-proyecto-planta1.jpg',
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
			'Edificio de 4 plantas',
			'Terreno ancho',
			'Cómodas cocheras',
			'Ventanas de piso a techo',
			'Terminaciones de calidad ',
			'Agua caliente central',
			'Aire acondicionado (equipos no provistos)'
		),
		'sep' => false
	);
	$imagenMobile['el-proyecto'] = array(
		'imagen' => 'mobile/el_proyecto_img.jpg',
		'titulo' => ''
	);
	
	$position['el-proyecto'] = array('textGrayContent','threeImagesContent','galeriaContent','imagenMobileContent','caracteristicaContent');
	
/* 
 * Los departamentos
 *
 ****/
 
	$headTitulo['los-departamentos'] = 'Los Departamentos | Calix Barrancas';
	$headDesc['los-departamentos'] = 'Calix Barrancas - Los Departamentos. Departamentos en el barrio de Barrancas. 54 911 4773 6619';

	$titulo['los-departamentos'] = 'La suma<br>de sus detalles';
	$textGray['los-departamentos'] = '<p>Diseñamos departamentos de 1 a 2 dormitorios pensando cada rincón, <br>cada terminación. Ideales para crees un “efecto paréntesis”de lo <br>cotidiano y construyas un mundo personal donde quieras vivir, <br>disfrutar y relajarte</p>';
	
	$threeImagesArea['los-departamentos']= array(
		'imagenes' => array (
			array (
				'imagen' => 'palmas.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'personas.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'sillon.jpg',
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
			'Edificio de 4 plantas',
			'Terreno ancho',
			'Cómodas cocheras',
			'Ventanas de piso a techo',
			'Terminaciones de calidad ',
			'Agua caliente central',
			'Aire acondicionado (equipos no provistos)'
		),
		'sep' => false
	);
		
	$position['los-departamentos'] = array('textGrayContent','threeImagesContent','galeriaContent','caracteristicaContent');
	
/* 
 * EL Barrio 
 *
 ****/
 
	$headTitulo['el-barrio'] = 'El Barrio | Calix Barrancas';
	$headDesc['el-barrio'] = 'Calix Barrancas - El Barrio. Departamentos en el barrio de Barrancas. 54 911 4773 6619';

	$titulo['el-barrio'] = 'Tu vida<br>a 5 minutos de todo<br>lo que te gusta';
	$textGray['el-barrio'] = '<p>Nuñez es un barrio en transformación, está re inventandose. Es un nuevo polo gastronómico con restaurantes y bares, zonas comerciales y de entretenimiento. Cuenta con un sólido centro de educación primario, secundaria y universitaria. En Buenos Aires no hay otro lugar como este. Sumale las zonas verdes, los extensos enlaces de transporte, los famosos mercados de alimentos, transforman este barrio en un destino tan atractivo y conveniente. Todo esto a solo 5 minutos.</p>';
	
	$threeImagesArea['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'praline.jpg',
				'titulo' => '',
				'video' => '<video width="100%" poster="video/video.jpg" height="auto" controls>
                            <source src="video/video.mp4" type="video/mp4">
                            <source src="video/video.ogg" type="video/ogg">
                            <source src="images/empresa/video.webm" type="video/webm">
                            Your browser does not support the video tag.
                        </video>'
			),
			array (
				'imagen' => 'nunez-buenos-aires.jpg',
				'titulo' => 'Barrancas Buenos Aires'
			),
			array (
				'imagen' => 'chico-bar.jpg',
				'titulo' => ''
			)
		)
	);
	$textDosTresImageArea['right']['el-barrio'] = array(
		'parrafo' => '<span>Un Barrio diferente</span>Barrancas es un barrio en transformación, está re inventándose. Es un nuevo polo comercial, gastronómico y educativo.  Cuenta con restaurantes,  bares y zonas comerciales, y con diferentes establecimientos de educación primarios, secundarios y universitarios del más alto nivel.'			
	);

	$textDosTresImageArea['left']['el-barrio'] = array(
		'parrafo' => 'En Buenos Aires no hay otro lugar como este. Sumale a eso las zonas verdes, los innumerables enlaces de transporte, los famosos mercados de alimentos, que transforman a este barrio en un destino tan deseable, atractivo y conveniente.<span>Todo esto a 5 minutos.</span>'
	);
	
	$textMapArea['el-barrio'] = array(
		'titulo' => 'Cerca de todo lo que te gusta',
		'listado' => array(
			array(
				'titulo' => 'Restaurantes y bares',
				'lugares' => array(
					'1_Francis Platz',
					'2_ Chef Leon',
					'3_Taco box',
					'4_POE',
					'5_Solomia Parrilla',
					'6_Tres',
					'7_Praline',
					'8_La Escondida Parrilla',
					'9_AMMO',
					'10_Botanica'
				)
			),
			array(
				'titulo' => 'Interés general',
				'lugares' => array(
					'11_Centro Cultural Julio Cortázar',
					'12_Plaza Aberti',
					'13_Farmacity',
					'14_Carrefour',
					'15_Megatlon',
					'16_Futbol Urbano',
					'17_Comisaria 35'
				)
			),
			array(
				'titulo' => 'Educación',
				'lugares' => array(
					'18_Universidad Di Tella',
					'19_Escuela Aula XXI',
					'20_Escuela Ort Escuela Normal',
					'21_UHS United High School',
					'22_Barrancas Uno',
					'23_Jacarandá',
					'24_General San Martín',
					'25_Instituto José Ingenieros',
					'26_Wolfsohn',
					'27_UAI',
					'28_ICEBA '
				)
			),
			array(
				'titulo' => 'Salud',
				'lugares' => array(
					'29_Fundación Fleni',
					'30_CBA Inst. Cardiovascular de BA',
					'31_Stamboulian Servicio Medico'
				)
			)
		),
		'parrafo' => '',
		'coordenadas' => '1d5yi85fPdq-vDJUia6l0iYELK1QW1dRn'	
	);
	
	$twoImagesMiddleTextArea['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'tres-cafe.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'mural.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'big-party.jpg',
				'titulo' => ''
			)
		)
	);
	$threeImagesArea_1['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'cruce.jpg',
				'titulo' => '',
			),
			array (
				'imagen' => 'transporte.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'todo-a.jpg',
				'titulo' => ''
			)
		)
	);
	$threeImagesArea_2['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'subte.jpg',
				'titulo' => '',
			),
			array (
				'imagen' => 'frutas.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'cerveza.jpg',
				'titulo' => ''
			)
		)
	);
	
	$position['el-barrio'] = array('threeImagesContent','textDosTresImageRightContent','textMapContent','twoImagesMiddleTextContent','textDosTresImageLeftContent','threeImages1Content','threeImages2Content');
	
	
/* 
 * Disponibilidad 
 *
 ****/
	
	$headTitulo['disponibilidad'] = 'Disponibilidad | Calix Barrancas';
	$headDesc['disponibilidad'] = 'Calix Barrancas - Disponibilidad. Departamentos en el barrio de Barrancas. 54 911 4773 6619';

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