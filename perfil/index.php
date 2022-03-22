<?php 
include '../sistema/funciones.php';
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
	<title>Perfil | Market Place Venezuela</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo $url; ?>images/favicon.png">
	<!-- Web Font -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

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

<?php 
	$sql = mysqli_query($link,"SELECT * FROM usuarios_confirmados WHERE id = '$id' AND status = '1'");
	$reg = mysqli_fetch_array($sql);
 ?>

 	<section>
 		<div class="container">
 			<div class="row">
 				<div class="col-12" style="padding: 2%;">
 					<h5>Perfil de usuario</h5>
 				</div>
 			</div>
 			<div class="row">
 				<div class="col-12">
 					<div style="width: 100%; background-color: #aaa; height: 300px; text-align: center;">
 						<p style="padding-top: 150px; font-size: 2rem;">Foto de portada</p>
 					</div>
 				</div>
 			</div>
 			<div class="row">
 				<div class="col-2">
 					<div style="width: 200px; background-color: #666; height: 200px; border-radius: 50%; margin-top: -100px; margin-left: 50px; box-shadow: 2px 2px 5px #000; text-align: center;">
 						<p style="padding-top: 70px; font-size: 1.3rem; color: #fff;">Foto de perfil</p>
 					</div>
 				</div>
 				<div class="col-6">
 					<h1 style="text-shadow: 1px 1px 2px #000;">Felix Leon</h1>
 				</div>
 				<div class="col-4" style="padding-top: 30px;">
 					<h5>Usuario: <b>Hierro59</b></h5>
 				</div>
 			</div>
 		</div>
 		<div class="container">
 			<div class="row">
 				<div class="col-12" style="width: 100%; background-color: #ddd; margin-top: 2%;">
 					<div class="row">
 						<div class="col-12" style="padding: 2%;">
 							<h4>Datos personales</h4>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-2" style="padding: 2%;">
 							<h4>Nombres:</h4>
 						</div>
 						<div class="col-3" style="padding: 2%;">
 							<h4><?php echo $reg['nombre']." ".$reg['apellido']; ?></h4>
 						</div>
 						<div class="col-2" style="padding: 2%;">
 							<h4>Teléfono:</h4>
 						</div>
 						<div class="col-2" style="padding: 2%;">
 							<h4><?php echo $reg['tlf']; ?></h4>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-2" style="padding: 2%;">
 							<h4>Email:</h4>
 						</div>
 						<div class="col-3" style="padding: 2%;">
 							<h4><?php echo $reg['correo']; ?></h4>
 						</div>
 						<div class="col-2" style="padding: 2%;">
 							<h4>DNI:</h4>
 						</div>
 						<div class="col-2" style="padding: 2%;">
 							<h4><?php echo $reg['dni']; ?></h4>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-2" style="padding: 2%;">
 							<h4>Dirección:</h4>
 						</div>
 						<div class="col-8" style="padding: 2%;">
 							<h4><?php echo $reg['direccion']; ?></h4>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-2" style="padding: 2%;">
 							<h4>Ciudad:</h4>
 						</div>
 						<div class="col-3" style="padding: 2%;">
 							<h4><?php echo $reg['ciudad']; ?></h4>
 						</div>
 						<div class="col-2" style="padding: 2%;">
 							<h4>Estado:</h4>
 						</div>
 						<div class="col-2" style="padding: 2%;">
 							<h4><?php echo $reg['estado']; ?></h4>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-2" style="padding: 2%;">
 							<h4>País:</h4>
 						</div>
 						<div class="col-3" style="padding: 2%;">
 							<h4><?php echo $reg['pais']; ?></h4>
 						</div>
 						<div class="col-7" style="padding: 2%; padding-right: 5%; text-align: right;">
 							<a href="#!" class="btn-primary" style="padding: 2%; border-radius: 5px;">Editar</a>
 						</div>
 					</div>
 				</div> 				
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
	<?php mysqli_close($link); ?>
</body>

</html>