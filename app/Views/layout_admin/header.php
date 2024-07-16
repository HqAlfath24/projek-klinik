<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/summernote/summernote-bs4.min.css">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/52bd79fc65.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweatalert2/sweetalert2.min.css">
    <script src="<?= base_url() ?>/plugins/sweatalert2/sweetalert2.all.min.js"></script>

    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="<?= base_url('/'); ?>" role="button">
                        <div class="row">
                            <i class="nav-icon fa fa-sign-out-alt text-warning">
                            </i>
                            <p class="text-black">logout</p>
                        </div>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link" style="text-decoration:none; background-color:#c21426">
                <img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Klinik Pratama Erin's</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                    <div class="info">
                        <a class="d-block" style="text-decoration:none">ADMIN</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- DASHBOARD -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link <?= $menu == 'home' ? 'active' : '' ?>">
                                &nbsp;
                                <i class="fa-solid fa-gauge " style="color: #63E6BE;"></i>
                                &nbsp;&nbsp; <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-down"></i> -->
                                </p>
                            </a>
                        </li>

                        <!-- ANTRIAN -->
                        <li class="nav-item">
                            <a href="/queue" class="nav-link <?= $menu == 'home' ? 'active' : '' ?>">
                                &nbsp;
                                <i class="fa-solid fa-people-line"></i>
                                &nbsp;&nbsp; <p>
                                    Antrian
                                    <!-- <i class="right fas fa-angle-down"></i> -->
                                </p>
                            </a>
                        </li>

                        <!-- DAFTAR -->
                        <li class="nav-item">
                            <a href="/" class="nav-link <?= $menu == 'daftar' ? 'active' : '' ?>">
                                &nbsp;
                                <i class="fa-solid fa-list " style="color: #1955be;"></i>
                                &nbsp; &nbsp; <p>
                                    Daftar
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">5</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/drug" class="nav-link <?= $submenu == 'sub1' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/employee" class="nav-link <?= $submenu == 'sub2' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Pekerja</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/doctor" class="nav-link <?= $submenu == 'sub3' ? 'active' : '' ?>">
                                        <i class=" far fa-circle nav-icon"></i>
                                        <p>Daftar Dokter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/polyclinic" class="nav-link  <?= $submenu == 'sub4' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/patient" class="nav-link  <?= $submenu == 'sub5' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Pasien</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <!-- TAMBAH -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                &nbsp;
                                <i class="fa-solid fa-square-plus " style="color: #FFD43B;"></i>
                                &nbsp;&nbsp; <p>
                                    Tambah
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">5</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Pekerja</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Dokter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Pasien</p>
                                    </a>
                                </li>

                            </ul>
                        </li> -->


                        <li class="nav-item">
                            <a href="/kategori" class="nav-link">
                                &nbsp;
                                <i class="fa-solid fa-notes-medical " style="color: #ff230a;"></i>
                                &nbsp;&nbsp; <p>
                                    Rekam Medis Pasien
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <!-- PROFILE -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                &nbsp;
                                <i class="fa-solid fa-user " style="color: #74C0FC;"></i>
                                &nbsp;&nbsp
                                <p>
                                    Profile
                                    &nbsp;<i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">4</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile Pasien</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile Dokter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile Pekerja</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile Poli</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <!-- LAPORAN -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                &nbsp;
                                <i class="fa-solid fa-file " style="color: #f94e15;"></i>
                                &nbsp;&nbsp; <p>
                                    Laporan
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">4</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Umum</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Tiap Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Tiap Dokter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Owner Tempat</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <!-- PAGE -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                &nbsp;
                                <i class="fa-solid fa-house" style="color: #B197FC;"></i>
                                &nbsp;&nbsp; <p>
                                    Page
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">3</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Page untuk admin ngatur even/promo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Page Pendaftaran Berobat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Page Antian Berobat</p>
                                    </a>
                                </li>



                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link  <?= $menu == '' ? 'active' : '' ?>">
                                &nbsp;
                                <i class="fa-solid fa-book" style="color: #c21426;"></i>
                                &nbsp;&nbsp; <p>
                                    Resep Dokter
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>