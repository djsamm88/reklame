<?php 
	include ("part/head.php");
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php 
			include ("part/header.php");
			if($data->num_rows()==0)
			{
				include ("part/404.php");
				include ("part/footer.php");
				die("404 Not Found");
			}

			$row = $data->result()[0];

			$gbr = array();
			if($row->gbr_1 != "")
			{
				
				array_push($gbr, $row->gbr_1);
			}


			if($row->gbr_2 != "")
			{				
				array_push($gbr, $row->gbr_2);
			}


			if($row->gbr_3 != "")
			{
				array_push($gbr, $row->gbr_3);
			}

			
		?>


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo $row->jenis_media_promosi?> - <?php echo $row->alamat?> </h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><i class="icon-map-marker1"></i></li>
					<li class="breadcrumb-item"><?php echo $row->nama_kota?> </li>
					<li class="breadcrumb-item"><?php echo $row->nama_provinsi?></li>					
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_two_fifth">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="product-image">
									<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
										<div class="flexslider">
											<div class="slider-wrap" data-lightbox="gallery">
												<?php 
													foreach ($gbr as $g) {
														echo "<div class='slide' data-thumb='".base_url()."uploads/$g'><a href='".base_url()."uploads/$g' title='Pink Printed Dress - Front View' data-lightbox='gallery-item'><img src='".base_url()."uploads/$g' ></a></div>";
													}
												?>
												
											</div>
										</div>
									</div>
									<!--<div class="sale-flash">Sale!</div>-->
								</div><!-- Product Single - Gallery End -->

							</div>

							<div class="col_two_fifth product-desc">

								<!-- Product Single - Price
								============================================= -->
								<div class="product-price"> Rp.<?php echo rupiah($row->harga_1_bulan)?>/Bulan</div><!-- Product Single - Price End -->

								<!-- Product Single - Rating
								============================================= -->
								<div class="product-rating">
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star-half-full"></i>
									<i class="icon-star-empty"></i>
								</div><!-- Product Single - Rating End -->

								<div class="clear"></div>
								<div class="line"></div>


								<!-- Product Single - Short Description
								============================================= -->
								
								<table class="table">
									<tr><td>Jenis Media</td><td><?php echo $row->jenis_media_promosi?></td></tr>
									<tr><td>Orientasi</td><td><?php echo $row->orientasi?></td></tr>
									<tr><td>Venue</td><td><?php echo $row->venue?></td></tr>
									<tr><td>Penerangan</td><td><?php echo $row->penerangan?></td></tr>
									<tr><td>Tinggi - Lebar</td><td><?php echo $row->tinggi?>Meter -  <?php echo $row->lebar?>Meter</td></tr>
									<tr><td>Tags</td><td><?php echo $row->tags?></td></tr>
									<tr><td>Alamat</td><td><?php echo $row->alamat?></td></tr>
									<tr><td>Kota/Kab</td><td><?php echo $row->nama_kota?></td></tr>
									<tr><td>Provinsi</td><td><?php echo $row->nama_provinsi?></td></tr>
									
								</table>
								<div class="line"></div>


							</div>

							<div class="col_one_fifth col_last">

								<a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="images/shop/brand.jpg" alt="Brand Logo"></a>

								<div class="divider divider-center"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-thumbs-up2"></i>
									</div>
									<h3>100% Original</h3>
									<p class="notopmargin">We guarantee you the sale of Original Brands.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-credit-cards"></i>
									</div>
									<h3>Payment Options</h3>
									<p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-truck2"></i>
									</div>
									<h3>Free Shipping</h3>
									<p class="notopmargin">Free Delivery to 100+ Locations on orders above $40.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-undo"></i>
									</div>
									<h3>30-Days Returns</h3>
									<p class="notopmargin">Return or exchange items purchased within 30 days.</p>
								</div>

							</div>

							<div class="col_full nobottommargin">
								<div class="line"></div>
								<h3>Maps</h3>
								<div id="map" style="height: 400px; margin-bottom: 20px;" class="gmap"></div>

								Dekat dengan:<br>
								<div class="row">
									<div class="col-sm-6">
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_1?>
										</span><br>
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_2?></span>
									</div>

									<div class="col-sm-6">
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_1?>
										</span><br>
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_2?>
										</span>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>

					<div class="col_full nobottommargin">

						<h4>Related Products</h4>

						<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
										<a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
										<div class="sale-flash">50% Off*</div>
										<div class="product-overlay">
											<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
											<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
										<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
										<a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
										<div class="product-overlay">
											<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
											<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
										<div class="product-price">$39.99</div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
											<i class="icon-star-empty"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>
										<a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>
										<div class="product-overlay">
											<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
											<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
										<div class="product-price">$49</div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-empty"></i>
											<i class="icon-star-empty"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
										<a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
										<div class="product-overlay">
											<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
											<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
										<div class="product-price">$19.95</div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-empty"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
										<a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
										<div class="sale-flash">Sale!</div>
										<div class="product-overlay">
											<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
											<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
										<div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-empty"></i>
											<i class="icon-star-empty"></i>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->


	<?php 
	include ("part/footer.php");
	?>

	<script type="text/javascript">
		var myLatlng = new google.maps.LatLng(3.597031,98.678513);
	    var mapOptions = {
	      zoom: 15,
	      center: myLatlng
	    }
	    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	    // Place a draggable marker on the map
	    var marker = new google.maps.Marker({
	        position: myLatlng,
	        map: map,	        
	        title:"Lokasi"
	    });
	</script>

</body>
</html>