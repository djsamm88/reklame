<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets_admin/images/favicon.png">
    <title>Admin OkIklan</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets_admin/dist/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>assets_admin/node_modules/dropify/dist/css/dropify.min.css">
    <link href="<?php echo base_url()?>assets_admin/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>assets_admin/node_modules/select2/dist/css/select2_bootstrap.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url()?>assets_admin/dist/css/pages/google-vector-map.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets_admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets_admin/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="<?php echo base_url()?>assets_admin/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

    
    <link href="<?php echo base_url()?>assets_admin/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="<?php echo base_url()?>assets_admin/node_modules/html5-editor/bootstrap-wysihtml5.css" />

    <link rel="stylesheet" href="<?php echo base_url()?>assets_admin/pace/pace.min.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <style type="text/css">
        @media (min-width: 768px) {
          .modal-xl {
            width: 90%;
           max-width:1200px;
          }
        }
    </style>
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
       
        <?php include ("part_menu_atas.php")?>
        
        <?php include ("part_menu_kiri.php")?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              

                
                <div id="t4_konten">
                <?php 
                include("part_konten.php");
                ?>    
                </div>
                <?php 
                include("part_menu_kanan.php");
                ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php 
        include("part_footer.php");
        ?>
</body>

</html>