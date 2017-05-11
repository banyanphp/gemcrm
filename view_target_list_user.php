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
                                        <h4 class="card-title">Target List for  <?php     $id = $_GET['id'];
                                                   
$total='';
                                                    include 'dbconnect.php';   $q1 = mysqli_query($conn, "select * from tbl_user_target_for_the_month where user_target_id='$id'");
                                                    $row1 = mysqli_fetch_array($q1);
                                                    $name2=$row1['user_target_user_code'];
                                    $q21="select * from tbl_user where `user_code`='$name2'";
                                 
                                    $r2=mysqli_query($conn,$q21);
                                    $row2= mysqli_fetch_array($r2);
                                    echo $name3=$row2['user_name'];
                                                    ?></h4>
                                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

                                    </div>
                                    <div class="card-body collapse in">
                                        <div class="card-block card-dashboard">
                                            <table class="table table-striped table-bordered file-export">
                                                <thead>
                                                    <tr>
                                                        <th>Year </th> <th>Month </th>
                                                        <th>Target</th>

                                                        <th>Fixed Target</th>
                                                        <th>Achieved Target</th>

                                                    </tr>
                                                </thead>





                                                <tbody>


                                                    <?php
                                                    $id = $_GET['id'];
                                                   
$total='';
                                                    include 'dbconnect.php';
                                                    $q = mysqli_query($conn, "select * from tbl_user_target_for_the_month where user_target_id='$id'");
                                                    while ($row = mysqli_fetch_array($q)) {
														

                                                        $q1 = mysqli_query($conn, "select * from tbl_product_category");
                                                        while ($res = mysqli_fetch_array($q1)) {
                                                            $r = $res['product_category_name'];
                                                            ?>
                                                            <tr>

                                                                <td><?php
                                                                    $yid = $row['user_targer_year_id'];
                                                                    $q23 = "select * from tbl_target where target_id='$yid'";

                                                                    $q111 = mysqli_query($conn, $q23);
                                                                    $row11 = mysqli_fetch_array($q111);
                                                                    echo $row11['target_year'];
                                                                    ?></td>
                                                                <td><?php
                                                                    $mid = $row['user_target_month_id'];

                                                                    $monthq = "select * from tbl_target_month where target_month_id='$mid'";

                                                                    $monthres = mysqli_query($conn, $monthq);
                                                                    $monthrow = mysqli_fetch_array($monthres);
                                                                    echo $monthrow['month_name'];
                                                                    ?></td>
                                                                <td><?php echo $res['product_tbl_name']; ?></td>
                                                                <td><?php echo $row['user_target_' . $r]; 
                                                                
                                                             $total+=$row['user_target_'. $r]; 
                                                                ?></td>
                                                                         <td>
										  <?php
										  if($r=='dryer'){
											

$sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where enq_status='Completed'  and enq_year_id='$yid' and enq_month_id='$mid' and enq_alloted_to='$name2'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

		  	 $dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='1' and `quotation_status`='1' ";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totaldryerqty+=$dryerqty['totalqty'];
}

}echo $totaldryerqty;		
									

										  }
										   if($r=='chiller'){
											
$sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where enq_status='Completed'  and enq_year_id='$yid' and enq_month_id='$mid' and enq_alloted_to='$name2'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

		  	 $dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2' and `quotation_status`='1' ";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totalchillerqty+=$dryerqty['totalqty'];
}

}echo $totalchillerqty;		
	
										  }
										   if($r=='cooler'){
										$sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where enq_status='Completed'  and enq_year_id='$yid' and enq_month_id='$mid' and enq_alloted_to='$name2'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

		  	 $dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3' and `quotation_status`='1' ";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totalchillerqty+=$dryerqty['totalqty'];
}

}echo $totalchillerqty;		
	
										  }
										   if($r=='var'){
											 $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where enq_status='Completed'  and enq_year_id='$yid' and enq_month_id='$mid' and enq_alloted_to='$name2'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

		  	 $dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4' and `quotation_status`='1' ";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totalvarqty+=$dryerqty['totalqty'];
}

}echo $totalvarqty;		
	
										  }
										  if($r=='small_products'){
											 $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where enq_status='Completed'  and enq_year_id='$yid' and enq_month_id='$mid' and enq_alloted_to='$name2'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

		  	 $dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5' and `quotation_status`='1' ";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totalvarqty+=$dryerqty['totalqty'];
}

}echo $totalvarqty;		
	
										  }
										  if($r=='enquiry'){
											 $q33=mysqli_fetch_array(mysqli_query($conn,"select count(`enq_product_qty`) as count from tbl_enquiry where  enq_year_id='$yid' and enq_month_id='$mid' and  enq_created_by='$name2'"));
												if($q33['count']!=''){
													 echo $q33['count'];
											}
											else{
												echo "0";
											}
										  }
										    if($r=='campaign'){
											  $q33=mysqli_fetch_array(mysqli_query($conn,"select count(`campaign_id`) as count from tbl_campaign where campaign_year_id='$yid'and campaign_month_id='$mid' and created_by='$name2'"));
												if($q33['count']!=''){
													 echo $q33['count'];
											}
											else{
												echo "0";
											}
										  }
										  
										  ?></td>
                                                            </tr>
    <?php }
} ?>


                                                </tbody>


                                                <tfoot>
                                                   
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
        <!-- END PAGE LEVEL JS-->
    </body>
</html>