<!DOCTYPE html>
<html>
<head>
	<title>Print Siswa</title>
</head>

<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">

<body>
	<div style="padding:0px 60px;">
		<div class="row" style="padding-top: 15px">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
					<img src="<?= base_url('assets/biodata/').$sekolah->logo_sekolah ?>" class="img img-responsive pull-left" style="width: 150px; height: 150px;">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" >
					<h2><?= $sekolah->nama_sekolah ?></h2>
					<p><?= $sekolah->alamat_sekolah; ?></p>
					<b>No.telp <?= $sekolah->no_telepon_sekolah; ?></b>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
					<img src="<?= base_url('assets/biodata/bogor.png') ?>" style="width: 150px; height: 150px;" class="img img-responsive pull-right">
				</div>
			<table class="table table-striped">
				<tr>
					<td colspan="3"><hr style="border: 1px solid black;">
					<hr style="border: 3px solid black; margin-top: -1%;"></td>
				</tr>
				<tr>
					<td colspan="3"><h4>BIODATA SISWA</h4></td>
				</tr>
				<tr>
					<th width="30%">1.	Nama Siwa (Lengkap)</th>
					<th width="30%"> : </th>
					<th><?= $siswa->nama_siswa; ?></th>
				</tr>
				<tr>
					<th>2.	Nomor Induk/NISN</th>
					<th> : </th>
					<td><?= $siswa->nis; ?></td>
				</tr>
				<tr>
					<th>3.	No Telepon</th>
					<th> : </th>
					<td><?= $siswa->no_telepon; ?></td>
				</tr>
				<tr>
					<th>4.	Tempat, Tanggal Lahir</th>
					<th> : </th>
					<td><?= $siswa->tempat_lahir .', ' . $this->mylibrary->date_indo($siswa->tanggal_lahir); ?></td>
				</tr>
				<tr>
					<th>5.	Jenis Kelamin</th>
					<th> : </th>
					<td><?= $siswa->jenis_kelamin; ?></td>
				</tr>

				<tr>
					<th>6.	Agama </th>
					<th> : </th>
					<td><?= $siswa->agama; ?></td>
				</tr>
				<tr>
					<th>7.	Alamat Siswa </th>
					<th> : </th>
					<td><?= $siswa->alamat_siswa; ?></td>
				</tr>
				<tr>
					<th colspan="3">8. Diterima Menjadi Siswa</th>
				</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  a. Tanggal Masuk</th>
						<td>:</td>
						<td><?= $this->mylibrary->date_indo($siswa->tanggal_masuk); ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  b. Asal Sekolah</th>
						<td>:</td>
						<td><?= $siswa->asal_sekolah; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  c. Alamat Sekolah</th>
						<td>:</td>
						<td><?= $siswa->alamat_sekolah; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  d. Nomor Ijazah</th>
						<td>:</td>
						<td><?= $siswa->nomor_sttb; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  e. Tanggal Ijazah</th>
						<td>:</td>
						<td><?= $this->mylibrary->date_indo($siswa->tanggal_sttb); ?></td>
					</tr>
				<tr>
					<th colspan="3">9. Data Orang Tua</th>
				</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  a. Nama</th>
						<td>:</td>
						<td><?= $siswa->nama_orang_tua; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  b. Pekerjaan</th>
						<td>:</td>
						<td><?= $siswa->pekerjaan; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  c. Alamat</th>
						<td>:</td>
						<td><?= $siswa->alamat_orang_tua; ?></td>
					</tr>

				<tr>
					<th colspan="3">10. Data Wali</th>
				</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  a. Nama</th>
						<td>:</td>
						<td><?= $siswa->nama_wali; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  b. Pekerjaan</th>
						<td>:</td>
						<td><?= $siswa->pekerjaan; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  c. Alamat</th>
						<td>:</td>
						<td><?= $siswa->alamat_wali; ?></td>
					</tr>

				<tr>
					<th colspan="3">11. Meninggalkan Sekolah</th>
				</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  a. Tanggal Meninggalkan Sekolah</th>
						<td>:</td>
						<td><?= $this->mylibrary->date_indo($siswa->tanggal_meninggalkan_sekolah); ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  b. Alasan Meninggalkan Sekolah</th>
						<td>:</td>
						<td><?= $siswa->alasan_meninggalkan_sekolah; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  c. Tamat Nomor Ijazah</th>
						<td>:</td>
						<td><?= $siswa->tamat_nomor_sttb; ?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  d. Tanggal Nomor Ijazah</th>
						<td>:</td>
						<td><?= $this->mylibrary->date_indo($siswa->tamat_tanggal_sttb); ?></td>
					</tr>
				<tr>
					<td><br>
						<?php if ($siswa->foto_siswa): ?>
							<img src="<?= base_url('assets/siswa/').$siswa->foto_siswa ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 200px; margin-left: 100px">
							<?php else: ?>
								<img src="<?= base_url('assets/siswa/default.png') ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 200px; margin-left: 100px">
						<?php endif ?>
						</td>
					<td colspan="2" style="padding-left: 200px;"><br>
						Pondok Cabe, <?= $this->mylibrary->date_indo(date('Y-m-d')); ?> <br>
			Kepala SMK Link and Match <br><br><br><br><br><br>

			

	<?= $kepsek->fullname ?> <br>________________________ <br>
	NIP. <?= $kepsek->nip ?>
					</td>
				</tr>
			</table>

			<br><br><br><br><br><br><br><br>
			
			<div style="min-height: 1500px;">
				<table width="384">
					<tr>
						<td style="width: 184px;">NIS</td>
						<td style="width: 184px;">: <b><?= $siswa->nis; ?></td>
					</tr>
					<tr>
						<td style="width: 184px;">Nama Peserta Didik</td>
						<td style="width: 184px;">: <b><?= $siswa->nama_siswa; ?></b></td>
					</tr>
					<tr>
						<td style="width: 184px;">Kelas</td>
						<td style="width: 184px;">: <b><?= ucfirst($siswa->nama_kelas); ?></td>
					</tr>
					
					<tr>
						<td style="width: 184px;">Jenis Kelamin</td>
						<td style="width: 184px;">: <b><?= $siswa->jenis_kelamin; ?></b></td>
					</tr>
				</table>
				<p>&nbsp;</p>



					
				</td>
			</tr>
			</table>
		</div>

</div>




</div>
<script>
	window.print();
</script>
</body>
</html>