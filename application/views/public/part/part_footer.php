<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo base_url()?>assets/js/functions.js"></script>
	<script src="<?php echo base_url()?>assets/js/datepicker.js"></script>
	<script src="<?php echo base_url()?>assets/js/components/bs-datatable.js"></script>
	    	



    <script src="<?php echo base_url()?>assets_admin/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url()?>assets_admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets_admin/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/tinymce/tinymce.min.js"></script>


    <script src="<?php echo base_url()?>assets_admin/pace/pace.min.js"></script>



<!-- Modal Chat-->
<div class="modal fade" id="ModalChat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal_dialog_chat">
		<div class="modal-body modal_body_chat">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="judulChat">Chating</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="body_chat">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">

</style>
<!-- modal chat -->


<!-- google maps api -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvnP6-IQADuP461VqlXqYjdm6sWlkhVWs&sensor=false&libraries=places"></script>


<script type="text/javascript">
$(document).ajaxStart(function() { Pace.restart(); });
$(document).ready(function(){
	$("#pilih_prov").val("<?php echo $sel_provinsi?>").trigger("change");	

	$("#t4_judul_cari").empty()
	$("#t4_judul_cari").append($("#pilih_prov option:selected").text())
	$("#t4_judul_cari").append($("#kota_kab option:selected").text())
	$("#t4_judul_cari").append($("#pilih_media option:selected").text());

})

badge_all();
function badge_all()
{
	$.get("<?php echo base_url()?>index.php/welcome/badge_all",function(e){
		var all = e.pesanan+e.orderan;

		if(all=="0")
		{
			$(".badge_all").html(e.toko);	
		}
		$(".badge_all").html(all);
	})
}

function hanya_nomor(input)
{
        
    $(input).keyup(function(event) {

      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40) return;

      // format number
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        ;
      });
    });

}


function uang(input)
{
        
    $(input).keyup(function(event) {

      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40) return;

      // format number
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        ;
      });
    });

}



$("#pilih_prov").on("change",function(){
	
	var sel = "<?php echo $sel_kota_kab?>"; //ini dari header

	$.get("<?php echo base_url()?>index.php/welcome/ambil_kab/"+$(this).val(),function(e){
		//console.log(e);
		$("#kota_kab").empty();				
		$("#kota_kab").append("<option value=''>--- Pilih Kota/Kab ---</option>");
		$.each(e,function(a,b){
			
			if(b.id==sel)
			{
				var select = "selected";
				console.log("testing="+b.id+"=="+sel);
			}else{
				var select = "";
			}

			$("#kota_kab").append("<option value='"+b.id+"' "+select+">"+b.name+"</option>");
		})
	})
});


$("#register_form").on("submit",function(){
	$("#info_daftar").hide();
	if($("#register_password").val() != $("#register_repassword").val())
	{
		$("#info_daftar").hide()
						 .html("<div class='alert alert-warning'>Password tidak sama</div>")
						 .delay(500)
						 .fadeIn();

		$("#register_repassword").focus();
		return false;
	}

	if($("#register_password").val().length < 6)
	{
		$("#info_daftar").hide()
						 .html("<div class='alert alert-warning'>Password minimal 6 karakter</div>")
						 .delay(500)
						 .fadeIn();

		$("#register_password").focus();
		return false;
	}
	$.post("<?php echo base_url()?>index.php/welcome/daftar",$(this).serialize(),function(e){
		console.log(e);
		if(e == "email_terdaftar")
		{
			$("#info_daftar").hide()
							 .html("<div class='alert alert-warning'>Email sudah terdaftar.</div>")
							 .delay(500)
							 .fadeIn();

			$("#register_email").focus();
			return false;
		}else 
		if(e == "berhasi_daftar")
		{
			$("#info_daftar").hide()
							 .html("<div class='alert alert-success'>Berhasil terdaftar. Mohon tunggu...</div>")
							 .delay(500)
							 .fadeIn();
							 location.reload();
		}else
		{
			$("#info_daftar").hide()
			 				 .html("<div class='alert alert-danger'>Mohon maaf.. Ada masalah: "+e+"</div>")
			 				 .delay(500)
			 				 .fadeIn();
		}


	})
return false;
});



$("#login_member").on("submit",function(){
	$.post("<?php echo base_url()?>index.php/welcome/login",$(this).serialize(),function(e){
		console.log(e);
		if(e=="gagal_login")
		{
			$("#info_login").hide()
							.html("<div class='alert alert-danger'>Gagal Login. Email tidak terdaftar.</div>")
							.delay(500)
							.fadeIn();	
		}else if(e=="password_salah")
		{
			$("#info_login").hide()
							.html("<div class='alert alert-danger'>Gagal Login. Password salah.</div>")
							.delay(500)
							.fadeIn();
		}else if(e=="berhasil_login")
		{
			$("#info_login").hide()
							.html("<div class='alert alert-success'>Berhasil Login. Mohon tunggu...</div>")
							.delay(500)
							.fadeIn();
			location.reload();
		}else{
			$("#info_login").hide()
							.html("<div class='alert alert-danger'>Mohon maaf. Ada masalah: "+e+"</div>")
							.delay(500)
							.fadeIn();
		}
		

	});
	return false;
})



/* Fungsi formatRupiah */
function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAXSxqyuYW8NjggDSNverAHvQVH7bKljXA",
    authDomain: "pay-client.firebaseapp.com",
    databaseURL: "https://pay-client.firebaseio.com",
    projectId: "pay-client",
    storageBucket: "pay-client.appspot.com",
    messagingSenderId: "300283170277",
    appId: "1:300283170277:web:e9ff8dec50159c14d5b30c"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>


<!-- Include Firebase Library -->
<script src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
<script type="text/javascript">
function chat(id_pelanggan,kpd)
{	
	$("#judulChat").html(kpd);
	$("#body_chat").html("");
	$("#body_chat").empty();
	$.get("<?php echo base_url()?>index.php/welcome/chating_anda/"+id_pelanggan,function(ex){
		$("#body_chat").removeData();

		$("#body_chat").html(ex);
		$("#body_chat").append("aaa");
		$("#ModalChat").modal('show');
	});	
}
</script>




<script src="<?php echo base_url()?>assets_chat/notify.js"></script>
 
<!-- chats JavaScript -->
<script>

//*********************notification********************************************//
function onShowNotification () {
	console.log('notification is shown!');
}

function onCloseNotification () {
	console.log('notification is closed!');
}

function onClickNotification () {
	window.focus();
	onCloseNotification();
	console.log('notification was clicked!');
}

function onErrorNotification () {
	console.error('Error showing notification. You may need to request permission.');
}

function onPermissionGranted () {
	console.log('Permission has been granted by the user');
	doNotification();
}

function onPermissionDenied () {
	console.warn('Permission has been denied by the user');
}

var Notify = window.Notify.default;

function doNotification (nama,pesan,id) 
{
	var myNotification = new Notify(nama, {
		icon: 'http://okiklan.com/assets/logo_petak.jpeg',
		body: pesan,
		tag: id,
		notifyShow: onShowNotification,
		notifyClose: onCloseNotification,
		notifyClick: onClickNotification,
		notifyError: onErrorNotification,
		timeout: 10
	});

	myNotification.show();
}

if (!Notify.needsPermission) {
	//doNotification();
	//doNotification('sam','limb pesan disini','12');
	//alert('');
} else if (Notify.isSupported()) {
	Notify.requestPermission(onPermissionGranted, onPermissionDenied);
}
//*********************notification********************************************//


$("#ModalChat").on("hidden.bs.modal", function() {
	$("#body_chat").html("");
	$("#body_chat").empty();
	alert($("#body_chat").html())
});

$(document).ready(function(){
	$("#message").focus();
})
</script> 
