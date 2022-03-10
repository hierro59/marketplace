<?php
include '../../sistema/funciones.php';
noUserLvl2();
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
	<title>Vender producto | Market Place Venezuela</title>
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
	<?php include '../../sistema/header.php'; ?>
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

					<li class="breadcrumb-item active" aria-current="page">Publicar productos</li>
				</ol>
			</nav>
		</div>
	</section>

	<section class="post-product-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4">
                        <!-- Vehículos -->
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <img class="card-img-top" src="../../images/ct1.webp" alt="Productos" style="width: 30%; margin-bottom: -10%;">
                            </div>

                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <h5 class="mb-3">Indica tu producto, marca y modelo</h5>
                                    <p class="my-3">Este será el título. Ten en cuenta que cuando tengas ventas, no podrás editarlo. <br><a href="#">¿Cómo armar un buen título?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <!-- Intro -->
                        <div class="intro mt-5 mt-lg-0 mb-4 mb-lg-5">
                            <div class="intro-content">
                                <span>Comienza</span>
                                <h3 class="mt-3 mb-0">Creando Ítem del producto</h3>
                            </div>
                        </div>
                        <!-- Item Form -->
                        <form class="item-form card no-hover" method="POST" action="../data/accion.php" enctype="multipart/form-data" id="pre-pic">
                        	<div class="row cont-foto" id="uploadForm">
                        		<label for="foto1" id="label">
                        			<input type="file" name="foto1" id="foto1" accept="image/*" hidden required>
                        			<span id="pic-text">Foto</span>
                        		</label>
                        		<!-- <label for="foto2">
                        			<input type="file" name="foto2" id="foto1" hidden>
                        			Foto 2
                        		</label>
                        		<label for="foto3">
                        			<input type="file" name="foto3" id="foto1" hidden>
                        			Foto 3
                        		</label> -->
                        	</div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="name" placeholder="Escribe el título del producto" style="font-size: 1.5em;" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="cat" required="required">
                                          <option value="" disabled selected>¿A qué categoría pertenece?</option>
                                          <option value="1"> Celulares</option>
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
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                    	<label for="descripcion" style="width: 100%;">Descripción:
                                        	<textarea class="form-control" name="descripcion" placeholder="Describe detalladamente el producto" rows="5" required></textarea>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="descripcion" style="width: 100%;">Precio:
                                            <input type="number" class="form-control" name="precio" placeholder="Indica el precio" step="any" required>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group" style="text-align: center;">
                                        <label for="nuevo" style="width: 100%;">Nuevo
                                            <input type="radio" class="form-control" name="nuevo-usado" id="nuevo" value="Nuevo" required>
                                        </label>
                                        <label for="usado" style="width: 100%;">Usado
                                            <input type="radio" class="form-control" name="nuevo-usado" id="usado" value="Usado">
                                        </label>
                                    </div>
                                </div>
                                <!-- <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="marca">
                                          <option value="" disabled selected>Marca</option>
                                          <option value="1">Marca</option>
                                          <option value="2">Marca</option>
                                          <option value="3">Marca</option>
                                          <option value="4">Marca</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="modelo">
                                          <option value="" disabled selected>Modelo</option>
                                          <option value="1">Modelo</option>
                                          <option value="2">Modelo</option>
                                          <option value="3">Modelo</option>
                                          <option value="4">Modelo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="version" placeholder="Versión">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="color">
                                          <option value="" disabled selected>Color</option>
                                          <option value="1">Color</option>
                                          <option value="2">Color</option>
                                          <option value="3">Color</option>
                                          <option value="4">Color</option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="col-12">
                                	<input type="numb" name="accion" value="0" hidden>
                                    <button class="btn w-100 mt-3 mt-sm-4" type="submit">Publicar producto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

	<!-- Start Footer Area -->
	<?php include '../../sistema/footer.php'; ?>
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

	<script>
function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<div style="text-align: center;"><img src="'+e.target.result+'" width="450" height="300"/></div>');
            $('#label').addClass('hidden');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#foto1").change(function () {
    filePreview(this);
});
	</script>
</body>

</html>