
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Master Admin</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Master</li>
                                <li class="breadcrumb-item active">Pengguna</li>
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
                                                
                                                <th>id_pengguna</th>
                                                <th>email</th>
                                                <th>nama</th>
                                                <th>perusahaan</th>
                                                <th>nama_bank</th>
                                                <th>no_rekening</th>
                                                <th>tgl_lahir</th>
                                                <th>jenis_kelamin</th>
                                                <th>no_hp</th>
                                                <th>alamat</th>
                                                <th>ktp</th>
                                                <th>npwp</th>
                                                <th>tgl</th>
                                                <th>UPDATE</th>
                                                <th>password</th>

                                                <th >Action</th>                                                
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
                                    
                                    <td>$key->id_pengguna</td>
                                    <td>$key->email</td>
                                    <td>$key->nama</td>
                                    <td>$key->perusahaan</td>
                                    <td>$key->nama_bank</td>
                                    <td>$key->no_rekening</td>
                                    <td>$key->tgl_lahir</td>
                                    <td>$key->jenis_kelamin</td>
                                    <td>$key->no_hp</td>
                                    <td>$key->alamat</td>
                                    <td>$key->ktp</td>
                                    <td>$key->npwp</td>
                                    <td>$key->tgl</td>
                                    <td>$key->tgl_daftar</td>
                                    <td>$key->password</td>

                                    <td>
                                        <button class='btn btn-xs btn-warning btn-block'  onclick='edit($key->id_pengguna)'>Edit</button>
                                        <button class='btn btn-xs btn-danger btn-block'  onclick='hapus($key->id_pengguna)'>Hapus</button>
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
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="form_modal">
                    <input type="hidden" name="id_pengguna" id="id_pengguna">
                    
                    <div class="form-group">
                        <label class="control-label">email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label class="control-label">perusahaan</label>
                        <input type="text" class="form-control" name="perusahaan" id="perusahaan">
                    </div>
                    <div class="form-group">
                        <label class="control-label">nama_bank</label>
                        <select type="text" class="form-control" name="nama_bank" id="nama_bank">
                            <?php 
                                foreach ($this->m_util->all_bank()->result() as $bank) {
                                    echo "<option value='$bank->nama'>$bank->nama</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">no_rekening</label>
                        <input type="text" class="form-control nomor" name="no_rekening" id="no_rekening">
                    </div>
                    <div class="form-group">
                        <label class="control-label">tgl_lahir</label>
                        <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <label class="control-label">jenis_kelamin</label>
                        <select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">no_hp</label>
                        <input type="text" class="form-control nomor" name="no_hp" id="no_hp">
                    </div>
                    <div class="form-group">
                        <label class="control-label">alamat</label>
                        <textarea type="text" class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">ktp</label>
                        <input type="text" class="form-control nomor" name="ktp" id="ktp">
                    </div>
                    <div class="form-group">
                        <label class="control-label">npwp</label>
                        <input type="text" class="form-control nomor" name="npwp" id="npwp">
                    </div>
                    <div class="form-group">
                        <label class="control-label">password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    
                    <div id="info"></div>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<style type="text/css">
    .control-label,th{
          /*text-transform: uppercase;*/
    }
</style>
<script type="text/javascript">  
$(document).ready(function(){
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
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

function edit(id)
{
    $("#info").html("");
    $.get("<?php echo base_url()?>index.php/admin/pengguna/by_id/"+id,function(e){
        console.log(e[0]);
        var x = e[0];
        
        $("#id_pengguna").val(x.id_pengguna);
        $("#email").val(x.email);
        $("#nama").val(x.nama);
        $("#perusahaan").val(x.perusahaan);
        $("#nama_bank").val(x.nama_bank);
        $("#no_rekening").val(x.no_rekening);
        $("#tgl_lahir").val(x.tgl_lahir);
        $("#jenis_kelamin").val(x.jenis_kelamin);
        $("#no_hp").val(x.no_hp);
        $("#alamat").val(x.alamat);
        $("#ktp").val(x.ktp);
        $("#npwp").val(x.npwp);
        $("#password").val(x.password);

        $("#responsive-modal").modal('show');
    })
}

function hapus(id)
{
    if(confirm("Anda Yakin?"))
    {
        $.get("<?php echo base_url()?>index.php/admin/pengguna/hapus/"+id,function(e){
            eksekusi_controller('<?php echo base_url()?>index.php/admin/pengguna/');
        });
    }
}

function form_tambah()
{   
    $("#info").html("");
    $("#form_modal").find("input[type=text],input[type=hidden],input[type=email],input[type=password], textarea").val("");
    $("#responsive-modal").modal('show');
}

$("#form_modal").on("submit",function(){

    $.post("<?php echo base_url()?>index.php/admin/pengguna/simpan",$(this).serialize(),function(e){
        console.log(e);
        $("#info").html("");
        if(e=="insert" || e=="update")
        {
            $("#info").html("<div class='alert alert-success'>Sukses! "+e+"</div>");
        }else{
            $("#info").html("<div class='alert alert-warning'>"+e+"</div>");
        }
    })
    return false;
})


$("#responsive-modal").on("hidden.bs.modal", function () {
  eksekusi_controller('<?php echo base_url()?>index.php/admin/pengguna/');
});


</script>
                