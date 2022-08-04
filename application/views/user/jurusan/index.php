<section class="team-style2 section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Program <span> Keahlian</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($jurusan as $key): ?>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!-- Single Team -->
				<div class="single-team">
					<div class="image">
						<img src="<?= base_url('assets/jurusan/') .$key->foto ?>" style="width: 2000px; height: 200px;">
						<a href="<?= base_url('user/detail_jurusan/') .md5($key->id_jurusan) ?>" ><i class="fa fa-eye"></i></a>
					</div>
					<!--team-content -->
					<div class="team-content">
						<h4 class="name"><?= $key->nama_jurusan ?></h4>
					</div>
				</div>
				<!--/ End Single Team -->
			</div>
			
			<?php endforeach; ?>
		</div>
	</div>
</section>