<?php 
	include ("part/head.php");
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php 
			include ("part/header.php");
		?>

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu" class="no-sticky">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Portfolio <span>Variations</span></div>

					<nav>
						<ul>
							<li class="current"><a href="portfolio-3-masonry.html"><div>With Margin</div></a></li>
							<li><a href="portfolio-3-masonry-nomargin.html"><div>No Margin</div></a></li>
							<li><a href="portfolio-3-masonry-title-overlay.html"><div>Title Overlay</div></a></li>
							<li><a href="portfolio-3-fullwidth-masonry.html"><div>Full Width</div></a></li>
						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Portfolio - Masonry</h1>
				<span>Showcase of Our Awesome Works in 3 Columns</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".pf-icons">Icons</a></li>
						<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
						<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
						<li><a href="#" data-filter=".pf-media">Media</a></li>
						<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

					</ul><!-- #portfolio-filter end -->

					<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-masonry clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/masonry/3/1.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Open Imagination</a></h3>
								<span><a href="#">Media</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/masonry/3/2.jpg" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
								<span><a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="images/portfolio/masonry/3/3.jpg" alt="Mac Sunglasses">
								</a>
								<div class="portfolio-overlay">
									<a href="https://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/4.jpg" alt="Morning Dew"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/4-1.jpg" alt="Morning Dew"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
								<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-media">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/masonry/3/5.jpg" alt="Console Activity">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Console Activity</a></h3>
								<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6.jpg" alt="Shake It"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-1.jpg" alt="Shake It"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-2.jpg" alt="Shake It"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-3.jpg" alt="Shake It"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
								<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single-video.html">
									<img src="images/portfolio/masonry/3/7.jpg" alt="Backpack Contents">
								</a>
								<div class="portfolio-overlay">
									<a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
								<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/masonry/3/8.jpg" alt="Sunset Bulb Glow">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations pf-icons">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9.jpg" alt="Bridge Side"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9-1.jpg" alt="Bridge Side"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9-2.jpg" alt="Bridge Side"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Bridge Side</a></h3>
								<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
							</div>
						</article>

					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->

	
	<?php 
	include ("part/footer.php");
	?>

</body>
</html>