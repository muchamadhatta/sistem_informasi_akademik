 <section class="content-header">
      <h1>&nbsp;</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-stats"></i> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header text-center">
             <big>------------------- <?= $judul ?> -------------------</big>
            </div>
            <!-- /.box-header -->
                <div class="box-body">


                  <?php $i=1;foreach ($mengajar as $key): ?>
                  <div class="box-group" id="accordion_<?= $i; ?>">
                    <div class="panel box box-primary" style="padding-bottom: 30px;">
                      <div class="box-header"  style="background: <?= $i % 2 == 0 ? '#eee' : ''; ?>;">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion_<?= $i; ?>" href="#<?= $key->id_mengajar ?>">
                            <small style="color: black;"><i class="fa fa-arrow-right"></i> <?= $key->nama_kelas ?> <br> &nbsp;&nbsp;&nbsp;&nbsp;( <small><?= $key->nama_pelajaran ?></small> ) </small>
                          </a>
                        </h4>
                      </div>
                      <div id="<?= $key->id_mengajar ?>" class="panel-collapse collapse">
                        <div class="box-body table-responsive">
                          <?= form_open(base_url('guru/nilai/'.md5($key->id_kelas).'/'.$key->id_pelajaran)); ?>
                          <table class="table-striped table-hover" border="1px solid black;"cellspacing="0" style="border-collapse: collapse;" width="100%">
                            <thead>
                            <tr>
                             <th rowspan="2" width="2%" class="text-center">Nis</th>
                                <th rowspan="2" width="2%" class="text-center">Nama</th>
                                <th rowspan="2" width="2%" class="text-center">Mapel</th>
                                <th colspan="8" class="text-center">Semester 1 :: Tahun Ajaran 2019/2020</th>
                                </tr>
                            <tr>
                              <th class="text-center" width="1%">KKM</th>
                              <th class="text-center" width="1%">Tugas 1</th>
                              <th class="text-center" width="1%">Tugas 2</th>
                              <th class="text-center" width="1%">Tugas 3</th>
                              <th class="text-center" width="1%">UTS</th>
                              <th class="text-center" width="1%">UAS</th>
                              <th class="text-center" width="1%">Total Nilai</th>
                              <th class="text-center" width="1%">Nilai  Rata2</th>

                            </tr>
                          </thead>

                          <tbody>
                           <?php

                               $siswa = $this->M_siswa->get(['siswa.id_kelas' => $key->id_kelas])->result();
                               $i = 1;$rata=0;
                                ?>
                              <?php foreach ($siswa as $row): ?>
                                  <tr class="text-center">
                                    <td rowspan="2" width="2%">&nbsp;<?= $row->nis ?></td>
                                    <td rowspan="2" width="2%">&nbsp;<?= $row->nama_siswa ?></td>
                                    <td rowspan="2" width="2%">&nbsp;<?= $key->nama_pelajaran ?></td>
                               </tr>
                                <?php foreach ($this->M_nilai->get(['nilai.id_pelajaran' => $key->id_pelajaran, 'nilai.id_siswa' => $row->id_siswa, 'semester' => 1])->result()  as $value): ?>
                                <?php $total = $value->tugas_1 + $value->tugas_2 + $value->tugas_3 + $value->uts + $value->uas ?>
                                <input type="hidden" name="semester" value="1">
                                <input type="hidden" name="id_kelas" value="<?= $key->id_kelas ?>">
                                <input type="hidden" name="id_nilai_<?= $i ?>" value="<?= $value->id_nilai ?>" >
                                 <tr class="text-center">
                                    <td>
                                    <input type="number" name="kkm<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->kkm ?>" required>
                                  </td>
                                   <td>
                                      <input type="number" name="tugas_1_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->tugas_1 ?>" required>
                                    </td>
                                    <td>
                                      <input type="number" name="tugas_2_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->tugas_2 ?>" required>
                                    </td>
                                    <td>
                                      <input type="number" name="tugas_3_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->tugas_3 ?>" required>
                                    </td>
                                    <td>
                                      <input type="number" name="uts_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->uts ?>" required>
                                    </td>
                                    <td>
                                      <input type="number" name="uas_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->uas ?>" required>
                                    </td>
                                    <td><b>&nbsp;<?= $total ?>
                                    <td><b>&nbsp;<?= $value->nilai_rata2 ?>
                                    </b></td>




                                <?php $i++; $rata += $total;  endforeach ?>
                              <?php $i++;  endforeach ?>

                          </tbody>
                          <!-- <tfoot>
                          <tr class="text-center">
                           <td colspan="10"><b>&nbsp;NILAI RATA RATA&nbsp;: </b></td>
                           <td ><b>&nbsp;<?= $this->mylibrary->cekratarata($rata) ?></b></td>
                         </tr>
                         </tfoot> -->

                          </table>
                          <br>
                          <?php if ($this->db->get_where('siswa', ['id_kelas' => $key->id_kelas])->num_rows() > 0): ?>
                          <small class="text-danger">
                          <button class="btn btn-success pull-right" type="submit"><i class="fa fa-save"></i> Save </button>
                        </small>
                          <?php endif; ?>
                          <?= form_close() ?>



                                                     <br><br><hr color="#000">

                                                      <?= form_open(base_url('guru/nilai/'.md5($key->id_kelas).'/'.$key->id_pelajaran)); ?>
                                                      <table class="table-striped table-hover" border="1px solid black;"cellspacing="0" style="border-collapse: collapse;" width="100%">
                                                        <thead>
                                                        <tr>
                                                         <th rowspan="2" width="2%" class="text-center">Nis</th>
                                                            <th rowspan="2" width="2%" class="text-center">Nama</th>
                                                            <th rowspan="2" width="2%" class="text-center">Mapel</th>
                                                            <th colspan="8" class="text-center">Semester 2 :: Tahun Ajaran 2019/2020</th>
                                                            </tr>
                                                        <tr>
                                                          <th class="text-center" width="1%">KKM</th>
                                                          <th class="text-center" width="1%">Tugas 1</th>
                                                          <th class="text-center" width="1%">Tugas 2</th>
                                                          <th class="text-center" width="1%">Tugas 3</th>
                                                          <th class="text-center" width="1%">UTS</th>
                                                          <th class="text-center" width="1%">UAS</th>
                                                          <th class="text-center" width="1%">Total Nilai</th>
                                                          <th class="text-center" width="1%">Nilai  Rata2</th>

                                                        </tr>
                                                      </thead>

                                                      <tbody>
                                                   <?php

                                                         $siswa = $this->M_siswa->get(['siswa.id_kelas' => $key->id_kelas])->result();
                                                         $i = 1; $rata=0;
                                                          ?>
                                                        <?php foreach ($siswa as $row): ?>
                                                            <tr class="text-center">
                                                              <td rowspan="2" width="2%">&nbsp;<?= $row->nis ?></td>
                                                              <td rowspan="2" width="2%">&nbsp;<?= $row->nama_siswa ?></td>
                                                              <td rowspan="2" width="2%">&nbsp;<?= $key->nama_pelajaran ?></td>
                                                         </tr>
                                                          <?php foreach ($this->M_nilai->get(['nilai.id_pelajaran' => $key->id_pelajaran, 'nilai.id_siswa' => $row->id_siswa, 'semester' => 2])->result()  as $value): ?>
                                                          <?php $total = $value->tugas_1 + $value->tugas_2 + $value->tugas_3 + $value->uts + $value->uas ?>
                                                          <input type="hidden" name="semester" value="2">
                                                          <input type="hidden" name="id_kelas" value="<?= $key->id_kelas ?>">
                                                          <input type="hidden" name="id_nilai_<?= $i ?>" value="<?= $value->id_nilai ?>" >
                                                           <tr class="text-center">
                                                             <td>
                                                             <input type="number" name="kkm<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->kkm ?>" required>
                                                           </td>
                                                             <td>
                                                                <input type="number" name="tugas_1_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->tugas_1 ?>" required>
                                                              </td>
                                                              <td>
                                                                <input type="number" name="tugas_2_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->tugas_2 ?>" required>
                                                              </td>
                                                              <td>
                                                                <input type="number" name="tugas_3_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->tugas_3 ?>" required>
                                                              </td>
                                                              <td>
                                                                <input type="number" name="uts_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->uts ?>" required>
                                                              </td>
                                                              <td>
                                                                <input type="number" name="uas_<?= $i ?>" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $value->uas ?>" required>
                                                              </td>
                                                              <td><b>&nbsp;<?= $total ?></b></td>
                                                              <td><b>&nbsp;<?= $value->nilai_rata2 ?></b></td>
                                                           </tr>

                                                          <?php $i++; $rata += $total; endforeach ?>
                                                        <?php  endforeach ?>
                                                       </tbody>
                                                       <!-- <tfoot>
                                                       <tr class="text-center">
                                                        <td colspan="10"><b>&nbsp;NILAI RATA RATA&nbsp;: </b></td>
                                                        <td ><b>&nbsp;<?= $this->mylibrary->cekratarata($rata) ?></b></td>
                                                      </tr>
                                                    </tfoot> -->

                                                    </table>

                                                    <br>
                                                    <?php if ($this->db->get_where('siswa', ['id_kelas' => $key->id_kelas])->num_rows() > 0): ?>
                                                    <small class="text-danger">Jika melakukan perubahan di semester 2, klik tombol simpan di samping <i class="fa fa-arrow-right"></i></small>
                                                    <button class="btn btn-success pull-right" type="submit"><i class="fa fa-save"></i> Save </button>
                                                    <?php endif; ?>
                                                    <?= form_close() ?>


                        </div>
                      </div>
                    </div>
                    <?php $i++; endforeach ?>

                  </div>







                </div>
             </div>
          </div>
         </div>
    </div>
</section>
<?php if ($this->session->flashdata('message')): ?>
  <script type="text/javascript">
  notifikasi('success', '<?= $this->session->flashdata('message'); ?>');
  </script>
<?php endif ?>
<?php if ($this->session->flashdata('failed')): ?>
  <script type="text/javascript">
  notifikasi('error', '<?= $this->session->flashdata('failed'); ?>');
  </script>
<?php endif ?>
