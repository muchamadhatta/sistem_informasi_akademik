	<section class="blog b-archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Cari Berita</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<?php if ($berita->num_rows() > 0 ): ?>
							<?php foreach ($berita->result() as $key): ?>
							<div class="col-lg-6 col-12">
								<div class="single-blog">
									<div class="blog-head overlay">
										<?php if ($key->foto): ?>
										<img src="<?= base_url('assets/berita/'). $key->foto ?>">
										<?php else: ?>
											<img src="<?= base_url('assets/berita/default.png') ?>">
											
										<?php endif ?>
									</div>
									<div class="blog-content">
										<h4 class="blog-title"><a href="<?= base_url('berita/').  url_title($key->slogan, 'dash', TRUE)  ?>"><?= ucfirst($key->slogan) ?></a></h4>
										<div class="blog-info">
											<a href="#"><i class="fa fa-calendar"></i>Tanggal Terbit : <?= $this->mylibrary->date_time($key->tanggal_terbit) ?></a>
										</div>
										<p><?= character_limiter($key->content, 300) ?></p>
										<div class="button">
											<a href="<?= base_url('user/berita/') . url_title($key->slogan, 'dash', TRUE); ?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<?php else: ?>
						<div class="col-lg-12 col-12" style="margin-top: 150px;">
							<h6 class="text-danger text-center"> <i class="fa fa-warning"></i> <i>Berita &nbsp;&nbsp;<u><big><?= $this->input->get('search') ?></big></u> &nbsp;&nbsp;Di Temukan</i></h6>
						</div>
						<?php endif; ?>
						</div>
						
					</div>
					<div class="col-lg-4 col-12">
						<div class="learnedu-sidebar">
							<div class="search">
								<div class="form">
									<form action="<?= base_url('user/cariBerita') ?>" method="get">
										<input type="text" name="search" placeholder="Search ..." value="<?= $this->input->get('search') ?>" required>
										<button class="button" type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
							<!-- Posts -->
							<div class="single-widget posts">
								<h3>Recent <span>Posts</span></h3>
								<?php foreach ($allBerita as $key): ?>
								<div class="single-post">
									<div class="post-img">
										<?php if ($key->foto): ?>
										<img src="<?= base_url('assets/berita/'). $key->foto ?>">
										<?php else: ?>
											<img src="<?= base_url('assets/berita/default.png') ?>">
										<?php endif ?>
									</div>
									<div class="post-info">
										<h4><a href="<?= base_url('user/berita/') . url_title($key->slogan, 'dash', TRUE); ?>"><?= $key->slogan ?></a></h4>
										<span><i class="fa fa-calendar"></i>Terbit : <?= $this->mylibrary->date_time($key->tanggal_terbit);  ?></span>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blogs -->