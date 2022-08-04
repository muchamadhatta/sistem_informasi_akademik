<section class="team-style2 section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><span>Portfolio</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($portfolio as $key): ?>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Team -->
				<div class="single-team">
					<div class="image">
						<img src="<?= base_url('assets/portfolio/') .$key->foto ?>" style="width: 300px; height: 200px">
						<a href="<?= base_url('assets/portfolio/') .$key->foto ?>" data-fancybox="photo"><i class="fa fa-search"></i></a>
					</div>
					<!--team-content -->
					<div class="team-content">
						<h4 class="name"><small><?= $key->title ?></small></h4>
					</div>
				</div>
				<!--/ End Single Team -->
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>