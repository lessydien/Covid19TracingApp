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
  <li id="caridatawarga" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('dashboard/warga/'); ?>">
      <i class="fas fa-fw fa-user-alt"></i>
      <span>Kelola Data Warga</span></a>
  </li>

<!-- kelola data warga -->
<li id="tambahdatawarga" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('dashboard/tambahwarga/'); ?>">
      <i class="fas fa-fw fa-user-alt"></i>
      <span>Tambah Data Warga</span></a>
  </li>

   <!-- tracing warga -->
   <li id="tracing" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('dashboard/tracing/'); ?>">
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
    <a class="nav-link" href="<?php echo site_url('dashboard/status'); ?>">
    <i class="fas fa-lungs-virus"></i>
      <span>Kelola Status Warga</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <!--div class="sidebar-heading">
    LAPORAN
  </!--div-->

  <!-- Laporan -->
  <!--li-- id="laporan" class="nav-item">
    <a class="nav-link" href="<?php echo site_url('dashboard/laporan/'); ?>">
    <i class="fas fa-notes-medical"></i>
      <span>Laporan</span></a>
  </!--li-->

  
  <!-- Divider -->
  <!--hr class="sidebar-divider d-none d-md-block"-->

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->