
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SQ | StudentProject</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="assets/css/app.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!--script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=w227PcCEVXZf4NYnaPansHmwHyIWmHtUycBF990LC8lPwrfpXxQbHNglWotcqZJhZMwO2a_npz9375nqzkwThNOnhAc7H5xBpNG7BfjVDZk"
charset="UTF-8">
</script-->
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="mast-layout-blade-php-ref-vue">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
      </ul>
      <!-- SEARCH FORM -->
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" @keyup="buttonSubmitPrevent" v-model="searchVue" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click="buttonSubmitPrevent">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
      <!-- SEARCH FORM -->
    </nav><!-- end nav-tag-elem -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="./img/logo.png" alt="ProjectPDF8 Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Men at Work Project</span>
      </a>
      <!-- Brand Logo -->
      <!-- Start Sidebar-1 -->
      <div class="sidebar">
        <!-- START Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          </div>
        </div>
        <!-- END Sidebar user panel (optional) -->

        <!-- START Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt blue"></i>
                <p>
                  Dashboard
                </p>
              </router-link>
            </li>

@php
if(Auth::User()->type === 'user'){
$onlyForUsersUploads = <<<EOD
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fa fa-cog green"></i>
    <p>
      Store a file
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <router-link to="/invoice-credentials" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Sales Invoice</p>
      </router-link>
    </li>
  </ul>
</li>
<li class="nav-item">
  <router-link to="/file-uploads" class="nav-link">
    <i class="fas fa-users nav-icon"></i>
    <p>Uploads</p>
  </router-link>
</li>
EOD;
echo $onlyForUsersUploads;
} else if(Auth::User()->type === 'admin') {
$onlyForAdminManage = <<<EOD
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fa fa-cog green"></i>
    <p>
      Management
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <router-link to="/users" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Employees</p>
      </router-link>
    </li>
  </ul>
</li>
EOD;
echo $onlyForAdminManage;
}

@endphp

@php
if(Auth::user()->type === 'user'){

} else if(Auth::user()->type === 'admin') {
$onlyForAdminDev = <<<EOD
<li class="nav-item">
<router-link to="/developer" class="nav-link">
 <i class="nav-icon fas fa-cogs"></i>
 <p>
   Developer
 </p>
</router-link>
</li>
EOD;
echo $onlyForAdminDev;
}
@endphp

@php
if(Auth::User()->type === 'admin'){
  $onlyForAdminProfile = <<<EOD
<li class="nav-item">
  <router-link to="/profile" class="nav-link">
   <i class="nav-icon fas fa-user orange"></i>
   <p>
     Profile
   </p>
 </router-link>
</li>
EOD;
echo $onlyForAdminProfile;
} else if(Auth::User()->type === 'user') {
$onlyForEmployeeProfile = <<<EOD
<li class="nav-item">
  <router-link to="/employee-profile" class="nav-link">
   <i class="nav-icon fas fa-user orange"></i>
   <p>
     Profile
   </p>
 </router-link>
</li>
EOD;
echo $onlyForEmployeeProfile;
}
@endphp

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-power-off red"></i>
                <p>
                  {{ __('Logout') }}
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          </li>
        </nav>
      </div><!-- End Sidebar-1 -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <router-view></router-view>

          <vue-progress-bar></vue-progress-bar>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        /home/u740688972/domains/mawmenatworkproj2020.online/public_html/ProjectPDF8/resources/views/layouts/master.blade.php)
      </div>
      <!-- Default to the left -->
      <strong>SQ Project Semester 1T/2020-2021 <a href="http://localhost:8000/">Men&#64;Work Project</a>.</strong> All rights reserved.
    </footer>
    <!-- Main Footer -->


  </div><!-- End with an id val of mast-layout-blade-php-ref-vue-->
<!-- ./wrapper -->
@auth
window.user = @json(auth()->user())
@endauth
<!-- REQUIRED SCRIPTS -->
<script src="assets/js/app.js"></script>
</body>
</html>
