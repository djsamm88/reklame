

<div class="table-responsive m-t-40">
<table id="myTable" class="table table-bordered table-striped">
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
    
}else{
    $btn ="";
}

$kategori_harga = str_replace("_", " ", $key->kategori_harga);
$str = $key->kategori_harga;
$harga = $key->$str;


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
        
        <td>$key->nama_pemesan - $key->perusahaan_pemesan - $key->alamat_pemesan </td>
        <td>$key->tgl_pesan</td>	                                
        <td><b> $status  </b> - code [$key->status_pesanan]</td>
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
    


function set_status_trx(id,code)
{
    if(confirm("Anda yakin?"))
    {
        $.post("<?php echo base_url()?>index.php/welcome/set_status_trx",{id:id,code:code},function(){
            orderan_anda();
        })      
    }
    
}
</script>