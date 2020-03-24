<!-- Header
		============================================= -->
				<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">


			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?php echo base_url()?>index.php" class="standard-logo" data-dark-logo="<?php echo base_url()?>assets/images/logo-dark.png"><img src="<?php echo base_url()?>assets/images/logo-dark.png" alt="Canvas Logo" width="200px"></a>
						<a href=""  class="retina-logo" data-dark-logo="<?php echo base_url()?>assets/images/logo-dark@2x.png"><img src="<?php echo base_url()?>assets/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<form action="<?php echo base_url()?>index.php/cari/" method="get">
						<ul>
							
							<li>
								
								<select class="form-control" placeholder="Media" style="height: 60px" id="pilih_media" name="media">
									 <option value="" selected="selected">--- Pilih Media ---</option>
									 <?php 
									 	//var_dump($provinsi);
									 	foreach ($media as $med) {
									 		echo "<option value='$med->id'>$med->nama</option>";
									 	}
									 ?>
                                          
								</select>
							</li>
							


							<li>
								
								<select class="form-control" placeholder="Cari Provinsi" style="height: 60px" id="pilih_prov" name="provinsi">
									 <option value="" selected="selected">--- Pilih Provinsi ---</option>
									 <?php 
									 	//var_dump($provinsi);
									 	foreach ($provinsi as $prov) {
									 		echo "<option value='$prov->id'>$prov->name</option>";
									 	}
									 ?>
                                          
								</select>
							</li>

							<li>
								
								<select class="form-control" placeholder="Kota/Kabupaten" style="height: 60px; width: 100%;" id="kota_kab" id="kota_kab">
									 <option value="" selected="selected">--- Pilih Kota/Kab ---</option>
                                              
                                          
								</select>
							</li>

							<li>
								<button type="submit"  class="button button-3d nomargin" id="cari" name="cari" value="Cari" style="height: 60px"><i class="icon-search3"></i></button>

							</li>

						</ul>
						</form>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo base_url()?>assets/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo base_url()?>assets/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#"><i class="icon-line2-login"></i></a>


						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->