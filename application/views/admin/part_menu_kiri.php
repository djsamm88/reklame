<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo base_url()?>assets_admin/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu"><?php echo $this->session->userdata('nama')?></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url()?>index.php/admin/login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>


                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#admin" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/admin/crud_admin');">Admin</a></li>

                                <li><a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/master');">Master</a></li>
                                

                                <li><a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/admin/crud_admin');">Admin</a></li>

                                <li><a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/pengguna');">Pengguna</a></li>
                                

                                

                            </ul>
                        </li>


                        <li><a class="waves-effect waves-dark" href="#produk" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/iklan');" > <i class="ti-layout-accordion-merged"></i>Produk</a></li>

                        <li><a class="waves-effect waves-dark" href="#transaksi" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/iklan/transaksi');" > <i class="ti-layout-accordion-merged"></i>Transaksi
                        <span class="badge badge-pill badge-primary text-white ml-auto" id="badge_transaksi">25</span>
                        </a></li>

                        <li><a class="waves-effect waves-dark" href="#konfirmasi" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/iklan/konfirmasi');" > <i class="ti-money"></i>Konfirmasi 
                            <span class="badge badge-pill badge-primary text-white ml-auto" id="badge_konfirmasi">25</span>
                        </a></li>


                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/admin/login/logout" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->