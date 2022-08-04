<!-- Events -->
<section class="events section" id="Ekstrakulikuler">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><i class="fa fa-child"></i> Ekstra <span>kurikuler</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="event-slider">
					<?php foreach ($extra as $extra): ?>	
					<div class="single-event">
						<div class="head overlay">
							<img src="<?= base_url('assets/extra/').$extra->foto ?>" alt="#" style="height: 270px;">
							<a href="<?= base_url('assets/extra/').$extra->foto ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
						</div>
						<div class="event-content">
							<div class="meta"> 
								<span><i class="fa fa-calendar"></i><?= $extra->hari ?></span>
								<span><i class="fa fa-clock-o"></i><?= strtoupper(date('H:m a', strtotime($extra->jam))) ?></span>
							</div>
							<h4><?= ucfirst($extra->nama_extra) ?></h4><hr>
							<h6><a><i class="fa fa-user"></i> <?= strtolower($extra->nama_pembimbing) ?></a></h6>
							<p><?= ucfirst($extra->keterangan) ?></p>
							<div class="button">
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Events -->
