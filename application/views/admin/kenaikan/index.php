 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-child"></i> <?= $title; ?></a></li>
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
                <div class="col-md-2">
                   <div class="form-group <?= form_error('id_kelas') ? 'has-error' : '' ?>">
                      <select class="form-control" name="id_kelas">
                         <option value="">-- pilih kelas --</option>
                        <?php foreach ($dataKelas as $key): ?>
                          <option value="<?= $key->id_kelas ?>" <?= set_value('id_kelas') == $key->id_kelas ? 'selected' : '' ?>><?= $key->nama_kelas ?></option>
                        <?php endforeach ?>
                      </select>
                    <?= form_error('id_kelas', '<small><i class="text-danger">', '</i></small>') ?>
                  </div><br>
                </div>

                 <div class="col-md-6">
                  <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
                </div>
              </div>
            

              <?= form_close() ?>
              <!-- end :: pencarian -->


             
            </div>
            <!-- /.box-header -->
                <div class="box-body"><br><br><br>
                  <div class="table-responsive">
                  <?php if (isset($dataSiswa)): ?>
                    
                   <?php if(count($dataSiswa) > 0) : ?>
                  <?= form_open('admin/update_kenaikan/'.md5($_POST['id_kelas'])) ?>
                  <small class="text-info">*Untuk kenaikan kelas pastikan coloum box harus terceklis</small>
                  <table class="table-hover table-striped" border="1px solid black" width="100%" style="padding-bottom: 20px;">
                    <thead style="background: #eee;">
                        <tr>
                         <td class="text-center" style="background-color: #eee;" style="padding: 5px;" width="10%"><input type="checkbox"  id="check" value="1" width="500" ></td>
                          <th style="padding: 5px;">Nis</th>
                          <th style="padding: 5px;">Nama</th>
                          <th style="padding: 5px;">Kelas</th>
                          <th style="padding: 5px;">Program Keahlian</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataSiswa as $key): ?>
                    		<tr>
                    			<td class="text-center" style="background-color: #ccc;"><input type="checkbox" name="<?= $key->id_siswa ?>" class="icheck" value="1" width="500" ></td>
                    			<td style="padding: 5px;"><?= $key->nis; ?></td>
                    			<td style="padding: 5px;"><?= $key->nama_siswa; ?></td>
                          <td style="padding: 5px;"><?= $key->nama_kelas; ?></td>
                          <td style="padding: 5px;"><?= $key->nama_jurusan; ?></td>
                          <!-- <?= var_dump($key); ?> -->
                    		</tr>
                    		
                    	<?php endforeach ?>
                    </tbody>
                </table>
              </div>
               
               <div class="row" style="margin-top: 20px;">
                <div class="col-lg-3">
                  <div class="form-group"> 
                    <select name="kelas" class="form-control col-lg-2" required>
                      <option value="">-- pilih naik kelas --</option>}
                      option
                      <?php foreach ($dataKelas as $key): ?>
                        <option value="<?= $key->id_kelas ?>"><?= $key->nama_kelas ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success"><i class="fa fa-gear fa-spin"></i> Update</button>
                  </div>
                </div>
              </div>
                  <?= form_close() ?>
                  <script>
                    $(document).ready(function(){
                     
                      $('input[type="checkbox"]#check').change(function(){
                        var check = $('.icheck');
                        if ($('input[type="checkbox"]#check').val() == '1') {  
                          $('input[type="checkbox"]#check').val('0');
                          check.attr('checked', 'true');   
                        }else{
                          $('input[type="checkbox"]#check').val('1');
                          check.removeAttr('checked');   
                        }                        
                      })
                    })
                  </script>
                  <?php else: ?>
                    <p style="color: red;"><i class="fa fa-warning"></i> <i>Maaf data siswa <?= $message ?></i></p>     
                  <?php endif; ?>
                <?php endif ?>
             </div>
          </div>
         </div>
    </div>
</section>
<?php if ($this->session->flashdata('message')): ?>
  <script type="text/javascript">
  notifikasi('success', '<?= $this->session->flashdata('message'); ?>');
  </script>
<?php endif ?>