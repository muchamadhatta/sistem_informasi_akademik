 <section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-child"></i> <?= $title; ?></a></li>
        <li><a href="#"><i class="fa fa-child"></i> <?= $judul; ?></a></li>
        <li class="active">Kelas <?= $kelas; ?> (Semester <?= $semester; ?>)</li>
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
            <div class="box-header">
					<a href="<?= base_url('admin/rangking/') ?>" class="btn btn-warning pull-right" ><i class="fa fa-reply"></i> Kembali</a>
					</div>
                <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover" id="example">
                    <thead>
                        <tr>
                          <th class="no-sort" width="10px">Peringkat</th>
                          <?php if (isset($dataNilai[0]['id_kelas'])): ?>
                          <th>Kelas</th>
                          <?php endif ?>
                          <th>Nis</th>
                          <th>Nama</th>
                          <th>Nilai Rata-Rata</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($dataNilai as $key): ?>
                    		<tr>
                    			<td><?= $i++; ?></td>
                          <?php if (isset($key['id_kelas'])): ?>
                          <td><?= namaKelas($key['id_kelas']); ?></td>
                          <?php endif ?>
                    			<td><?= $key['nis']; ?></td>
                    			<td><?= $key['nama_siswa']; ?></td>
                          <td><?= $key['nilai']; ?></td>
                    		</tr>

                    	<?php endforeach ?>
                    </tbody>
                </table>
             </div>
          </div>
         </div>
    </div>
</section>
<script>
  $('#example').dataTable( {
    "order": [],
    /*"columnDefs": [ {
      "targets"  : 'no-sort',
      "orderable": false,
    }]*/
} );
</script>
<?php if ($this->session->flashdata('message')): ?>
  <script type="text/javascript">
  notifikasi('success', '<?= $this->session->flashdata('message'); ?>');
  </script>
<?php endif ?>
