<?php $this->load->view('admin/modular/header') ?>
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
                <div class="pull-right">
                    <a href="#"><span class=" fa fa-plus"></span></a>
                </div>
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
                
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                        <th style="text-align: center">No peserta</th>
                        <th style="text-align: center">Nama Peserta</th>
                        <th style="text-align: center">Jenis Kelamin</th>
                        <th style="text-align: center">No HP</th>
                        <th style="text-align: center">Kelompok Ujian</th>
                        <th style="text-align: center">Mengikuti Try Out</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $array = array('Agung budi','jajang mulayana','irma wibisono','ade sucipta','Dewi puspa','Dini asyesha');
                        $arrays = array('IPA','IPS','IPC','IPA','IPS','IPC');
                        for ($i = 1; $i < 6; $i++) {?>
                      <tr>
                        <td><?= $i?></td>
                        <td><a href="#"><?= $array[$i];  ?></a></td>
                        <td>Laki laki</td>
                        <td>08567897654</td>
                        <td><?= $arrays[$i]; ?></td>
                        <td><?= $i+2*$i?> kali</td>
                      </tr>
                        <?php }?>
                    </tbody>
                  </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
</div><!-- /.col -->
<div class="row"></div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('admin/modular/footer'); ?>

