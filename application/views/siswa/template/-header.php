<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Siswa | <?= @$title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/skins/_all-skins.min.css">
  <script src="<?= base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b><?= $biodata->nama_sekolah ?></b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <?php $link = $this->uri->segment(2); ?>
            <li <?= $link == '' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/1') ?>"><i class="fa fa-pencil"></i> Nilai S1</a></li>
            <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/2') ?>"><i class="fa fa-pencil"></i> Nilai S2</a></li>
            <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/3') ?>"><i class="fa fa-pencil"></i> Nilai S3</a></li>
            <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/4') ?>"><i class="fa fa-pencil"></i> Nilai S4</a></li>
            <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/5') ?>"><i class="fa fa-pencil"></i> Nilai S5</a></li>
            <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/6') ?>"><i class="fa fa-pencil"></i> Nilai S6</a></li>
            <li <?= $link == 'jadwal_pelajaran' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/jadwal_pelajaran') ?>"><i class="fa fa-calendar"></i> Jadwal Pelajaran</a></li>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?= base_url('assets/siswa/') . $this->session->userdata('foto') ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?= $this->session->userdata('nama_siswa') ?></span>
              </a>
              <ul class="dropdown-menu"  style="box-shadow:0px 0px 60px black;">
                <!-- User image -->

                <li class="user-header" style="overflow: hidden;">
                  <img src="<?= base_url('assets/siswa/') . $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">

                  <p>

                    <small>  <?= $this->session->userdata('nama_siswa'); ?> <hr></small>

                  </p>
                </li>

                <li class="user-body">

                    <a href="<?= base_url('auth/logout') ?>" class="text-info"><i class="fa fa-power-off"></i> Sign Out</a><hr style="margin: 5px;">
                </li>

                <li class="user-footer" style="background: grey;">

                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
