<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kelompok Bimbel
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Peserta</li>
            <li class="active">Kelompok Bimbel</li>
        </ol>
    </section>
            
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row"></div>
        <!-- Main row -->
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Peserta</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
      
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No peserta</th>
                        <th>Nama Peserta</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Username</th>
                        <th>password</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>Agung budi</td>
                        <td>Laki laki</td>
                        <td>08567897654</td>
                        <td>agungbudi</td>
                        <td>allahuakbar</td>
                      </tr>
                      <tr>
                        <td>02</td>
                        <td>Desty</td>
                        <td>Perempuan</td>
                        <td>08568653548</td>
                        <td>desy</td>
                        <td>insyaallah</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div>
        <div class="row"></div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer') ?>
