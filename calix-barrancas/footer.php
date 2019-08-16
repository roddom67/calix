<?php
	include('../global-data.php');
?>
<footer>
	<div class="container-fluid">
		<div class="footerTop">
  			<ul class="row addressFooter">
  				<?php
  					for($d=0; $d<count($direcciones); $d++){
  				?>
  				<li class="col-6 col-sm-4 col-md-3 col-xl-2">
  					<a href="<?php echo $direcciones[$d]['link']; ?>" 
  						title="<?php echo $direcciones[$d]['titulo']; ?>" 
  						class="logosFooter <?php echo $direcciones[$d]['logo']; ?>">
  						<span><?php echo $direcciones[$d]['titulo']; ?></span>
  					</a>
  					<p><?php echo $direcciones[$d]['direccion']; ?></p>
  				</li>
  				<?php
  					}
  				?>
  			</ul>
		</div>
		<div class="footerBottom">
			<ul class="legalesArea row">
				<!-- <li class="cols">
					<a href="" title="Créditos" class="">Créditos</a>
				</li>
				<li class="cols">
					<a href="" title="Legal" class="">Legal</a>
				</li> -->
				<li class="cols">
					<a href="" title="Bajar Brochure" class="">Bajar Brochure</a>
				</li>
				<li class="cols">
					<small>Todos los derechos Reservados</small>
				</li>
			</ul>
		</div>
  		
	</div>
	
</footer>

<!--script type="text/javascript" src="../js/jquery.js"></script-->
<script type="text/javascript" src="../js/jquery-3.3.1.min.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="../js/popper.min.js?v=<?php echo $v; ?>"></script>
<!-- script type="text/javascript" src="../js/bootstrap.min.js"></script -->
<script type="text/javascript" src="../js/jquery.bxslider.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js?v=<?php echo $v; ?>"></script>

<script type="text/javascript" src="../js/funciones.js?v=<?php echo $v; ?>"></script>