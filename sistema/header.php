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

								include 'conexion.php';

								if (isset($_SESSION['id'])) {
									$id = $_SESSION['id'];

									$sql = mysqli_query($link,"SELECT nombre, apellido FROM usuarios_confirmados WHERE id = '$id'");
	  								$reg = mysqli_fetch_array($sql);


	  								echo '<li><i class="ti-user"></i> <a class=""
										href="'.$url.'perfil">'.$reg['nombre'].' '.$reg['apellido'].'</a></li>
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
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>MarketPlace</h3>
								<ul class="main-category">
									<li class="main-mega"><a href="#">Componentes de PC <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">Perifericos <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">Equipos de Trabajo <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">Conectividad <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
										</ul>
									</li>
									<li class="main-mega"><a href="#">hogar & departamento <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#">Equipos de Venta</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Licencias de Software</a></li>
									<li><a href="#">Mini PC's</a></li>
									<li><a href="#">Monitores</a></li>
									<li><a href="#">UPS, Estabilizadores, Supresores </a></li>
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