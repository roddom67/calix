<?php
	include_once('contacto_seg.php');
	$newToken = generateFormToken('commentForm');
	
	include("../global-data.php");
	include("data.php");
	
	$pagina = 'contacto';
	$activoC = true;
	$navGris = true;
	include("head.php");
	
	include("template.php");
?>
