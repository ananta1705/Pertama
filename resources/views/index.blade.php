<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cafe melu link| Home</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('Admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('Admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-white ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index" class="nav-link">Beranda</a>
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
        <from action="/login" method="POST">
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
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('Admin')}}/dist/img/off.jpg" alt="Pay Listrik" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">cafe melu link</span>
    </a>

    <!-- Sidebar -->
     <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Admin')}}/dist/img/admin.jpg" class="" alt="">
        </div>
        <div class="info">
          <a href="" class="d-block">Ananta puti maharani</a>
        </div>
      </div> 

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="barang" class="nav-link">
                  <p>barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="transaksi" class="nav-link">
                  <p>transaksi</p>
                </a>
                <!-- <li class="nav-item">
                <a href="./laporan" class="nav-link">
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penggunaan" class="nav-link">
                  <p>Data Penggunaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pembayaran" class="nav-link">
                  <p>Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                    <a href="/login" class="nav-link">
                      <p>Login </p>
                    </a>
                  </li>
            </ul>
          </li>
         
       /.sidebar-menu -->
      <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="login" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>login </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="logout" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>logout</p>
                    </a>
                  </li> 
                </ul>
              </li> 
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div> 
          
          <!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Login</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard v2</li> -->
            <!-- </ol>
          </div> -->
          <!-- /.col -->
        </div> 
        <!-- /.row -->
      </div> 
      <!-- /.container-fluid -->
     </div> 
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    @yield('content')
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">electric world</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.2.0 -->
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('Admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('Admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin')}}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('Admin')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('Admin')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('Admin')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('Admin')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('Admin')}}/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('Admin')}}/dist/js/pages/dashboard2.js"></script> -->

<script src="js/script.js"></script>
</body>
</html>