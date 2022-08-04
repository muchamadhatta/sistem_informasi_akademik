<section class="blog b-archives single section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Berita</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="blog-detail">
					<?php if ($newsBerita->foto): ?>
					<img src="<?= base_url('assets/berita/') . $newsBerita->foto ?>"
						class="img img-responsive img-thumbnail" style="width: 1200px; 300px;">
					<?php else: ?>
					<img src="<?= base_url('assets/berita/default.png') ?>" style="width: 100px 100px">
					<?php endif ?>
					<div class="detail-content">
						<div class="blog-info">
							<a href="#"><i class="fa fa-calendar"></i>Tanggal Terbit :
								<?= $this->mylibrary->date_time($newsBerita->tanggal_terbit) ?></a>

						</div>
						<h2 class="blog-title"><a href="#"><?= $newsBerita->slogan ?></a></h2>
						<p><?= $newsBerita->content ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="learnedu-sidebar">
					<div class="search">
						<div class="form">
							<form action="<?= base_url('user/cariBerita') ?>" method="get">
								<input type="text" name="search" placeholder="Search ..." required>
								<button class="button" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<div class="single-widget posts">
						<h3>Recent <span>Posts</span></h3>
						<?php foreach ($berita->result() as $key): ?>
						<div class="single-post">
							<div class="post-img">
								<?php if ($key->foto): ?>
								<img src="<?= base_url('assets/berita/') . $key->foto ?>">
								<?php else: ?>
								<img src="<?= base_url('assets/berita/default.png') ?>">
								<?php endif ?>
							</div>
							<div class="post-info">
								<h4><a
										href="<?= base_url('user/berita/') . url_title($key->slogan, 'dash', TRUE) ?>"><?= $key->slogan ?></a>
								</h4>
								<span><i class="fa fa-calendar"></i>Terbit :
									<?= $this->mylibrary->date_time($key->tanggal_terbit) ?></span>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Blog Single -->