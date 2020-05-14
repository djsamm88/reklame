<?php 
	include ("part/head.php");
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php 
			include ("part/header.php");
			include ("part/slider.php");
		?>


		<?php 
			include ("part/slider_kecil.php");
		?>


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="section header-stick">
					<div class="container clearfix">
						<div class="row">

							<div class="col-lg-12">
								<div class="heading-block bottommargin-sm">
									<h3>Rekomendasi Untuk Anda</h3>
								
							</div>

							
						</div>
					</div>
				</div>

				<div class="container clearfix">
					


				<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
				<?php 
				foreach ($rekomendasi->result() as $rek) {
					$link_detail_kecil = base_url()."index.php/welcome/detail_kecil/$rek->id_iklan";
					$link_detail = base_url()."index.php/welcome/detail/$rek->id_iklan?jenis_media_promosi=$rek->jenis_media_promosi&provinsi=$rek->provinsi&kota_kab=$rek->kota_kab";
				echo "<div class='product clearfix'>
							<div class='product-image'>
								<a href='$link_detail'><img src='".base_url()."uploads/$rek->gbr_1' class='gambar_produk'></a>		
								<a href='$link_detail'><img src='".base_url()."uploads/$rek->gbr_2' class='gambar_produk'></a>								
								<div class='sale-flash'>$rek->tinggi x $rek->lebar M</div>
								<div class='product-overlay'>
									<a href='$link_detail' class='add-to-cart'><i class='icon-note'></i><span> Detail</span></a>
									<a href='$link_detail_kecil' class='item-quick-view' data-lightbox='ajax'><i class='icon-zoom-in2'></i><span> Quick View</span></a>
								</div>
							</div>
							<div class='product-desc'>
								<div class='product-title'>
									<h3><a href='$link_detail'>$rek->jenis_media_promosi</a></h3>
									<small>$rek->orientasi - $rek->penerangan</small>
								</div>
								<div class='product-price'> <ins>".rupiah($rek->harga_1_bulan)."/Bln</ins></div>
								<div class='product-rating'>$rek->alamat <br> $rek->nama_kota - $rek->nama_provinsi </div>
							</div>
						</div>";

					}
				?>
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


	<?php 
	include ("part/footer.php");
	?>

</body>
</html>