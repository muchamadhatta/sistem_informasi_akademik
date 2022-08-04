<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   <?= $title; ?>
    <small><?= $judul ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-list"></i> Master</li>
        <li><a href="<?= base_url('admin/extrakurikuler') ?>"> <?= $title; ?></a></li>
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
                
            <div class="form-group <?= form_error('nama_extra') ? 'has-error' : '' ?>">
              <label for="nama_extra"> Nama Extrakurikuler</label>
              <input type="text" name="nama_extra" class="form-control" id="nama_extra" placeholder="Enter Nama Extrakurikuler"  value="<?= set_value('nama_extra') ?>" >
              <?= form_error('nama_extra', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group <?= form_error('hari') ? 'has-error' : '' ?>">
              <label for="hari"> Hari</label>
              <select name="hari" class="form-control" id="hari">
                <option value="">-- pilih hari --</option>
                <option value="Senin" <?= set_value('hari') == 'Senin' ? 'selected' : '' ?>>Senin</option>
                <option value="Selasa" <?= set_value('hari') == 'Selasa' ? 'selected' : '' ?>>Selasa</option>
                <option value="Rabu" <?= set_value('hari') == 'Rabu' ? 'selected' : '' ?>>Rabu</option>
                <option value="Kamis" <?= set_value('hari') == 'Kamis' ? 'selected' : '' ?>>Kamis</option>
                <option value="Jum'at" <?= set_value('hari') == "jum'at" ? 'selected' : '' ?>>Jum'at</option>
                <option value="Sabtu" <?= set_value('hari') == 'Sabtu' ? 'selected' : '' ?>>Sabtu</option>
                <option value="Minggu" <?= set_value('hari') == 'Minggu' ? 'selected' : '' ?>>Minggu</option>
              </select>
              <?= form_error('hari', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>

            <div class="form-group <?= form_error('jam') ? 'has-error' : '' ?>">
              <label for="jam"> Jam</label>
              <input type="time" name="jam" class="form-control" id="jam" placeholder="Enter Jam"  value="<?= set_value('jam') ?>" >
              <?= form_error('jam', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>


            <div class="form-group">
              <label for="keterangan"> Keterangan</label>
              <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Enter Keterangan"><?= set_value('keterangan') ?></textarea>
              <small class="text-info">*keterangan boleh di kosongkan</small>
            </div><br>

            <div class="form-group <?= form_error('nama_pembimbing') ? 'has-error' : '' ?>">
              <label for="nama_pembimbing"> Nama Pembimbing</label>
              <input type="text" name="nama_pembimbing" class="form-control" id="nama_pembimbing" placeholder="Enter Nama Pembimbing"  value="<?= set_value('nama_pembimbing') ?>" >
              <?= form_error('nama_pembimbing', '<small><i class="text-danger">', '</i></small>') ?>
            </div><br>


             <div class="form-group">
              <label for="foto"> Foto Extrakurikuler</label>
              <input type="file" name="foto" class="form-control" id="foto" required>
              <img src="" id="review" class="img img-thumbnail img-responsive" style="width: 200px; height: 200px;" />
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
            <a href="<?= base_url('admin/extrakurikuler') ?>" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save <i class="fa fa-save"></i></button>
          </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</section>