<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin/guru'); ?>"><i class="fa fa-users"></i> Guru</a></li>
    <li class="active"><?= $judul; ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
       <?= form_open_multipart('') ?>
          <div class="box-body">
            <div class="row">
              <div class="col-lg-6">

              <h4><i class="fa fa-arrow-right"></i> Form Data Guru</h4>
              <hr>

            <div class="form-group <?= form_error('nip') ? 'has-error' : '' ?>">
              <label for="nip"> Nip</label>
              <input type="number" name="nip" class="form-control" id="nip" placeholder="Enter Nip"  value="<?= set_value('nip') ? set_value('nip') : $guru->nip; ?>" >
              <?= form_error('nip', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>
                
            <div class="form-group <?= form_error('nama_guru') ? 'has-error' : '' ?>">
              <label for="nama_guru"> Nama Guru</label>
              <input type="text" name="nama_guru" class="form-control" id="nama_guru" placeholder="Enter Nama Guru"  value="<?= set_value('nama_guru') ? set_value('nama_guru') : $guru->nama_guru ?>" >
              <?= form_error('nama_guru', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

               <div class="form-group <?= form_error('no_telepon') ? 'has-error' : '' ?>">
                <label for="no_telepon"> No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Enter Nama Guru"  value="<?= set_value('no_telepon') ? set_value('no_telepon') : $guru->no_telepon ?>" >
                <?= form_error('no_telepon', '<small><i class="text-danger">', '</i></small>') ?>
              </div><br>
            <div class="form-group <?= form_error('alamat') ? 'has-error' : '' ?>">
              <label for="alamat"> Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat"><?= set_value('alamat') ? set_value('alamat') : $guru->alamat ?></textarea>
              <?= form_error('alamat', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>


            <div class="form-group <?= form_error('tempat_lahir') ? 'has-error' : '' ?>">
              <label for="tempat_lahir"> Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Enter Tempat Lahir"  value="<?= set_value('tempat_lahir') ? set_value('tempat_lahir') : $guru->tempat_lahir ?>" >
              <?= form_error('tempat_lahir', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>


             <div class="form-group <?= form_error('tanggal_lahir') ? 'has-error' : '' ?>">
              <label for="tanggal_lahir"> Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control datepicker" id="tanggal_lahir" placeholder="Enter Tanggal Lahir"  value="<?= set_value('tanggal_lahir') ? set_value('tanggal_lahir') : $guru->tanggal_lahir ?>" >
              <?= form_error('tanggal_lahir', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group <?= form_error('jenis_kelamin') ? 'has-error' : '' ?>">
            <label> Jenis Kelamin :&nbsp;&nbsp; 
                <input type="radio" name="jenis_kelamin" class="flat-red" id="laki-laki" value="laki-laki" <?= ($guru->jenis_kelamin == 'laki-laki') ? 'checked' : '' ?> > <label for="laki-laki">Laki-Laki</label>&nbsp;&nbsp;
                  <input type="radio" name="jenis_kelamin" class="flat-red" id="perempuan" value="perempuan" <?= ($guru->jenis_kelamin == 'perempuan') ? 'checked' : '' ?> > <label for="perempuan">Perempuan</label>
              </label><br>
              <?= form_error('jenis_kelamin', '<i class="text-danger">', '</i>') ?>
            </div>
            <br>



            <div class="form-group <?= form_error('agama') ? 'has-error' : '' ?>">
              <label for="agama">  Agama</label>
                <select name="agama" class="form-control">
                  <option value="">-- Pilih Agama --</option>
                   <option value="islam" <?= ($guru->agama == 'islam') ? 'selected' :'' ?> >Islam</option>
                  <option value="kristen" <?= ($guru->agama == 'kristen') ? 'selected' :'' ?> >Kristen</option>
                  <option value="katholik" <?= ($guru->agama == 'katholik') ? 'selected' :'' ?> >Katholik</option>
                  <option value="hindu" <?= ($guru->agama == 'hindu') ? 'selected' :'' ?> >Hindu</option>
                  <option value="budha" <?= ($guru->agama == 'budha') ? 'selected' :'' ?> >Budha</option>
                </select>
               <?= form_error('agama', '<i class="text-danger">', '</i>') ?>
            </div><br>


  
            <div class="form-group <?= form_error('foto') ? 'has-error' : '' ?>">
              <label for="foto"> Foto</label><br>
              <img src="<?= base_url('assets/guru/').$guru->foto ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 210px;">
              <input type="file" name="foto_guru" class="form-control" id="foto" >
              <small class="text-info">*abaikan saja foto jika tidak ingin merubahnya</small>
            </div><br>


            <p class="alert-warning">*abaikan saja password & confirm password jika tidak ingin merubahnya</p>
            <div class="form-group <?= form_error('password') ? 'has-error' : '' ?>">
              <label for="password"> Password </label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"  value="<?= set_value('password') ?>" >
              <?= form_error('password', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

             <div class="form-group <?= form_error('con_password') ? 'has-error' : '' ?>">
              <label for="con_password"> Confirm Password</label>
              <input type="password" name="con_password" class="form-control" id="con_password" placeholder="Enter Confirm Password"  value="<?= set_value('con_password') ?>" >
              <?= form_error('con_password', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>



            </div>

            <div class="col-lg-6" style="border-left: 1px solid grey;">
               <h4><i class="fa fa-arrow-right"></i> Form Guru Mengajar</h4>
              <hr>


                <?php foreach ($dataKelas as $kelas): ?>
                  <big class="text-center"><?= '<b>'.$kelas->nama_kelas .'</b>'?><br></big>
                    <?php foreach ($dataPelajaran as $pelajaran): ?>
                      <?php if ($this->db->get_where('mengajar', ['id_guru' => $guru->id_guru, 'id_kelas' => $kelas->id_kelas, 'id_pelajaran' => $pelajaran->id_pelajaran])->num_rows() > 0): ?>
                        <input type="checkbox" 
                      name="id_kelas_<?= $kelas->id_kelas ?>_id_pelajaran_<?= $pelajaran->id_pelajaran  ?>" id="id_kelas_<?= $kelas->id_kelas ?>_id_pelajaran_<?= $pelajaran->id_pelajaran  ?>" id="<?= $pelajaran->id_pelajaran ?>"
                      value="<?= $kelas->id_kelas.','.$pelajaran->id_pelajaran  ?>" checked> 
                        <label for="id_kelas_<?= $kelas->id_kelas ?>_id_pelajaran_<?= $pelajaran->id_pelajaran  ?>" id="<?= $pelajaran->id_pelajaran ?>"><?= $pelajaran->nama_pelajaran ?></label><br>
                      <?php else: ?>
                      <input type="checkbox" 
                      name="id_kelas_<?= $kelas->id_kelas ?>_id_pelajaran_<?= $pelajaran->id_pelajaran  ?>" id="id_kelas_<?= $kelas->id_kelas ?>_id_pelajaran_<?= $pelajaran->id_pelajaran  ?>" id="<?= $pelajaran->id_pelajaran ?>"
                      value="<?= $kelas->id_kelas.','.$pelajaran->id_pelajaran  ?>"> 
                        <label for="id_kelas_<?= $kelas->id_kelas ?>_id_pelajaran_<?= $pelajaran->id_pelajaran  ?>" id="<?= $pelajaran->id_pelajaran ?>"><?= $pelajaran->nama_pelajaran ?></label><br>
                      <?php endif ?>
                    <?php endforeach ?>
                    <br>
                    <hr style="border: 1px solid grey;">
                <?php endforeach ?>
            </div>

      

          </div>

            <!-- /.box-body -->

          <div class="box-footer text-left">
            <a href="<?= base_url('admin/guru') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>

        </div>
      <?= form_close() ?>
    </div>
  </div>
</section>