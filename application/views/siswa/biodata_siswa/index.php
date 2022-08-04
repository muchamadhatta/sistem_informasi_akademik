<section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <!-- <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/siswa'); ?>"><i class="fa fa-child"></i> Siswa</a></li>
        <li class="active"><?= $judul; ?></li>
      </ol> -->
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <div class="box-body">
            <div class="panel panel-danger">
            <div class="panel-heading">Data Siswa</div>
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
                            <th>Jurusan </th>
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
                   
                  <tr>
                    <th>Foto Siswa </th>
                    <th> : </th>
                    <td><img src="<?= base_url('assets/siswa/').$siswa->foto_siswa; ?>" class="img img-thumbnail img-responsive" style="width: 100px; height: 100px;"></td>
                  </tr>
              </table>
             </div>
           </div>
            </div> 
          </div>
          </div>
         </div>
       </div>
    </div>
</section>
