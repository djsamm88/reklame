<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>OkIklan - Selamat datang</title>
	  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/logo_petak.jpeg">


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
				<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">


			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url()?>assets/images/logo-dark.png"><img src="<?php echo base_url()?>assets/logo_panjang.jpeg" alt="Canvas Logo" width="200px"></a>
						<a href=""  class="retina-logo" data-dark-logo="<?php echo base_url()?>assets/images/logo-dark@2x.png"><img src="<?php echo base_url()?>assets/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

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
								<button class="button button-3d nomargin" id="cari" name="cari" value="Cari" style="height: 60px"><i class="icon-search3"></i></button>

							</li>

						</ul>

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

		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?php echo base_url()?>assets/images/slider/swiper/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Selamat Datang di OkIklan.com</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"> (OkIklan.com) adalah sebuah Marketplace Media Periklanan Terdepan dan Terlengkap di Indonesia, dimana Perusahaan kami menyediakan beragam jenis dan lokasi media iklan luar ruang yang tersebar di seluruh Indonesia. .</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Beautifully Flexible</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="<?php echo base_url()?>assets/images/videos/explore.jpg" preload="auto" loop autoplay muted>
									<source src='<?php echo base_url()?>assets/images/videos/explore.mp4' type='video/mp4' />
									<source src='<?php echo base_url()?>assets/images/videos/explore.webm' type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('<?php echo base_url()?>assets/images/slider/swiper/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Great Performance</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="section header-stick">
					<div class="container clearfix">
						<div class="row">

							<div class="col-lg-9">
								<div class="heading-block bottommargin-sm">
									<h3>We specialize in Robust Software Solutions</h3>
								</div>

								<p class="nobottommargin">Lasting change, stakeholders development Angelina Jolie world problem solving progressive. Courageous; social entrepreneurship change; accelerate resolve pursue these aspirations asylum.</p>
							</div>

							<div class="col-lg-3">
								<a href="#" class="button button-3d button-dark button-large btn-block center" style="margin-top: 30px;">Check our Services</a>
							</div>

						</div>
					</div>
				</div>

				<div class="container clearfix">

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="<?php echo base_url()?>assets/images/services/1.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="<?php echo base_url()?>assets/images/services/2.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="<?php echo base_url()?>assets/images/services/3.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
							</div>
						</div>
					</div>

					<div class="clear"></div>

				</div>

				<div class="section parallax bottommargin-lg" style="background-image: url('<?php echo base_url()?>assets/images/parallax/3.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2>"Everything is designed, but some things are designed well."</h2>
					</div>
				</div>

				<div class="container clearfix">

					<div class="row">

						<div class="col-lg-5 bottommargin">

							<div class="accordion accordion-border clearfix nobottommargin">

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Company's Values</div>
								<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How to get Support?</div>
								<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Where can you find us?</div>
								<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Why you choose our Company?</div>
								<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

							</div>

						</div>

						<div class="col-lg-3 col-md-6 bottommargin">

							<div class="fancy-title title-border">
								<h4>Our Skills</h4>
							</div>

							<ul class="skills">
								<li data-percent="80">
									<span>Wordpress</span>
									<div class="progress">
										<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
									</div>
								</li>
								<li data-percent="60">
									<span>CSS3</span>
									<div class="progress">
										<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
									</div>
								</li>
								<li data-percent="90">
									<span>HTML5</span>
									<div class="progress">
										<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
									</div>
								</li>
								<li data-percent="85">
									<span>PHP</span>
									<div class="progress">
										<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
									</div>
								</li>
								<li data-percent="70">
									<span>jQuery</span>
									<div class="progress">
										<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
									</div>
								</li>
							</ul>

						</div>

						<div class="col-lg-4 col-md-6 bottommargin">

							<div class="fancy-title title-border">
								<h4>Recently Posted</h4>
							</div>

							<div id="home-recent-news">

								<div class="spost clearfix">
									<div class="entry-image">
										<a href="#"><img src="<?php echo base_url()?>assets/images/magazine/small/5.jpg" alt=""></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley Cyrus Merch</a></h4>
										</div>
										<ul class="entry-meta">
											<li><i class="icon-calendar3"></i> 10th July 2014</li>
											<li><a href="#"><i class="icon-comments"></i> 43</a></li>
										</ul>
									</div>
								</div>

								<div class="spost clearfix">
									<div class="entry-image">
										<a href="#"><img src="<?php echo base_url()?>assets/images/magazine/small/6.jpg" alt=""></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">Want To Know The New 'Star Wars' Plot? Then This Is The Post For You</a></h4>
										</div>
										<ul class="entry-meta">
											<li><i class="icon-calendar3"></i> 10th July 2014</li>
											<li><a href="#"><i class="icon-comments"></i> 43</a></li>
										</ul>
									</div>
								</div>

								<div class="spost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="<?php echo base_url()?>assets/images/magazine/small/movie/4.jpg" alt="Image"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">Planes: Fire And Rescue</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
											<li><i class="icon-heart3 text-warning"></i> 45%</li>
										</ul>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="section topmargin-sm footer-stick">

					<h4 class="uppercase center">What <span>Clients</span> say?</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo base_url()?>assets/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo base_url()?>assets/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo base_url()?>assets/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="<?php echo base_url()?>assets/images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('<?php echo base_url()?>assets/images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="https://codex.wordpress.org/">Documentation</a></li>
									<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="https://wordpress.org/support/">Support Forums</a></li>
									<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="https://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="https://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</div>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo base_url()?>assets/js/functions.js"></script>

	<script type="text/javascript">
		$("#pilih_prov").on("change",function(){
			//console.log($(this).val());

			$.get("<?php echo base_url()?>index.php/welcome/ambil_kab/"+$(this).val(),function(e){
				//console.log(e);
				$("#kota_kab").empty();
				$.each(e,function(a,b){
					console.log(b.name);
					$("#kota_kab").append("<option value='"+b.id+"'>"+b.name+"</option>");
				})
			})
		})
	</script>

</body>
</html>