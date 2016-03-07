<?php $this->load->view('modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Try Out
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Try Out</li>
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

                <table id="example1" class="table table-bordered table-striped " style="text-align: center">
                    <thead >
                        <tr style="background-color: silver">
                            <th style="text-align: center">Id Try Out</th> 
                            <th style="text-align: center">Kelompok Trial</th> 
                            <th style="text-align: center;">Kelompok Berbayar</th> 
                            <th style="text-align: center;">Kelompok Bimbel</th> 
                            <th style="text-align: center;">Tanggal</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>15-januari-2016</td>
<!--                            <td>
                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal">
                                    <span class="fa fa-gears"></span>
                                </button>
                            </td>-->
                        </tr>
<!--                        <tr>
                            <td>
                                <button type="button" class="btn  btn-sm" data-toggle="modal" data-target="#myModal">
                                    <span class="fa fa-gears"></span>
                                </button>
                            </td>
                        </tr>-->
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
</div><!-- /.col -->
<div class="row"></div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('modular/footer'); ?>

