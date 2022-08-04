<!-- Team -->
<section class="team section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Wali Kelas</h2>
					
				</div>
			</div>
		</div>
		<div class="row">

			<?php foreach ($wali_kelas as $key): ?>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Team -->
				<div class="single-team">
					<img src="<?= base_url('assets/guru/').$key->foto ?>" style="height: 380px;">
					<div class="team-hover">
						<h4 class="name"><?= $key->nama_guru ?><span>
							<?= $key->alamat ?><br>
							<?= $key->tempat_lahir.', '.$this->mylibrary->date_indo($key->tanggal_lahir) ?><hr>
							<b><?= $key->nama_kelas ?><br> <?= $key->nama_jurusan ?></b>
							</span>
						</h4>
						<ul class="button">
							<br><br><br>
								<a href="<?= base_url('user/detail_wali_kelas/').md5($key->id_guru) ?>" class="btn bg-dark">Read More</a>
						</ul>
					</div>
				</div>
				<!--/ End Single Team -->
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--/ End Team -->