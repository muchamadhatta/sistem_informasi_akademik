 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-list"></i> Master</li>
        <li><a href="<?= base_url('admin/berita') ?>"> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?= base_url('admin/insert_berita') ?>" title="Tambah Data Berita" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Berita</a>
             
            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                          <th width="1px">No</th>
                          <th width="200px">Foto</th>
                          <th>Tentang</th>
                          <th>Content</th>
                          <th>Tahun Terbit</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($berita as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                          <td> 
                            <?php if ($key->foto): ?>
                               <img src="<?= base_url("assets/berita/").$key->foto ?>" class="img img-responsive img-thumbnail" style="width: 150px; height: 150px;">
                               <?php else: ?>
                                <i class="text-success">-- Tidak Ada Foto --</i>
                            <?php endif ?>
                            </td>
                    			<td><?= $key->slogan ?></td>
                          <td><?= character_limiter($key->content, 50) ?></td>
                          <td><?= $this->mylibrary->date_time($key->tanggal_terbit) ?></td>
                    			<td>
                            <a href="<?= base_url('admin/detail_berita/').md5($key->id_berita) ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                    				<a href="<?= base_url('admin/update_berita/'). md5($key->id_berita) ?>" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/delete_berita/'). md5($key->id_berita) ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus berita <?= ucfirst($key->slogan) ?> ? ')"> <i class="fa fa-trash-o"></i></a>
                    			</td>
                    		</tr>
                    		
                    	<?php endforeach ?>
                    </tbody>
                </table>
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
<?php if ($this->session->flashdata('failed')): ?>
  <script type="text/javascript">
  notifikasi('error', '<?= $this->session->flashdata('failed'); ?>');
  </script>
<?php endif ?>