<section class="team section" style="padding-bottom: -50px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><?= $judul ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="courses single section" style="margin-top: -100px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single-main">
					<div class="row">
						<div class="col-lg-5 col-12">
							<div class="single-course">
								<div class="course-head">		
									<img src="<?= base_url('assets/jurusan/').$jurusan->foto?>" style="height: 420px">
								</div>			
							</div>
							<!-- / End Single Course -->
						</div>	
						<div class="col-lg-7 col-12">
							<!-- Course Features -->
							<div class="course-feature">
								<div class="feature-main">
									<h4><?= $jurusan->nama_jurusan ?></h4>
									<!-- Single Feature -->
									
									<div class="single-feature" style="min-height: 280px;">
										<br>
										<span class="label">Keterangan Jurusan</span>
										<span class="label" ><div class="container"><i>&nbsp;&nbsp;&nbsp;&nbsp;<?= $jurusan->keterangan_jurusan ?></i></div></span>
									</div>
										<!-- Single Feature -->
									<div class="single-feature">
										<span class="label"><a href="<?= base_url('user/jurusan') ?>" class="btn btn-dark border-white"><i class="fa fa-reply"></i> Kembali</a></span>
									</div>
								
									<!-- / End Single Feature -->
								</div>
							</div>
							<!-- / End Course Features -->
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>