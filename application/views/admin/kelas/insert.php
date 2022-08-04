<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-gear"></i> Setting</li>
        <li><a href="<?= base_url('admin/kelas') ?>"> <?= $title; ?></a></li>
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
        <form role="form" action="" method="post">
          <div class="box-body">
            <div class="row">
              <div class="col-lg-6">
                
            <div class="form-group <?= form_error('nama_kelas') ? 'has-error' : '' ?>">
              <label for="nama_kelas"> Nama Kelas</label>
              <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Enter Nama Kelas"  value="<?= set_value('nama_kelas') ?>" >
              <?= form_error('nama_kelas', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>
            <div class="form-group <?= form_error('keterangan') ? 'has-error' : '' ?>">
              <label for="keterangan"> Keterangan</label>
              <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Enter Keterangan"  value="<?= set_value('keterangan') ?>" >
              <?= form_error('keterangan', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>
            <div class="form-group <?= form_error('wali_kelas') ? 'has-error' : '' ?>">
              <label for="wali_kelas"> Wali Kelas</label>
              <input type="text" name="wali_kelas" class="form-control" id="wali_kelas" placeholder="Enter Wali Kelas"  value="<?= set_value('wali_kelas') ?>" >
              <?= form_error('wali_kelas', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>
            <div class="form-group <?= form_error('ruang') ? 'has-error' : '' ?>">
              <label for="ruang"> Ruang</label>
              <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Enter Ruang Kelas"  value="<?= set_value('ruang') ?>" >
              <?= form_error('ruang', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>
            <!-- /.box-body -->

          <div class="box-footer text-right">
            <a href="<?= base_url('admin/kelas') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>