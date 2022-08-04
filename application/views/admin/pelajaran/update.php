<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-gear"></i> Setting</li>
        <li><a href="<?= base_url('admin/pelajaran') ?>"> <?= $title; ?></a></li>
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
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="row">
              <div class="col-lg-6">
                
            <div class="form-group <?= form_error('kode_pelajaran') ? 'has-error' : '' ?>">
              <label for="kode_pelajaran"> Kode Pelajaran</label>
              <input type="text" name="kode_pelajaran" class="form-control" id="kode_pelajaran" placeholder="Enter Kode Pelajaran"  value="<?= set_value('kode_pelajaran') ? set_value('kode_pelajaran') : $pelajaran->kode_pelajaran ?>">
              <?= form_error('kode_pelajaran', '<small><i class="text-danger">', '</i></small>') ?>
            </div>
            <div class="form-group <?= form_error('nama_pelajaran') ? 'has-error' : '' ?>">
              <label for="nama_pelajaran"> Nama Pelajaran</label>
              <input type="text" name="nama_pelajaran" class="form-control" id="nama_pelajaran" placeholder="Enter Nama Pelajaran"  value="<?= set_value('nama_pelajaran') ? set_value('nama_pelajaran') : $pelajaran->nama_pelajaran ?>">
              <?= form_error('nama_pelajaran', '<small><i class="text-danger">', '</i></small>') ?>
            </div>
            <div class="form-group <?= form_error('jam') ? 'has-error' : '' ?>">
              <label for="jam"> Jam</label>
              <input type="text" name="jam" class="form-control" id="jam" placeholder="Enter Jam"  value="<?= set_value('jam') ? set_value('jam') : $pelajaran->jam ?>">
              <?= form_error('jam', '<small><i class="text-danger">', '</i></small>') ?>
            </div>
            <div class="form-group <?= form_error('tahun_ajaran') ? 'has-error' : '' ?>">
              <label for="tahun_ajaran"> Tahun Ajaran</label>
              <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran" placeholder="Enter Tahun Ajaran"  value="<?= set_value('tahun_ajaran') ? set_value('tahun_ajaran') : $pelajaran->tahun_ajaran ?>">
              <?= form_error('tahun_ajaran', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>
            <!-- /.box-body -->

          <div class="box-footer text-right">
            <a href="<?= base_url('admin/pelajaran') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>