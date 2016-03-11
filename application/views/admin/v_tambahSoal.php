<?php $this->load->view('admin/modular/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Soal
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Soal</li>
            <li class="active">Tambah Soal</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row"></div>
        <!-- Main row -->
        <div class="box">
            <div class="box-body">
                <!--<div id="kotak" class="box" style="background-color: grey">-->
                <div class="col-sm-offset-4">
                    <h3>Soal</h3>
                    </div>
                <form class="col-sm-9  form-horizontal">
                    <!--<div class="box box-info">-->
                    
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tryoutke" class="col-lg-2 control-label" style="font-family: inherit"></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <select class="form-control">
                                        <option>IPA</option>
                                        <option>IPS</option>
                                        <option>IPC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                <!--</div>--> 
            <!--</div>--> 
        </div> 
        </div> 
        <div class="row"></div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('admin/modular/footer'); ?>

