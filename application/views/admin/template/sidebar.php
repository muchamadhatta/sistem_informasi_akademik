 <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/img/<?= $this->session->userdata('foto') ?>" class="img-circle" alt="User Image">
        </div>
        <br>
        <div class="pull-left info">
          <p><?= $this->session->userdata('fullname') ?></p>
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
        <br>
        <br>
      </div>

        <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>
        <?php $link = $this->uri->segment(2); ?>
        <li <?= $link == '' ? 'class="active-active"' : '' ?>><a href="<?= base_url('admin') ?>" ><i class="fa fa-home"></i> Home</a></li>
        <li <?= $link == 'jadwal_pelajaran' ? 'class="active-active"' : '' ?>><a href="<?= base_url('admin/jadwal_pelajaran') ?>" ><i class="fa fa-book"></i> Jadwal Pelajaran</a></li>
        <li <?= $link == 'guru' || $link == 'insert_guru' || $link == 'update_guru'? 'class="active-active"' : '' ?>><a href="<?= base_url('admin/guru') ?>" ><i class="fa fa-users"></i>  Guru</a></li>
        <li <?= $link == 'siswa' || $link == 'insert_siswa' || $link == 'detail_siswa' ||$link == 'edit_siswa'? 'class="active-active"' : '' ?>><a href="<?= base_url('admin/siswa') ?>" ><i class="fa fa-child"></i>  Siswa</a></li>
        <li <?= $link == 'nilai' || $link == 'insert_nilai' || $link == 'update_nilai'? 'class="active-active"' : '' ?>><a href="<?= base_url('admin/nilai') ?>" ><i class="fa fa-pencil"></i>  Nilai</a></li>
        <li <?= $link == 'rangking' ? 'class="active-active"' : '' ?>><a href="<?= base_url('admin/rangking') ?>" ><i class="fa fa-pencil"></i> Peringkat</a></li>
        <li <?= $link == 'kenaikan' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/kenaikan') ?>" ><i class="fa fa-check"></i>  Kenaikan</a></li>
        <li <?= $link == 'cetak_data' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/cetak_data') ?>" ><i class="fa fa-print"></i> Cetak Data</a></li>
        <li class="treeview <?= $link == 'berita' || $link == 'insert_berita' || $link == 'detail_berita' || $link == 'update_berita' || $link == 'extrakurikuler' || $link == 'insert_extrakurikuler' || $link == 'update_extrakurikuler' || $link == 'portfolio' || $link == 'insert_portfolio' || $link == 'update_portfolio' ? 'active' : '' ?>" >
          <a href="#">
            <i class="fa fa-list"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li <?= $link == 'berita' || $link == 'insert_berita' || $link == 'detail_berita' || $link == 'update_berita' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/berita/') ?>" ><i class="fa fa-circle-o"></i> Berita</a></li>
             <li <?= $link == 'extrakurikuler' || $link == 'insert_extrakurikuler' || $link == 'update_extrakurikuler' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/extrakurikuler') ?>" ><i class="fa fa-circle-o"></i> Ekstrakurikuler</a></li>
          </ul>
        </li>
         <li class="treeview <?= $link == 'biodata' || $link == 'kelas' || $link == 'insert_kelas' || $link == 'update_kelas' || $link == 'jurusan'|| $link == 'insert_jurusan' || $link == 'update_jurusan' || $link == 'pelajaran' || $link == 'insert_pelajaran' || $link == 'update_pelajaran' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $link == 'biodata' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/biodata/') ?>" ><i class="fa fa-circle-o"></i> Biodata</a></li>
            <li <?= $link == 'kelas' || $link == 'insert_kelas' || $link == 'update_kelas' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/kelas') ?>" ><i class="fa fa-circle-o"></i>  Kelas</a></li>
            <li <?= $link == 'pelajaran' || $link == 'insert_pelajaran' || $link == 'update_pelajaran' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/pelajaran') ?>" ><i class="fa fa-circle-o"></i>  Pelajaran</a></li>
            <li <?= $link == 'jurusan' || $link == 'insert_jurusan' || $link == 'update_jurusan' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/jurusan') ?>" ><i class="fa fa-circle-o"></i>  Jurusan</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper container-fluid">
