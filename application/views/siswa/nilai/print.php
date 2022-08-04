<!DOCTYPE html>
<html>
<head>
  <title>Print Siswa</title>
</head>

<link rel="stylesheet" href="<?= base_url('assets') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
<body>
	<a href="<?= base_url() ?>siswa" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>

<div class="container">
<div class="row" style="padding-bottom: 50px">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
    <img src="<?= base_url('assets/biodata/').$biodata->logo_sekolah ?>" class="img img-responsive pull-left" style="width: 100px; height: 100px;">
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" >
    <h4><?= $biodata->nama_sekolah ?></h4>
    <p><?= $biodata->alamat_sekolah; ?></p>
    <b>No.telp <?= $biodata->no_telepon_sekolah; ?></b>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
    <img src="<?= base_url('assets/biodata/bogor.png') ?>" style="width: 100px; height: 100px;" class="img img-responsive pull-right">
  </div><br><br><br><br><br><br>
<hr style="border: 1px solid black;">
    <hr style="border: 3px solid black; margin-top: -1%;">
<table style="height: 73px;" width="384">
<tbody>
  <tr>
<td style="width: 184px;">NIS</td>
<td style="width: 184px;">: <b><?= $siswa->nis; ?></td>
</tr>
<tr>
<td style="width: 184px;">Nama Peserta Didik</td>
<td style="width: 184px;">: <b><?= $siswa->nama_siswa; ?></b></td>
</tr>
<tr>
<td style="width: 184px;">Jurusan</td>
<td style="width: 184px;">: <b><?= $siswa->nama_jurusan; ?></b></td>
</tr>
<tr>
<td style="width: 184px;">No Telepon</td>
<td style="width: 184px;">: <b><?= $siswa->no_telepon; ?></b></td>
</tr>
<tr>
<td style="width: 184px;">Kelas</td>
<td style="width: 184px;">: <b><?= ucfirst($siswa->{'kelas_s'.$semester}); ?></td>
</tr>
<tr>
<td style="width: 184px;">Jenis Kelamin</td>
<td style="width: 184px;">: <b><?= $siswa->jenis_kelamin; ?></b></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>



<table class="table-striped table-hover" border="1px solid grey;"cellspacing="0" style="border-collapse: collapse;">
<thead>
     <tr>
          <th rowspan="3" width="5%" class="text-center">&nbsp; Mata Pelajaran</big>
          <th colspan="7" class="text-center">
          Semester <?= $semester ?>
          </th>
        </tr>
        <tr>
          <th class="text-center" width="1%"3>Tugas 1</th>
          <th class="text-center" width="1%">Tugas 2</th>
          <th class="text-center" width="1%">Tugas 3</th>
          <th class="text-center" width="1%">UTS</th>
          <th class="text-center" width="1%">UAS</th>
          <th class="text-center" width="1%">Nilai</th>
          <th class="text-center"width="1%">Nilai Rata Rata</th>
        </tr>
      </thead>
</thead>

    <tbody>
    <?php $jumlahpelajaran=-1; ?>
   <?php $i=1; $rata=0; foreach ($dataNilai->result() as $nilai):  ?>
		 <?php $jumlahpelajaran++; ?>
     <?php $total = $nilai->tugas_1 + $nilai->tugas_2 + $nilai->tugas_3 + $nilai->uts + $nilai->uas  ?>
      <?php $nilairatarata = (($nilai->tugas_1 + $nilai->tugas_2 + $nilai->tugas_3) + $nilai->uts + $nilai->uas) / 5  ;  ?>

        <tr class="text-center">

          <td>&nbsp;<?= $nilai->nama_pelajaran ?></td>
          <td><?= $nilai->tugas_1 ?></td>
          <td><?= $nilai->tugas_2 ?></td>
          <td><?= $nilai->tugas_3 ?></td>
          <td><?= $nilai->uts ?></td>
          <td><?= $nilai->uas ?></td>
          <td><?= $total; ?></td>
          <td class="text-center"><b>&nbsp;<?= $nilairatarata ?></b></td>
        </tr>
        <?php $i++; $rata += $nilairatarata; endforeach ?>
         <tr >
           <td colspan="7"><b>&nbsp;TOTAL RATA RATA&nbsp;: </b></td>
 					<?php if ($jumlahpelajaran <= 0) $jumlahpelajaran = 1; ?>
          <?php $ratarata = round($rata / ++$jumlahpelajaran, 1)  ?>
          <td class="text-center"><b>&nbsp;<?= $ratarata ?></b></td>
        </tr>
    </tbody>
    <tfoot>
    <tr>
      <td colspan="7"><b>&nbsp;Rangking &nbsp;: </b></td>
 			 <td class="text-center"><b>&nbsp;<?= @$rangking ?></b></td>
      <tr>
       <td colspan="15" style="background: rgba(0,0,0,0.1)">&nbsp;</td>
     </tr>
     <tr>
       <td colspan="15" class="text-left"><b>&nbsp;Keterangan &nbsp;&nbsp;: </b> <b>S</b> = Sakit , <b>I</b> = Izin , <b>A</b> = Alpa </td>
     </tr>

      <tr>
       <th class="text-center">&nbsp;S</th>
        <td colspan="15" class="text-center"><?= $semester == 1 ? $siswa->sakit_1 : $siswa->sakit_2 ?></td>
      </tr>

      <tr>
       <th class="text-center">&nbsp;I</th>
       <td colspan="15" class="text-center"><?= $semester == 1 ? $siswa->ijin_1 : $siswa->ijin_2 ?></td>
      </tr>




     <tr>
       <th class="text-center">&nbsp;A</th>
       <td colspan="15" class="text-center"><?= $semester == 1 ? $siswa->alpa_1 : $siswa->alpa_2 ?></td>
      </tr>
      <tr>
       <td colspan="15" style="background: rgba(0,0,0,0.1)">&nbsp;</td>
     </tr>
       <tr>
       <td colspan="15" style="padding: 10px;">
       <label for="catatan">Catatan :</label><br>
              <textarea name="catatan_<?= $semester ?>" cols="80" rows="4" ><?= $semester == 1 ? $siswa->catatan_1 : $siswa->catatan_2 ?></textarea>
             </td>
             <tr>
               <td colspan="15" style="padding: 10px;">
              <label for="keputusan">Keputusan :</label><br>
              <textarea name="keputusan_<?= $semester ?>" cols="80" rows="4" ><?= $semester == 1 ? $siswa->keputusan_1 : $siswa->keputusan_2 ?></textarea>
              </td>

              <table class="table"> 
		      <tr>
	       	<td style="padding-left: 10px;"><br>
				  	Mengetahui, <br>
					  Orang Tua/Wali <br><br><br><br>

           <br>________________________ <br>
					
           <td style="padding-left: 10px;"><br>
				  	Mengetahui, <br>
					  Wali Kelas <br><br><br><br>

           <br>_______________________ <br>


           <td style="padding-left: 10px;"><br>
					  Kepala Sekolah <br><br><br><br>

                Minar Pandiangan, S.Pd
           <br>_______________________<br>
               Nip: 11023436343433 <br>

      
      </tr>
    </tfoot>

</table>

</div>
</body>
    <script>
      print();
    </script>
</html>
