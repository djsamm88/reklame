
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
                                <li class="breadcrumb-item active">Master Admin</li>
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
                                                <th width="100px">Id Admin</th>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th  width="150px">Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                    <?php 
                        $no=0;
                        foreach ($all_admin->result() as $key) {
                            if($key->id_admin=='1')
                            {
                                $hapus="";
                            }else{
                                $hapus="<button class='btn btn-xs btn-danger' style='width:45%'  onclick='hapus($key->id_admin)'>Hapus</button>";
                            }
                            $no++;
                            echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$key->id_admin</td>
                                    <td>$key->email</td>
                                    <td>$key->nama</td>
                                    <td>
                                        <button class='btn btn-xs btn-warning' style='width:45%' onclick='edit($key->id_admin)'>Edit</button>
                                        $hapus
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="form_modal">
                    <input type="hidden" name="id_admin" id="id_admin">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
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

<script type="text/javascript">  
$(document).ready(function(){
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
})

function edit(id)
{
    $("#info").html("");
    $.get("<?php echo base_url()?>index.php/admin/admin/admin_by_id/"+id,function(e){
        console.log(e[0].nama);
        var x = e[0];
        $("#id_admin").val(x.id_admin);
        $("#nama").val(x.nama);
        $("#email").val(x.email);
        $("#password").val(x.password);
        $("#responsive-modal").modal('show');
    })
}

function hapus(id)
{
    if(confirm("Anda Yakin?"))
    {

    }
}

function form_tambah()
{   
    $("#info").html("");
    $("#form_modal").find("input[type=text],input[type=hidden],input[type=email],input[type=password], textarea").val("");
    $("#responsive-modal").modal('show');
}

$("#form_modal").on("submit",function(){

    $.post("<?php echo base_url()?>index.php/admin/admin/simpan",$(this).serialize(),function(e){
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
  eksekusi_controller('<?php echo base_url()?>index.php/admin/admin/crud_admin');
});


</script>
                