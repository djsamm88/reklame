 <footer class="footer">
            © 2020 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets_admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets_admin/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/datatables/datatables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>



    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/moment/moment.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets_admin/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url()?>assets_admin/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript">
        
function eksekusi_controller(method)
{
    $("#t4_konten").empty();
    $.get(method,function(e){
                
        $("#t4_konten").html(e);
        
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
</script>