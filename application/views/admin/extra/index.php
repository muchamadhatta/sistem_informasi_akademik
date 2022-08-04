 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-list"></i> Master</li>
        <li><a href="<?= base_url('admin/extrakurikuler') ?>"> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?= base_url('admin/insert_extrakurikuler') ?>" title="Tambah Data Extrakurikuler" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Extrakurikuler</a>
             
            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Foto</th>
                          <th>Nama Extrakurikuler</th>
                          <th>Hari</th>
                          <th>Jam</th>
                          <th>Keterangan</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($extrakurikuler as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                          <td><img src="<?= base_url('assets/extra/').$key->foto ?>" class="img img-responsive img-thumbnail" style="width: 150px; height: 148px;"  ></td>
                    			<td><?= $key->nama_extra ?></td>
                          <td><?= $key->hari ?></td>
                          <td><?= $key->jam ?></td>
                          <td><?= $key->keterangan ?></td>
                    			<td>
                    				<a href="<?= base_url('admin/update_extrakurikuler/'). md5($key->id_extra) ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Edit</a>
                            <a href="<?= base_url('admin/delete_extrakurikuler/'). md5($key->id_extra) ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus data <?= ucfirst($key->nama_extra) ?> ? ')"> <i class="fa fa-trash-o"></i> Delete</a>
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