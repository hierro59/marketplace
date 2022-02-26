<?php
include 'sistema/funciones.php';
include 'sistema/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>Market Place | Venezuela</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo $url; ?>images/favicon.png">
	<!-- Web Font -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/mi-estilo.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>


</head>

<body class="js">

<?php 
if (!empty($alert)) { alerts($alert, $code); }
include 'sistema/header.php'; 
?>

	<!-- Hero -->
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-12">
					<!-- Search Form -->
					<div class="search-top">
						<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
						<!-- Search Form -->
						<div class="search-top">
							<form>
								<div class="form-group search-form">
									<input type="text" placeholder="Buscar..." name="search">
									<button class="btnn" value="search" type="submit"><i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!--/ End Search Form -->
					</div>
					<!--/ End Search Form -->
					<div class="mobile-nav"></div>
				</div>
				<div class="col-lg-8 col-md-7 col-12">
					<div class="hero-content-area">
						<div class="hero-content-title">
							<h1>MarketPlace</h1>
						</div>
						<div class="hero-content-description">
							<h4>Lo que quieras, en tu puerta.</h4>
						</div>
						<div class="search-bar-top mt-8">
							<div class="search-bar">
								<select>
                                          <option value="" disabled selected>Categorías</option>
                                          <option value="1">Celulares</option>
                                          <option value="2">Accesorios para vehículos</option>
                                          <option value="3">Agro</option>
                                          <option value="4">Alimentos y bebidas</option>
                                          <option value="5">Animales y Mascotas</option>
                                          <option value="6">Antigüedades y Colecciones</option>
                                          <option value="7">Arte, Papelería y Mercería</option>
                                          <option value="8">Cámaras y Accesorios</option>
                                          <option value="9">Computación</option>
                                          <option value="10">Consolas y Videojuegos</option>
                                          <option value="11">Construcción</option>
                                          <option value="12">Música, Películas y Series</option>
                                          <option value="13">Instrumentos musicales</option>
                                          <option value="14">Ropa, Zapatos y Accesorios</option>
                                          <option value="15">Libros, Revistas y Comics</option>
                                          <option value="16">Relojes, Joyas y Bisutería</option>
                                          <option value="17">Deportes y Fitness</option>
                                          <option value="18">Hogar y Muebles</option>
                                          <option value="19">Industrias</option>
                                          <option value="20">Herramientas</option>
                                          <option value="21">Estética y Belleza</option>
                                          <option value="22">Electrónica, Audio y Video</option>
                                        </select>
								<form class="form-group">
									<input name="search" placeholder="Busca productos, marcas, y más..." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Hero -->

	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fa fa-credit-card"></i>
						<h4>Promociones</h4>
						<p>Mejores promociones día a día.</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fa fa-cogs"></i>
						<h4>Garantía</h4>
						<p>Si los productos tienen problemas.</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>A menos de 49.9$</h4>
						<p>Los mejores precios en productos.</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fa fa-gift"></i>
						<h4>Lo nuevo</h4>
						<p>En nuestros productos.</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	<!-- Start Most Popular -->
		<?php include 'sistema/nuevos-articulos.php'; ?>
	<!-- End Most Popular Area -->

	<!-- Banner Ads -->
	<section class="">
		<div class="container">
		</div>
	</section>
	<!-- End Banner Ads -->

	<!-- Social Area -->
	<section class="social-area section sec wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="social-area-content">
						<a href="#" target="_blank">
							<i class="fa fa-whatsapp" style="color: #4ac959;"></i>
							<h4>WhatsApp</h4>
							<p>¡Envíanos un mensaje!</p>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="social-area-content">
						<a href="#" target="_blank">
							<i class="fa fa-instagram" style="color: #e1306c;"></i>
							<h4>Instagram</h4>
							<p>¡Siguenos en Instagram!</p>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="social-area-content">
						<a href="#" target="_blank">
							<i class="fa fa-facebook" style="color: #5cc5ff;"></i>
							<h4>Facebook</h4>
							<p>¡Siguenos en Facebook!</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Social Area -->

	<!-- Start Footer Area -->
	<footer class="footer">
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="text-center">
								<p>Copyright © 2021 <a href="#" target="_blank"> Market Place | Venezuela.</a> - Todos
									los derechos
									reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	

	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>

</html>