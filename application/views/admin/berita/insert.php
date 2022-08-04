<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-list"></i> Master</li>
        <li><a href="<?= base_url('admin/berita') ?>"> <?= $title; ?></a></li>
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
              <div class="col-lg-9">
                
            <div class="form-group <?= form_error('slogan') ? 'has-error' : '' ?>">
              <label for="slogan">Berita</label>
              <input type="text" name="slogan" class="form-control" id="berita" placeholder="Enter Nama Kelas"  value="<?= set_value('berita') ?>" >
              <?= form_error('slogan', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

             <div class="form-group <?= form_error('slogan') ? 'has-error' : '' ?>">
              <label for=berita"> Content Berita</label>
             <textarea class="textarea" name="content" placeholder="Content Berita"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= set_value('content') ?></textarea>
              <?= form_error('content', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>


             <div class="form-group">
              <label for="slogan"> Foto Berita</label>
              <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto Berita" >
              <i class="text-warning">*kosongkan jika tidak akan menambahkan foto</i>
            </div><br>
            <!-- /.box-body -->

          <div class="box-footer text-right">
            <a href="<?= base_url('admin/berita') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</section>