<?php 
	include ("part/head.php");
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php 
			include ("part/header.php");
			//$user = $this->session->userdata();

			$q = $this->m_pengguna->by_id($this->session->userdata('id_pengguna'));
			$user = $q->result_array()[0];
		?>

	

<!-- Content
		============================================= -->
		<div class="clear"></div>
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-md-12">


							<div class="heading-block noborder">
								<h3><?php echo $user['nama']?></h3>
								<span><?php echo $user['perusahaan']?></span>
							</div>

							<div class="clear"></div>

							<div class="row clearfix">

								<div class="col-lg-12">

									<div class="tabs tabs-alt clearfix" id="tabs-profile">

										<ul class="tab-nav clearfix">
											<li><a href="#tab-feeds"><i class="icon-user"></i> Profil</a></li>
											<li><a href="#tab-posts" id="tab_pesanan" onclick="pesanan_anda()"><i class="icon-cart"></i> Pesanan Anda</a></li>
											<li><a href="#tab-replies" onclick="iklan_anda()"><i class="icon-store"></i> Produk Anda</a></li>
											<li><a href="#tab-order" onclick="orderan_anda()"><i class="icon-store"></i> Orderan Baru</a></li>
											<li><a href="#tab-connections"><i class="icon-users"></i> Connections</a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tab-feeds">
												<?php include "profil_anda.php"?>
											</div>
											<div class="tab-content clearfix" id="tab-posts">
												<?php //include "pesanan_anda.php"?>
												<div id="pesanan_anda"></div>

											</div>
											


											<div class="tab-content clearfix" id="tab-replies">
												<!--- iklan anda -->
												<div id="iklan_anda"></div>
											</div>





											<div class="tab-content clearfix" id="tab-order">

												<?php //include "orderan_kepada_anda.php"?>
												<div id="orderan_anda"></div>


											</div>
											<div class="tab-content clearfix" id="tab-connections">
												Chating
											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="w-100 line d-block d-md-none"></div>

						

					</div>

				</div>

			</div>

		</section><!-- #content end -->



<?php 
include ("part/footer.php");
?>

<script type="text/javascript">
$('#tgl_lahir').datepicker({
	autoclose: true,	
	format: "yyyy-mm-dd",


});
hanya_nomor(".nomor");	


$("#form_profile_anda").on("submit",function(){
	$.post("<?php echo base_url()?>index.php/welcome/update_profil",$(this).serialize(),function(e){
		console.log(e);
		$("#info_update_profil").html("<div class='alert alert-success'>Berhasil update profil.</div>");
	})
	return false;
})

$(document).ready(function(){
	$("#tab_pesanan").trigger("click");	
})

function iklan_anda()
{	
	$("#iklan_anda").empty();
	$.get("<?php echo base_url()?>index.php/welcome/iklan_anda",function(x){
		$("#iklan_anda").html(x);
	})
}

function orderan_anda()
{
	$("#orderan_anda").empty();
	$.get("<?php echo base_url()?>index.php/welcome/orderan_anda",function(x){
		$("#orderan_anda").html(x);
	})
}


function pesanan_anda()
{	
	$("#pesanan_anda").empty();
	$.get("<?php echo base_url()?>index.php/welcome/pesanan_anda",function(pes){
		$("#pesanan_anda").html(pes);
	})
	
}
</script>

</body>
</html>