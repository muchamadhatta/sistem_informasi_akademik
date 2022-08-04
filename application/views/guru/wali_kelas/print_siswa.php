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
					<img src="<? = base_url('assets/biodata/proc.png')?>" style="width: 150px; height: 150px;" class="img img-responsive pull-right">
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
					<th>3.	Tempat, Tanggal Lahir</th>
					<th> : </th>
					<td><?= $siswa->tempat_lahir .', ' . $this->mylibrary->date_indo($siswa->tanggal_lahir); ?></td>
				</tr>
				<tr>
					<th>4.	Jenis Kelamin</th>
					<th> : </th>
					<td><?= $siswa->jenis_kelamin; ?></td>
				</tr>

				<tr>
					<th>5.	Agama </th>
					<th> : </th>
					<td><?= $siswa->agama; ?></td>
				</tr>
				<tr>
					<th>6.	Alamat Siswa </th>
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
						Kadipaten, <?= $this->mylibrary->date_indo(date('Y-m-d')); ?> <br>
			Kepala SMK Negeri Kadipaten <br><br><br><br><br><br>

			

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
						<td style="width: 184px;">Program Keahlian</td>
						<td style="width: 350px;">: <b><?= ucfirst($siswa->nama_jurusan); ?></td>
					</tr>
					<tr>
						<td style="width: 184px;">Jenis Kelamin</td>
						<td style="width: 184px;">: <b><?= $siswa->jenis_kelamin; ?></b></td>
					</tr>
				</table>
				<p>&nbsp;</p>



			<table class="table-striped table-hover" border="1px solid grey;"cellspacing="0" style="border-collapse: collapse;">
				<thead>
				  <tr>
				    <th rowspan="3" width="2%" class="text-center">&nbsp;Mata Pelajaran</th>
				    <th class="text-center" colspan="4"> X </th>
				    <th class="text-center" colspan="4"> XI </th>
				    <th class="text-center" colspan="4"> XII </th>
				     <th rowspan="3" class="text-center" width="2%">NI</th>
				    <th rowspan="3" class="text-center" width="2%">NS</th>
				  </tr>
				  <tr>
				    <th colspan="2" width="10%"> Semester : 1</th>
				    <th colspan="2" width="10%"> Semester : 2</th>
				    <th colspan="2" width="10%"> Semester : 1</th>
				    <th colspan="2" width="10%"> Semester : 2</th>
				    <th colspan="2" width="10%"> Semester : 1</th>
				    <th colspan="2" width="10%"> Semester : 2</th>
				  </tr>
				  <tr>
				    <th class="text-center" width="1%">AP</th>
				    <th class="text-center" width="1%">ARK</th>
				    <th class="text-center" width="1%">AP</th>
				    <th class="text-center" width="1%">ARK</th>
				    <th class="text-center" width="1%">AP</th>
				    <th class="text-center" width="1%">ARK</th>
				    <th class="text-center" width="1%">AP</th>
				    <th class="text-center" width="1%">ARK</th>
				    <th class="text-center" width="1%">AP</th>
				    <th class="text-center" width="1%">ARK</th>
				    <th class="text-center" width="1%">AP</th>
				    <th class="text-center" width="1%">ARK</th>
				  </tr>
				</thead>
			   
			    <tbody>
			      <?php $i=1; $total_nilai_ap_1=0; $total_nilai_ap_2=0; $total_nilai_ap_3=0; $total_nilai_ap_4=0; $total_nilai_ap_5=0; $total_nilai_ap_6=0; $total_nilai_ak_1=0; $total_nilai_ak_2=0; $total_nilai_ak_3=0; $total_nilai_ak_4=0; $total_nilai_ak_5=0; $total_nilai_ak_6=0; $total_nilai_ijazah=0; $total_nilai_skhun=0; foreach ($this->db->query("SELECT * FROM nilai INNER JOIN pelajaran ON nilai.id_pelajaran = pelajaran.id_pelajaran WHERE nilai.id_siswa = '".$siswa->id_siswa."'")->result() as $nilai): 
			        $total_nilai_ap_1+=$nilai->ap_1; $total_nilai_ap_2+=$nilai->ap_2; $total_nilai_ap_3+=$nilai->ap_3; $total_nilai_ap_4+=$nilai->ap_4; $total_nilai_ap_5+=$nilai->ap_5; $total_nilai_ap_6+=$nilai->ap_6;
			        $total_nilai_ak_1+=$nilai->ak_1; $total_nilai_ak_2+=$nilai->ak_2; $total_nilai_ak_3+=$nilai->ak_3; $total_nilai_ak_4+=$nilai->ak_4; $total_nilai_ak_5+=$nilai->ak_5; $total_nilai_ak_6+=$nilai->ak_6; $total_nilai_ijazah+=$nilai->nilai_ijazah; $total_nilai_skhun+=$nilai->nilai_skhun;


			      ?>
		        <tr class="text-center">
		          
		          <td>&nbsp;<?= $nilai->nama_pelajaran ?></td>
		          <td><?= $nilai->ap_1 ?></td>
		          <td><?= $nilai->ak_1 ?></td>
		          <td><?= $nilai->ap_2 ?></td>
		          <td><?= $nilai->ak_2 ?></td>
		          <td><?= $nilai->ap_3 ?></td>
		          <td><?= $nilai->ak_3 ?></td>
		          <td><?= $nilai->ap_4 ?> </td>
		          <td><?= $nilai->ak_4 ?></td>
		          <td><?= $nilai->ap_5 ?></td>
		          <td><?= $nilai->ak_5 ?></td>
		           <td><?= $nilai->ap_6 ?></td>
		          <td><?= $nilai->ak_6 ?></td>
		          <td><?= $nilai->nilai_ijazah ?></td>
		          <td><?= $nilai->nilai_skhun ?></td>
		        </tr>
		      <?php $i++; endforeach ?>
		      <tr class="text-center">
		        <td><b>&nbsp;TOTAL NILAI&nbsp;: </b></td>
		        <td><b>&nbsp;<?= $total_nilai_ap_1; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ak_1; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ap_2; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ak_2; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ap_3; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ak_3; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ap_4; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ak_4; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ap_5; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ak_5; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ap_6; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ak_6; ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_ijazah ?></b></td>
		        <td><b>&nbsp;<?= $total_nilai_skhun ?></b></td>
		      </tr>
		    </tbody>
		    <tfoot>
		      <tr>
		       <td colspan="15" style="background: rgba(0,0,0,0.1)">&nbsp;</td>
		     </tr>
		     <tr>
		       <td colspan="15" class="text-left"><b>&nbsp;Keterangan &nbsp;&nbsp;: </b> <b>S</b> = Sakit , <b>I</b> = Izin , <b>A</b> = Alpa </td>
		     </tr>
		    
		      <tr>
		       <th class="text-center">&nbsp;S</th>
		       <td colspan="2" class="text-center"><?= $siswa->s_1 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->s_2 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->s_3 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->s_4 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->s_5 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->s_6 ?></td>
		       <td colspan="2"></td>
		      </tr>

		      <tr>
		       <th class="text-center">&nbsp;I</th>
		       <td colspan="2" class="text-center"><?= $siswa->i_1 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->i_2 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->i_3 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->i_4 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->i_5 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->i_6 ?></td>
		       <td colspan="2"></td>
		      </tr>

		      


		     <tr>
		       <th class="text-center">&nbsp;A</th>
		       <td colspan="2" class="text-center"><?= $siswa->a_1 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->a_2 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->a_3 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->a_4 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->a_5 ?></td>
		       <td colspan="2" class="text-center"><?= $siswa->a_6 ?></td>
		       <td colspan="2"></td>
		      </tr>
		      <tr>
		       <td colspan="15" style="background: rgba(0,0,0,0.1)">&nbsp;</td>
		     </tr>
		       <tr>
		       <td class="text-center"><b>Catatan</b></td>
		        <th colspan="15"><textarea class="form-control" readonly><?= $siswa->catatan; ?></textarea></th>
		      </tr>
		    </tfoot>
			</table>


			<table class="table"> 
		      <tr>
		      	<td style="padding-left: 200px;"><br>
					Mengetahui, <br>
					Orang Tua/Wali <br><br><br><br>

					

					
					<br>________________________ <br>
					
				</td>


				<td style="padding-left: 200px;"><br>
					Kadipaten, <?= $this->mylibrary->date_indo(date('Y-m-d')); ?> <br>
					Wali Kelas, <br><br><br><br>

					

					
					<br>________________________ <br>
					
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