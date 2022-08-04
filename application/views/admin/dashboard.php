 <!-- Main content -->
<section class="content">

  <!-- kepala sekolah -->
  <div class="row">
      <div class="col-md-9">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/biodata/').$kepsek->foto ?>" style="width: 150px; height: 150px;" >

            <h3 class="profile-username text-center">Kepala Sekolah</h3>
            <p class="text-muted text-center"><?= $kepsek->fullname ?></p>
            <br>
            <?= form_open_multipart('') ?>
            <ul class="list-group list-group-unbordered">
              <div class="form-group <?= form_error('nip') ? 'has-error' : '' ?>">
                <input type="number" class="form-control" name="nip" value="<?= set_value('nip') ? set_value('nip') : $kepsek->nip ?>" title="Nomor induk pegawai">
                <?= form_error('nip', '<small><i class="text-danger">', '</i></small>') ?>
              </div>
              <div class="form-group <?= form_error('fullname') ? 'has-error' : '' ?>">
                 <input type="text" class="form-control" name="fullname" value="<?= set_value('fullname') ? set_value('fullname') : $kepsek->fullname ?>" title="Nama Lengkap">
                <?= form_error('fullname', '<small><i class="text-danger>', '</i></small>') ?>
              </div>
              <div class="form-group <?= form_error('jenis_kelamin') ? 'has-error' : '' ?>" title="Jenis kelamin">
                 <input type="radio" name="jenis_kelamin" class="flat-red" id="laki-laki" value="laki-laki" <?= set_radio('jenis_kelamin', 'laki-laki') ? 'checked' : $kepsek->jenis_kelamin == 'laki-laki' ? 'checked' : '' ?> > <label for="laki-laki">Laki-Laki</label>&nbsp;&nbsp;
                  <input type="radio" name="jenis_kelamin" class="flat-red" id="perempuan" value="perempuan" <?= set_radio('jenis_kelamin', 'perempuan') ? 'checked' : $kepsek->jenis_kelamin == 'perempuan' ? 'checked' : '' ?> > <label for="perempuan">Perempuan</label>
                </label>
                <?= form_error('jenis_kelamin', '<small><i class="text-danger">', '</i></small>') ?>
              </div>
              <div class="form-group <?= form_error('tempat_lahir') ? 'has-error' : '' ?>">
                <input type="text" class="form-control" name="tempat_lahir" value="<?= set_value('tempat_lahir') ? set_value('tempat_lahir') : $kepsek->tempat_lahir ?>" title="Tempat lahir">
                <?= form_error('tempat_lahir', '<small><i class="text-danger', '</i></small>') ?>
              </div>
              <div class="form-group <?= form_error('tanggal_lahir') ? 'has-error' : '' ?>">
                  <input type="date" class="form-control datepicker" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ? set_value('tanggal_lahir') : $kepsek->tanggal_lahir ?>" title="Tanggal Lahir">
                <?= form_error('tanggal_lahir', '<small><i class="text-danger', '</i></small>') ?>
              </div>
              <div class="form-group <?= form_error('no_telepon') ? 'has-error' : '' ?>">
                  <input type="number" class="form-control" name="no_telepon" value="<?= set_value('no_telepon') ? set_value('no_telepon') : $kepsek->no_telepon ?>" title="Nomor Telepon" >
                <?= form_error('no_telepon', '<small><i class="text-danger', '</i></small>') ?>
              </div>
              <div class="form-group <?= form_error('email') ? 'has-error' : '' ?>">
                  <input type="text" class="form-control" name="email" value="<?= set_value('email') ? set_value('email') : $kepsek->email ?>" title="Email">
                <?= form_error('email', '<small><i class="text-danger', '</i></small>') ?>
              </div>
                <div class="form-group <?= form_error('alamat') ? 'has-error' : '' ?>">
                  <textarea name="alamat" class="form-control" title="Alamat Kepala Sekolah"><?= set_value('alamat') ? set_value('email') : $kepsek->alamat ?></textarea>
                <?= form_error('alamat', '<small><i class="text-danger', '</i></small>') ?>
              </div>
              <div class="form-group">
                  <input type="file" class="form-control" name="foto" title="Foto profil">
                  <i class="text-danger"> *kosongkan jika tidak akan merubah foto</i>
              </div>
              <div class="form-group">
                  <textarea name="kata_sambutan" class="form-control textarea" title="Kata sambutan kepala sekolah"><?= set_value('kata_sambutan') ? set_value('kata_sambutan') : $kepsek->kata_sambutan ?></textarea>
              </div>
            </ul>

            <button type="submit" name="save" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Save</button>
            <?= form_close(); ?>
          </div>
          <!-- /.box-body -->
        </div>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?= base_url('admin/guru') ?>"><div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">guru</span>
              <span class="info-box-number"><?= $guru ?></span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description"></span>
            </div>
        </div></a>
      </div>

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="<?= base_url('admin/siswa') ?>"><div class="info-box bg-blue">
      <span class="info-box-icon"><i class="fa fa-child"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Siswa</span>
          <span class="info-box-number"><?= $siswa; ?></span>
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description"></span>
        </div>
    </div></a>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="<?= base_url('admin/berita')?>">
    <div class="info-box bg-navy">
      <span class="info-box-icon"><i class="fa fa-list-alt"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Berita</span>
          <span class="info-box-number"><?= $berita ?></span>
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description"></span>
        </div>
    </div></a>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="<?= base_url('admin/kelas') ?>"><div class="info-box bg-aqua">
      <span class="info-box-icon"><i class="glyphicon glyphicon-stats"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">kelas</span>
          <span class="info-box-number"><?= $kelas ?></span>
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description"></span>
        </div>
    </div></a>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="<?= base_url('admin/pelajaran') ?>"><div class="info-box bg-fuchsia-active">
      <span class="info-box-icon"><i class="glyphicon glyphicon-list-alt"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Pelajaran</span>
          <span class="info-box-number"><?= $pelajaran; ?></span>
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description"></span>
        </div>
    </div></a>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="<?= base_url('admin/extrakurikuler')?>">
    <div class="info-box bg-maroon">
      <span class="info-box-icon"><i class="fa fa-black-tie"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Ekstrakulikuler</span>
          <span class="info-box-number"><?= $extra ?></span>
          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>
          <span class="progress-description"></span>
        </div>
    </div></a>
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