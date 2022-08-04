 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pencil"></i> <?= $title; ?></a></li>
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <a href="<?= base_url('admin/insert_siswa') ?>" title="Tambah Data Siswa" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Siswa</a> -->

            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover table-striped" id="example">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nis</th>
                          <th>Nama</th>
                          <!-- <th>No Telepon</th> -->
                          <th>Jenis Kelamin</th>
                          <!-- <th>Tempat, Tanggal Lahir</th> -->
                          <!-- <th>Kelas</th> -->
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataSiswa->result() as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                    			<td><?= $key->nis; ?></td>
                    			<td><?= $key->nama_siswa; ?></td>
                          <!-- <td><?= $key->no_telepon ?></td> -->
                          <td><?= $key->jenis_kelamin; ?></td>
                    			<!-- <td><?= $key->tempat_lahir . ', ' . $this->mylibrary->date_indo($key->tanggal_lahir); ?></td> -->
                          <!-- <td><?= $key->nama_kelas; ?></td> -->
                    			<td>
                            <a href="<?= base_url('admin/update_nilai/'). md5($key->id_siswa) . '/1' ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Nilai S1</a>
                    				<a href="<?= base_url('admin/update_nilai/'). md5($key->id_siswa) . '/2' ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Nilai S2</a>
                    				<a href="<?= base_url('admin/update_nilai/'). md5($key->id_siswa) . '/3' ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Nilai S3</a>
                    				<a href="<?= base_url('admin/update_nilai/'). md5($key->id_siswa) . '/4' ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Nilai S4</a>
                    				<a href="<?= base_url('admin/update_nilai/'). md5($key->id_siswa) . '/5' ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Nilai S5</a>
                    				<a href="<?= base_url('admin/update_nilai/'). md5($key->id_siswa) . '/6' ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Nilai S6</a>
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
