

<div class="table-responsive m-t-40">
<table id="myTableOrderan" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>                                 
            <th>Id Pesanan</th>                                 
            <th>Media Detail</th>                       
            <th>Pemesan</th>	
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
foreach ($orderan->result() as $key) {
$no++;

$status = status_trx($key->status_pesanan);
if($key->status_pesanan=='0')
{
    $btn = "<a href='#' onclick='set_status_trx($key->id_trx,1);return false;' class='btn btn-xs btn-success  btn-block' >Terima</a>";
    $btn.= "<a href='#' onclick='set_status_trx($key->id_trx,3);return false;' class='btn btn-xs btn-danger  btn-block' >Tolak</a>";
    $info = "";
}else if($key->status_pesanan=='3')
{
    $info = "<b><font color=red>Silahkan cek rekening anda. dan bersiap pemasangan.</font></b>";
    $btn = "<a href='#' onclick='set_status_trx($key->id_trx,6);return false;' class='btn btn-xs btn-success  btn-block' >Konfirmasi</a>";
    
}else{
    $btn ="";
    $info = "";
}

$kategori_harga = str_replace("_", " ", $key->kategori_harga);
$str = $key->kategori_harga;
$harga = $key->$str;


//$chat = "<button class='btn btn-xs btn-success' onclick='chat($key->id_pemesan,\"$key->nama_pemesan\")'>Chat</button>";

$chat = "<a class='btn btn-xs btn-success' href='".base_url()."index.php/welcome/container_chat/$key->id_pemesan'>Chat</a>";

echo "
    <tr>
        <td>$no</td>                        
        <td>$key->id_trx</td>                        
        <td>	
        		- $key->jenis_media_promosi 
        	<br>- $key->nama_media_promosi 
        	<br>- $key->orientasi 
        	<br>- $key->penerangan 
        	<br>- $key->tinggi x $key->lebar M
        	<br>
        	$key->alamat, $key->nama_kota, $key->nama_provinsi
        </td>	
        
        <td>$key->nama_pemesan - $key->perusahaan_pemesan - $key->alamat_pemesan $chat </td>
        <td>$key->tgl_pesan</td>	                                
        <td><b> $status  </b> - code [$key->status_pesanan] <b> $info</td>
        <td>$key->tgl_mulai </td>
        <td>$key->tgl_akhir </td>
        <td>".rupiah($harga)." <br> $kategori_harga </td>
        <td>
            <a href='".base_url()."index.php/welcome/detail/$key->id_iklan' class='btn btn-xs btn-info  btn-block' target='blank'>Detail</a>

            $btn

        </td>
        
    </tr>
";
}
?>
          

        </tbody>
    </table>
</div>



<script type="text/javascript">
$('#myTableOrderan').DataTable({});


function set_status_trx(id,code)
{
    if(confirm("Anda yakin?"))
    {
        $.post("<?php echo base_url()?>index.php/welcome/set_status_trx",{id:id,code:code},function(){
            orderan_anda();
        })      
    }
    
}
$("#badge_order").html("<?php echo $orderan->num_rows()?>");
</script>