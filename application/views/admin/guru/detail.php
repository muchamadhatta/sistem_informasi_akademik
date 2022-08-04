 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/guru'); ?>"><i class="fa fa-users"></i> Guru</a></li>
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
            <div class="box-body">
            <div class="panel panel-danger">
            <div class="panel-heading">Biodata Guru</div>
            <div class="panel-body">
            <!-- /.box-header -->
              <div class="row">
                <div class="col-lg-6">
                  <h3><i class="fa fa-arrow-right"></i> Data Guru : </h3>
                    <div class="box-body table-responsive">
                      <table class="table table-striped table-hover" id="table">
                          <tr>
                            <th width="30%">NIP </th>
                            <th width="30%"> : </th>
                            <td width="30%"><?= $guru->nip ?></td>
                          </tr>
                          <tr>
                            <th>Nama guru </th>
                            <th> : </th>
                            <td><?= $guru->nama_guru; ?></td>
                          </tr>
                           <tr>
                            <th>No Telepon </th>
                            <th> : </th>
                            <td><?= $guru->no_telepon; ?></td>
                          </tr>
                           <tr>
                            <th>Alamat </th>
                            <th> : </th>
                            <td><?= $guru->alamat; ?></td>
                          </tr>
                          <tr>
                            <th>Tempat, Tanggal Lahir </th>
                            <th> : </th>
                            <td><?= $guru->tempat_lahir .', '. $this->mylibrary->date_indo($guru->tanggal_lahir); ?></td>
                          </tr>
                          <tr>
                            <th>Agama </th>
                            <th> : </th>
                            <td><?= $guru->agama; ?></td>
                          </tr>
                          <tr>
                            <th>Jenis Kelamin </th>
                            <th> : </th>
                            <td><?= $guru->jenis_kelamin; ?></td>
                          </tr>
                          <tr>
                            <th colspan="3" class="text-center"><br><br><big>-- Foto --</big> <br><br>
                            <img src="<?= base_url('assets/guru/'). $guru->foto ?>" class="img img-responsive img-thumbnail" style="width: 218px; height: 220px;"></th>
                          </tr>
                        </table>
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <h3><i class="fa fa-arrow-right"></i> Mengajar : </h3>
                    <div class="box-body table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="table">
                        <thead class="bg-danger">
                          <tr>
                            <th>Kelas</th>
                            <th>Pelajaran</th>
                          </tr>
                        </thead>
                       <?php foreach ($mengajar as $key): ?>
                        <tr>
                          <td><?= $key->nama_kelas; ?></td>
                          <td><?= $key->nama_pelajaran; ?></td>
                        </tr>
                       <?php endforeach ?>
                      </table>
                    </div>
                  </div>
                </div>
           
              <a href="<?= base_url('admin/guru') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>
           
            </div> 
          </div>
          </div>
         </div>
       </div>
    </div>
</section>
