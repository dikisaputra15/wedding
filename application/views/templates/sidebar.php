<?php 

  $rol = $this->session->userdata('level');

 ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-text mx-3">Nazwa Wedding <sup>Organizer</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php if($rol == 'admin'){ ?>
             <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/user'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data User</span></a>
             </li>
           
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('kategori/kategori'); ?>">Data Kategori</a>
                        <a class="collapse-item" href="<?= base_url('produk/produk'); ?>">Data Produk atau Jasa</a>
                    </div>
                </div>
            </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Layanan atau Jasa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Layanan atau jasa</h6>
                        <?php 

                         $query = $this->db->get('tb_kategori');

                          foreach ($query->result() as $row)
                            { 
                          ?>

                        <a class="collapse-item" href="<?= base_url('produk/kategori_jasa/list/'); ?><?php echo $row->id_kategori; ?>"><?php echo $row->kategori; ?></a>

                        <?php
                          }
                        ?>
                    </div>
                </div>
            </li>

        <?php if($rol == 'customer'){ ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('produk/pesan'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pesanan</span></a>
            </li>
            <?php } ?>

            <?php if($rol == 'admin'){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('produk/histori/pesanmasuk'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pesanan Masuk</span></a>
                </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('produk/histori'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Histori Pesanan</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('produk/produk/tentang'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tentang Kami</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama_lengkap'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/img/log.jpg'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('user/user/profile/') . $this->session->userdata('id_user'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->