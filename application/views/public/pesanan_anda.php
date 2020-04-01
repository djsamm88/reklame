

<div class="table-responsive m-t-40">
<table id="myTablePesanan" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>                                 
            <th>Media Detail</th>                       
            <th>Pemilik</th>	
            <th>Update</th>	                                            
                                                        
            <th>Status</th>
            <th>Tgl Mulai</th>
            <th>Tgl Selesai</th>
            <th>Harga</th>
            <th>Action</th>                                                
        </tr>
    </thead>
    <tbody>

                                    
<?php 
$no=0;
foreach ($pesanan->result() as $key) {
$no++;


if($key->status_pesanan=='1')
{
    
    $info = "Silahkan lakukan pembayaran ke rekening okikan.com <b>[1231231231xxx]</b> dan kemudian upload bukti setor. <button class='btn btn-info' onclick='upload_bukti($key->id_trx)'>Upload</button>";
}else if($key->status_pesanan=='2'){

    $info = "Kami akan segera memproses pesanan anda. Silahkan menunggu. <a href='".base_url()."uploads/$key->bukti_bayar' target='blank'>Bukti bayar anda</a>";
}else if($key->status_pesanan=='3'){
    $info = "<font color=red>Orderan anda akan dipersiapkan. Bersiap dihubungi pihak seller.</font>";

}else{
    $info = "";
    
}


$kategori_harga = str_replace("_", " ", $key->kategori_harga);
$str = $key->kategori_harga;
$harga = $key->$str;

$status = status_trx($key->status_pesanan);

echo "
    <tr>
        <td>$no</td>                        
        <td>	
        		- $key->jenis_media_promosi 
        	<br>- $key->nama_media_promosi 
        	<br>- $key->orientasi 
        	<br>- $key->penerangan 
        	<br>- $key->tinggi x $key->lebar M
        	<br>
        	$key->alamat, $key->nama_kota, $key->nama_provinsi
        </td>	
        
        <td>$key->nama_pemilik - $key->perusahaan</td>
        <td>$key->tgl_pesan</td>	                                
        <td> <b>$status</b> code[$key->status_pesanan] <br> <br> $info</td>
        <td>$key->tgl_mulai </td>
        <td>$key->tgl_akhir </td>
        <td>".rupiah($harga)." <br> $kategori_harga </td>
        <td>
            <a href='".base_url()."index.php/welcome/detail/$key->id_iklan' class='btn btn-xs btn-info  btn-block' target='blank'>Detail</a>
        </td>
        
    </tr>
";
}
?>
                                  

        </tbody>
    </table>
</div>



<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="form_upload_bukti">
    <div class="modal-dialog modal-sm">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Lakukan Penyetoran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" id="body_form_upload_bukti">
                    <p class="nobottommargin">Pastikan anda sudah melakukan pembayaran ke rekening kami.</p>
                    <form id="go_upload">
                        <input type="hidden" name="id" value="" id="id_trx_upload">
                        <input class="dropify" name="bukti_bayar" id="bukti_bayar" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <br>
                        <button type="submit" class="btn btn-danger">Kirim bukti setor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$("#myTablePesanan").dataTable({});
$('.dropify').dropify();        
function upload_bukti(id_trx)
{
    $("#id_trx_upload").val(id_trx)
    $("#form_upload_bukti").modal('show');
}

$("#go_upload").on("submit",function(){
    $.ajax({
            url: "<?php echo base_url()?>index.php/welcome/upload_bukti/",
            type: "POST",
            contentType: false,
            processData:false,
            data:  new FormData(this),
            beforeSend: function(){
                //alert("sedang uploading...");
            },
            success: function(e){
                console.log(e);
              
                alert("Berhasil di upload. Silahkan menuggu konfimasi kami.");
                $("#body_form_upload_bukti").html("Berhasil di upload. Silahkan menuggu konfimasi kami.");
                
            },
            error: function(er){
              alert("ada masalah:"+err);
            }           
       });

    return false;
})


$("#form_upload_bukti").on("hidden.bs.modal", function () {
    pesanan_anda();
});

</script>