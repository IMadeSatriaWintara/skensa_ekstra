<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengelola Ekstrakurikuler | Skensa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
  
  <style>
    /* Custom styles for white and blue theme */
    :root {
      --primary-blue: #0d6efd;
      --light-blue: #e3f2fd;
      --dark-blue: #0a58ca;
    }
    
    .main-sidebar {
      background-color: #ffffff !important;
      border-right: 1px solid #dee2e6;
    }
    
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active,
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active:hover {
      background-color: var(--primary-blue);
      color: #ffffff;
    }
    
    .nav-sidebar .nav-link {
      color: #495057;
    }
    
    .nav-sidebar .nav-link:hover {
      background-color: var(--light-blue);
      color: var(--primary-blue);
    }
    
    .nav-sidebar .nav-item > .nav-link.active {
      background-color: var(--primary-blue);
      color: #ffffff;
      border-radius: 5px;
    }
    
    .brand-link {
      border-bottom: 2px solid var(--primary-blue);
    }
    
    .content-wrapper {
      background-color: #f8f9fa;
    }
    
    .main-footer {
      background-color: #ffffff;
      border-top: 1px solid #dee2e6;
    }
    
    /* Profile dropdown styles */
    .profile-dropdown {
      position: relative;
    }
    
    .profile-dropdown-menu {
      position: absolute;
      right: 0;
      top: 100%;
      z-index: 1000;
      display: none;
      min-width: 200px;
      padding: 0.5rem 0;
      margin: 0.125rem 0 0;
      font-size: 0.875rem;
      color: #212529;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0,0,0,.15);
      border-radius: 0.25rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
    }
    
    .profile-dropdown-menu.show {
      display: block;
    }
    
    .profile-dropdown-item {
      display: block;
      width: 100%;
      padding: 0.5rem 1rem;
      clear: both;
      font-weight: 400;
      color: #212529;
      text-align: inherit;
      text-decoration: none;
      white-space: nowrap;
      background-color: transparent;
      border: 0;
    }
    
    .profile-dropdown-item:hover {
      background-color: var(--light-blue);
      color: var(--primary-blue);
    }
    
    .profile-dropdown-divider {
      height: 0;
      margin: 0.5rem 0;
      overflow: hidden;
      border-top: 1px solid #dee2e6;
    }
    
    .user-img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/logo.png') }}" alt="SkextraLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard-pengelola" class="nav-link">Dashboard</a>
      </li>
    </ul>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Profile Dropdown -->
      <li class="nav-item dropdown profile-dropdown">
        @php
          $fotoProfil = session('foto') && file_exists(public_path('uploads/profil/' . session('foto')))
            ? asset('uploads/profil/' . session('foto'))
            : asset('assets/user.jpg');
        @endphp
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ $fotoProfil }}" alt="Profile" class="user-img">
          <span class="ml-2 d-none d-sm-inline">{{ session('nama') ?? session('username', 'Profil') }}</span>
        </a>
        <div class="profile-dropdown-menu" aria-labelledby="profileDropdown">
          <a class="profile-dropdown-item" href="/profile">
            <i class="fas fa-user mr-2"></i> Lihat Profil
          </a>
          <a class="profile-dropdown-item" href="/profile/edit">
            <i class="fas fa-edit mr-2"></i> Edit Profil
          </a>
          <a class="profile-dropdown-item" href="/profile/password">
            <i class="fas fa-lock mr-2"></i> Ganti Password
          </a>
          <div class="profile-dropdown-divider"></div>
          <a class="profile-dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link border-bottom">
      <img src="{{ asset('assets/LOGO.png') }}" 
           alt="Logo" 
           style="height: 40px; width: auto;" 
           class="mr-3">
      <div class="text-left">
        <h3 class="font-weight-bold mb-0" style="color: #0d6efd; font-size: 1.2rem; line-height: 1;">
          SIEKSTRA
        </h3>
        <p class="text-muted mb-0" style="font-size: 0.75rem; white-space: nowrap;">
          Pengelola Ekstra
        </p>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @php
          $fotoSidebar = session('foto') && file_exists(public_path('uploads/profil/' . session('foto')))
            ? asset('uploads/profil/' . session('foto'))
            : asset('assets/user.jpg');
        @endphp
        <div class="image">
          <img src="{{ $fotoSidebar }}" class="img-circle elevation-2" alt="User Image" style="width: 35px; height: 35px; object-fit: cover;">
        </div>
        <div class="info">
          <a href="/profile" class="d-block">{{ session('nama') ?? session('username', 'User') }}</a>
          <small class="text-muted">@ {{ session('username') }}</small>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="/dashboard-pengelola" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Ekstrakurikuler -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Ekstrakurikuler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/ekstra" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Ekstrakurikuler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ekstra/create" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Tambah Ekstrakurikuler</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Prestasi -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Prestasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/prestasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/prestasi/create" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Tambah Prestasi</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Kategori -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Kategori
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kategori/create" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Tambah Kategori</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Gallery -->
          <li class="nav-item">
            <a href="/galeri" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>Gallery</p>
            </a>
          </li>

          <!-- Berita -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/berita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/berita/create" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Tambah Berita</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Akun -->
          <li class="nav-item">
            <a href="/akun" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Kelola Akun</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright 2026 <a href="https://smkn1denpasar.sch.id">Sistem Manajemen Ekstrakurikuler Sekolah</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('template/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('template/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard.js') }}"></script>

<script>
  // Profile dropdown toggle
  document.addEventListener('DOMContentLoaded', function() {
    var profileDropdown = document.getElementById('profileDropdown');
    var dropdownMenu = profileDropdown.nextElementSibling;
    
    profileDropdown.addEventListener('click', function(e) {
      e.preventDefault();
      dropdownMenu.classList.toggle('show');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!profileDropdown.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove('show');
      }
    });
  });
</script>
</body>
</html>
