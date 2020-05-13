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

					<?php 
					if($this->session->userdata('id_pengguna') !="")
					{
					?>

					<div id="top-account" class="dropdown">
						<a href="#" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i> <span class="badge badge-pill badge-danger badge_all" ><span></a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
							<a class="dropdown-item tleft" href="#"><b>Hi. <?php echo $this->session->userdata('nama')?></b></a>
							<a class="dropdown-item tleft" href="<?php echo base_url()?>index.php/welcome/toko_anda">Transaksi Anda <span class="badge badge-pill badge-danger badge_all" ><span></a>
							<a class="dropdown-item tleft" href="#">Messages <span class="badge badge-pill badge-secondary fright" style="margin-top: 3px;">5</span></a>
							
							<div class="dropdown-divider"></div>
							<a class="dropdown-item tleft" href="<?php echo base_url()?>index.php/welcome/logout">Logout <i class="icon-signout"></i></a>
						</ul>
					</div>
					<?php 
					}
					?>



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

							<?php 
							if($this->session->userdata('id_pengguna') =="")
							{
							?>
							<li>
								<button  class=" btn btn-primary nomargin" data-target="#modalDaftar" type="button" data-toggle="modal" style="height: 60px"><i class="icon-line2-login"></i></button>
							</li>
							<?php 
							}
							?>

						</ul>
						</form>

						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							


						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->





<!-- Modal -->
	<div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-body">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Login</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					

					<div class="tabs tabs-alt tabs-tb clearfix" id="tab-8">

						<ul class="tab-nav clearfix">
						    <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
						    <li><a data-toggle="tab" id="register_link" href="#register">Daftar Penyewa</a></li>
						    <li><a data-toggle="tab" href="#register_pemilik">Daftar Pemilik Iklan</a></li>
						  </ul>

					  <div class="tab-container">
					    <div class="tab-content clearfix" id="login">
					      
					      <form id="login_member">
					      	<div class="col_half ">
								<label for="register-form-email">Email Address:</label>
								<input type="email" id="login_email" name="email" value="" class="form-control" required/>
							</div>

							<div class="col_half col_last">
								<label for="register-form-password"> Password:</label>
								<input type="password" id="login_password" name="password" value="" class="form-control" required/>
							</div>

							<div class="clear"></div>
							<div id="info_login" style="display: none;"></div>
							<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin" required>Login</button>

								<button class="button button-3d button-blue nomargin" type="button" onclick="login_fb()">Login FB</button>


								<!--
								<button class="button button-3d button-blue nomargin" type="button" onclick="logout_fb()">Logout FB</button>
								-->

								
								
							</div>
					      </form>

					    </div>
					    


					    <div class="tab-content clearfix" id="register">
					      	<form id="register_form" name="register-form" class="nobottommargin" action="#" method="post">
					      		<input type="hidden" name="jenis" value="Pelanggan">
					      		<input type="hidden" name="id_fb" id="id_fb_pelanggan">
								<div class="col_half">
									<label for="register-form-name">Nama:</label>
									<input type="text" id="register_nama_pelanggan" name="nama"  class="form-control" required/>
								</div>

								<div class="col_half col_last">
									<label for="register-form-email">Email Address:</label>
									<input type="email" id="register_email" name="email" value="" class="form-control" required/>
								</div>

								<div class="clear"></div>


								<div class="col_half">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="register_password" name="password" value="" class="form-control" required/>
								</div>

								<div class="col_half col_last">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="register_repassword" value="" class="form-control" required/>
								</div>

								<div class="clear"></div>
								<div id="info_daftar" style="display: none;"></div>
								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register" required>Daftar Sekarang</button>
								</div>

							</form>
					    </div>
						


					    <div class="tab-content clearfix" id="register_pemilik">
					      	<form id="register_form_mitra" name="register-form" class="nobottommargin" action="#" method="post">
					      		<input type="hidden" name="jenis" value="Mitra">

								<div class="col_full">
									<label for="register-form-email">Owner / Agency:</label><br>
									 <input type="radio" id="other" name="owner_agency" value="Owner" required>
  									 <label for="other">Owner</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  									 <input type="radio" id="other" name="owner_agency" value="Agency">
  									 <label for="other">Agency</label>
								</div>

								<div class="clear"></div>

								<div class="col_half">
									<label for="register-form-name">Nama:</label>
									<input type="text" id="register_nama" name="nama"  class="form-control" required/>
								</div>

								<div class="col_half col_last">
									<label for="register-form-email">Email Address:</label>
									<input type="email" id="register_email_mitra" name="email" value="" class="form-control" required/>
								</div>

								<div class="clear"></div>


								<div class="col_half">
									<label >Nama Perusahaan:</label>
									<input type="text" id="register_perusahaan" name="perusahaan" value="" class="form-control" required />
								</div>

								<div class="col_half col_last">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="registerno_hp" name="no_hp" value="" class="form-control" required />
								</div>

								<div class="clear"></div>




								<div class="col_half">
									<label >Nama Pemilik Perusahaan:</label>
									<input type="text" id="nama_pemilik_perusahaan" name="perusahaan" value="" class="form-control" required />
								</div>



								<div class="col_half col_last">
									<label >Alamat Perusahaan:</label>
									<textarea type="text" id="alamat_perusahaan" name="alamat" value="" class="form-control" required ></textarea>
								</div>

								<div class="clear"></div>


								<div class="col_half">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="register_password_mitra" name="password" value="" class="form-control" required/>
								</div>

								<div class="col_half col_last">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="register_repassword_mitra" value="" class="form-control" required/>
								</div>

								<div class="clear"></div>
								<div id="info_daftar_mitra" style="display: none;"></div>
								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register" required>Join Sekarang</button>
								</div>

							</form>
					    </div>
						

						</div>
					</div>


					</div>
				</div>
			</div>
		</div>
	</div>



<script type="text/javascript">
//script daftar ada di footer
</script>