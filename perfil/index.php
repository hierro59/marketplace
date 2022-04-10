<?php
include '../sistema/funciones.php';
if (isset($_GET['user'])) {
	$regUser = viweUser($_GET['user']);
}elseif (isset($_SESSION['id'])) {
	$regUser = getUser($_SESSION['id']);
}else{
	header('Location: ../');
}
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
	<title>Perfil <?php echo $regUser['nombre']." ".$regUser['apellido']; ?> | Market Place Venezuela</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo $url; ?>images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/reset.css">
	<link rel="stylesheet" href="<?php echo $url; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $url; ?>css/responsive.css">
</head>

<body class="js">

	<!-- Header -->
	<?php include '../sistema/header.php'; ?>
	<!--/ End Header -->
	<section class="mt-5" style="margin-bottom: 2%;">
		<div class="container">
			<div class="row gutters-sm">
				<div class="col-md-4 mb-3">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
								<div class="mt-3">
									<h4><?php echo $regUser['nombre']." ".$regUser['apellido']; ?></h4>
									<p class="text-secondary mb-1">@<?php echo $regUser['username']; ?></p>
									<p class="text-muted font-size-sm">Lorem ipsum dolor sit amet.</p>
									<br>
									<a class="btn btn-info" href="#">Contactar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card mt-3">
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
										<circle cx="12" cy="12" r="10"></circle>
										<line x1="2" y1="12" x2="22" y2="12"></line>
										<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
									</svg>Website</h6>
								<span class="text-secondary">https://quantlas.tech/</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
										<path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
									</svg>Github</h6>
								<span class="text-secondary">quantlas.tech</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
										<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
									</svg>Twitter</h6>
								<span class="text-secondary">@quantlas</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
										<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
										<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
										<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
									</svg>Instagram</h6>
								<span class="text-secondary">quantlas</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
										<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
									</svg>Facebook</h6>
								<span class="text-secondary">quantlas</span>
							</li>
						</ul>
					</div>
				</div>
<?php if (isset($_GET['user'])) {
	echo '<div style="display: none">';
} ?>
				<div class="col-md-8">
					<div class="card mb-3">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Nombres:</h6>
								</div>
								<div class="col-sm-9 text-secondary" id="dato1">
									<?php echo $regUser['nombre']." ".$regUser['apellido']; ?>
								</div>
								<div id="target1" style="display: none;">
									<input type="text" name="nombre">
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Teléfono:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['tlf']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Correo electrónico:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['correo']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">DNI:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['dni']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Dirección:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['direccion']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Ciudad:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['ciudad']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Estado:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['estado']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">País:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $regUser['pais']; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-info" href="#" id="editar">Editar</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
<?php if (isset($_GET['user'])) {
	echo '</div>';
} ?>

				<div class="col-sm">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="d-flex align-items-center mb-3 text-info">Productos Activos</h6>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="d-flex align-items-center mb-3 text-info">Últimas Calificaciones</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
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
	<script src="<?php echo $url; ?>js/jquery.min.js"></script>
	<script src="<?php echo $url; ?>js/jquery-migrate-3.0.0.js"></script>
	<script src="<?php echo $url; ?>js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo $url; ?>js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo $url; ?>js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="<?php echo $url; ?>js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo $url; ?>js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo $url; ?>js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo $url; ?>js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo $url; ?>js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="<?php echo $url; ?>js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo $url; ?>js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo $url; ?>js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo $url; ?>js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo $url; ?>js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="<?php echo $url; ?>js/easing.js"></script>
	<!-- Active JS -->
	<script src="<?php echo $url; ?>js/active.js"></script>
	<script type="text/javascript">
	  $(document).ready(function(){
	    $("#editar").click(function(){
	      $('#target1').fadeIn("slow");
	      $('#dato1').fadeOut("slow");
	      });
	    $("#cancelar").click(function(){
	      $('#target1').fadeOut("slow");
	      });
	    });
	</script>
</body>

</html>