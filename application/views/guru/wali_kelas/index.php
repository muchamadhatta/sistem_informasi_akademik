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
              
             
            </div>
            <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="example">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nis</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tempat, Tanggal Lahir</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataSiswa->result() as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                    			<td><?= $key->nis; ?></td>
                    			<td><?= $key->nama_siswa; ?></td>
                          <td><?= $key->jenis_kelamin; ?></td>
                    			<td><?= $key->tempat_lahir . ', ' . $this->mylibrary->date_indo($key->tanggal_lahir); ?></td>
                    			<td>
                            <a href="<?= base_url('guru/absen_siswa/'). md5($key->id_siswa) ?>" class="btn btn-success"> <i class="fa fa-edit"></i> Absensi</a>
                    				<a href="<?= base_url('guru/detail_siswa/'). md5($key->id_siswa) ?>" class="btn btn-info"> <i class="fa fa-eye"></i> Detail</a>
                            <a href="<?= base_url('guru/print_siswa/').md5($key->id_siswa) ?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Print</a>
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