<?php
include '../sistema/funciones.php';
noUserLvl1();
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
	<title>Vender | Market Place Venezuela</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo $url;?>images/favicon.png">
	<!-- Web Font -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo $url;?>css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo $url;?>css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo $url;?>css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo $url;?>css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="<?php echo $url;?>css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="<?php echo $url;?>css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="<?php echo $url;?>css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="<?php echo $url;?>css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo $url;?>css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="<?php echo $url;?>css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="<?php echo $url;?>css/reset.css">
	<link rel="stylesheet" href="<?php echo $url;?>css/style.css">
	<link rel="stylesheet" href="<?php echo $url;?>css/responsive.css">


</head>

<body class="js">


	<!-- Header -->
		<?php include '../sistema/header.php'; ?>
	<!--/ End Header -->

	<section class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-12">
					<div class="mobile-nav"></div>
				</div>
			</div>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Publicar</li>
				</ol>
			</nav>
			<h2><b>¡Hola!</b> Antes que nada cuéntanos. ¿Qué deseas publicar?</h2>
		</div>
	</section>

	<section class="post-products-area text-center">
		<div class="container">
			<div class="row row-sm">
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<div href="#" class="card card-sm card-product-grid">
						<a href="productos/" class="post-products-area-image">
							<img src="<?php echo $url;?>images/ct1.webp">
						</a>
						<figcaption class="post-products-area-content info-wrap">
							<a href="productos/" class="post-products-area-title">
								<h4>
									Productos
								</h4>
							</a>
						</figcaption>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<div href="#" class="card card-sm card-product-grid">
						<a href="#" class="post-products-area-image">
							<img src="<?php echo $url;?>images/ct2.webp">
						</a>
						<figcaption class="post-products-area-content info-wrap">
							<a href="#" class="post-products-area-title text-center">
								<h4>
									Vehículos
								</h4>
							</a>
						</figcaption>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<div href="#" class="card card-sm card-product-grid">
						<a href="#" class="post-products-area-image">
							<img src="<?php echo $url;?>images/ct3.webp">
						</a>
						<figcaption class="post-products-area-content info-wrap">
							<a href="#" class="post-products-area-title text-center">
								<h4>
									Inmuebles
								</h4>
							</a>
						</figcaption>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<div href="#" class="card card-sm card-product-grid">
						<a href="#" class="post-products-area-image">
							<img src="<?php echo $url;?>images/ct4.webp">
						</a>
						<figcaption class="post-products-area-content info-wrap">
							<a href="#" class="post-products-area-title text-center">
								<h4>
									Servicios
								</h4>
							</a>
						</figcaption>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<div href="#" class="card card-sm card-product-grid">
						<a href="#" class="post-products-area-image">
							<img src="<?php echo $url;?>images/ct5.png">
						</a>
						<figcaption class="post-products-area-content info-wrap">
							<a href="#" class="post-products-area-title text-center">
								<h4>
									Tecnología
								</h4>
							</a>
						</figcaption>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<div href="#" class="card card-sm card-product-grid">
						<a href="#" class="post-products-area-image">
							<img src="<?php echo $url;?>images/ct6.jpg">
						</a>
						<figcaption class="post-products-area-content info-wrap">
							<a href="#" class="post-products-area-title text-center">
								<h4>
									Otros
								</h4>
							</a>
						</figcaption>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Footer Area -->
		<?php include '../sistema/footer.php'; ?>
	<!-- /End Footer Area -->

	<!-- Jquery -->
	<script src="<?php echo $url;?>js/jquery.min.js"></script>
	<script src="<?php echo $url;?>js/jquery-migrate-3.0.0.js"></script>
	<script src="<?php echo $url;?>js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo $url;?>js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo $url;?>js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="<?php echo $url;?>js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo $url;?>js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo $url;?>js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo $url;?>js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo $url;?>js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="<?php echo $url;?>js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo $url;?>js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo $url;?>js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo $url;?>js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo $url;?>js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="<?php echo $url;?>js/easing.js"></script>
	<!-- Active JS -->
	<script src="<?php echo $url;?>js/active.js"></script>
</body>

</html>