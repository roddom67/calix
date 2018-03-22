<nav class="navbar <?php if(isset($navGris)){ echo 'navGris' ;} ?>">
	<a class="navbar-brand " href="../calix-nunez/"><span>Calix Núñez</span></a>
	<button class="navbar-toggler menu-toggle" aria-controls="main-menu" aria-expanded="false">
	 	<span class="menu-toggle-box"><span class="menu-toggle-inner"></span></span>
	</button>

  <div class="collapse " id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item <?php if(isset($activoH)){ echo 'active'; } ?>">
        <a class="nav-link" href="../calix-nunez/" title="Calix Núñez">Home</a>
      </li>
      <li class="nav-item <?php if(isset($activoEP)){ echo 'active'; } ?>">
        <a class="nav-link" href="el-proyecto.php" title="El Proyecto">El proyecto</a>
      </li>
      <li class="nav-item <?php if(isset($activoLD)){ echo 'active'; } ?>">
        <a class="nav-link" href="los-departamentos.php">Los departamentos</a>
      </li>
      <li class="nav-item <?php if(isset($activoEB)){ echo 'active'; } ?>">
        <a class="nav-link " href="el-barrio.php">El barrio</a>
      </li>
      <li class="nav-item <?php if(isset($activoD)){ echo 'active'; } ?>">
        <a class="nav-link " href="#">Disponibilidad</a>
      </li>
      <li class="nav-item <?php if(isset($activoC)){ echo 'active'; } ?>">
        <a class="nav-link " href="#">Contacto</a>
      </li>
      <li class="nav-item <?php if(isset($activoEE)){ echo 'active'; } ?>">
        <a class="nav-link " href="#">El equipo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../" title="Otros Calix">Otros Calix</a>
      </li>
    </ul>
  </div>
</nav>