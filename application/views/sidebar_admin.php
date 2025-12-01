

<body class="">

   <!-- Sidebar -->
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo base_url('images/BCPAPIN.png') ?>">
      <div class="logo">

        <a href="<?php echo site_url('auth') ?>" class="simple-text logo-normal">
          <img src="<?php echo base_url();?>images/logo.png" style="width:40px;height:30px;"></img>
         SEPERADIK
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo site_url('auth/dashboard') ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="<?php echo site_url('auth/pemeriksa_admin') ?>">
              <i class="material-icons">person</i>
              <p>Pemeriksa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="<?php echo site_url('auth/kasubsi_admin') ?>">
              <i class="material-icons">person</i>
              <p>Kasubsi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="<?php echo site_url('auth/kasi_admin') ?>">
              <i class="material-icons">person</i>
              <p>Kasi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="<?php echo site_url('auth/kk_admin') ?>">
              <i class="material-icons">person</i>
              <p>Kepala Kantor</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('auth/laporan_admin') ?>">
              <i class="material-icons">content_paste</i>
              <p>Laporan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('auth/browse_status_admin') ?>">
              <i class="material-icons">library_books</i>
              <p>Browse Data</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('auth/logout') ?>">
              <i class="material-icons">power_settings_new</i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Sidebar -->

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#" >SISTEM PELAYANAN IZIN BONGKAR TIMBUN MUAT DI LUAR KAWASAN PABEAN</a>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end">
            <h6>Admin</h6>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo site_url('auth/logout')?>">Log out</a>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!-- End Navbar -->