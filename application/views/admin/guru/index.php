 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?= base_url('admin/insert_guru') ?>" title="Tambah Data Guru" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Guru</a>
             
            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nip</th>
                          <th>Nama Guru</th>
                          <th>No Telepon</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat, Tanggal Lahir</th>
                          <!-- <th>Agama</th> -->
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataGuru as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                    			<td><?= $key->nip ?></td>
                          <td><?= $key->nama_guru ?></td>
                          <td><?= $key->no_telepon ?></td>
                          <td><?= $key->jenis_kelamin ?></td>
                          <td><?= $key->tempat_lahir.','. $this->mylibrary->date_indo($key->tanggal_lahir) ?></td>
                          <!-- <td><?= $key->agama ?></td> -->
                          <td><?= $key->alamat ?></td>
                    			<td>
                    				<a href="<?= base_url('admin/update_guru/'). md5($key->id_guru) ?>" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/delete_guru/'). md5($key->id_guru) ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus data <?= ucfirst($key->nama_guru) ?> ? ')"> <i class="fa fa-trash-o"></i></a>
                            <a href="<?= base_url('admin/detail_guru/'). md5($key->id_guru) ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
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