 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-print"></i> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
             <!-- pencairan -->
              <?= form_open('') ?>
              <div class="row">
                <div class="col-md-3">
                   <div class="form-group">
                      <select class="form-control" name="id_kelas">
                         <option value="all">Semua Kelas</option>
                        <?php foreach ($dataKelas as $key): ?>
                          <option value="<?= $key->id_kelas ?>" <?= set_value('id_kelas') == $key->id_kelas ? 'selected' : '' ?>><?= $key->nama_kelas ?></option>
                        <?php endforeach ?>
                      </select>
                    <?= form_error('id_kelas', '<small><i class="text-danger">', '</i></small>') ?>
                  </div><br>
                </div>
                  <div class="col-md-3">
                   <div class="form-group">
                      <select class="form-control" name="semester">
                        <option value="all">Semester</option>
                        <option value="1">S1</option>
                        <option value="2">S2</option>
                        <option value="3">S3</option>
                        <option value="4">S4</option>
                        <option value="5">S5</option>
                        <option value="6">S6</option>
                      </select>
                    <?= form_error('semester', '<small><i class="text-danger">', '</i></small>') ?>
                  </div><br>
                </div>
                
               
                 <div class="col-md-3">
                  <button type="submit" class="btn btn-success" name="cari"><i class="fa fa-search"></i> Cari</button>
                </div>
              </div>
            

              <?= form_close() ?>
              <!-- end :: pencarian -->
        </div>


        <div class="box-body">
          <?php if (@$message): ?>
            <p style="color: red;"><i class="fa fa-warning"></i> <i><?= $message ?></i></p>     
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</section>