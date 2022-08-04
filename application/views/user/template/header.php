
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    

<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title><?= $title; ?></title>
		<!-- Favicon -->
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/font-awesome.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/jquery.fancybox.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/owl.theme.default.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/magnific-popup.css">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/normalize.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>style.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/responsive.css">
		
		<!-- Learedu Color -->
		<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color1.css">
		<!-- <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color2.css"> -->
		<!-- <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color3.css"> -->
		<!--<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color4.css">-->
		<!--<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color5.css">-->
		<!--<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color6.css">-->
		<!--<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color7.css">-->
		<!--<link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color/color8.css">-->
		<!-- <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>#" id="colors">	 -->
		<script src="<?= base_url('assets/frontend/') ?>js/jquery.min.js"></script>
		 <!-- toasts -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
		<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>


		<style>
			div a[title='Hosted on free web hosting 000webhost.com. Host your own website for FREE.'] {
				display: none;
				z-index: -999 !important;;
				opacity: 0 !important;;
			}
		</style>

    </head>
    <body class="bg-white">
	
		<!-- Book Preloader -->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--/ End Book Preloader -->
	
		<!-- Mp Color -->
		<!-- <div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
			<h4>Choose Color</h4>
			<span class="color1"></span>
			<span class="color2"></span>
			<span class="color3"></span>
			<span class="color4"></span>
			<span class="color5"></span>
			<span class="color6"></span>
			<span class="color7"></span>
			<span class="color8"></span>
		</div> -->
		<!--/ End Mp Color -->
	
		<!-- Header -->
		<header class="header" id="contact">
			<!-- Header Inner -->
			<div class="header-inner" style="background: white; padding-bottom: 20px;">
				<div class="container">
					<div class="row"> 
						<div class="col-lg-5 col-md-3 col-12">
							<div class="logo">
								<a href="#"><img src="<?= base_url('assets/biodata/') ?><?= $biodata->logo_sekolah; ?>"  style="width: 70px; height: 70px;">
								</a>
								<span  style="padding: 20px;">
									<h3><?= $biodata->nama_sekolah ?> </h3>
									<?= $biodata->alamat_sekolah ?>
										
								</span>
							</div>
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<div class="single-widget">
									<i class="fa fa-phone"></i>
									<h4>Telepon<a href="whatsapp://send?text=Selamat Datang Di SMK LINK AND MATCH &phone=+6282234578912"><span><?= $biodata->no_telepon_sekolah ?></span></a></h4>
								</div>
								<div class="single-widget">
									<i class="fa fa-envelope-o"></i>
									<h4>Email<a href="mailto: smk.elem@gmail.com"><span><?= $biodata->email_sekolah; ?></span></a></h4>
								</div>
								<div class="single-widget">
									<i class="fa fa-map-marker"></i>
									<h4>Our Location<a href="https://goo.gl/maps/WXSy8WZKcpBSPi61A"><span><?= $biodata->alamat_sekolah ?></span></a></h4>
								</div>
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu" style="box-shadow: 1px 2px 30px #bbb;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<?php $link = $this->uri->segment(2); ?>
									<ul id="nav" class="nav menu navbar-nav">
										<li <?= ($link == '') ? 'class="active"' : '' ?>><a href="<?= base_url('user') ?>">Home</a></li>
										<li <?= ($link == 'berita' || $link == 'cariBerita') ? 'class="active"' : '' ?>><a href="<?= base_url('user/berita') ?>">Berita</a></li>
										<li <?= ($link == 'ekstrakurikuler') ? 'class="active"' : '' ?>><a href="<?= base_url('user/ekstrakurikuler') ?>">Ekstrakurikuler</a></li>
										<li <?= ($link == 'jurusan') ? 'class="active"' : '' ?>><a href="<?= base_url('user/jurusan') ?>">Jurusan</a></li>
										<li <?= ($link == 'guru' || $link == 'detail_guru') ? 'class="active"' : '' ?>><a href="<?= base_url('user/guru') ?>">Guru</a></li>
										<li><a href="<?= base_url('auth') ?>">Login</a></li>
										<!-- <li <?= ($link == 'siswa') ? 'class="active"' : '' ?>><a href="<?= base_url('user/siswa/1') ?>">Siswa</a></li> -->
									</ul>
									<!-- End Main Menu -->
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->