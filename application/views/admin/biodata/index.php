<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
   <li><i class="fa fa-gear"></i> Setting</li>
        <li><a href="<?= base_url('admin/biodata') ?>"> <?= $title; ?></a></li>
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
              <div class="col-lg-12">
                
            <div class="form-group <?= form_error('nama_sekolah') ? 'has-error' : '' ?>">
              <label for="nama_sekolah"><i class="fa fa-pencil"></i> Nama Sekolah</label>
              <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Enter Nama Sekolah"  value="<?= $biodata->nama_sekolah ?>">
              <?= form_error('nama_sekolah', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group <?= form_error('visi') ? 'has-error' : '' ?>">
              <label for="visi"><i class="fa fa-pencil"></i> Visi Sekolah</label>
              <textarea class="textarea" name="visi" placeholder="Visi Sekolah"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $biodata->visi ?></textarea>
              <?= form_error('visi', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group <?= form_error('misi') ? 'has-error' : '' ?>">
              <label for="misi"><i class="fa fa-pencil"></i> Misi Sekolah</label>
              <textarea class="textarea" name="misi" placeholder="Misi Sekolah"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $biodata->misi ?></textarea>
              <?= form_error('misi', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group">
              <label for="logo"><i class="fa fa-pencil"></i> Silder 1</label><br> <br>
              <img src="<?= base_url('assets/biodata/').$biodata->slider_1 ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 170px"><br><br>
              <input type="file" name="slider_1">
              <i class="text-warning">*abaikan jika tidak akan merubah slider ke-1</i>
            </div><br>

            <div class="form-group">
              <label for="logo"><i class="fa fa-pencil"></i> Silder 2</label><br> <br>
              <img src="<?= base_url('assets/biodata/').$biodata->slider_2 ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 170px"><br><br>
              <input type="file" name="slider_2">
              <i class="text-warning">*abaikan jika tidak akan merubah slider ke-2</i>
            </div><br>


            <div class="form-group <?= form_error('email_sekolah') ? 'has-error' : '' ?>">
              <label for="email_sekolah"><i class="fa fa-pencil"></i> Email Sekolah</label>
              <input type="text" name="email_sekolah" class="form-control" id="email_sekolah" placeholder="Enter Nama Sekolah"  value="<?= $biodata->email_sekolah ?>">
              <?= form_error('email_sekolah', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

             <div class="form-group <?= form_error('no_telepon_sekolah') ? 'has-error' : '' ?>">
              <label for="no_telepon_sekolah"><i class="fa fa-pencil"></i> Nomor Telp Sekolah</label>
              <input type="text" name="no_telepon_sekolah" class="form-control" id="no_telepon_sekolah" placeholder="Enter Nama Sekolah"  value="<?= $biodata->no_telepon_sekolah ?>">
              <?= form_error('no_telepon_sekolah', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

             <div class="form-group <?= form_error('keterangan') ? 'has-error' : '' ?>">
              <label for="keterangan"><i class="fa fa-pencil"></i> keterangan Sekolah</label>
              <textarea name="keterangan" class="form-control"  placeholder="keterangan Sekolah"><?= $biodata->keterangan ?></textarea>
              <?= form_error('keterangan', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

             <div class="form-group <?= form_error('alamat_sekolah') ? 'has-error' : '' ?>">
              <label for="alamat_sekolah"><i class="fa fa-pencil"></i> Alamat Lengkap Sekolah</label>
              <textarea name="alamat_sekolah" class="form-control"  placeholder="Alamat Lengkap Sekolah"><?= $biodata->alamat_sekolah ?></textarea>
              <?= form_error('alamat_sekolah', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group">
              <label for="logo"><i class="fa fa-pencil"></i> Logo Sekolah</label><br> <br>
              <img src="<?= base_url('assets/biodata/').$biodata->logo_sekolah ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 170px"><br><br>
              <input type="file" name="logo_sekolah" class="form-control">
              <i class="text-warning">*abaikan jika tidak akan merubah Logo Sekolah</i>
            </div><br>
            <!-- /.box-body -->

          <div class="box-footer text-right">
            
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>
        <?= form_close() ?>
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