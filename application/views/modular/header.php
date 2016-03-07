<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cermat Institute</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <!-- iCheck -->
    <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/iCheck/flat/blue.css">-->
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">-->
    <!-- Date Picker -->
    <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datepicker/datepicker3.css">-->
    <!-- Daterange picker -->
    <!--<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker-bs3.css">-->
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>IT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Cermat</b>Institute</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= base_url() ?>assets/dist/img/foto admin.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?= base_url() ?>assets/dist/img/foto admin.jpg" class="img-circle" alt="User Image">
                    <p>
                      Administrator
                      <!--<small>Member since Nov. 2012</small>-->
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url() ?>assets/dist/img/foto admin.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="<?= site_url('dashboard')?>">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i>
                <span>Peserta</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?= site_url('trial') ?>"><i class="fa fa-circle-o"></i>Kelompok Trial</a></li>
                  <li><a href="<?= site_url('berbayar')?>"><i class="fa fa-circle-o"></i>Kelompok Berbayar</a></li>
                  <li><a href="<?= site_url('bimbel') ?>"><i class="fa fa-circle-o"></i>Kelompok Bimbel</a></li>
              </ul>
            </li>
            <li class="treeview">
                <a href="<?= site_url('bankSoal')?>">
                <i class="fa fa-bank"></i>
                <span>Soal</span>
                <span class="label label-success pull-right">new</span>
              </a>
            </li>
            <li class="treeview">
                <a href="<?= site_url('cekJawaban')?>">
                <i class="fa fa-check-circle"></i>
                <span>Jawaban</span>
              </a>
            </li>
            <li class="treeview">
                <a href="<?= site_url('tambahTryOut')?>">
                <i class="fa fa-plus"></i> <span>Tambah Try Out</span>
              </a>
            </li>
          </ul>
        </section><!--
        <!-- /.sidebar -->
      </aside>