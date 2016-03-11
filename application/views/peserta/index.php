<?php $this->load->view('modular/header') ?>  
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
        <a href="<?= site_url('indexpeserta'); ?>" class="logo"><b>Login</b> User</a>
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
                    <a class="active" href="<?= site_url('indexpeserta'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-desktop"></i>
                        <span>Soal</span>
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
    <section id="main-content">
        <section class="wrapper">

            <div class="row">

                <div class="col-lg-9 main-chart">

                    <div class="alert alert-danger">
                        Untuk Dapat Mengaktifkan Semua Fitur, Aktifkan Versi <a href="#"><strong><big>Premium</big></strong></a>!
                    </div>

                    <div class="row">
                        <!-- TWITTER PANEL -->
                        <a href="ujian.html">
                            <div class="col-md-4 mb">
                                <!-- INSTAGRAM PANEL -->
                                <div class="darkblue-panel pn btn btn-block">

                                    <div class="darkblue-header">
                                        <h5></h5>
                                    </div>
                                    <i class="fa fa-book fa-5x"></i>
                                    <h3>TryOut</h3>
                                    <p>Lihat Pilihan Soal TryOut</p>

                                </div>
                            </div><!-- /col-md-4 -->
                        </a>


                        <div class="col-md-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="darkblue-panel pn btn btn-block">
                                <a href="pembahasan.html">
                                    <div class="darkblue-header">
                                        <h5></h5>
                                    </div>
                                    <i class="fa fa-comment-o fa-5x"></i>
                                    <h3>Pembahasan</h3>
                                    <p>Pembahasan Soal-Soal</p>
                                </a>  
                            </div>
                        </div><!-- /col-md-4 -->

                        <div class="col-md-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="darkblue-panel pn btn btn-block">
                                <a href="nilai.html">
                                    <div class="darkblue-header">
                                        <h5></h5>
                                    </div>
                                    <i class="fa fa-check-circle fa-5x"></i>
                                    <h3>Nilai</h3>
                                    <p>Riwayat nilai-nilai</p>
                                </a>
                            </div>
                        </div><!-- /col-md-4 --> 

                    </div><!-- /row -->

                    <div class="row mt">
                        <!--CUSTOM CHART START -->

                        <!--custom chart end-->
                    </div><!-- /row -->	

                </div><!-- /col-lg-9 END SECTION MIDDLE -->


                <!-- **********************************************************************************************************************************************************
                RIGHT SIDEBAR CONTENT
                *********************************************************************************************************************************************************** -->                  

                <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                    <h3>Berita Terbaru</h3>

                    <!-- First Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>2 Minutes Ago</muted><br/>
                            <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Second Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>3 Hours Ago</muted><br/>
                            <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Third Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>7 Hours Ago</muted><br/>
                            <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Fourth Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>11 Hours Ago</muted><br/>
                            <a href="#">Mark Twain</a> commented your post.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Fifth Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>18 Hours Ago</muted><br/>
                            <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                            </p>
                        </div>
                    </div>

                    <!-- USERS ONLINE SECTION -->
                    <h3>TEAM MEMBERS</h3>

                </div><!-- /col-lg-3 -->
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
<script src="assets/js/zabuto_calendar.js"></script>	


<script type="<?= base_url(); ?>application/javascript">
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
