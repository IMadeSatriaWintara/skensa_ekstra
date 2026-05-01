<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ekstrakurikuler | Skensa</title>

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
    /* Konsep sama dengan layout.pengelola: tema putih & biru */
    :root {
      --primary-blue: #0d6efd;
      --light-blue: #e3f2fd;
      --dark-blue: #0a58ca;
    }
    .main-sidebar {
      background-color: #ffffff !important;
      border-right: 1px solid #dee2e6;
      overflow-y: auto;
      max-height: 100vh;
    }
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active,
    .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
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
    .profile-dropdown { position: relative; }
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
      list-style: none;
      background-color: #fff;
      border: 1px solid rgba(0,0,0,.15);
      border-radius: 0.25rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
    }
    .profile-dropdown-menu.show { display: block; }
    .profile-dropdown-item {
      display: block;
      width: 100%;
      padding: 0.5rem 1rem;
      color: #212529;
      text-decoration: none;
      white-space: nowrap;
      background: transparent;
      border: 0;
    }
    .profile-dropdown-item:hover {
      background-color: var(--light-blue);
      color: var(--primary-blue);
    }
    .profile-dropdown-divider {
      height: 0;
      margin: 0.5rem 0;
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
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard-superadmin" class="nav-link">Dashboard</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
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
          <a class="profile-dropdown-item" href="/dashboard-superadmin"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
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
    <a href="/" class="brand-link border-bottom">
      <img src="{{ asset('assets/LOGO.png') }}" alt="Logo" style="height: 40px; width: auto;" class="mr-3">
      <div class="text-left">
        <h3 class="font-weight-bold mb-0" style="color: #0d6efd; font-size: 1.2rem; line-height: 1;">SIEKSTRA</h3>
        <p class="text-muted mb-0" style="font-size: 0.75rem; white-space: nowrap;">Sistem Ekstrakurikuler</p>
      </div>
    </a>

    <div class="sidebar">
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
          <a href="/dashboard-superadmin" class="d-block">{{ session('nama') ?? session('username', 'User') }}</a>
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
            <a href="/dashboard-superadmin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Kategori -->
          <li class="nav-item">
            <a href="/kategori" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <!-- Aktivitas -->
          <li class="nav-item">
            <a href="/prestasi-superadmin" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Prestasi
               
              </p>
            </a>
          </li>

          <!-- Blog & News -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Blog & News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/newss" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog & News</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Extra -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Extra
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/social-media" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/contact" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Extra -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Account
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/akun" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Ekstra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin_siekstra" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SuperAdmin</p>
                </a>
              </li>
            </ul>
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
    <strong>Copyright 2026 <a href="https://smkn1denpasar.sch.id">Sistem Informasi Ekstrakurikuler Sekolah</a>.</strong>
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
  document.addEventListener('DOMContentLoaded', function() {
    var profileDropdown = document.getElementById('profileDropdown');
    if (profileDropdown) {
      var dropdownMenu = profileDropdown.nextElementSibling;
      profileDropdown.addEventListener('click', function(e) {
        e.preventDefault();
        dropdownMenu.classList.toggle('show');
      });
      document.addEventListener('click', function(e) {
        if (!profileDropdown.contains(e.target) && dropdownMenu && !dropdownMenu.contains(e.target)) {
          dropdownMenu.classList.remove('show');
        }
      });
    }
  });
</script>
</body>
</html>
