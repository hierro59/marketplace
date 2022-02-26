<?php
include '../sistema/funciones.php';
include '../sistema/conexion.php';
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
	<title>Productos | Market Place | Venezuela</title>
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
			<h2>Catálogo de Ofertas</h2>
		</div>
	</section>

	<section class="offers-area">
		<div class="container">
			<div class="row">
				<aside class="col-md-3">

					<div class="card">
						<article class="filter-group">
							<header class="card-header">
								<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
									class="">
									<i class="icon-control fa fa-chevron-down"></i>
									<h6 class="title">Tipos de productos</h6>
								</a>
							</header>
							<div class="filter-content collapse show" id="collapse_1">
								<div class="card-body">
									<form class="pb-3">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Busca productos, marcas, y más...">
											<div class="input-group-append">
												<button class="btnn" type="button"><i
														class="fa fa-search"></i></button>
											</div>
										</div>
									</form>

									<ul class="list-menu">
										<li class="mt-2"><a href="#">Perifericos de PC</a></li>
										<li class="mt-2"><a href="#">Relojes</a></li>
										<li class="mt-2"><a href="#">Productos para el hogar</a></li>
										<li class="mt-2"><a href="#">Productos para Animales</a></li>
										<li class="mt-2"><a href="#">Productos de limpieza</a></li>
									</ul>
								</div>
							</div>
						</article>

						<article class="filter-group">
							<header class="card-header">
								<a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true"
									class="">
									<i class="icon-control fa fa-chevron-down"></i>
									<h6 class="title">Buscar por tallas </h6>
								</a>
							</header>
							<div class="filter-content collapse show" id="collapse_4">
								<div class="card-body">
									<label class="checkbox-btn">
										<input type="checkbox">
										<span class="btn2 btn-light"> XS </span>
									</label>

									<label class="checkbox-btn">
										<input type="checkbox">
										<span class="btn2 btn-light"> SM </span>
									</label>

									<label class="checkbox-btn">
										<input type="checkbox">
										<span class="btn2 btn-light"> LG </span>
									</label>

									<label class="checkbox-btn">
										<input type="checkbox">
										<span class="btn2 btn-light"> XXL </span>
									</label>
								</div>
							</div>
						</article>
					</div>
				</aside>

				<main class="col-md-9">
					<header class="border-bottom mb-4 pb-3">
						<div class="form-inline">
							<span class="mr-md-auto">50 productos encontrados </span>
							<select class="mr-2 form-control">
								<option>Ùltimos productos</option>
								<option>Tendencias</option>
								<option>Màs populares</option>
							</select>
						</div>
					</header>

<?php
$sql_catalogo = mysqli_query($link,"SELECT * FROM market_producto_general WHERE status = 1");
	while ($reg_catalogo = mysqli_fetch_assoc($sql_catalogo)) {
		echo '<div class="card card-product-list">
						<div class="row no-gutters">
							<aside class="col-md-3">
								<a href="'.$url.'articulo/?cod='.$reg_catalogo['codigo'].'" class="img-wrap">
									<span class="badge badge-danger" style="margin-left: 5%;"> '.$reg_catalogo['nuevo_usado'].' </span>
									<img src="'.$url.'images/productos/'.$reg_catalogo['codigo'].'-img1.webp">
								</a>
							</aside>
							<div class="col-md-6">
								<div class="info-main">
									<a href="'.$url.'articulo/?cod='.$reg_catalogo['codigo'].'">
										<h2>'.$reg_catalogo['name'].'</h2>
									</a>
									<p>
									'.$reg_catalogo['descripcion'].'
									</p>
								</div>
							</div>
							<aside class="col-sm-3">
								<div class="info-aside">
									<div class="price-wrap">
										<span class="price h5"> $'.$reg_catalogo['precio'].' </span>
										<del class="price-old"> $'.$reg_catalogo['antes'].'</del>
									</div>
									<p class="text-success">50% de descuento</p>
									<br>
									<p>
										<a href="'.$url.'articulo/?cod='.$reg_catalogo['codigo'].'" class="btn text-light btn-light">Detalles</a>
									</p>
								</div>
							</aside>
						</div>
					</div>';
	}



 ?>
					<nav class="text-center" aria-label="Page navigation sample">
						<ul class="pagination">
							<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
						</ul>
					</nav>
				</main>
			</div>
		</div>
	</section>

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