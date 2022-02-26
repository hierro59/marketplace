<?php
include '../sistema/funciones.php';
include '../sistema/conexion.php';
$cod = $_GET['cod'];
$sql_art = mysqli_query($link,"SELECT * FROM market_producto_general WHERE codigo = '$cod' AND status = 1");
$reg_art = mysqli_fetch_assoc($sql_art);

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
	<title><?php echo $reg_art['name']; ?> | Market Place Venezuela</title>
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
	<link rel="stylesheet" href="<?php echo $url;?>css/mi-estilo.css">


</head>

<body class="js">


	<!-- Header -->
		<?php include '../sistema/header.php'; ?>
	<!--/ End Header -->


	<!-- ProductoDetails -->

	<section class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-12">
					<div class="mobile-nav"></div>
				</div>
			</div>
			<!-- <h1>Detelles del producto</h1> -->
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Inicio</a></li>
					<li class="breadcrumb-item active" aria-current="page">producto</li>
				</ol>
			</nav>
		</div>
	</section>

	<section class="product-detail-area pt-20">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-md-12">
							<div class="product-detail-image mt-30">
								<div class="product-single-image slick-initialized slick-slider">
									<div class="slick-list draggable">
										<div class="slick-track" style="margin: 0 10%;">
											<a href="single-image fancybox-buttons slick-slide slick-current slick-active" style="cursor: zoom-in; width: 653px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
											</a>
                        <div class="owl-carousel popular-slider">
                          <div class="item foto-producto">
                            <img class="image-hero" src="../images/productos/<?php echo $reg_art['codigo']; ?>-img1.webp" style="">
                          </div>

                         <!--  <div class="item" style="width:100%;">
                            <img class="image-hero" src="images/producto2.jpg">
                          </div>
                          <div class="item" style="width:100%;">
                            <img class="image-hero" src="images/producto3.jpg">
                          </div>
                          <div class="item" style="width:100%;">
                            <img class="image-hero" src="images/producto4.jpg">
                          </div> -->
                        </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="product-detail-content">
						<div>
							<?php echo $reg_art['nuevo_usado']; ?>
						</div>
					</div>
					<h1 class="product-detail-title" style="color: #222;">
						<?php echo $reg_art['name']; ?>
					</h1>
					<div class="product-detail-price">
						<div class="blockquote">
							<header class="blockquote-header">
							<p class="mt-4">Precio:</p>
							</header>
							<p class="mb-0" style="margin-top: 40px;">
								<span
								style="font-size: 60px;
								font-weight: 700; color: var(--primary-color); margin-right: 8px;">
                                $<?php echo $reg_art['precio']; ?>
                            	</span>
                            </p>
                        </div>
					</div>
					<div class="addcart-content mt-4">
						<a class="btn" href="#" style="border-radius: 5px; color: #fff;">
							<i class="fa fa-shopping-cart"> </i> <b>Comprar</b>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="product-description-area mt-4 mb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Descripción del producto:</h4>
					<div class="blockquote mt-4">
						<p>
							<?php echo $reg_art['descripcion']; ?>
						</p>
					</div>
					<!-- <table class="table">
						<tbody>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Marca:</td>
								<td class="h5 p-2" style="width: 70%;"></td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Producto:
								</td>
								<td class="h5 p-2" style="width: 70%;"> Case</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Modelo:
								</td>
								<td class="h5 p-2" style="width: 70%;"></td>
							</tr> -->
							<!-- <tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Ranuras de Expansion:
								</td>
								<td class="h5 p-2" style="width: 70%;"> 7</td>
							</tr> -->
							<!-- <tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Placa Madre:
								</td>
								<td class="h5 p-2" style="width: 70%;"> Micro ATX / ATX</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Dimensiones:
								</td>
								<td class="h5 p-2" style="width: 70%;"> 40 x 18 x 41cm</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Fuente:</td>
								<td class="h5 p-2" style="width: 70%;"> 350W</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Puertos:</td>
								<td class="h5 p-2" style="width: 70%;"> USB20 x 2 / Auriculares-Microfono / HD Audio
								</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Ventilador:</td>
								<td class="h5 p-2" style="width: 70%;"> Posterior 80mm</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Peso:</td>
								<td class="h5 p-2" style="width: 70%;"> 42 Kg</td>
							</tr>
							<tr>
								<td class="h5 p-2 bg-light" style="width: 30%;">Color:</td>
								<td class="h5 p-2" style="width: 70%;"></td>
							</tr>
						</tbody>
					</table>-->
				</div>
				<div class="col-md-6">
					<div data-href="#" data-width="100%" data-height="100%" data-numposts="5" class="fb-comments">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--/ End ProductoDetails -->

	<!-- Most Popular -->
		<?php include '../sistema/nuevos-articulos.php'; ?>
	<!-- End Most Popular Area -->

	<!-- Banner Ads -->
	<section class="">
		<div class="container">
		</div>
	</section>
	<!-- End Banner Ads -->

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