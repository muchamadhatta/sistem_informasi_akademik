<section class="team-details section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><i class="fa fa-eye"></i> <?= $judul ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="member-detail">
					<div class="image">
						<img src="<?= base_url('assets/guru/') . $guru->foto ?>" style="width: 400px; height: 500px;">
					</div>
				
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="detail-content">
					
					<p class="title">
						<table class="table table-striped">
							<tr>
								<th>Nama</th>
								<th>:</th>
								<th><?= ucfirst($guru->nama_guru) ?></th>
							</tr>	
							<tr>
								<th>Jenis Kelamin</th>
								<th>:</th>
								<th><?= $guru->jenis_kelamin ?></th>
							</tr>
							<tr>
								<th>Agama</th>
								<th>:</th>
								<th><?= $guru->agama ?></th>
							</tr>
							<tr>
								<th>Tempat, Tanggal Lahir</th>
								<th>:</th>
								<th><?= $guru->tempat_lahir . ', ' . $this->mylibrary->date_indo($guru->tanggal_lahir) ?></th>
							</tr>
							<tr>
								<th>Alamat</th>
								<th>:</th>
								<th><?= $guru->alamat ?></th>
							</tr>
						</table>
						<hr><br><br><br>
						<span>* Data mengajar</span><br><br>
						<table class="table table-striped table-bordered">
							<?php foreach ($mengajar as $key): ?>
								<tr>
									<td><i class="fa fa-arrow-right"></i></td>
									<td><?= $key->nama_kelas ?></td>
									<td><?= $key->nama_pelajaran ?></td>
								</tr>
							<?php endforeach ?>
						</table>
					</p>
					<!-- <p><?= $guru->kata_sambutan ?></p> -->
					<div class="skill-main">
						
						<!--/ End Single Skill -->
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>