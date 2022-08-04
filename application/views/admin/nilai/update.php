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
                        </tr>
                         <tr>
                          <th>Tahun Ajaran</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->tahun_ajaran) ?></td>
                          </tr>
                          <tr>
                          <th>Jurusan</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->nama_jurusan) ?></td>
                        </tr>
                        <tr>
                          <th>No Telepon</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->no_telepon) ?></td>
                        </tr>
                         <tr>
                          <th>Kelas</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($siswa->{'kelas_s'.$semester}) ?></td>
                        </tr>
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
                          <div class="form-group">
                            </div>
                          </div>
                          <div class="col-md-6">
                           <a href="<?= base_url('admin/print_nilai/').$this->uri->segment(3) .'/' . $semester ?>" title="Print Nilai" class="btn btn-warning pull-right" target="_blank"><i class="fa fa-print"></i> Print</a>
                          </div>
                        </div>
                          <br><br>
                      <div class="table-responsive">
                      <table class="table-striped table-hover" border="1px solid black;"cellspacing="0" style="border-collapse: collapse;">
                        <thead>
                          <tr>
                            <th rowspan="2" width="1%" class="">&nbsp; Mata Pelajaran</th> <br><br>&nbsp;&nbsp;<a data-target="#insert_pelajaran" data-toggle="modal"  title="tambah mata pelajaran untuk penilaian"><i class="fa fa-plus-circle"></i> Add Pelajaran</a></th>
                        <?= form_open('') ?>
                        <input type="hidden" name="semester" value="<?= $semester ?>">
                            <th colspan="8" class="text-center">Semester <?= $semester ?></th>
                          </tr>
                          <tr>
                            <th class="text-center" width="1%">Kkm</th>
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
                          <input type="hidden" name="id_nilai_<?= $i ?>" value="<?= $nilai->id_nilai ?>">
                            <tr>

                              <td>&nbsp; <a href="<?= base_url() ?>admin/delete_nilai/<?= md5($nilai->id_nilai) ?>/<?= md5($siswa->id_siswa) ?>/<?= $nilai->semester ?>" onclick="return confirm('Apakah anda yakin mau menghapus data nilai <?= $nilai->nama_pelajaran ?> ?')"><i class="fa fa-times-circle text-danger"></i></a>&nbsp;<?= $nilai->nama_pelajaran ?></td>
                              <td>
                                <input type="number" name="kkm_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->kkm ?>" required>
                              </td>
                              <td>
                                <input type="number" name="tugas_1_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->tugas_1 ?>" required>
                              </td>
                              <td>
                                <input type="number" name="tugas_2_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->tugas_2 ?>" required>
                              </td>

                              <td>
                                <input type="number" name="tugas_3_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->tugas_3 ?>" required>
                              </td>
                              <td>
                                <input type="number" name="uts_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->uts ?>" required>
                              </td>

                              <td>
                                <input type="number" name="uas_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->uas ?>" required>
                              </td>

                              <?php $total = $nilai->tugas_1 + $nilai->tugas_2 + $nilai->tugas_3 + $nilai->uts + $nilai->uas  ?>
                              <td class="text-center"><b>&nbsp;<?= $total ?></b></td>
                              <?php $nilairatarata = (($nilai->tugas_1 + $nilai->tugas_2 + $nilai->tugas_3) + $nilai->uts + $nilai->uas) / 5  ;  ?>
                              <td class="text-center"><b>&nbsp;<?= $nilairatarata ?></b></td>

                            </tr>
                          <?php $i++; $rata += $nilairatarata; endforeach ?>

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
                           <td colspan="15" class="text-left"><b>&nbsp;Keterangan &nbsp;&nbsp;: </b> <b>S</b> = Sakit , <b>I</b> = Izin , <b>A</b> = Alpa </td>
                         </tr>

                      <tr>
                           <th class="text-center">&nbsp;S</th>
                           <td colspan="15" class="text-center"><input type="number" name="sakit_<?= $semester ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" 
                           value="<?= $siswa->{'sakit_'.$semester} ?>" required></td>
                          </tr>



                              <tr>
                           <th class="text-center">&nbsp;I</th>
                           <td colspan="15" class="text-center"><input type="number" name="ijin_<?= $semester ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $siswa->{'ijin_'.$semester} ?>" required></td>
                          </tr>

                         <tr>
                           <th class="text-center">&nbsp;A</th>
                           <td colspan="15" class="text-center"><input type="number" name="alpa_<?= $semester ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $siswa->{'alpa_'.$semester} ?>" required></td>

                          </tr>

                          <tr>
                            <td colspan="15" style="padding: 10px;">
                            <label for="catatan">Catatan :</label><br>
                            <textarea name="catatan_<?= $semester ?>" cols="80" rows="4" ><?= $siswa->{'catatan_'.$semester} ?></textarea>
                            </td>
                          </tr>

                          <tr>
                            <td colspan="15" style="padding: 10px;">
                            <label for="keputusan">Keputusan :</label><br>
                            <textarea name="keputusan_<?= $semester ?>" cols="80" rows="4" ><?= $siswa->{'keputusan_'.$semester} ?></textarea>
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

                Minar Pandiangan, S.Pd
           <br>_______________________<br>
               Nip: 11023436343433 <br>

			</tr>
			</table>
                          <tr>
                          <td colspan="15" style="padding: 10px;">
                          <div class="pull-right">
                             <button class="btn btn-success" name="simpan" type="submit"><i class="fa fa-save"></i> Simpan</button>&nbsp;
                             <a href="<?= base_url() ?>admin/nilai" class="btn btn-default"><i class="fa fa-reply"></i> Cancel</a>
                            <?= form_close() ?>
                           </div>
                           </td>
                          </tr>

                        </tfoot>
                      </table></div>
                    </div>
                  </div>


                <i class="text-danger">*Jika sudah melakukan perubahan pada data di atas di wajib kan untuk mengclick tombol simpan</i>
                </div>
             </div>
         </div>
    </div>
</section>


<div class="modal modal-default fade" id="insert_pelajaran" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header bg-primary text-center">Tambah mata pelajaran untuk Penilaian </div>
      <?= form_open('admin/insert_nilai/'.$siswa->id_siswa) ?>
      <div class="modal-body">
        <div class="form-group">
          <select name="id_pelajaran" class="form-control" required>
            <option value="">-- Mata Pelajaran --</option>

            <?php foreach ($this->db->get('pelajaran')->result() as $key ): ?>

              <?php if ($this->db->get_where('nilai', ['id_pelajaran' => $key->id_pelajaran , 'id_siswa' => $siswa->id_siswa, 'semester'=> $semester])->num_rows() == 0): ?>
                <option value="<?= $key->id_pelajaran ?>"><?= $key->nama_pelajaran ?></option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
          <input type="hidden" name="semester" class="form-control" id="semester" placeholder=""  value="<?php echo $semester ?>" >

          <br>
          <small class="text-warning"><i class="fa fa-warning"></i> jika tidak ada mata pelajar berarti sudah terpilih semua</small>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i></button>
        <button class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>


<?php if ($this->session->flashdata('message')): ?>
  <script type="text/javascript">
  notifikasi('success', '<?= $this->session->flashdata('message'); ?>');
  </script>
<?php endif ?>

<script>
  $(document).ready(function(){
    $('#changeSemester').change(function(){
      var semester = $('#changeSemester').val();
      var url = "<?= base_url('admin/update_nilai/' . $this->uri->segment(3) . '/') ?>" + semester;
      window.location.href= url;
    });
  });
</script>
