 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/siswa'); ?>"><i class="fa fa-child"></i> Siswa</a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <a href="<?= base_url('guru/wali_kelas/').md5($this->session->userdata('id_guru')) ?>" class="btn btn-default pull-left"><i class="fa fa-reply"></i> Kembali</a>
               <a href="<?= base_url('guru/print_siswa/').md5($siswa->id_siswa) ?>" target="_blank" class="btn btn-warning pull-right"><i class="fa fa-print"></i> Print</a>
            </div>
            <div class="box-body">
            <div class="panel panel-primary">
            <div class="panel-heading">Biodata Siswa</div>
            <div class="panel-body">
            <!-- /.box-header -->
              <div class="row">
                <div class="col-lg-6">
                  <h3><i class="fa fa-arrow-right"></i> Data Siswa : </h3>
                    <div class="box-body table-responsive">
                      <table class="table table-striped table-hover" id="table">
                          <tr>
                            <th width="30%">NIS </th>
                            <th width="30%"> : </th>
                            <td width="30%"><?= $siswa->nis; ?></td>
                          </tr>
                          <tr>
                            <th>Nama Siswa </th>
                            <th> : </th>
                            <td><?= $siswa->nama_siswa; ?></td>
                          </tr>
                           <tr>
                            <th>Kelas </th>
                            <th> : </th>
                            <td><?= $siswa->nama_kelas; ?></td>
                          </tr>
                           <tr>
                            <th>Program Keahlian </th>
                            <th> : </th>
                            <td><?= $siswa->nama_jurusan; ?></td>
                          </tr> 
                          <tr>
                            <th>Jenis Kelamin </th>
                            <th> : </th>
                            <td><?= $siswa->jenis_kelamin; ?></td>
                          </tr>
                          <tr>
                            <th>Tempat, Tanggal Lahir </th>
                            <th> : </th>
                            <td><?= $siswa->tempat_lahir .', '. $this->mylibrary->date_indo($siswa->tanggal_lahir); ?></td>
                          </tr>
                          <tr>
                            <th>Warga Negara </th>
                            <th> : </th>
                            <td><?= $siswa->warga_negara; ?></td>
                          </tr>

                          <tr>
                            <th>Agama </th>
                            <th> : </th>
                            <td><?= $siswa->agama; ?></td>
                          </tr>
                          <tr>
                            <th>Alamat Siswa </th>
                            <th> : </th>
                            <td><?= $siswa->alamat_siswa; ?></td>
                          </tr>
                        </table>
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <h3><i class="fa fa-arrow-right"></i> Data Orang Tua/Wali : </h3>
                    <div class="box-body table-responsive">
                      <table class="table table-striped table-hover" id="table">
                        <tr>
                          <th width="30%">Nama Orang Tua </th>
                          <th width="30%"> : </th>
                          <td width="30%"><?= $siswa->nama_orang_tua; ?></td>
                        </tr>
                        <tr>
                          <th>Pekerjaan Orang Tua </th>
                          <th> : </th>
                          <td><?= $siswa->pekerjaan; ?></td>
                        </tr>
                        <tr>
                          <th>Alamat Orang Tua </th>
                          <th> : </th>
                          <td><?= $siswa->alamat_orang_tua; ?></td>
                        </tr>
                        <tr>
                          <th>Nama Wali </th>
                          <th> : </th>
                          <td><?= $siswa->nama_wali; ?></td>
                        </tr>
                        <tr>
                          <th>Pekerjaan Wali </th>
                          <th> : </th>
                          <td><?= $siswa->pekerjaan_wali; ?></td>
                        </tr>
                        <tr>
                          <th>Alamat Wali </th>
                          <th> : </th>
                          <td><?= $siswa->alamat_wali; ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <h3><i class="fa fa-arrow-right"></i> Diterima Menjadi Siswa : </h3>
                     <div class="box-body table-responsive">
                      <table class="table table-striped table-hover" id="table">
                        <tr>
                          <th width="30%">Tanggal Masuk </th>
                          <th width="30%"> : </th>
                          <td width="30%"><?= $this->mylibrary->date_indo($siswa->tanggal_masuk); ?></td>
                        </tr>
                        <tr>
                          <th>Asal Sekolah </th>
                          <th> : </th>
                          <td><?= $siswa->asal_sekolah; ?></td>
                        </tr>

                        <tr>
                          <th>Alamat Sekolah </th>
                          <th> : </th>
                          <td><?= $siswa->alamat_sekolah; ?></td>
                        </tr>
                        <tr>
                          <th>Nomor Ijazah </th>
                          <th> : </th>
                          <td><?= $siswa->nomor_sttb; ?></td>
                        </tr>
                        <tr>
                          <th>Tanggal Ijazah </th>
                          <th> : </th>
                          <td><?= $this->mylibrary->date_indo($siswa->tanggal_sttb); ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <h3><i class="fa fa-arrow-right"></i> Meninggalkan Sekolah : </h3>
                     <div class="box-body table-responsive">
                      <table class="table table-striped table-hover" id="table">
                       <tr>
                        <th width="30%">Tanggal Meninggalkan Sekolah </th>
                        <th width="30%"> : </th>
                        <td width="30%"><?= $this->mylibrary->date_indo($siswa->tanggal_meninggalkan_sekolah); ?></td>
                      </tr>
                      <tr>
                        <th>Alasan Meninggalkan Sekolah </th>
                        <th> : </th>
                        <td><?= $siswa->alasan_meninggalkan_sekolah; ?></td>
                      </tr>
                      <tr>
                        <th>Tamat Nomor Ijazah </th>
                        <th> : </th>
                        <td><?= $siswa->tamat_nomor_sttb; ?></td>
                      </tr>
                      <tr>
                        <th>Tamat Tanggal Ijazah </th>
                        <th> : </th>
                        <td><?= $this->mylibrary->date_indo($siswa->tamat_tanggal_sttb); ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div><br>
              <div class="col-lg-6">
              <div class="box-body table-responsive">
                <table class="table table-striped table-hover" id="table">
                  <tr>
                    <th width="30%">Keterangan Lain </th>
                    <th width="30%"> : </th>
                    <td width="30%"><?= $siswa->keterangan_lain; ?></td>
                  </tr>
                  <tr>
                    <th>Foto Siswa </th>
                    <th> : </th>
                    <td><?php if ($siswa->foto_siswa): ?>
                      <img src="<?= base_url('assets/siswa/').$siswa->foto_siswa; ?>" class="img img-thumbnail img-responsive" style="width: 100px; height: 100px;">
                    <?php else: ?>
                      <img src="<?= base_url('assets/siswa/default.png'); ?>" class="img img-thumbnail img-responsive" style="width: 100px; height: 100px;">
                    <?php endif; ?>
                  </tr>
              </table>
             </div>
           </div>
            </div> 
             <h1 class="text-center text-success">Data Nilai</h1>
              <hr>


              <!-- Nilai -->
              <div class="table-responsive">
                <table class="table-striped table-hover" border="1px solid grey;"cellspacing="0" style="border-collapse: collapse;">
                  <thead>
                    <tr>
                      <th rowspan="3" width="2%" class="text-center">&nbsp;Mata Pelajaran</th>
                      <th colspan="4">&nbsp; Tahun : <?= $siswa->th_1 ?></th>
                      <th colspan="4">&nbsp; Tahun : <?= $siswa->th_2 ?></th>
                      <th colspan="4">&nbsp; Tahun : <?= $siswa->th_3 ?></th>
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
                        <?php $i=1; $total_nilai_ap_1=0; $total_nilai_ap_2=0; $total_nilai_ap_3=0; $total_nilai_ap_4=0; $total_nilai_ap_5=0; $total_nilai_ap_6=0; $total_nilai_ak_1=0; $total_nilai_ak_2=0; $total_nilai_ak_3=0; $total_nilai_ak_4=0; $total_nilai_ak_5=0; $total_nilai_ak_6=0; $total_nilai_ijazah=0; $total_nilai_skhun=0; foreach ($dataNilai->result() as $nilai): 
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
                         <td colspan="2" class="text-center"><?= $nilai->s_1 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->s_2 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->s_3 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->s_4 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->s_5 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->s_6 ?></td>
                         <td colspan="2"></td>
                        </tr>

                        <tr>
                         <th class="text-center">&nbsp;I</th>
                         <td colspan="2" class="text-center"><?= $nilai->i_1 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->i_2 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->i_3 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->i_4 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->i_5 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->i_6 ?></td>
                         <td colspan="2"></td>
                        </tr>

                        


                       <tr>
                         <th class="text-center">&nbsp;A</th>
                         <td colspan="2" class="text-center"><?= $nilai->a_1 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->a_2 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->a_3 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->a_4 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->a_5 ?></td>
                         <td colspan="2" class="text-center"><?= $nilai->a_6 ?></td>
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
                  </div>
            
          </div>
          </div>
         </div>
       </div>
    </div>
</section>
