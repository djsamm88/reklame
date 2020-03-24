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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">OkIklan admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><img src="<?php echo base_url()?>assets/images/logo-dark.png" class="img img-responsive"></h4>
                                <h6 class="card-subtitle">OkIklan Admin Login</h6>
                                <form class="form-material m-t-40" id="form_login">
                                    
                                    <div class="form-group">
                                        <label for="example-email">Email
                                            <span class="help"> e.g. "example@gmail.com"</span>
                                        </label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="required"> 
                                    </div>
                                    
                                    <div class="form-group">
                                        <div id="info_login" style="display: none;"></div>

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-block btn-rounded" >
                                            <i class="fas fa-sign-in-alt"></i> Login
                                        </button>
                                    </div>
                                    

                                    

                                    <div class="form-group">
                                        <label>CopyRight</label>
                                        
                                        <span class="help-block text-muted">
                                            <small>OkIklan.com <?php echo date('Y')?></small>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            <div class="col-4">
            </div>
        </div>
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

    <script type="text/javascript">
        $("#form_login").on("submit",function(){
            console.log("<?php echo base_url()?>index.php/admin/login/cek_login");
            $.post("<?php echo base_url()?>index.php/admin/login/cek_login",$(this).serialize(),function(e){
                console.log(e);
                if(e =='0')
                {
                    var info="<div class='alert alert-danger'><b>Gagal login</b>: Cek Email, Password!</div>";
                    $("#info_login").hide().html(info).fadeIn();


                }else if(e =='1')       
                {
                    var info="<div class='alert alert-warning'><b>Gagal login</b>: [User belum aktif].</div>";
                    $("#info_login").hide().html(info).fadeIn();

                    var info="<div class='alert alert-success'><b>Sukses login</b>: Mohon tunggu!</div>";
                    $("#info_login").hide().html(info).fadeIn();
                    window.location.replace("<?php echo base_url()?>index.php/admin/admin");

                }else
                {
                    var info="<div class='alert alert-warning'><b>Gagal login</b>: "+e+".</div>";
                    $("#info_login").hide().html(info).fadeIn();

                }
            });

            return false;
        })
    </script>
</body>

</html>