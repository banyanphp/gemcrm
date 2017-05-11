<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Target List</title>
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
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/tables/datatable/dataTables.bootstrap4.min.css">
        <!-- END Vendor CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
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

        <!-- END PRELOADER-->

        <?php include'header.php' ?>

        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">



                </div>
                <div class="content-body"><!-- DOM - jQuery events table -->




                    <section id="file-export">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Target List</h4>
                                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

                                    </div>
                                    <div class="card-body collapse in">
                                        <div class="card-block card-dashboard">
                                            <table class="table table-striped table-bordered file-export">
                                                <thead>
                                                    <tr>
                                                        <th>Year Name</th>
                                                        <th>Target(Rs)</th>
                                                        <th>Achieved Target</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>





                                                <tbody>

                                                    <?php
                                                    include 'dbconnect.php';
                                                    $q = mysqli_query($conn, "select * from tbl_target where target_status='1'");
                                                    while ($row = mysqli_fetch_array($q)) {
                                                        $ids = $row['target_id'];
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['target_year']; ?></td>
                                                            <td><?php echo $row['target_amount']; ?></td>
                                                            <td><?php
                                                                $total = '0';
                                                                $sqlamount = "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$ids' and enq_status='Completed'";

                                                                $result = mysqli_query($conn, $sqlamount);
                                                                while ($gauge = mysqli_fetch_array($result)) {
                                                                    $qno = $gauge['enq_quotation'];
                                                                    $qamount = "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
                                                                    $resultss = mysqli_query($conn, $qamount);
                                                                    $results = mysqli_fetch_array($resultss);
                                                                    $total+= $results['total'];
                                                    }
                                                                echo $total; ?></td>
                                                            <td> <a href="view_target_list.php?id=<?php echo $row['target_id']; ?>" class="btn btn-success"><i class="icon-eye"></i></a>
                                                             
                                    <a href="update_target.php?id=<?php echo $row['target_id']; ?>" class="btn btn-info"><i class="icon-pencil"></i></a>                       
									<button type="button" onclick="deletetarget(<?php echo $ids; ?>)" class="delete btn btn-primary"><i class="icon-check"></i></button></td>

                                                        </tr>
                                                    <?php } ?>

                                                </tbody>


                                                <tfoot>
                                                    <tr>
                                                        <th>Year Name</th>
                                                        <th>Target(Rs)</th>
                                                        <th>Achieved Target</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- File export table -->

                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->


        <footer class="footer footer-light">
            <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">banyaninfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
        </footer>

        <!-- BEGIN VENDOR JS-->
        <script src="robust-assets/js/vendors.min.js"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="robust-assets/js/plugins/tables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/buttons.flash.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/jszip.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/pdfmake.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/vfs_fonts.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/buttons.html5.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/tables/buttons.print.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="robust-assets/js/app.min.js"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="robust-assets/js/components/tables/datatables/datatable-advanced.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/target/deletetarget.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    </body>
</html>