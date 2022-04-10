<?php
include '../sistema/funciones.php';
include '../sistema/conexion.php';
include('../sistema/mods/search.php');
$max_productos = 5;
$query = searchProducts($link, $max_productos);
$num_paginas = ceil($_SESSION['maxrows'] / $max_productos);
if (isset($_GET['pagina'])) {
	$pagina = $_GET['pagina'];
}else{
	$pagina = 1;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Meta Tag -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
				<!-- Start SideBar -->
				<?php include '../sistema/plantillas/sidebar.php'; ?>
				<!-- End SideBar -->
				<main class="col-md-9">
					<header class="border-bottom mb-4 pb-3">
						<div class="form-inline">
							<span class="mr-md-auto"><?php echo $_SESSION['maxrows']; ?> productos encontrados </span>
							<form id="filter" method="get" action="index.php">
								<select onchange="send();" name="searchFilter" class="mr-2">
									<option selected="selected" disabled value="">Filtrar por:</option>
									<option value="last">Últimos productos</option>
									<option value="expensive">Mayor precio</option>
									<option value="cheap">Menor Precio</option>
								</select>
							</form>
						</div>
					</header>
				<?php
					if ($query->num_rows != 0) {
						while ($result = mysqli_fetch_assoc($query)) {
							if(strlen($result['name']) > 18) {
								$name = substr($result['name'], 0, 18) . '...';
							} else {
								$name = $result['name'];
							}
							if(strlen($result['descripcion']) > 116) {
								$descripcion = substr(strip_tags($result['descripcion']), 0, 116) . '... <a href="'.$url.'articulo/?cod='.$result['codigo'].'">Leer más.</a>';
							} else {
								$descripcion = $result['descripcion'];
							}
					  		echo '<div class="card card-product-list">
								<div class="row no-gutters">
									<aside class="col-md-3">
										<a href="'.$url.'articulo/?cod='.$result['codigo'].'" class="img-wrap">
											<span class="badge badge-danger" style="margin-left: 5%;"> '.$result['nuevo_usado'].' </span>
											<img src="'.$url.'images/productos/'.$result['codigo'].'-img1.webp">
										</a>
									</aside>
									<div class="col-md-6">
										<div class="info-main">
											<a href="'.$url.'articulo/?cod='.$result['codigo'].'">
												<h2>'. $name . '</h2>
											</a>
											<p>
											' . $descripcion .
											'</p>
										</div>
									</div>
									<aside class="col-sm-3">
										<div class="info-aside">
											<div class="price-wrap">
												<span class="price h5"> $'.$result['precio'].' </span>
												<del class="price-old"> $'.$result['antes'].'</del>
											</div>
											<p class="text-success">50% de descuento</p>
											<br>
											<p>
												<a href="'.$url.'articulo/?cod='.$result['codigo'].'" class="btn text-light btn-light">Detalles</a>
											</p>
										</div>
									</aside>
								</div>
							</div>';
						}
					}else{
						echo '<h1>No tenemos nada que se le parezca.</h1><br>
						<input type="search" placeholder="Nueva Búsqueda" class="form-control">';
					}
				?>
				<!-- Pagination -->
					<nav class="text-center" aria-label="Page navigation sample">
						<ul class="pagination">
							<li class="page-item <?php echo $pagina <= 1 ? 'disabled' : '' ?>">
								<a class="page-link" href="index.php?pagina=<?php echo $pagina - 1 ?>">
									Anterior
								</a>
							</li>
							<?php
								$sw = true;
								for($i = 0; $i <  $num_paginas; $i++): 
							?>
							<li class="page-item 
								<?php
									if(isset($pagina)) {
										if($pagina == $i + 1) {
											echo 'active';
										} else {
											echo '';
										}
									} else {
										if($sw == true) {
											echo 'active';
											$sw = false;
										}
									}
								?>
								">
									<a class="page-link" href="index.php?pagina=<?php echo $i + 1 ?>">
											<?php echo $i + 1 ?>
									</a>
								</li>
							<?php endfor ?>
							<li class="page-item 
							<?php 
								if($pagina >= $num_paginas || $_SESSION['maxrows'] == 1){
								echo 'disabled';
								} else {
									echo '';
								}
							?>
							">
								<a class="page-link" href="index.php?pagina=<?php echo $pagina + 1 ?>">
									Siguiente
								</a>
							</li>
						</ul>
					</nav>
				<!--/ End Pagination -->
				</main>
			</div>
		</div>
	</section>
	<!-- Start Most Popular -->
	<?php include '../sistema/nuevos-articulos.php'; ?>
	<!-- End Most Popular Area -->
	<!-- Social Area -->
		<?php include '../sistema/plantillas/rrssMarket.php'; ?>
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

	<script type="text/javascript">
		function send() {
			var form = document.getElementById("filter");
			form.submit();
		}
	</script>

</body>

</html>