<!-- Team -->
<section class="team section" style="padding-bottom: -50px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Siswa</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
					<?= form_open('') ?>
              				<div class="learnedu-sidebar" style="border: none;">
	              				<div class="search">
									<div class="form">
										<input type="number" name="nis" placeholder="Percarian Siswa Berdasarkan NIS" autofocus value="<?= set_value('nis') ?>" autocomplete="off">
										<button class="button"><i class="fa fa-search"></i></button>
									</div>
								</div><br>
								<?php if (@$judul): ?>
									<div class="alert alert-danger"><?= $judul ?><i class="fa fa-times pull-right" data-dismiss="alert"></i></div>
								<?php endif ?>
							</div>
						
					<?= form_close() ?>
			</div>
		</div>
		
	</div>
</section>
<!--/ End Team -->
<?php if (@$siswa): ?>
<section class="courses single section" style="margin-top: -100px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single-main">
					<div class="row">
						<div class="col-lg-5 col-12">
							<!-- Single Course -->
							<div class="single-course">
								<div class="course-head">		
									<img src="<?= base_url('assets/siswa/').$siswa->foto_siswa ?>" style="height: 420px">
								</div>			
							</div>
							<!--/ End Single Course -->
						</div>	
						<div class="col-lg-7 col-12">
							<!-- Course Features -->
							<div class="course-feature">
								<div class="feature-main">
									<h4>Profil Siswa</h4>
									<!-- Single Feature -->
									<div class="single-feature">
										<i class="fa fa-circle-o"></i>
										<!-- <span class="label">Nama Lengkap</span> -->
										<span class="label"><?= $siswa->nis ?></span>
									</div>
									<div class="single-feature">
										<i class="fa fa-circle-o"></i>
										<!-- <span class="label">Nama Lengkap</span> -->
										<span class="label"><?= $siswa->nama_siswa ?></span>
									</div>
									<!--/ End Single Feature -->
									<!-- Single Feature -->
									<div class="single-feature">
										<i class="fa fa-circle-o"></i>
										<!-- <span class="label">Kelas</span> -->
										<span class="label"><?= $siswa->nama_kelas ?></span>
									</div>
									<!--/ End Single Feature -->
									<!-- Single Feature -->
									
									<!--/ End Single Feature -->
									<!-- Single Feature -->
									<div class="single-feature">
										<i class="fa fa-circle-o"></i>
										<!-- <span class="label">Jenis kelamin</span> -->
										<span class="label"><?= $siswa->jenis_kelamin ?></span>
									</div>
									<!--/ End Single Feature -->
									<!-- Single Feature -->
									<div class="single-feature">
										<i class="fa fa-circle-o"></i>
										<!-- <span class="label">Tempat, Tanggal Lahir</span> -->
										<span class="label"><?= $siswa->tempat_lahir .', '.$this->mylibrary->date_indo($siswa->tanggal_lahir) ?></span>
									</div>
									<!--/ End Single Feature -->
									<!-- Single Feature -->
									<div class="single-feature">
										<i class="fa fa-circle-o"></i>
										<!-- <span class="label">Alamat</span> -->
										<span class="label"><?= $siswa->alamat_siswa ?></span>
									</div>
									<!--/ End Single Feature -->
								
								</div>
								
							</div>
							<!--/ End Course Features -->
						</div>	
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<script>
	$(document).ready(function(){
	$('.alert').alert().delay(5000).slideUp('slow');
});
</script>