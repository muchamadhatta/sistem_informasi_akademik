 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pencil"></i> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">


            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <div class="panel panel-danger">
                    <div class="panel-heading">Data Siswa</div>
                    <div class="panel-body"><div class="table-responsive">
                      <table class="table table-striped table-hover" id="table">
                        <tr>
                          <th>Nis</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->nis) ?></td>
                        </tr>
                         <tr>
                          <th>Nama Siswa</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->nama_siswa) ?></td>
                        </tr>
                        <tr>
                         <th>Tahun Ajaran</th>
                         <td class="text-center">:</td>
                         <td><?= ucfirst($siswa->tahun_ajaran) ?></td>
                         </tr>
                         <tr>
                          <th>Kelas</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->{'kelas_s'.$semester}) ?></td>
                        </tr>
                          <tr>
                          <th>Jurusan</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->nama_jurusan) ?></td>






                        <tr>
                          <th>Jenis Kelamin</th>
                          <td class="text-center">:</td>
                          <td><?= $siswa->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                          <th>Tempat, Tanggal Lahir</th>
                          <td class="text-center">:</td>
                          <td><?= $siswa->tempat_lahir . ', ' . $this->mylibrary->date_indo($siswa->tanggal_lahir); ?></td>
                        </tr>
                    </table></div>
                    </div>
                  </div>




                  <div class="panel panel-danger">
                    <div class="panel-heading">Nilai Siswa</div>
                    <div class="panel-body">
                      <div class="row">

                        <div class="col-md-6">

                            </div>
                          <div class="col-md-6">
                           <a href="<?= base_url('siswa/print_nilai/').$this->uri->segment(3) ?>" title="Print Nilai" class="btn btn-warning pull-right" target="_blank"><i class="fa fa-print"></i> Print</a>
                          </div>
                        </div>
                          <br><br>
                      <div class="table-responsive">
                      <table class="table-striped table-hover" border="1px solid black;"cellspacing="0" style="border-collapse: collapse;">
                        <thead>
                          <tr>
                            <th rowspan="2" width="2%" class="">&nbsp; Mata Pelajaran</big> <br><br></th>
                            <th colspan="8" class="text-center">
                            Semester <?= $semester?>
                              <!-- <?= $semester == 1 ? 'Semester 1 :: Tahun Ajaran 2019/2020' : 'Semester 2 :: Tahun Ajaran 2019/2020' ?> -->
                            </th>
                          </tr>
                          <tr>
                            <th class="text-center" width="1%">KKM</th>
                            <th class="text-center" width="1%">Tugas 1</th>
                            <th class="text-center" width="1%">Tugas 2</th>
                            <th class="text-center" width="1%">Tugas 3</th>
                            <th class="text-center" width="1%">UTS</th>
                            <th class="text-center" width="1%">UAS</th>
                            <th class="text-center" width="1%">Total Nilai</th>
                             <th class="text-center" width="1%">Nilai Rata-Rata</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $jumlahpelajaran=-1; ?>
                        <?php $i=1; $rata=0; foreach ($dataNilai->result() as $nilai):  ?>
                          <?php $jumlahpelajaran++; ?>
                        <?php $total = $nilai->tugas_1 + $nilai->tugas_2 + $nilai->tugas_3 + $nilai->uts + $nilai->uas ?>
                            <tr>

                              <td>&nbsp;&nbsp;<?= $nilai->nama_pelajaran ?></td>
                              <td class="text-center" style="padding: 5px"><?= $nilai->kkm ?></td>
                              <td class="text-center" style="padding: 5px"><?= $nilai->tugas_1 ?></td>
                              <td class="text-center" style="padding: 5px"><?= $nilai->tugas_2 ?></td>
                              <td class="text-center" style="padding: 5px"><?= $nilai->tugas_3 ?></td>
                              <td class="text-center" style="padding: 5px"><?= $nilai->uts ?></td>
                              <td class="text-center" style="padding: 5px"><?= $nilai->uas ?></td>
                              <td class="text-center" style="padding: 5px"><?= $total ?></td>
                              <?php $nilairatarata = (($nilai->tugas_1 + $nilai->tugas_2 + $nilai->tugas_3) + $nilai->uts + $nilai->uas) / 5  ;  ?>
                              <td class="text-center"><b>&nbsp;<?= $nilairatarata ?></b></td>
                            </tr>
                          <?php $i++; $rata+= $nilairatarata; endforeach ?>
                          <tr>
                              <td colspan="8"><b>&nbsp;TOTAL RATA RATA &nbsp;: </b></td>
                              <?php if ($jumlahpelajaran <= 0) $jumlahpelajaran = 1; ?>
                              <?php $ratarata = round($rata / ++$jumlahpelajaran, 1)  ?>
                              <!-- <td class="text-center"><b>&nbsp;<?= $total ?></b></td> -->
                              <td class="text-center"><b>&nbsp;<?= $ratarata ?></b></td>
                            </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                           <td colspan="8"><b>&nbsp;Rangking &nbsp;: </b></td>
                           
                           <td class="text-center"><b>&nbsp;<?= @$rangking ?></b></td>
                         </tr>
                          <tr>
                           <td colspan="15">
                            &nbsp;
                           </td>
                         </tr>
                         <tr>
                           <td colspan="15" class="text-left"><b>&nbsp;Keterangan &nbsp;&nbsp;: </b> <b>S</b> = Sakit , <b>I</b> = Izin , <b>A</b> = Alpa </td>
                         </tr>

                      <tr>
                           <th class="text-center">&nbsp;S</th>
                           <td colspan="15" class="text-center" style="padding: 5px"><?= $siswa->{'sakit_'.$semester} ?></td>
                          </tr>

                        <tr>
                           <th class="text-center">&nbsp;I</th>
                           <td colspan="15" class="text-center" style="padding: 5px;"><?= $siswa->{'ijin_'.$semester} ?></td>
                          </tr>
                         <tr>
                           <th class="text-center">&nbsp;A</th>
                           <td colspan="15" class="text-center" style="padding: 5px;"><?= $siswa->{'alpa_'.$semester} ?></td>

                          </tr>

                          <tr>
                            <td colspan="15" style="padding: 10px;">
                            <label for="catatan">Catatan :</label><br>
                            <textarea readonly cols="80" rows="3" ><?= $siswa->{'catatan_'.$semester} ?></textarea>
                            </td>
                          </tr>
              
                          <tr>
                            <td colspan="15" style="padding: 10px;">
                            <label for="Keputusan">Keputusan :</label><br>
                            <textarea readonly cols="80" rows="3" ><?= $siswa->{'keputusan_'.$semester} ?></textarea>
                            </td>
                          </tr>

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

               
           <br>_______________________<br>
               Nip: 11023436343433 <br>

			</tr>
				</td>
                        </tfoot>
                      </table></div>
                    </div>
                  </div>
                </div>
             </div>
         </div>
    </div>
</section>


<script>
  $(document).ready(function(){
    $('#changeSemester').change(function(){
      var semester = $('#changeSemester').val();
      var url = "<?= base_url('siswa/nilai/') ?>" + semester;
      window.location.href= url;
    });
  });
</script>
