 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
       <li><i class="fa fa-gear"></i> Setting</li>
        <li><a href="<?= base_url('admin/kelas') ?>"> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?= base_url('admin/insert_kelas') ?>" title="Tambah Data Kelas" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Kelas</a>
             
            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Kelas</th>
                          <th>Keterangan</th>
                          <th>Wali Kelas</th>
                          <th>Ruang Kelas</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataKelas->result() as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                    			<td><?= $key->nama_kelas ?></td>
                    			<td><?= $key->keterangan ?></td>
                    			<td><?= $key->wali_kelas ?></td>
                    			<td><?= $key->ruang ?></td>
                    			<td>
                            <!-- <badge class="text-warning text-center"><i>System</i></badge> -->
                    				<a href="<?= base_url('admin/update_kelas/'). md5($key->id_kelas) ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Edit</a>
                            <a href="<?= base_url('admin/delete_kelas/'). md5($key->id_kelas) ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus data <?= ucfirst($key->nama_kelas) ?> ? ')"> <i class="fa fa-trash-o"></i> Delete</a>
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