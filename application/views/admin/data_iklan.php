
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">iklan Admin</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">iklan</li>
                            <li class="breadcrumb-item active">iklan Admin</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15" onclick="form_tambah()"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>id_iklan</th>
                                            <th>jenis_media_promosi</th>
                                            <th>orientasi</th>
                                            <th>penerangan</th>
                                            <th>venue</th>
                                            <th>nama_media_promosi</th>
                                            <th>tags</th>                                            
                                            <th>tgl</th>

                                            <th>Action</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                <?php 
                    $no=0;
                    foreach ($all_admin->result() as $key) {
                        $no++;
                        echo "
                            <tr>
                                <td>$no</td>
                                <td>$key->id_iklan</td>
                                <td>$key->jenis_media_promosi</td>
                                <td>$key->orientasi</td>
                                <td>$key->penerangan</td>
                                <td>$key->venue</td>
                                <td>$key->nama_media_promosi</td>
                                <td>$key->tags</td>                                
                                <td>$key->tgl</td>
                                <td>
                                    <button class='btn btn-xs btn-info  btn-block' onclick='edit($key->id_iklan,2)'>View</button>

                                    <button class='btn btn-xs btn-warning btn-block' onclick='edit($key->id_iklan,1)'>Edit</button>

                                    <button class='btn btn-xs btn-danger btn-block'  onclick='hapus($key->id_iklan)'>Hapus</button>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                                      

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->


<!-- sample modal content -->
<div id="responsive-modal" class="modal fade"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Form Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <form id="form_modal">
                <input type="hidden" name="id_iklan" id="id_iklan">

                <div class="row">
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">jenis_media_promosi</label>
                        <select class="form-control" name="jenis_media_promosi" id="jenis_media_promosi" style="width: 100%">
                            <?php 
                                foreach ($this->m_util->all_master('media')->result() as $master) {
                                    echo "<option value='$master->nama'>$master->nama</option>";
                                }
                            ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">orientasi</label>
                        <select class="form-control" name="orientasi" id="orientasi">
                            <option value="Horizontal">Horizontal</option>
                            <option value="Vertikal">Vertikal</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">penerangan</label>
                        <select class="form-control" name="penerangan" id="penerangan" >
                            <?php 
                                foreach ($this->m_util->all_master('penerangan')->result() as $master) {
                                    echo "<option value='$master->nama'>$master->nama</option>";
                                }
                            ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">venue</label>
                        <select class="form-control" name="venue" id="venue" style="width: 100%">
                            <?php 
                                foreach ($this->m_util->all_master('venue')->result() as $master) {
                                    echo "<option value='$master->nama'>$master->nama</option>";
                                }
                            ?>
                        </select>
                    </div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label">nama_media_promosi</label>
                    <input class="form-control" name="nama_media_promosi" id="nama_media_promosi" type="text">
                </div>
                    
                <div class="form-group">
                    <label class="control-label">tags</label>
                    <select class="form-control select2" name="tags" id="tags" style="width: 100%">
                        <?php 
                            foreach ($this->m_util->all_master('tags')->result() as $master) {
                                echo "<option value='$master->nama'>$master->nama</option>";
                            }
                        ?>
                    </select>
                </div>
                    

                <table class="table color-bordered-table info-bordered-table">
                    <thead>
                        <tr>
                            <th><label class="control-label">harga_1_minggu</label></th>
                            <th><label class="control-label">harga_2_minggu</label></th>
                            <th><label class="control-label">harga_1_bulan</label></th>
                            <th><label class="control-label">harga_3_bulan</label></th>
                            <th><label class="control-label">harga_6_bulan</label></th>
                            <th><label class="control-label">harga_1_tahun</label></th>                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control uang" name="harga_1_minggu" id="harga_1_minggu" type="text"></td>
                            <td><input class="form-control uang" name="harga_2_minggu" id="harga_2_minggu" type="text"></td>
                            <td><input class="form-control uang" name="harga_1_bulan" id="harga_1_bulan" type="text"></td>
                            <td><input class="form-control uang" name="harga_3_bulan" id="harga_3_bulan" type="text"></td>
                            <td><input class="form-control uang" name="harga_6_bulan" id="harga_6_bulan" type="text"></td>
                            <td><input class="form-control uang" name="harga_1_tahun" id="harga_1_tahun" type="text"></td>
                        </tr>
                    </tbody>
                </table>
               

                <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">gbr_1</label>
                        <input class="dropify" name="gbr_1" id="gbr_1" type="file" accept="image/*">
                        <div id="t4_gbr_1"></div>
                    </div>
                    </div>

                    <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">gbr_2</label>
                        <input class="dropify" name="gbr_2" id="gbr_2" type="file" accept="image/*">
                        <div id="t4_gbr_2"></div>
                    </div>
                    </div>
                    
                    <div class="col-sm-4">    
                    <div class="form-group">
                        <label class="control-label">gbr_3</label>
                        <input class="dropify" name="gbr_3" id="gbr_3" type="file" accept="image/*">
                        <div id="t4_gbr_3"></div>
                    </div>
                    </div>
                </div>
                    


                <div class="form-group">
                    <label class="control-label">url_video</label>
                    <input class="form-control" name="url_video" id="url_video" type="text">
                </div>
                    
                <div class="form-group">
                    <label class="control-label">alamat</label>
                    <input class="form-control" name="alamat" id="alamat" type="text">
                </div>
                    
                <div class="form-group">
                    <label class="control-label">provinsi</label>
                    <select class="form-control select2" name="provinsi" id="provinsi" style="width:100%" required>
                        <option value=''>--- Pilih ---</option>
                        <?php 
                            foreach ($this->m_util->provinsi()->result() as $prov) {
                                echo "<option value='$prov->id'>$prov->name</option>";
                            }
                        ?>
                    </select>
                </div>
                    
                <div class="form-group">
                    <label class="control-label">kota/kab</label>
                    <select class="select2 form-control" name="kota_kab" id="kota_kab"  style="width: 100%">
                    </select>
                </div>

                <div id="map" class="gmaps"></div>
            
                
                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">lat</label>
                        <input class="form-control" name="lat" id="lat" type="text" readonly>
                    </div>
                    </div>
                    <div class="col-sm-6">    
                    <div class="form-group">
                        <label class="control-label">lng</label>
                        <input class="form-control" name="lng" id="lng" type="text" readonly>
                    </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Lokasi Terdekat (4 Lokasi)</label>
                        
                </div>
                
                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">dekat_1</label>
                            <input class="form-control" name="dekat_1" id="dekat_1" type="text" placeholder="Lokasi Dekat"> 
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">lat_dekat_1</label>
                            <input class="form-control" name="lat_dekat_1" id="lat_dekat_1" type="text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">                            
                        <div class="form-group">
                            <label class="control-label">lng_dekat_1</label>
                            <input class="form-control" name="lng_dekat_1" id="lng_dekat_1" type="text" readonly>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">dekat_2</label>
                            <input class="form-control" name="dekat_2" id="dekat_2" type="text" placeholder="Lokasi Dekat">
                        </div>
                    </div>
                    <div class="col-sm-3">                            
                        <div class="form-group">
                            <label class="control-label">lat_dekat_2</label>
                            <input class="form-control" name="lat_dekat_2" id="lat_dekat_2" type="text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">lng_dekat_2</label>
                            <input class="form-control" name="lng_dekat_2" id="lng_dekat_2" type="text" readonly>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">dekat_3</label>
                            <input class="form-control" name="dekat_3" id="dekat_3" type="text" placeholder="Lokasi Dekat">
                        </div>
                    </div>
                    <div class="col-sm-3">                    
                        <div class="form-group">
                            <label class="control-label">lat_dekat_3</label>
                            <input class="form-control" name="lat_dekat_3" id="lat_dekat_3" type="text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">                    
                        <div class="form-group">
                            <label class="control-label">lng_dekat_3</label>
                            <input class="form-control" name="lng_dekat_3" id="lng_dekat_3" type="text" readonly>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">dekat_4</label>
                            <input class="form-control" name="dekat_4" id="dekat_4" type="text" placeholder="Lokasi Dekat">
                        </div>
                    </div>
                    <div class="col-sm-3">                                            
                        <div class="form-group">
                            <label class="control-label">lat_dekat_4</label>
                            <input class="form-control" name="lat_dekat_4" id="lat_dekat_4" type="text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">                    
                        <div class="form-group">
                            <label class="control-label">lng_dekat_4</label>
                            <input class="form-control" name="lng_dekat_4" id="lng_dekat_4" type="text" readonly>
                        </div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label">deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" ></textarea>
                </div>
                    

                <div class="row">
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">surat_tanah_titik_berdiri</label>
                        <input class="dropify" name="surat_tanah_titik_berdiri" id="surat_tanah_titik_berdiri" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_surat_tanah_titik_berdiri"></div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">ijin_mendirikan_bangunan</label>
                        <input class="dropify" name="ijin_mendirikan_bangunan" id="ijin_mendirikan_bangunan" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_ijin_mendirikan_bangunan"></div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">jaminan_bongkar</label>
                        <input class="dropify" name="jaminan_bongkar" id="jaminan_bongkar" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_jaminan_bongkar"></div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">surat_ketetapan_rencana_kota</label>
                        <input class="dropify" name="surat_ketetapan_rencana_kota" id="surat_ketetapan_rencana_kota" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_surat_ketetapan_rencana_kota"></div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">surat_setoran_pajak_daerah</label>
                        <input class="dropify" name="surat_setoran_pajak_daerah" id="surat_setoran_pajak_daerah" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_surat_setoran_pajak_daerah"></div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">ijin_penyelenggaraan_reklame</label>
                        <input class="dropify" name="ijin_penyelenggaraan_reklame" id="ijin_penyelenggaraan_reklame" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_ijin_penyelenggaraan_reklame"></div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">bukti_asuransi</label>
                        <input class="dropify" name="bukti_asuransi" id="bukti_asuransi" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                        <div id="t4_bukti_asuransi"></div>
                    </div>
                </div>
            </div>
                    


                
                <div id="info"></div>
                <button type="submit" id="tombol_simpan" class="btn btn-danger waves-effect waves-light">Save changes</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            
        </div>
    </div>
</div>
</div>
<!-- /.modal -->
<script src="<?php echo base_url()?>assets_admin/node_modules/tinymce/tinymce.min.js"></script>

<style type="text/css">
    .pac-container {
        background-color: #FFF;
        z-index: 1000;
        position: fixed;
        display: inline-block;
        float: left;
    }
    .modal{
        z-index: 1000;   
    }
    .modal-backdrop{
        z-index: 999;        
    }​
</style>

<script type="text/javascript">  
$(document).ready(function(){
$('#myTable').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'print'
    ]
});
})

/***** menghapus garis bawah ******/
$('.control-label,th').text(function(i, text) {    
return text.replace(/_/g, ' ');
});
/***** menghapus garis bawah ******/

/***** membesarkan ******/
$('.control-label,th').text(function(i, text) {
return text.toUpperCase();    
});
/***** membesarkan ******/

jQuery('.datepicker').datepicker({
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-mm-dd' 
});

hanya_nomor(".nomor");
uang(".uang");
$('.dropify').dropify();
$(".select2").select2({
    theme: "bootstrap"
});



/*********** maps ********/
function mapsTambahBaru()
{
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
        draggable:true,
        title:"Drag me!"
    });

    google.maps.event.addListener(marker, 'dragend', function(evt){                            
        $("#lat").val(evt.latLng.lat().toFixed(6));
        $("#lng").val(evt.latLng.lng().toFixed(6));

    });

    if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function (position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(initialLocation);
            marker.setPosition(initialLocation);
            console.log($("#lat").val());
            $("#lat").val(position.coords.latitude);
            $("#lng").val(position.coords.longitude);
            console.log($("#lat").val());

            //console.log(position.coords.longitude);
         });
     }
}

function mapsUbah(lat,lng)
{
    var myLatlng = new google.maps.LatLng(lat,lng);
    var mapOptions = {
      zoom: 15,
      center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Place a draggable marker on the map
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable:true,
        title:"Drag me!"
    });

    google.maps.event.addListener(marker, 'dragend', function(evt){                            
        $("#lat").val(evt.latLng.lat().toFixed(6));
        $("#lng").val(evt.latLng.lng().toFixed(6));

    });

}
/*********** maps ********/



function edit(id,jenis)
{
/******
    penting
    1=edit
    2=view
******/
    if(jenis=='2')
    {
        $("#tombol_simpan").hide();
        $("#form_modal :input").prop("disabled", true);

    }else{
        $("#tombol_simpan").show();
    }

    $("#info").html("");
    $.get("<?php echo base_url()?>index.php/admin/iklan/by_id/"+id,function(e){
        console.log(e[0]);
        var x = e[0];
        $("#id_iklan").val(x.id_iklan);
        $("#jenis_media_promosi").val(x.jenis_media_promosi);


        $("#orientasi").val(x.orientasi);
        $("#penerangan").val(x.penerangan);

        $("#venue").val(x.venue).trigger('change');
        $("#tags").val(x.tags).trigger('change');

        
        $("#nama_media_promosi").val(x.nama_media_promosi);        
        
        $("#harga_1_minggu").val(x.harga_1_minggu);
        $("#harga_2_minggu").val(x.harga_2_minggu);
        $("#harga_1_bulan").val(x.harga_1_bulan);
        $("#harga_3_bulan").val(x.harga_3_bulan);
        $("#harga_6_bulan").val(x.harga_6_bulan);
        $("#harga_1_tahun").val(x.harga_1_tahun);

    
        $("#url_video").val(x.url_video);
        $("#alamat").val(x.alamat);
        
        /*
        //$('#provinsi').select2('data', {id: x.provinsi, text: x.nama_provinsi});
        
        */

        
        //$('#kota_kab').append('data', {id: x.kota_kab, text: x.nama_kota});
        $("#provinsi").val(x.provinsi).trigger('change');
        $('#kota_kab').append(new Option(x.nama_kota, x.kota_kab, false, false)).trigger('change');
        //$("#kota_kab").val(x.kota_kab).trigger('change');
        
        
        $("#lat").val(x.lat);
        $("#lng").val(x.lng);
        $("#dekat_1").val(x.dekat_1);
        $("#dekat_2").val(x.dekat_2);
        $("#dekat_3").val(x.dekat_3);
        $("#dekat_4").val(x.dekat_4);

        $("#lat_dekat_1").val(x.lat_dekat_1);
        $("#lng_dekat_1").val(x.lng_dekat_1);
        $("#lat_dekat_2").val(x.lat_dekat_2);
        $("#lng_dekat_2").val(x.lng_dekat_2);
        $("#lat_dekat_3").val(x.lat_dekat_3);
        $("#lng_dekat_3").val(x.lng_dekat_3);
        $("#lat_dekat_4").val(x.lat_dekat_4);
        $("#lng_dekat_4").val(x.lng_dekat_4);
        $("#deskripsi").val(x.deskripsi);
        //$(tinymce.get('deskripsi').getBody()).html(x.deskripsi);


        if(x.gbr_1 != "")
        {
            $("#t4_gbr_1").html("<img src='<?php echo base_url()?>uploads/"+x.gbr_1+"' class='img img-responsive' width='100%'>");    
        }


        if(x.gbr_2 != "")
        {
            $("#t4_gbr_2").html("<img src='<?php echo base_url()?>uploads/"+x.gbr_2+"' class='img img-responsive' width='100%'>");    
        }


        if(x.gbr_3 != "")
        {
            $("#t4_gbr_3").html("<img src='<?php echo base_url()?>uploads/"+x.gbr_3+"' class='img img-responsive' width='100%'>");    
        }


        if(x.surat_tanah_titik_berdiri != "")
        {
        $("#t4_surat_tanah_titik_berdiri").html("<a href='<?php echo base_url()?>uploads/"+x.surat_tanah_titik_berdiri+"' target='blank'>Berkas &rarr;</a>");    
        }


        if(x.ijin_mendirikan_bangunan != "")
        {
        $("#t4_ijin_mendirikan_bangunan").html("<a href='<?php echo base_url()?>uploads/"+x.ijin_mendirikan_bangunan+"' target='blank'>Berkas &rarr;</a>");    
        }


        if(x.jaminan_bongkar != "")
        {
        $("#t4_jaminan_bongkar").html("<a href='<?php echo base_url()?>uploads/"+x.jaminan_bongkar+"' target='blank'>Berkas &rarr;</a>");    
        }


        if(x.surat_ketetapan_rencana_kota != "")
        {
        $("#t4_surat_ketetapan_rencana_kota").html("<a href='<?php echo base_url()?>uploads/"+x.surat_ketetapan_rencana_kota+"' target='blank'>Berkas &rarr;</a>");    
        }



        if(x.surat_setoran_pajak_daerah != "")
        {
        $("#t4_surat_setoran_pajak_daerah").html("<a href='<?php echo base_url()?>uploads/"+x.surat_setoran_pajak_daerah+"' target='blank'>Berkas &rarr;</a>");    
        }



        if(x.ijin_penyelenggaraan_reklame != "")
        {
        $("#t4_ijin_penyelenggaraan_reklame").html("<a href='<?php echo base_url()?>uploads/"+x.ijin_penyelenggaraan_reklame+"' target='blank'>Berkas &rarr;</a>");    
        }


        if(x.bukti_asuransi != "")
        {
        $("#t4_bukti_asuransi").html("<a href='<?php echo base_url()?>uploads/"+x.bukti_asuransi+"' target='blank'>Berkas &rarr;</a>");    
        }


        $("#responsive-modal").modal('show');

        mapsUbah(x.lat,x.lng);
        
        
    })
}


function ambilLatlong()
{
    if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function (position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            return initialLocation;
         });
     }
}


/******** maps pencarian *******/
pencarianMaps("1");
pencarianMaps("2");
pencarianMaps("3");
pencarianMaps("4");

function pencarianMaps(i) {
    
    // Create the search box and link it to the UI element.
    var input = document.getElementById('dekat_'+i);
    var searchBox = new google.maps.places.SearchBox(input);
    
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }

      places.forEach(function(place) {            
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
    
        
        //console.log(place.geometry.location.lat());
        //console.log(place.geometry.location.lng());

        var sumberLat = $("#lat").val();
        var sumberLng = $("#lng").val();

        console.log(ambilJarak(sumberLat,sumberLng,place.geometry.location.lat(),place.geometry.location.lng()));

        var jarak = ambilJarak(sumberLat,sumberLng,place.geometry.location.lat(),place.geometry.location.lng())+"M";
        
        $("#dekat_"+i).val($("#dekat_"+i).val()+" - "+ jarak);
        $("#lat_dekat_"+i).val(place.geometry.location.lat());
        $("#lng_dekat_"+i).val(place.geometry.location.lng());

      });
      
    });
  }
/************ map_cari ************/

/*********** ambil jarak **********/
var rad = function(x) {
  return x * Math.PI / 180;
};
var ambilJarak = function(p1Lat,p1Lng, p2Lat,p2Lng) {
  var R = 6378137; // Earth’s mean radius in meter
  var dLat = rad(p2Lat - p1Lat);
  var dLong = rad(p2Lng - p1Lng);
  var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(rad(p1Lat)) * Math.cos(rad(p2Lng)) *
    Math.sin(dLong / 2) * Math.sin(dLong / 2);
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  var d = R * c;
  return Math.ceil(d); // returns the distance in meter
};
/********** ambil jarak ************/


/************ editor ***************/
/*
$(document).ready(function() {
    if ($("#deskripsi").length > 0) {
        tinymce.init({
            selector: "textarea#deskripsi",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }

});
*/
/************ editor *********/ 

function hapus(id)
{
if(confirm("Anda Yakin?"))
{
    $.get("<?php echo base_url()?>index.php/admin/iklan/hapus/"+id,function(e){
        eksekusi_controller('<?php echo base_url()?>index.php/admin/iklan/');
    });
}
}

function form_tambah()
{   
    $("#info").html("");
    $("#form_modal").find("input[type=text],input[type=hidden],input[type=email],input[type=password], textarea").val("");
    $("#responsive-modal").modal('show');
    mapsTambahBaru();
}

$("#form_modal").on("submit",function(){

    $.ajax({
            url: "<?php echo base_url()?>index.php/admin/iklan/simpan",
            type: "POST",
            contentType: false,
            processData:false,
            data:  new FormData(this),
            beforeSend: function(){
                //alert("sedang uploading...");
            },
            success: function(e){
                console.log(e);
                $("#info").html("");
                if(e=="insert" || e=="update")
                {
                    $("#info").html("<div class='alert alert-success'>Sukses! "+e+"</div>");
                }else{
                    $("#info").html("<div class='alert alert-warning'>"+e+"</div>");
                }
                
            },
            error: function(er){
                $("#info").html("<div class='alert alert-warning'>Ada masalah! "+er+"</div>");
            }           
       });

    return false;
});

$('#form_modal').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});




$("#provinsi").on("change",function(){
        //console.log($(this).val());

    $.get("<?php echo base_url()?>index.php/welcome/ambil_kab/"+$(this).val(),function(e){
        //console.log(e);
        if($("#id_iklan").val() == "")
        {
            $("#kota_kab").empty();    
        }
        
        $.each(e,function(a,b){
            console.log(b.name);
            $("#kota_kab").append("<option value='"+b.id+"'>"+b.name+"</option>");
        })
    })
})


$("#responsive-modal").on("hidden.bs.modal", function () {
eksekusi_controller('<?php echo base_url()?>index.php/admin/iklan/');
});


</script>
            