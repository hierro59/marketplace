<section class="product-area most-popular section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Nuevos productos</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel2 popular-slider">
<?php
	//require __DIR__.'/mods/search.php';
	$all_productos = viewAllProducts($link);
	while ($reg_new_art = mysqli_fetch_assoc($all_productos)) {
		echo '<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="'.$url.'articulo/?cod='.$reg_new_art['codigo'].'" class="">
									<img class="default-img" src="'.$url.'images/productos/'.$reg_new_art['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
									<img class="hover-img" src="'.$url.'images/productos/'.$reg_new_art['codigo'].'-img1.webp" alt="#" style="height: 200px; object-fit: cover;">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a title="" href="#"><i class="ti-heart "></i></a>
										<a title="" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="'.$url.'articulo/?cod='.$reg_new_art['codigo'].'" style="text-transform: uppercase">'.$reg_new_art['name'].'</h3>
								<div class="product-price">';
								if ($reg_new_art['antes'] != 0) {
									echo '<span class="old" style="font-size: .7em;">$'.$reg_new_art['antes'].'</span> ';
								}
								echo	' <span> $'.$reg_new_art['precio'].'</span>
								</div></a>
							</div>
						</div>
						<!-- End Single Product -->';
	}
 ?>
					</div>
				</div>
			</div>
		</div>
	</section>