<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>PROJECT KP</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('css/bootstrap.min.css" rel="stylesheet')?>">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('css/bootstrap-theme.css" rel="stylesheet')?>">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('css/elegant-icons-style.css" rel="stylesheet')?>" />
  <link href="<?php echo base_url('css/font-awesome.min.css" rel="stylesheet')?>" />
  <!-- full calendar css-->
  <link href="<?php echo base_url('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet')?>" />
  <link href="<?php echo base_url('assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet')?>" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen')?>" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.css" type="text/css')?>">
  <link href="<?php echo base_url('css/jquery-jvectormap-1.2.2.css" rel="stylesheet')?>">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('css/fullcalendar.css')?>">
  <link href="<?php echo base_url('css/widgets.css" rel="stylesheet')?>">
  <link href="<?php echo base_url('css/style.css" rel="stylesheet')?>">
  <link href="<?php echo base_url('css/style-responsive.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('css/xcharts.min.css')?>" rel=" stylesheet">
  <link href="<?php echo base_url('css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">PROJECT<span class="lite">KP</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>


      <div class="top-nav notification-row">
        You are not logged in. (<a href="login">Login</a>)

        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="deactive">
            <a class="" href="admin">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <li class="active">
            <a href="users" class="" >
                          <i class="icon_table"></i>
                          <span>Pengguna</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="kelas" class="">
                          <i class="icon_table"></i>
                          <span>Kelas</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Pengguna</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="admin">Dashboard</a></li>
              <li><i class="fa fa-laptop"></i>Pengguna</li>
            </ol>
          </div>
        </div>



        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Elements
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Default</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Help text</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                      <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rounder</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control round-input">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Input focus</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Disabled</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Placeholder</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="placeholder">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Static control</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">email@example.com</p>
                    </div>
                  </div>
                </form>
              </div>
            </section>


         <!-- javascripts -->
 <script src="<?php echo base_url('js/jquery.js')?>"></script>
  <script src="<?php echo base_url('js/jquery-ui-1.10.4.min.js')?>"></script>
  <script src="<?php echo base_url('js/jquery-1.8.3.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/jquery-ui-1.9.2.custom.min.js')?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url('js/jquery.scrollTo.min.js')?>"></script>
  <script src="<?php echo base_url('js/jquery.nicescroll.js" type="text/javascript')?>"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url('assets/jquery-knob/js/jquery.knob.js')?>"></script>
  <script src="<?php echo base_url('js/jquery.sparkline.js" type="text/javascript')?>"></script>
  <script src="<?php echo base_url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')?>"></script>
  <script src="<?php echo base_url('js/owl.carousel.js')?>"></script>
  <!-- jQuery full calendar -->
  <script src="<?php echo base_url('js/fullcalendar.min.js')?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assets/fullcalendar/fullcalendar/fullcalendar.js')?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('js/calendar-custom.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.rateit.min.js')?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('js/jquery.customSelect.min.js')?>"></script>
    <script src="<?php echo base_url('assets/chart-master/Chart.js')?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('js/scripts.js')?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('js/sparkline-chart.js')?>"></script>
    <script src="<?php echo base_url('js/easy-pie-chart.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-jvectormap-world-mill-en.js')?>"></script>
    <script src="<?php echo base_url('js/xcharts.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.autosize.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.placeholder.min.js')?>"></script>
    <script src="<?php echo base_url('js/gdp-data.js')?>"></script>
    <script src="<?php echo base_url('js/morris.min.js')?>"></script>
    <script src="<?php echo base_url('js/sparklines.js')?>"></script>
    <script src="<?php echo base_url('js/charts.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.slimscroll.min.js')?>"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>