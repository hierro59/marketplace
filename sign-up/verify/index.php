<?php include '../../sistema/funciones.php'; 
include '../../sistema/conexion.php';
$key_confirm = htmlentities($_GET['check'], ENT_QUOTES);
$sql = mysqli_query($link,"SELECT key_confirm FROM pre_registro_usuarios WHERE key_confirm = '$key_confirm' AND status = '0'");
$reg = mysqli_fetch_array($sql);
if (isset($reg)) {
	$key_guardada = $reg['key_confirm'];
	if ($key_confirm == $key_guardada) {
		$sql = mysqli_query($link,"SELECT * FROM pre_registro_usuarios WHERE key_confirm = '$key_confirm' AND status = '0'");
		$reg = mysqli_fetch_array($sql);
	}else{
		mysqli_close($link);
		header("Location: ../../?problemas al completar el registro");
	}
}else{
	mysqli_close($link);
	header("Location: ../../?problemas al completar el registro");
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
	<?php include '../../sistema/header.php'; ?>
	<!--/ End Header -->

	<!-- Sign Up Area -->
	<section class="signUp-area">
		<div class="card mx-auto" style="max-width:620px; margin-top:40px;">
			<div class="card-body">
				<header class="mb-4" style="background-color: var(--primary-color); padding: 20px; color: #fff; text-align: center; text-transform: uppercase;"><h4 class="card-title">Completa el registro</h4></header>
				<form method="POST" action="../sistema/verify-registro.php">
                    <div class="form-row mb-2">
                    	<?php if (isset($_GET['err']) && $_GET['err'] == '999') {
                        	echo '<div class="form-group col-md-12" style="background-color: red; padding: 1%;">
		                        	<span class="" style="color: #fff; font-weight: 700;">Multiples problemas</span>
		                          </div>';
                        } ?>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?php echo $reg['nombre']; ?>" disabled>
                            <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>" hidden>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?php echo $reg['apellido']; ?>" disabled>
                            <input type="text" name="apellido" value="<?php echo $reg['apellido']; ?>" hidden>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">Teléfono <span class="text-danger">*</span></label>
                        	<input type="text" class="form-control" placeholder="<?php echo $reg['tlf']; ?>" disabled>
                        	<input type="text" name="tlf" value="<?php echo $reg['tlf']; ?>" hidden>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">Correo <span class="text-danger">*</span></label>
                        	<input type="email" class="form-control" placeholder="<?php echo $reg['correo']; ?>" disabled>
                        	<input type="email" name="correo" value="<?php echo $reg['correo']; ?>" hidden>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                        	<input type="password" class="form-control" name="pass1" placeholder="Contraseña" required>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">Repita contraseña <span class="text-danger">*</span></label>
                        	<input type="password" class="form-control" name="pass2" placeholder="Repita contraseña" required>
                        </div>
                        <?php if (isset($_GET['err']) && $_GET['err'] == '001') {
                        	echo '<div class="form-group col-md-12" style="background-color: red; padding: 1%;">
		                        	<span class="" style="color: #fff; font-weight: 700;">Las contraseñas no coinciden</span>
		                          </div>';
                        } ?>
                        <div class="form-group col-md-12">
                        	<label class="font-weight-bold">Dirección <span class="text-danger">*</span></label>
                        	<input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">Ciudad <span class="text-danger">*</span></label>
                        	<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">Estado <span class="text-danger">*</span></label>
                        	<input type="text" class="form-control" name="estado" placeholder="Estado" required>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">País <span class="text-danger">*</span></label>
                        	<input type="text" class="form-control" name="pais" placeholder="País" required>
                        </div>
                        <div class="form-group col-md-6">
                        	<label class="font-weight-bold">DNI </label>
                        	<input type="text" class="form-control" name="dni" placeholder="DNI">
                        </div>
                        	<input type="text" name="check" value="<?php echo $key_confirm; ?>" hidden>
                        
	                    
                    </div>
				    <div class="form-group">
				        <button type="submit" class="btn btn-block"> Enviar  </button>
				    </div>
				</form>
			</div>
		</div>
	</section>
	<!-- End Sign Up Area -->
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