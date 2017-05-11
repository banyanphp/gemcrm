<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard- Gemindia </title>
    <link rel="apple-touch-icon" sizes="60x60" href="robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="robust-assets/css/vendors.min.css"/>
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/extensions/unslider.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/c3.css">
    <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/components/weather-icons/climacons.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

  <?php include 'header.php';?>

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Sales stats -->
           
        
             <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target(In Rs) </h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                      
                        <ul class="list-inline mb-0">
                            <li>   <a href="team_home.php"class="btn btn-info" style="color:#fff">View </a>  </li>
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>  
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="column-chartS"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
        
     <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target(In Qty)</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>  
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                     <div id="stacked-column-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    
  
             
            
            
 <div class="row">
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                            <i class="icon-camera7 font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-cyan white media-body">
                            <h5>New Enquiries</h5>
                            <h5 class="text-bold-400">28</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                            <i class="icon-user1 font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-deep-orange white media-body">
                            <h5>Sales Executives</h5>
                            <h5 class="text-bold-400">1000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                            <i class="icon-note font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-teal white media-body">
                            <h5>Pending Enquiry</h5>
                            <h5 class="text-bold-400">10</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                            <i class="icon-banknote font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-pink white media-body">
                            <h5>Today Enquiry</h5>
                            <h5 class="text-bold-400">10</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 bg-pink white media-body text-xs-left">
                            <h5>Today Scheduled Enquiry</h5>
                            <h5 class="text-bold-400">8</h5>
                        </div>
                        <div class="p-2 text-xs-center bg-pink bg-darken-2 media-right media-middle">
                            <i class="icon-camera7 font-large-2 white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 bg-teal white media-body text-xs-left">
                            <h5>Today Task</h5>
                            <h5 class="text-bold-400">5</h5>
                        </div>
                        <div class="p-2 text-xs-center bg-teal bg-darken-2 media-right media-middle">
                            <i class="icon-user1 font-large-2 white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 bg-deep-orange white media-body text-xs-left">
                            <h5>Total Enquiry</h5>
                            <h5 class="text-bold-400">1345</h5>
                        </div>
                        <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-right media-middle">
                            <i class="icon-note font-large-2 white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="p-2 bg-cyan white media-body text-xs-left">
                            <h5> Completed Enquiry</h5>
                            <h5 class="text-bold-400">68</h5>
                        </div>
                        <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-right media-middle">
                            <i class="icon-banknote font-large-2 white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-light">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="#" target="_blank" class="text-bold-800 grey darken-2">Banyan Infotech </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/charts/d3.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/charts/c3.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->    <script src="https://www.google.com/jsapi" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/column.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/donut.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/pie.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/stacked-bar.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/stacked-column.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/charts/google/bar/bar.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/bar-stacked.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/bar-intervals.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/column_team.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/charts/google/bar/columns_Team.js" type="text/javascript"></script>

    <script src="robust-assets/js/components/charts/google/bar/stacked-column.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/combo.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/histogram.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>