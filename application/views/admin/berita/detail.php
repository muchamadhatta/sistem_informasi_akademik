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
					<a href="<?= base_url('admin/berita/') ?>" class="btn btn-warning pull-right" ><i class="fa fa-reply"></i> Kembali</a>
					</div>
					<div class="box-body">
						<div class="panel panel-primary">
							<div class="panel-heading">Detail Berita</div>
								<div class="panel-body">
								<!-- /.box-header -->
								<div class="row">
										<div class="box-body table-responsive">
										<table class="table table-striped table-hover" id="table">
											<tr>
												<th>Tentang </th>
												<th> : </th>
												<td><?= $berita->slogan; ?></td>
											</tr>
											<tr>
												<th>Tanggal Terbit</th>
												<th> : </th>
												<td><?= $this->mylibrary->date_time($berita->tanggal_terbit) ?></td>
											</tr>
											<tr>
												<th>Content </th>
												<th> : </th>
												<td><?= $berita->content; ?></td>
											</tr>
											<tr>
												<th>Foto </th>
												<th> : </th>
												<td><?php if ($berita->foto): ?>
													<img src="<?= base_url('assets/berita/').$berita->foto ?>" class="img img-responsive img-thumbnail" style="width: 200px; height: 200px;">
													<?php else: ?>
														<i class="text-success">-- Tidak Ada Foto --</i>
												<?php endif ?></td>
											</tr>
										</table>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
