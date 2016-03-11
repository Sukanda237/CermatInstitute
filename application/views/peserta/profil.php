<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Cermat Institute</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url(); ?>assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?= site_url('index'); ?>" class="logo"><b>Login</b> User</a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>

            <div class="top-menu">
              <ul class="nav pull-right top-menu navbar-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle logout" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Profil</a>
                      <ul class="dropdown-menu">
                          <li><a href="<?= site_url('profil'); ?>"><span class="glyphicon glyphicon-user"></span> Lihat Profil</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Another action</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-book"></span> Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="<?= site_url('login'); ?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a></li>
                      </ul>
                    </li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="<?= site_url('profil'); ?>"><img src="<?= base_url(); ?>assets/img/fr-05.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">User</h5>
                    
                  <li class="mt">
                      <a href="<?= site_url('index'); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Profil</span>
                      </a>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <!-- <section id="main-content">
          <section class="wrapper">
            
              <div class="row">
  
                  <div class="col-lg-9 main-chart">
            
                       <div class="alert alert-danger">
                          Untuk Dapat Mengaktifkan Semua Fitur, Aktifkan Versi <a href="#"><strong><big>Premium</big></strong></a>!
                        </div> -->

                        <section id="main-content">
          <section class="wrapper main-chart">
          <div class="alert alert-danger">
                          Untuk Dapat Mengaktifkan Semua Fitur, Aktifkan Versi <a href="#"><strong><big>Premium</big></strong></a>!
                        </div>
            <h3><i class="fa fa-user"></i> Halaman Profil</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Identitas Peserta</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Peserta</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><strong>IPA2016001</strong></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><strong>Mahmud Soleh</strong></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><strong>Jl. Dr. Setiabudhi 193 Bandung</strong></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Telp/Hp</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><strong>087711223344</strong></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">E-Mail</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static"><strong>Mahmud.123@gmail.com</strong></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tingkat Pendidikan</label>
                              <div class="col-sm-10">
                                 <p class="form-control-static"><strong>SMP</strong></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Bimbel</label>
                              <div class="col-sm-10">
                                 <p class="form-control-static"><strong>IPA</strong></p>
                              </div>
                          </div>
                          
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
      
            
    </section><! --/wrapper -->
      </section>
                    
          
          
                  <!-- </div> -->
                  <!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *****************************************************************************************************************************************
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="<?= site_url('index'); ?>" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?= base_url(); ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?= base_url(); ?>assets/js/sparkline-chart.js"></script>    
  <script src="<?= base_url(); ?>assets/js/zabuto_calendar.js"></script>  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
