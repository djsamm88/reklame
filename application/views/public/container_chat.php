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



							<div class="row clearfix">

								<div class="col-lg-4" style="background: #edf1f5">
									<div class="heading-block noborder">
										<h3><?php echo $user['nama']?></h3>
										<span><?php echo $user['perusahaan']?></span>
										<ul class="list-group">
										<?php 
											foreach ($list_chat->result() as $lc) {
												echo "
													<li class='list-group-item list-group-item-info'>
														<a href='".base_url()."index.php/welcome/container_chat/$lc->id_pengguna'>
															$lc->nama
														</a>
													</li>
												";

											}
										?>
										</ul>
									</div>

									<div class="clear"></div>
								</div>
								<div class="col-lg-8">
									<div style="background: #edf1f5;padding:5px;"><b><?php echo $kpd['nama']?></b></div>
									<?php 
										include ("chat.php");
									?>
								</div>

							</div>

						</div>

						<div class="w-100 line d-block d-md-none"></div>

						

					</div>

				</div>

			</div>

		</section><!-- #content end -->



<?php 
include ("part/part_footer.php");
?>

</body>
</html>