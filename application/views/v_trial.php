<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kelompok Trial
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Peserta</li>
            <li class="active">Kelompok Trial</li>
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

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-control">
                                    <label for="kelompok">Kelompok</label>
                                    <select>
                                        <option>kelompok Trial</option>
                                        <option>kelompok Berbayar</option>
                                        <option>kelompok Bimbel</option>
                                    </select>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No peserta</th>
                            <th>Nama Peserta</th>
                            <th>Jenis Kelamin</th>
                            <th>No HP</th>
                            <th>Username</th>
                            <th>password</th>
                            <th></th>
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
                            <td>
                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal">
                                    <span class="fa fa-gears"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Desty</td>
                            <td>Perempuan</td>
                            <td>08568653548</td>
                            <td>desy</td>
                            <td>insyaallah</td>
                            <td>
                                <button type="button" class="btn  btn-sm" data-toggle="modal" data-target="#myModal">
                                    <span class="fa fa-gears"></span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
</div><!-- /.col -->
<div class="row"></div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer'); ?>

