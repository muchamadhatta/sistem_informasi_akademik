<section class="team section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Guru</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row">
					<?php foreach ($guru as $key): ?>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="<?= base_url('assets/guru/').$key->foto ?>" style="height: 380px;">
							<div class="team-hover">
								<h4 class="name"><?= $key->nama_guru ?><span>
									<?= $key->alamat ?><br>
									<?= $key->tempat_lahir.', '.$this->mylibrary->date_indo($key->tanggal_lahir) ?>
									
								</h4>
								<div class="button">
									<br><br><br>
										<a href="<?= base_url('user/detail_guru/').md5($key->id_guru) ?>" class="btn bg-dark">Read More</a>
									</div>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>