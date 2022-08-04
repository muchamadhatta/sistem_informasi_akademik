 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
       <li><i class="fa fa-gear"></i> Setting</li>
        <li><a href="<?= base_url('admin/jurusan') ?>"> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?= base_url('admin/insert_jurusan') ?>" title="Tambah Data Program Keahlian" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Program Keahlian</a>
             
            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Foto</th>
                          <th>Nama Program Keahlian</th>
                          <th>Keterangan</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataJurusan as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                          <td><img src="<?= base_url('assets/jurusan/').$key->foto ?>" class="img img-responsive img-thumbnail" style="width: 150px; height: 148px;"></td>
                    			<td><?= $key->nama_jurusan ?></td>
                          <td width="50%"><?= $key->keterangan_jurusan ?></td>
                    			<td width="10%">
                    				<a href="<?= base_url('admin/update_jurusan/'). md5($key->id_jurusan) ?>" class="btn btn-info"> <i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/delete_jurusan/'). md5($key->id_jurusan) ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus data <?= ucfirst($key->nama_jurusan) ?> ? ')"> <i class="fa fa-trash-o"></i></a>
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