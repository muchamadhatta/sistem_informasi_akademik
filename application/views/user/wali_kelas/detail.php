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
						<img src="<?= base_url('assets/guru/') . $wali_kelas->foto ?>" style="width: 400px; height: 500px;">
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
								<th><?= ucfirst($wali_kelas->nama_guru) ?></th>
							</tr>	
							<tr>
								<th>Jenis Kelamin</th>
								<th>:</th>
								<th><?= $wali_kelas->jenis_kelamin ?></th>
							</tr>
							<tr>
								<th>Agama</th>
								<th>:</th>
								<th><?= $wali_kelas->agama ?></th>
							</tr>
							<tr>
								<th>Tempat, Tanggal Lahir</th>
								<th>:</th>
								<th><?= $wali_kelas->tempat_lahir . ', ' . $this->mylibrary->date_indo($wali_kelas->tanggal_lahir) ?></th>
							</tr>
							<tr>
								<th>Alamat</th>
								<th>:</th>
								<th><?= $wali_kelas->alamat ?></th>
							</tr>
							<tr>
								<th>Wali Kelas</th>
								<th>:</th>
								<th><?= $wali_kelas->nama_kelas .' - ' . $wali_kelas->nama_jurusan ?></th>
							</tr>
							<tr>
								<th>Jumlah Siswa</th>
								<th>:</th>
								<th><?= $jml_siswa ?> - Orang</th>
							</tr>
						</table>
						<hr><br><br><br>
						<span>* Data mengajar</span><br><br>
						<table class="table table-striped table-bordered">
							<?php foreach ($mengajar as $key): ?>
								<tr>
									<td><?= $key->nama_kelas ?> <?= $key->nama_jurusan ?></td>
									<td><i class="fa fa-arrow-right"></i></td>
									<td><?= $key->nama_pelajaran ?></td>
								</tr>
							<?php endforeach ?>
						</table>
					</p>
					<!-- <p><?= $wali_kelas->kata_sambutan ?></p> -->
					<div class="skill-main">
						
						<!--/ End Single Skill -->
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>