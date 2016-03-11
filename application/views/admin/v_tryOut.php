<?php $this->load->view('admin/modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Try Out
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Try Out</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row"></div>
        <!-- Main row -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Kelompok Try Out</h3>
                <div class="pull-right">
                    <a href = "#" type="button"  data-toggle="modal" data-target="#myModal"><span class=" fa fa-plus"></span></a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Try Out</h4>
                                </div>
<!--                                <div class="modal-body">-->
                                    <form class="col-sm-9  form-horizontal">
                                        <!--<div class="box box-info">-->

                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="tryoutke" class="col-lg-2 control-label" style="font-family: inherit"></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-circle"></i></span>
                                                        <input type="number" class="form-control" placeholder="Try Out Ke">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tryoutke" class="col-lg-2 control-label" style="font-family: inherit"></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                                        <select class="form-control">
                                                            <option>IPA</option>
                                                            <option>IPS</option>
                                                            <option>IPC</option>
                                                            <option>IPA - IPS</option>
                                                            <option>IPA - IPC</option>
                                                            <option>IPS - IPC</option>
                                                            <option>IPA - IPS - IPC</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tryoutke" class="col-lg-2 control-label" style="font-family: inherit"></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
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
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped " style="text-align: center">
                    <thead >
                        <tr>
                            <th style="text-align: center">Try Out</th> 
                            <th style="text-align: center">Kelompok Ujian</th> 
                            <th style="text-align: center">Peserta Trial</th> 
                            <th style="text-align: center;">Peserta Berbayar</th> 
                            <th style="text-align: center;">Peserta Bimbel</th> 
                            <th style="text-align: center;">Tanggal</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td>IPA - IPS - IPC</td>
                                <td>0</td>
                                <td>0</td>  
                                <td>0</td>
                                <td><?php echo 1 + $i ?>-januari-2016</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div><!-- /.col -->
<div class="row"></div>
<!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('admin/modular/footer'); ?>

