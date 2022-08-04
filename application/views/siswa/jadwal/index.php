<section class="content-header">
      <h1><?= $title; ?> <small><?= $judul; ?></small></h1>
      <ol class="breadcrumb">
        <li class="active"><?= $judul; ?></li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

<!-- <a href="<?= base_url('siswa/print_nilai/') ?>" title="Print Nilai" class="btn btn-warning pull-right" target="_blank"><i class="fa fa-print"></i> Print</a> -->
         
</div>
        <!-- /.box-header -->
            <div class="box-body table-responsive">
              <div class="panel panel-danger">
                <div class="panel-heading">Jadwal Pelajaran </div>
                <div class="panel-body"><div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover" >
                  <thead class="bg-danger">
                    <tr>
                      <th class="text-center">Jam</th>
                      <th class="text-center">Senin</th>
                      <th class="text-center">Selasa</th>
                      <th class="text-center">Rabu</th>
                      <th class="text-center">Kamis</th>
                      <th class="text-center">Jum'at</th>
                      <th class="text-center">Sabtu</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr class="text-center">
                          <td>1</td>
                          <td><?= $pelajaran->s1_pelajaran ?><br><strong><u><?= $pelajaran->s1_guru ?></u></strong></td>
                          <td><?= $pelajaran->t1_pelajaran ?><br><strong><u><?= $pelajaran->t1_guru ?></u></strong></td>
                          <td><?= $pelajaran->r1_pelajaran ?><br><strong><u><?= $pelajaran->r1_guru ?></u></strong></td>
                          <td><?= $pelajaran->k1_pelajaran ?><br><strong><u><?= $pelajaran->k1_guru ?></u></strong></td>
                          <td><?= $pelajaran->j1_pelajaran ?><br><strong><u><?= $pelajaran->j1_guru ?></u></strong></td>
                          <td><?= $pelajaran->p1_pelajaran ?><br><strong><u><?= $pelajaran->p1_guru ?></u></strong></td>

                        </tr>
                         <tr class="text-center">
                          <td>2</td>
                          <td><?= $pelajaran->s2_pelajaran ?><br><strong><u><?= $pelajaran->s2_guru ?></u></strong></td>
                          <td><?= $pelajaran->t2_pelajaran ?><br><strong><u><?= $pelajaran->t2_guru ?></u></strong></td>
                           <td><?= $pelajaran->r2_pelajaran ?><br><strong><u><?= $pelajaran->r2_guru ?></u></strong></td>
                           <td><?= $pelajaran->k2_pelajaran ?><br><strong><u><?= $pelajaran->k2_guru ?></u></strong></td>
                           <td><?= $pelajaran->j2_pelajaran ?><br><strong><u><?= $pelajaran->j2_guru ?></u></strong></td>
                           <td><?= $pelajaran->p2_pelajaran ?><br><strong><u><?= $pelajaran->p2_guru ?></u></strong></td>
                        </tr>
                        <tr class="text-center">
                          <td>3</td>
                          <td><?= $pelajaran->s3_pelajaran ?><br><strong><u><?= $pelajaran->s3_guru ?></u></strong></td>
                          <td><?= $pelajaran->t3_pelajaran ?><br><strong><u><?= $pelajaran->t3_guru ?></u></strong></td>
                           <td><?= $pelajaran->r3_pelajaran ?><br><strong><u><?= $pelajaran->r3_guru ?></u></strong></td>
                           <td><?= $pelajaran->k3_pelajaran ?><br><strong><u><?= $pelajaran->k3_guru ?></u></strong></td>
                           <td><?= $pelajaran->j3_pelajaran ?><br><strong><u><?= $pelajaran->j3_guru ?></u></strong></td>
                           <td><?= $pelajaran->p3_pelajaran ?><br><strong><u><?= $pelajaran->p3_guru ?></u></strong></td>
                        </tr>
                        <tr class="text-center">
                          <td>4</td>
                          <td><?= $pelajaran->s4_pelajaran ?><br><strong><u><?= $pelajaran->s4_guru ?></u></strong></td>
                          <td><?= $pelajaran->t4_pelajaran ?><br><strong><u><?= $pelajaran->t4_guru ?></u></strong></td>
                           <td><?= $pelajaran->r4_pelajaran ?><br><strong><u><?= $pelajaran->r4_guru ?></u></strong></td>
                           <td><?= $pelajaran->k4_pelajaran ?><br><strong><u><?= $pelajaran->k4_guru ?></u></strong></td>
                           <td><?= $pelajaran->j4_pelajaran ?><br><strong><u><?= $pelajaran->j4_guru ?></u></strong></td>
                           <td><?= $pelajaran->p4_pelajaran ?><br><strong><u><?= $pelajaran->p4_guru ?></u></strong></td>
                        </tr>
                        <tr class="text-center">
                          <td>5</td>
                          <td><?= $pelajaran->s5_pelajaran ?><br><strong><u><?= $pelajaran->s5_guru ?></u></strong></td>
                          <td><?= $pelajaran->t5_pelajaran ?><br><strong><u><?= $pelajaran->t5_guru ?></u></strong></td>
                           <td><?= $pelajaran->r5_pelajaran ?><br><strong><u><?= $pelajaran->r5_guru ?></u></strong></td>
                           <td><?= $pelajaran->k5_pelajaran ?><br><strong><u><?= $pelajaran->k5_guru ?></u></strong></td>
                           <td><?= $pelajaran->j5_pelajaran ?><br><strong><u><?= $pelajaran->j5_guru ?></u></strong></td>
                           <td><?= $pelajaran->p5_pelajaran ?><br><strong><u><?= $pelajaran->p5_guru ?></u></strong></td>
                        </tr>
                        
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>