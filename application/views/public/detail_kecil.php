<?php 
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
<!-- Content
		============================================= -->
		<div class="single-product shop-quick-view-ajax clearfix">

                    <div class="ajax-modal-title">
                        <h2><?php echo $row->jenis_media_promosi?> - <?php echo $row->alamat?></h2>
                    </div>

                    <div class="product modal-padding clearfix">

                        <div class="col_half nobottommargin">
                            <div class="product-image">
                                <div class="fslider" data-pagi="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
												<?php
													$i=0; 
													foreach ($gbr as $g) {
														$i++;														
														echo "<div class='' ><img src='".base_url()."uploads/$g' ></a></div>";														
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
							</div>

							

						</div>