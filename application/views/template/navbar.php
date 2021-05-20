<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <i class="fa fa-laptop-medical"></i>
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          E-Medica
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="<?php echo site_url('dashboard/') ?>">
              <i class="fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class=" ">
            <a href="<?php echo site_url('user/') ?>">
              <i class="fa fa-user"></i>
              <p>Data User</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('apoteker/') ?>">
              <i class="fa fa-user-md"></i>
              <p>Data Apoteker</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('satuan/') ?>">
              <i class="fas fa-prescription-bottle-alt"></i>
              <p>Data Satuan Obat</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('obat/') ?>">
              <i class="fas fa-capsules"></i>
              <p>Data Obat</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('penjualan/') ?>">
              <i class="fas fa-shopping-basket"></i>
              <p>Penjualan Obat</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('lappenjualan/') ?>">
              <i class="fas fa-file-invoice"></i>
              <p>Laporan Penjualan</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('lapterlaris/') ?>">
              <i class="fas fa-file"></i>
              <p>Laporan Obat Terlaris</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('logout') ?>">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <p>Selamat Datang <span style="font-weight: bold;"><?= $user_logged['unama']; ?></span></p>
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
              </li>
              <li class="nav-item btn-rotate dropdown">
                <!-- <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a> -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="<?php echo site_url('logout') ?>">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>
                    Logout
                    <span class="d-lg-none d-md-block">Logout</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">