<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset('css/all.min.css')}}>
  <!-- Ionicons -->
  {{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}

  <link rel="stylesheet" href={{asset('css/ionicons.min.css')}}>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href={{asset('css/tempusdominus-bootstrap-4.min.css')}}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{asset('css/icheck-bootstrap.min.css')}}>
  <!-- JQVMap -->
  <link rel="stylesheet" href={{asset('css/jqvmap.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset('css/adminlte.min.css')}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset('css/OverlayScrollbars.min.css')}}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{asset('css/daterangepicker.css')}}>
  <!-- summernote -->
  <link rel="stylesheet" href={{asset('css/summernote-bs4.min.css')}}>

  <!-- DataTables -->
  <link rel="stylesheet" href={{asset('css/dataTables.bootstrap4.min.css')}}>
  <link rel="stylesheet" href={{asset('css/responsive.bootstrap4.min.css')}}>
  <link rel="stylesheet" href={{asset('css/buttons.bootstrap4.min.css')}}>
  <!-- Theme style -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
         
          
      </li>
      
      
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src={{asset('img/AdminLTELogo.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset('img/user2-160x160.jpg')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href={{route('admin')}} class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href={{route('admin.widget')}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href={{route('blogs.index')}}  class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
         
         
          
       
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
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
<script src={{asset('js/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{asset('js/jquery-ui.min.js')}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{asset('js/bootstrap.bundle.min.js')}}></script>
<!-- ChartJS -->
<script src={{asset('js/Chart.min.js')}}></script>
<!-- Sparkline -->
<script src="{{asset('js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src={{asset('js/jquery.vmap.min.js')}}></script>
<script src={{asset('js/jquery.vmap.usa.js')}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset('js/jquery.knob.min.js')}}></script>
<!-- daterangepicker -->
<script src={{asset('js/moment.min.js')}}></script>
<script src={{asset('js/daterangepicker.js')}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{asset('js/tempusdominus-bootstrap-4.min.js')}}></script>
<!-- Summernote -->
<script src={{asset('js/summernote-bs4.min.js')}}></script>
<!-- overlayScrollbars -->
<script src={{asset('js/jquery.overlayScrollbars.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('js/adminlte.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset('js/demo.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset('js/dashboard.js')}}></script>
<!-- DataTables  & Plugins -->
<script src={{asset('js/jquery.dataTables.min.js')}}></script>
<script src={{asset('js/dataTables.bootstrap4.min.js')}}></script>
<script src={{asset('js/dataTables.responsive.min.js')}}></script>
<script src={{asset('js/responsive.bootstrap4.min.js')}}></script>
<script>
$(document).ready(function () {
    $('#example2').DataTable();
});
</script>
</body>
</html>
