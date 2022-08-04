<!-- Slider Area -->
<section class="home-slider">
	<div class="slider-active">
		<!-- Single Slider -->
		<div class="single-slider overlay" style="background-image:url(<?= base_url('assets/biodata/'.$biodata->slider_1) ?>)" style="width: 100%; height: 100%;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 container">
						<div class="slider-text container">
							<h1>Visi <span>Sekolah</span></h1>
							<h3 style="color : white;">
								<?= $biodata->visi ?>
							</h3>
							<div class="button">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
		<!-- Single Slider -->
		<div class="single-slider overlay" style="background-image:url(<?= base_url('assets/biodata/'.$biodata->slider_2) ?>)" style="width: 100%; height: 100%;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 container">
						<div class="slider-text container">
							<h1>Misi <span>Sekolah</span></h1>
							<h5 style="color: white;"><?= $biodata->misi ?></h5>
							<div class="button">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</div>
</section>
<!--/ End Slider Area -->

<!-- kepsek -->
<section class="team-details section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><i class="fa fa-user-secret"></i> Kepala <span>Sekolah</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-xs-12">
				<div class="member-detail" style="padding: auto;">
					<div class="image text-center">
						<img src="<?= base_url('assets/biodata/') . $kepsek->foto ?>" style="width: 100%; height: 550px;">
					</div>
				
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-xs-12">
				<div class="detail-content" style="padding: auto;">
					<h2><?= $kepsek->fullname ?></h2>
					<p class="title">
						<div class="contact">
						<ul class="address">
							<li><a href="mailto:rachel@websitename.com"><i class="fa fa-envelope"></i><?= $kepsek->email ?></a></li>
							<li><i class="fa fa-phone"></i><?= $kepsek->no_telepon ?><li>
							<li><i class="fa fa-home"></i><?= $kepsek->alamat ?></li>
						</ul>
					</div>
					</p>
					<p><?= $kepsek->kata_sambutan ?></p>
					<div class="skill-main">
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- endkepsek -->


<!-- Testimonials -->
<!-- <section class="testimonials overlay section" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><i class="fa fa-users"></i> Guru</h2>
				</div>
				<div class="testimonial-slider">
					<?php foreach ($guru as $guru): ?>
						<div class="single-testimonial" style="min-height: 300px; background: rgba(225, 225, 225, 0.5); color: white; text-shadow: 1px 1px 5px black;">
							<img src="<?= base_url('assets/guru/').$guru->foto ?>" alt="#" class="img-responsive">
							<div class="main-content">
								<h4 class="name"><?= $guru->nama_guru ?></h4><hr>
								<p>
									<table>
									<?php foreach ($mengajar as $mengajar1): ?>
										<?php if ($guru->id_guru == $mengajar1->id_guru): ?>
											<tr>
												<td width="1%"><?= $mengajar1->nama_kelas ?></td>
												<td width="20%"><i class="fa fa-arrow-right"></i> &nbsp;&nbsp;<?= $mengajar1->nama_pelajaran ?></td>
											</tr>
										<?php endif ?>
									<?php endforeach ?>
									</table>
								</p>
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--/ End Testimonials -->


