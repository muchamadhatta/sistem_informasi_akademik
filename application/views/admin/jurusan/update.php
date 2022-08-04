<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-gear"></i> Setting</li>
        <li><a href="<?= base_url('admin/jurusan') ?>"> <?= $title; ?></a></li>
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
                
            <div class="form-group <?= form_error('nama_jurusan') ? 'has-error' : '' ?>">
              <label for="nama_jurusan"> Nama Program Keahlian</label>
              <input type="text" name="nama_jurusan" class="form-control" id="nama_jurusan" placeholder="Enter Nama Program Keahlian"  value="<?= set_value('nama_jurusan') ? set_value('nama_jurusan') : $jurusan->nama_jurusan ?>">
              <?= form_error('nama_jurusan', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>


             <div class="form-group">
              <label for="keterangan_jurusan"> Keterangan</label>
              <textarea name="keterangan_jurusan" class="form-control" id="keterangan_jurusan" placeholder="Enter Keterangan Program Keahlian"><?= set_value('keterangan_jurusan') ? set_value('keterangan_jurusan') : $jurusan->keterangan_jurusan ?></textarea>
            </div><br>


             <div class="form-group">
              <label for="foto"> Foto Program Keahlian</label>
              <input type="file" name="foto" class="form-control" id="foto" >
              <img src="<?= base_url('assets/jurusan/').$jurusan->foto ?>" id="review" class="img img-thumbnail img-responsive" style="width: 200px; height: 200px;" />
              <script type="text/javascript">

                function bacaGambar(input) {
                     if (input.files && input.files[0]) {
                        var reader = new FileReader();
                   
                        reader.onload = function (e) {
                            $('#review').attr('src', e.target.result);
                        }
                   
                        reader.readAsDataURL(input.files[0]);
                     }
                  }

                  $("#foto").change(function(){
                     bacaGambar(this);
                  });
              </script>
            </div><br>
            <!-- /.box-body -->

          <div class="box-footer text-right">
            <a href="<?= base_url('admin/jurusan') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>