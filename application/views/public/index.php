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

			</div>

		</section><!-- #content end -->


	<?php 
	include ("part/footer.php");
	?>

</body>
</html>