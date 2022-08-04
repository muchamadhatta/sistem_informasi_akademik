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
              <div class="panel panel-primary">
                  <div class="panel-heading">Biodata Siswa</div>
                   <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="table">
                        <tr>
                          <th>Nis</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($nilai->nis) ?></td>
                        </tr>
                         <tr>
                          <th>Nama Siswa</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($nilai->nama_siswa) ?></td>
                        </tr>
                         <tr>
                          <th>Kelas</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($nilai->nama_kelas) ?></td>
                        </tr>
                        <tr>
                          <th>Program Keahlian</th>
                          <td class="text-center">:</td>
                          <td><?= ucfirst($nilai->nama_jurusan) ?></td>
                        </tr>
                        <tr>
                          <th>Jenis Kelamin</th>
                          <td class="text-center">:</td>
                          <td><?= $nilai->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                          <th>Tempat, Tanggal Lahir</th>
                          <td class="text-center">:</td>
                          <td><?= $nilai->tempat_lahir . ', ' . $this->mylibrary->date_indo($nilai->tanggal_lahir); ?></td>
                        </tr>
                    </table>
                  </div>
                </div>
            </div>
              <div class="panel panel-primary">
                <div class="panel-heading">Absensi Siswa</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table  class="table-striped table-hover" border="1px solid black;"cellspacing="0" style="border-collapse: collapse;">
                        <thead>
                           <tr>
                           <td colspan="7" class="text-left"><b>&nbsp;Keterangan &nbsp;&nbsp;: </b> <b>S</b> = Sakit , <b>I</b> = Izin , <b>A</b> = Alpa </td>
                         </tr>
                       </thead>
                       <?= form_open(); ?>
                       <tbody>
                         <tr>
                           <th rowspan="2" width="20%" class="text-center"><i class="fa fa-pencil"></i></th>
                           <th colspan="2" class="text-center" style="padding: 5px;">X</th>
                           <th colspan="2" class="text-center" style="padding: 5px;">XI</th>
                           <th colspan="2" class="text-center" style="padding: 5px;">XII</th>
                         </tr>
                         <tr>
                          <th class="text-center">Ganjil</th>
                          <th class="text-center">Genap</th>
                          <th class="text-center">Ganjil</th>
                          <th class="text-center">Genap</th>
                          <th class="text-center">Ganjil</th>
                          <th class="text-center">Genap</th>
                         </tr>
                        
                          <tr>
                           <th class="text-center" style="padding: 5px;">&nbsp;S</th>
                           <td class="text-center"><input type="number" name="s_1" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->s_1 ?>" required></td>
                           <td class="text-center"><input type="number" name="s_2" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->s_2 ?>" required></td>
                           <td class="text-center"><input type="number" name="s_3" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->s_3 ?>" required></td>
                           <td class="text-center"><input type="number" name="s_4" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->s_4 ?>" required></td>
                           <td class="text-center"><input type="number" name="s_5" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->s_5 ?>" required></td>
                           <td class="text-center"><input type="number" name="s_6" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->s_6 ?>" required></td>
                         
                          </tr>

                          <tr>
                           <th class="text-center" style="padding: 5px;">&nbsp;I</th>
                           <td class="text-center"><input type="number" name="i_1" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->i_1 ?>" required></td>
                           <td class="text-center"><input type="number" name="i_2" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->i_2 ?>" required></td>
                           <td class="text-center"><input type="number" name="i_3" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->i_3 ?>" required></td>
                           <td class="text-center"><input type="number" name="i_4" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->i_4 ?>" required></td>
                           <td class="text-center"><input type="number" name="i_5" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->i_5 ?>" required></td>
                           <td class="text-center"><input type="number" name="i_6" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->i_6 ?>" required></td>
                          
                          </tr>

                          


                         <tr>
                           <th class="text-center" style="padding: 5px;">&nbsp;A</th>
                           <td class="text-center"><input type="number" name="a_1" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->a_1 ?>" required></td>
                           <td class="text-center"><input type="number" name="a_2" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->a_2 ?>" required></td>
                           <td class="text-center"><input type="number" name="a_3" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->a_3 ?>" required></td>
                           <td class="text-center"><input type="number" name="a_4" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->a_4 ?>" required></td>
                           <td class="text-center"><input type="number" name="a_5" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->a_5 ?>" required></td>
                           <td class="text-center"><input type="number" name="a_6" style="width: 100%;padding: 5px; background: rgba(0,0,0,0.0); border: 0px solid white;" value="<?= $nilai->a_6 ?>" required></td>
                          
                          </tr>

                          <tr>
                            <td colspan="15" style="padding: 10px;">
                              <label for="catatan">Catatan :</label><br>
                              <textarea name="catatan" cols="61" rows="5" class="fomr-control"><?= $nilai->catatan ?></textarea>
                              <div class="pull-right">
                               <button class="btn btn-success" name="simpan" type="submit"><i class="fa fa-save"></i> Simpan</button>&nbsp;
                               <a href="<?= base_url('guru/wali_kelas/').md5($this->session->userdata('id_guru')) ?>" class="btn btn-default"><i class="fa fa-reply"></i> Cancel</a>
                             </div>
                            </td>
                          </tr>
                        </tbody>
                         <?= form_close() ?>
                    </table>
                  </div>
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