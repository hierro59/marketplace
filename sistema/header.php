<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i>(58) 412 - 5202049</li>
								<li><i class="ti-email"></i> support@email.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-7 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<?php
								if (isset($_SESSION['id'])) {
									$headerUser = getUser($_SESSION['id']);
	  								echo '<li><i class="ti-user"></i> <a class=""
										href="'.$url.'perfil">'.$headerUser['nombre'].' '.$headerUser['apellido'].'</a></li>
										<li><i class="fa fa-sign-out"></i> <a class=""
										href="'.$url.'login/logout">Salir</a></li>';
								}else{
									echo '<li><i class="ti-user"></i> <a class="popup-with-form"
										href="#test-form">Acceder/Registrarse</a></li>';
								}
								 ?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->

		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<?php $getAlimentos = viweNavBar($link, 4); ?>
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>MarketPlace</h3>
								<ul class="main-category" style="">
									<li class="main-mega" style="<?php if (empty($getAlimentos)) { echo 'display:  none'; }	?>"><a href="#">Alimentos y bebidas <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
								<?php 
									while ($regAlimentos = mysqli_fetch_assoc($getAlimentos)) {
									  echo '<li class="single-menu">
												<a href="'.$url.'articulo/?cod='.$regAlimentos['codigo'].'"><div class="image">
													<img class="default-img" src="'.$url.'images/productos/'.$regAlimentos['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
													<span style="color: #111;">'.$regAlimentos['name'].'</span>
												</div></a>
											</li>';
									}
								?>
										</ul>
									</li>
								<?php $getElectronica = viweNavBar($link, 22); ?>
									<li class="main-mega" style="<?php if (empty($getElectronica)) { echo 'display:  none'; }	?>"><a href="#">Electrónica, audio y vídeo <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
								<?php 
									while ($regElectronica = mysqli_fetch_assoc($getElectronica)) {
									  echo '<li class="single-menu">
												<a href="'.$url.'articulo/?cod='.$regElectronica['codigo'].'"><div class="image">
													<img class="default-img" src="'.$url.'images/productos/'.$regElectronica['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
													<span style="color: #111;">'.$regElectronica['name'].'</span>
												</div></a>
											</li>';
									}
								?>
										</ul>
									</li>
								<?php $getEstetica = viweNavBar($link, 21); ?>
									<li class="main-mega" style="<?php if (empty($getEstetica)) { echo 'display:  none'; }	?>"><a href="#">Estética y belleza <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
								<?php 
									while ($regEstetica = mysqli_fetch_assoc($getEstetica)) {
									  echo '<li class="single-menu">
												<a href="'.$url.'articulo/?cod='.$regEstetica['codigo'].'"><div class="image">
													<img class="default-img" src="'.$url.'images/productos/'.$regEstetica['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
													<span style="color: #111;">'.$regEstetica['name'].'</span>
												</div></a>
											</li>';
									}
								?>
										</ul>
									</li>
								<?php $getHogar = viweNavBar($link, 18); ?>
									<li class="main-mega" style="<?php if (empty($getHogar)) { echo 'display:  none'; }	?>"><a href="#">Hogar y muebles <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
									<?php 
									while ($regHogar = mysqli_fetch_assoc($getHogar)) {
									  echo '<li class="single-menu">
												<a href="'.$url.'articulo/?cod='.$regHogar['codigo'].'"><div class="image">
													<img class="default-img" src="'.$url.'images/productos/'.$regHogar['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
													<span style="color: #111;">'.$regHogar['name'].'</span>
												</div></a>
											</li>';
									}
								?>
										</ul>
									</li>
								<?php $getCamaras = viweNavBar($link, 8); ?>
									<li class="main-mega" style="<?php if (empty($getCamaras)) { echo 'display:  none'; }	?>"><a href="#">Cámaras y accesorios <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
									<?php 
									while ($regCamaras = mysqli_fetch_assoc($getCamaras)) {
									  echo '<li class="single-menu">
												<a href="'.$url.'articulo/?cod='.$regCamaras['codigo'].'"><div class="image">
													<img class="default-img" src="'.$url.'images/productos/'.$regCamaras['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
													<span style="color: #111;">'.$regCamaras['name'].'</span>
												</div></a>
											</li>';
									}
								?>
										</ul>
									</li>
									<li><a href="<?php echo $url; ?>productos/?category=1">Smartphone</a></li>
									<li><a href="<?php echo $url; ?>productos/?category=9">Laptops</a></li>
									<li><a href="<?php echo $url; ?>productos/?category=9">Mini PC's</a></li>
									<li><a href="<?php echo $url; ?>productos/?category=9">Monitores</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav">
												<li class="active"><a href="<?php echo $url;?>">Inicio</a></li>
												<li><a href="<?php echo $url;?>productos">Categorías</a></li>
												<li><a href="<?php echo $url;?>productos?f=ofertas">Ofertas
														<span class="new">50%</span>
													</a>
												</li>
												<li><a href="<?php echo $url;?>productos?f=nuevos">Exclusivos
														<span class="new">Nuevo!</span>
													</a>
												</li>
												<li><a href="<?php echo $url;?>productos?f=marcas">Marcas</a></li>
												<li><a href="<?php echo $url;?>productos?f=vip">Tiendas</a></li>
												<li><a href="#">Contactos</a></li>
												<li><a href="<?php echo $url;?>vender" class="btn-primary" style="margin-top: 5%; border-radius: 5px;">Vender</a></li>
											</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	<!-- form Area-->
	<form id="test-form" class="white-popup-block mfp-hide" action="<?php echo $url; ?>login/u-validar.php" method="POST">

		<div class="popup-area-login">
			<div class="popup-area-login-content">
				<div class="popup-area-login-header">
					<h3>Inicia Sesión</h3>
				</div>
				<div class="popup-area-login-form">
					<div class="row">
						<div class="col-xl-12">
							<input type="mail" name="username" placeholder="Correo electrónico" required>
						</div>
						<div class="col-xl-12">
							<input type="password" name="password" placeholder="Contraseña" required>
						</div>
						<?php if (isset($_GET['err']) && $_GET['err'] == '003') {
                        	echo '<div class="form-group col-md-12" style="background-color: red; padding: 1%;">
		                        	<span class="" style="color: #fff; font-weight: 700;">Contraseña incorrecta</span>
		                          </div>';
                        } ?>
						<div class="col-xl-12">
							<button type="submit" class="btn btnn">Acceder</button>
						</div>
						<div class="col-xl-12 mt-4">
							<div><a href="">¿Olvidaste tu contraseña?</a></div>
						</div>
						<?php 
							if ($_SERVER['REQUEST_URI'] != '/ecommerce/sign-up/') {
								echo '<div class="col-xl-12 mt-2">
										<div><a href="sign-up">¿No tienes cuenta? Registrate</a></div>
									  </div>';
							}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- form Area end -->