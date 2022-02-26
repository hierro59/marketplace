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
	<title>Registro | Market Place Venezuela</title>
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

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>


</head>

<body class="js">

<?php 

if (!empty($alert)) {
	alerts($alert, $code);
}

 ?>
	<!-- Header -->
	<?php include '../sistema/header.php'; ?>
	<!--/ End Header -->

	<!-- Sign Up Area -->
	<section class="signUp-area">
		<div class="card mx-auto" style="max-width:620px; margin-top:40px;">
			<div class="card-body">
				<header class="mb-4" style="background-color: var(--primary-color); padding: 20px; color: #fff; text-align: center; text-transform: uppercase;"><h4 class="card-title">Registrate</h4></header>
				<?php if (isset($_GET['err']) && $_GET['err'] == '004') {
                        	echo '<div class="form-group col-md-12" style="background-color: red; padding: 1%;">
		                        	<span class="" style="color: #fff; font-weight: 700;">No existe esa cuenta registrada, pero puedes hacerlo.</span>
		                          </div>';
                        } ?>
				<form method="POST" action="sistema/pre-registro.php">
                    <div class="form-row mb-2">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu apellido" required>
                        </div>
	                    <div class="form-row mb-2">
	                        <div class="form-group col-md-6">
	                            <label class="font-weight-bold">Teléfono <span class="text-danger">*</span></label>
	                            <input type="text" class="form-control" name="tlf" placeholder="Ingresa tu teléfono" required>
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label class="font-weight-bold">Correo <span class="text-danger">*</span></label>
	                            <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
	                        </div>
	                    </div>
                    </div>
				    <div class="form-group">
				        <button type="submit" class="btn btn-block"> Register  </button>
				    </div>
                    <div class="form-row mb-2">
				        <div class="form-group col-md-6">
				        	<div><a class="popup-with-form"
								href="#test-form">Ya tienes cuenta? Inicia sesión</a>
							</div>
				       </div>
					    <div class="form-group col-md-6 form-check">
	    					<input type="checkbox" class="form-check-input" name="terminos" id="exampleCheck1"  required>
	    					<label class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones</label>
				        </div>
				    </div>
				</form>
			</div>
		</div>
	</section>
	<!-- End Sign Up Area -->

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