<?php 
$sel_jenis_media_promosi = isset($_GET['jenis_media_promosi'])?$_GET['jenis_media_promosi']:"";
$sel_provinsi =isset($_GET['provinsi'])?$_GET['provinsi']:"";
$sel_kota_kab =isset($_GET['kota_kab'])?$_GET['kota_kab']:"";

?>

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
								
								<select class="form-control" placeholder="Media" style="height: 60px" id="pilih_media" name="jenis_media_promosi">
									 <option value="" selected="selected">--- Pilih Media ---</option>
									 <?php 
									 	//var_dump($provinsi);
									 	foreach ($media as $med) {
									 		
									 		$sel = $med->nama==$sel_jenis_media_promosi?"selected":"";

									 		echo "<option value='$med->nama' $sel>$med->nama</option>";
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
									 		$sel = $prov->id==$sel_provinsi?"selected":"";
									 		echo "<option value='$prov->id' $sel>$prov->name</option>";
									 	}
									 ?>
                                          
								</select>
							</li>

							<li>
								
								<select class="form-control" placeholder="Kota/Kabupaten" style="height: 60px; width: 100%;" id="kota_kab" name="kota_kab">
									 <option value="" selected="selected">--- Pilih Kota/Kab ---</option>
                                              
                                          
								</select>
							</li>

							<li>
								<button type="submit"  class="button button-3d nomargin" id="cari" value="Cari" style="height: 60px"><i class="icon-search3"></i></button>

							</li>

						</ul>
						</form>

						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#"><i class="icon-line2-login"></i></a>


						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->