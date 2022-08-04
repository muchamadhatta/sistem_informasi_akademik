<section class="content">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <a href="<?= base_url('guru/mengajar/'.md5($this->session->userdata('id_guru'))) ?>"><div class="info-box bg-maroon">
        <span class="info-box-icon"><i class="fa fa-list"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Data Nilai</span>
            <span class="info-box-number"><?= $mengajar ?> Pelajaran</span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description"></span>
          </div>
      </div></a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <a href="<?= base_url('guru/jadwal/'.md5($this->session->userdata('id_guru'))) ?>"><div class="info-box bg-light-blue">
        <span class="info-box-icon"><i class="fa fa-list"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jadwal</span>
            <span class="info-box-number"><?= $mengajar ?> Kelas</span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description"></span>
          </div>
      </div></a>
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