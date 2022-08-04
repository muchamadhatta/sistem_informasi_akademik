 <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/siswa/<?= $this->session->userdata('foto') ?>" class="img-circle" alt="User Image" style="height: 50px; width: 50px;">
        </div>
        <br>
        <div class="pull-left info">
          <p><?= $this->session->userdata('nama_siswa') ?></p>
          <script>
            var myVar;
            var url = window.location.href;
            myVar = setInterval(function() {
                myTimer();
            }, 1000);

            function myTimer() {
                var d = new Date();
                var t = d.toLocaleTimeString();
                $('.waktu').html('<i class="fa fa-clock-o "></i> ' + t);
            }
          </script>
          <a href="#"><b class="text-primary waktu"></b></a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php $link = $this->uri->segment(2); ?>
            <li <?= ($link == '') ? 'class="active-active"' : '' ?>><a href="<?= base_url('siswa') ?>" ><i class="fa fa-home"></i> Home</a></li>
            <li <?= $link == 'biodata_siswa' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/biodata_siswa') ?>"><i class="fa fa-calendar"></i> Biodata Siswa</a></li>
            <li <?= $link == 'jadwal_pelajaran' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/jadwal_pelajaran') ?>"><i class="fa fa-calendar"></i> Jadwal Pelajaran</a></li>
            <li class="treeview <?= $link == 'nilai'  ? 'active' : '' ?>">
              <a href="#">
                <i class="fa fa-line-chart"></i> <span>Nilai</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/1') ?>"><i class="fa fa-arrow-circle-right"></i> Semester 1</a></li>
                <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/2') ?>"><i class="fa fa-arrow-circle-right"></i> Semester 2</a></li>
                <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/3') ?>"><i class="fa fa-arrow-circle-right"></i> Semester 3</a></li>
                <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/4') ?>"><i class="fa fa-arrow-circle-right"></i> Semester 4</a></li>
                <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/5') ?>"><i class="fa fa-arrow-circle-right"></i> Semester 5</a></li>
                <li <?= $link == 'nilai' ? 'class="active"' : '' ?>><a href="<?= base_url('siswa/nilai/6') ?>"><i class="fa fa-arrow-circle-right"></i> Semester 6</a></li>           
              </ul>
            </li>






    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper container-fluid">



  