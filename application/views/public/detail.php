<?php 
	include ("part/head.php");
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php 
			include ("part/header.php");
			if($data->num_rows()==0)
			{
				include ("part/404.php");
				include ("part/footer.php");
				die("404 Not Found");
			}

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


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo $row->jenis_media_promosi?> - <?php echo $row->alamat?> </h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><i class="icon-map-marker1"></i></li>
					<li class="breadcrumb-item"><?php echo $row->nama_kota?> </li>
					<li class="breadcrumb-item"><?php echo $row->nama_provinsi?></li>					
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_two_fifth">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="product-image">
									<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
										<div class="flexslider">
											<div class="slider-wrap" data-lightbox="gallery">
												<?php 
													foreach ($gbr as $g) {
														echo "<div class='slide' data-thumb='".base_url()."uploads/$g'><a href='".base_url()."uploads/$g' title='Pink Printed Dress - Front View' data-lightbox='gallery-item'><img src='".base_url()."uploads/$g' ></a></div>";
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
								
								<div class="product-price"><?php echo $row->perusahaan?></div>
								<div class="clear"></div>
								<small><i class="icon-line-circle-check"></i> Pemilik terverifikasi</small>
								

								<div class="clear"></div>
								


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
								


							</div>

							<div class="col_one_fifth col_last">
								<?php //print_r($this->session->userdata())?>
								<div class="product-price" id="hargaSewa"> 
									Rp.<?php echo rupiah($row->harga_1_bulan)?>/Bulan
								</div>
								<!-- Product Single - Price End -->

								<div class="divider divider-center"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<form id="form_pemesanan">
										<input type="hidden" name="harga" id="harga" value="<?php echo ($row->harga_1_bulan)?>">
										<input type="hidden" name="id_pengguna" id="id_pengguna" value="<?php echo ($this->session->userdata('id_pengguna'))?>">
										<input type="hidden" name="id_iklan" id="id_iklan" value="<?php echo ($row->id_iklan)?>">
									<h3>Durasi Sewa:</h3>
									<select class="form-control" id="lama_pesan" name="kategori_harga">
										<option value="harga_1_minggu"> 1 Minggu</option>
										<option value="harga_2_minggu"> 2 Minggu</option>
										<option value="harga_1_bulan" selected> 1 Bulan</option>
										<option value="harga_3_bulan"> 3 Bulan</option>
										<option value="harga_6_bulan"> 6 Bulan</option>
										<option value="harga_1_tahun"> 1 Tahun</option>

									</select>
									<?php 
										
										$mulai = strtotime(date('Y-m-d'));
										$mulai = strtotime("+7 day", $mulai);
										$akhir = strtotime("+30 day", $mulai);
										
									?>
									<br>
									Mulai:
									<input type="text" name="tgl_mulai" id="tgl_mulai" class="form-control datepicker_mulai" value="<?php echo date('Y-m-d', $mulai)?>">

									s/d:
									<input type="text" name="tgl_akhir" id="tgl_akhir" class="form-control" value="<?php echo date('Y-m-d', $akhir)?>" readonly>
									<br>
									<button type="submit" class="btn btn-primary btn-block">Pesan</button>
									<br>
									<button onclick="chat_pemilik(<?php echo $row->id_pengguna?>);return false;" type="button" class="btn btn-success btn-block">Tanya Pemilik</button>
									</form>
								</div>


							</div>

							<div class="col_full nobottommargin">
								<div class="line"></div>
								<h3>Maps</h3>
								<div id="map" style="height: 400px; margin-bottom: 20px;" class="gmap"></div>

								Dekat dengan:<br>
								<div class="row">
									<div class="col-sm-6">
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_1?>
										</span><br>
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_2?></span>
									</div>

									<div class="col-sm-6">
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_1?>
										</span><br>
										<span class="badge badge-warning">
											<i class="icon-map-marker1"></i> <?php echo $row->dekat_2?>
										</span>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>



				</div>

			</div>

		</section><!-- #content end -->




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalKonfirmasi">
<div class="modal-dialog modal-lg">
	<div class="modal-body">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Konfirmasi pemesanan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div id="t4_modalKonfirmasi"></div>
			</div>
		</div>
	</div>
</div>
</div>


<?php 
include ("part/footer.php");
?>

<script type="text/javascript">
	var myLatlng = new google.maps.LatLng(3.597031,98.678513);
    var mapOptions = {
      zoom: 15,
      center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Place a draggable marker on the map
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,	        
        title:"Lokasi"
    });


/******** pemesanan *******/
var id_pengguna = "<?php echo $this->session->userdata('id_pengguna')?>";

$("#form_pemesanan").on("submit",function(){
	if(id_pengguna=="")
	{
		$("#modalDaftar").modal('show');
		return false;
	}

	$("#modalKonfirmasi").modal('show');
	$("#t4_modalKonfirmasi").html($(this).serialize());

	var content = '<table class="table"><tr><td>Jenis Media</td><td><?php echo $row->jenis_media_promosi?></td></tr>'+
					'<tr><td>Orientasi</td><td><?php echo $row->orientasi?></td></tr>'+
					'<tr><td>Venue</td><td><?php echo $row->venue?></td></tr>'+
					'<tr><td>Penerangan</td><td><?php echo $row->penerangan?></td></tr>'+
					'<tr><td>Tinggi - Lebar</td><td><?php echo $row->tinggi?>Meter -  <?php echo $row->lebar?>Meter</td></tr></table>';
	var gbr = "<img src='<?php echo base_url()."uploads/".($gbr[0])?>' width='100%'>";
	var judul = "<h3><?php echo $row->jenis_media_promosi?> - <?php echo $row->alamat?></h3>";

	var satuan = $("#lama_pesan option:selected").text();
	var konfirmasi = "<div class=line><div><h4>Total <a>Rp."+formatRupiah($("#harga").val())+"</a> untuk <a>"+satuan+"</a></h4>";
		konfirmasi += "<div class='row'><div class='col-sm-6'>Harga Media </div><div class='col-sm-6'><a>Rp."+formatRupiah($("#harga").val())+"</a> </div>  </div>";
		konfirmasi += "<div class='row'><div class='col-sm-6'>Mulai </div><div class='col-sm-6'><a>"+($("#tgl_mulai").val())+"</a> </div>  </div>";
		konfirmasi += "<div class='row'><div class='col-sm-6'>Selesai </div><div class='col-sm-6'><a>"+($("#tgl_akhir").val())+"</a> </div>  </div>";
		konfirmasi += "<div class='row'><div class='col-sm-6'>Lama </div><div class='col-sm-6'><a>"+(satuan)+"</a> </div>  </div>";

	var tombol = "<div class='line'></div><button class='btn btn-primary' onclick='konfirmasi()'>Konfirmasi Order</button>";

	$("#t4_modalKonfirmasi").html(judul+gbr+content+konfirmasi+tombol);

	
	return false;
})

function konfirmasi()
{
	$.post("<?php echo base_url()?>index.php/welcome/pesan",$("#form_pemesanan").serialize(),function(e){
		console.log(e);
		window.location.replace("<?php echo base_url()?>index.php/welcome/toko_anda");
	});
}

function dateToString(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}

function addMonths(date, months) {
    var d = date.getDate();
    date.setMonth(date.getMonth() + +months);
    if (date.getDate() != d) {
      date.setDate(0);
    }
    return date;
}



$('.datepicker_mulai').datepicker({
	autoclose: true,
	startDate: '+7d',
	format: "yyyy-mm-dd",

}).on("change",function(){
	console.log($(this).val())
	var e = $("#lama_pesan").val();
	var akhir;

	var tgl = $(this).val().split("-");
	var f = new Date(tgl[0], tgl[1] - 1, tgl[2]);	
	var minggu = new Date(f);
	
	
	
	if(e=="harga_1_minggu")
	{
		akhir=dateToString(minggu.setDate(minggu.getDate() + 7));
	}

	if(e=="harga_2_minggu")
	{
		akhir=dateToString(minggu.setDate(minggu.getDate() + 14));
	}

	if(e=="harga_1_bulan")
	{
		akhir=dateToString(addMonths(f,1).toString());
	}

	if(e=="harga_3_bulan")
	{
		akhir=dateToString(addMonths(f,3).toString());
	}

	if(e=="harga_6_bulan")
	{
		akhir=dateToString(addMonths(f,6).toString());
	}

	if(e=="harga_1_tahun")
	{
		akhir=dateToString(addMonths(f,12).toString());
	}

	console.log(akhir);
	$("#tgl_akhir").val(akhir);
	
})



var harga_1_minggu = "<?php echo $row->harga_1_minggu?>";
var harga_2_minggu = "<?php echo $row->harga_2_minggu?>";
var harga_1_bulan = "<?php echo $row->harga_1_bulan?>";
var harga_3_bulan = "<?php echo $row->harga_3_bulan?>";
var harga_6_bulan = "<?php echo $row->harga_6_bulan?>";
var harga_1_tahun = "<?php echo $row->harga_1_tahun?>";


$("#lama_pesan").on("change",function(){
	var e = $(this).val();
	var harga;
	var akhir;


	var tgl = $(".datepicker_mulai").val().split("-");
	var f = new Date(tgl[0], tgl[1] - 1, tgl[2]);	
	var minggu = new Date(f);


	if(e=="harga_1_minggu")
	{
		harga=harga_1_minggu;
		akhir=dateToString(minggu.setDate(minggu.getDate() + 7));
	}

	if(e=="harga_2_minggu")
	{
		harga=harga_2_minggu;
		akhir=dateToString(minggu.setDate(minggu.getDate() + 14));
	}

	if(e=="harga_1_bulan")
	{
		harga=harga_1_bulan;
		akhir=dateToString(addMonths(f,1).toString());
	}

	if(e=="harga_3_bulan")
	{
		harga=harga_3_bulan;
		akhir=dateToString(addMonths(f,3).toString());
	}

	if(e=="harga_6_bulan")
	{
		harga=harga_6_bulan;
		akhir=dateToString(addMonths(f,6).toString());
	}

	if(e=="harga_1_tahun")
	{
		harga=harga_1_tahun;
		akhir=dateToString(addMonths(f,12).toString());
	}


	var satuan = $("#lama_pesan option:selected").text();

	if(harga=="" || harga=="0")
	{
		alert("Maaf, harga tidak ada untuk "+satuan);
		$(this).val('harga_1_bulan').trigger('change');

		return false;
	}
	
	


	$("#hargaSewa").html(formatRupiah(harga,'Rp.')+" / "+satuan);
	$("#tgl_akhir").val(akhir);
	$("#harga").val(harga);
})



function chat_pemilik(id_pengguna)
{
	console.log(id_pengguna)
	var session_login = "<?php echo $this->session->userdata('id_pengguna')?>";
	if(session_login=="")
	{
		$("#modalDaftar").modal('show');
		return false;
	}

	window.location.replace("<?php echo base_url()?>index.php/welcome/container_chat/"+id_pengguna);
}
</script>

</body>
</html>