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
	$sql_new_art = mysqli_query($link,"SELECT * FROM market_producto_general WHERE status = 1");
	while ($reg_new_art = mysqli_fetch_assoc($sql_new_art)) {
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
						<!-- Start Single Product -->
						<!-- <div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="images/producto4.jpg" alt="#">
									<img class="hover-img" src="images/producto4.jpg" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a title="" href="#"><i class="ti-heart "></i></a>
										<a title="" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="#">SISTEMA DE ENFRIAMIENTO LIQUIDO MSI MAG CORELIQUID 360R ( MAG CORELIQUID
										360R ) LED - RGB</a></h3>
								<div class="product-price">
									<span class="old">$190.00</span>
									<span>$176.00</span>
								</div>
							</div>
						</div> -->
						<!-- End Single Product -->
					</div>
				</div>
			</div>
		</div>
	</section>