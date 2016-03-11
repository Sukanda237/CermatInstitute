<?php $this->load->view('admin/modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Soal
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Soal</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar TryOut</h3>
                <div class="pull-right">
                    <!--<a href="#"><span class=" fa fa-plus"></span></a>-->
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">Id Try Out</th>
                            <th style="text-align: center">Kelompok Ujian</th>
                            <th style="text-align: center">Tanggal</th>                
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $array = array('Matematika', 'Sejarah', 'Kimia', 'Fisika', 'Ekonomi', 'Geografi');
                        $arrays = array('Matematika', 'Sejarah', 'Fisika', 'Sudah Semua', 'Geografi', 'Kimia');
                        for ($i = 1; $i < 6; $i++) {
                            ?>
                            <tr>
                                <td> <a href="<?= site_url('bankSoal') ?>?idTryOut=<?= $i ?>">TO<?= $i ?></a></td>
                                <td>IPA IPS IPC</td>
                                <td><?= 10 + $i ?>Maret 2016</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>  
        <!-- Main row -->
        <div class="row">
        </div>
    </section><!-- /.content -->
    <?php if (isset($_GET['idTryOut'])) { ?>
        <section class="content">

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control">
                    <option>IPA</option>
                    <option>IPS</option>
                    <option>IPC</option>
                </select>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="box">
                <div class="box-header">
                    <!--<a href="<?= site_url('tambahSoal') ?>"><span class=" fa fa-plus pull-right"></span></a>-->
                    <a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus pull-right"></span></a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Mata Pelajaran</h4>
                                </div>
                                <!--                                <div class="modal-body">-->
                                <form class="col-sm-9  form-horizontal">
                                    <!--<div class="box box-info">-->

                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="tryoutke" class="col-lg-2 control-label" style="font-family: inherit"></label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" placeholder="Mata Pelajaran">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                                    </div><!-- /.box-footer -->
                                </form>
                                <!--</div>-->
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="box-title">Mata Pelajaran</h3>
                    <div class="pull-right">
                        <!--<a href="#"><span class=" fa fa-plus"></span></a>-->
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                        <thead>
                            <tr>
                                <th style="text-align: center">Nomor</th>
                                <th style="text-align: center">Mata Pelajaran</th>
                                <th style="text-align: center">Jumlah Soal</th>                
                                <th style="text-align: center">Waktu</th>                
                                <th style="text-align: center">Buat</th>                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $array = array('Matematika', 'Kimia', 'Fisika');
                            $arrays = array('Matematika', 'Sejarah', 'Fisika', 'Sudah Semua', 'Geografi', 'Kimia');
                            for ($i = 0; $i < 3; $i++) {
                                ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= $array[$i] ?></td>
                                    <td>25</td>
                                    <td>60 menit</td>
                                    <td><a class="btn btn-default"><span class="fa fa-pencil"></span></a></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td>4</td>
                                <td>Bahasa Inggris</td>
                                <td>0</td>
                                <td>0 menit</td>
                                <td><a class="btn btn-default"><span class="fa fa-pencil"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>  
            <!-- Main row -->
            <div class="row">
            </div>
        </section><!-- /.content -->
    <?php } ?>
</div><!-- /.content-wrapper -->
<?php
$this->load->view('admin/modular/footer')?>