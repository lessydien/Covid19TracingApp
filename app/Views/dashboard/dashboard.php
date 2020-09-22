<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Covid-19 Dashboard</title>
	
    <!-- font -->
    <link href="/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
	
	<!-- styles -->
    <link href="/assets/css/sb-admin-2/sb-admin-2.min.css" rel="stylesheet">
    <!--link href="/assets/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"-->
    <link href="/assets/css/datatables/datatables.min.css" rel="stylesheet">
    <link href="/assets/css/style/style2.css" rel="stylesheet">
    <link href="/assets/js/leaflet/leaflet.css" rel="stylesheet">


	<!-- js -->

	<script src="/assets/js/jquery/jquery.min.js" ></script>
	<script src="/assets/js/bootstrap/bootstrap.bundle.min.js" defer></script>
    <script src="/assets/js/jquery-easing/jquery.easing.min.js" defer></script>
    <script src="/assets/js/sb-admin-2/sb-admin-2.min.js"defer ></script>
    <script src="/assets/js/jscookie/js.cookie.min.js" defer ></script>
    <script src="/assets/js/datatables/datatables.min.js"  ></script>
    
    <!--script src="/assets/js/datatables/jquery.dataTables.min.js" defer ></script-->
    <!--script src="/assets/js/datatables/dataTables.bootstrap4.min.js" defer ></script-->
   
    
    </head>
    <body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard/'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laptop-medical"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Covid-19 TRACING SYSTEM</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('dashboard/'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Warga
  </div>

  <!-- kelola data warga -->
  <li id="datawarga" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('warga/'); ?>">
      <i class="fas fa-fw fa-user-alt"></i>
      <span>Kelola Data Warga</span></a>
  </li>
   <!-- tracing warga -->
   <li id="tracing" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('tracing/'); ?>">
        <i class="fas fa-search-plus"></i>
      <span>Tracing</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    STATUS COVID
  </div>

  <!-- Nav SKPD -->
  <li id="status" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('status/'); ?>">
    <i class="fas fa-lungs-virus"></i>
      <span>Kelola Status Warga</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    LAPORAN
  </div>

  <!-- Laporan -->
  <li id="laporan" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('laporan/'); ?>">
    <i class="fas fa-notes-medical"></i>
      <span>Laporan</span></a>
  </li>

  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

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

    

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tenaga Kesehatan</span>
          <!--img class="img-profile rounded-circle" src=""-->
          <i class="fas fa-user-circle"></i>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profil">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->

  
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Diskominfo Banda Aceh 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
  