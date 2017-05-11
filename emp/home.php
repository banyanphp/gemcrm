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
    
  <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/extensions/unslider.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/sliders/slick/slick.css">    
	<link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/chartist.css">

    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/c3.css">
    <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/components/weather-icons/climacons.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
	    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/morris.css">
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
           <div class="col-xs-12" style="margin-bottom:10px;text-align:center;">
					
					<a href="enquiry_list.php">
					<div class="col-xs-3 col-sm-2 col-md-3" style="float:left;">
						<button class="btn btn-lg" style="background-color: #D98880;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom:10px;"> <i class="icon-paper" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 20px;">Enquiry</h5>
						
					</div></a>
					
					<a href="task_list.php"><div class="col-xs-3 col-sm-2 col-md-3" style="float:left;">
						<button class="btn btn-lg" style="background-color:#76D7C4;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom:10px;"> <i class="ficon icon-mail6" style="font-size:30px;"></i>  </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Task</h5>
						
					</div></a>
					<a href="campaign_list.php"><div class="col-xs-3 col-sm-2 col-md-3" style="float:left;">
						<button class="btn btn-lg" style="background-color:#7DCEA0;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-ei-trophy" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Campaign</h5>
					</div></a>
					<a href="appointment_list.php"><div class="col-xs-3 col-sm-2 col-md-3" style="float:left;">
						<button class="btn btn-lg"style="background-color:#F7DC6F;color:#ffffff;border-radius: 50%;padding: 30px;"> <i class="icon-calendar4" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Appointment</h5>
					</div></a>
					<!--<a href="enquiry_list.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" style="background-color:#F0B27A;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-note" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Enquiry</h5>
					</div></a>-->
				
        </div>
        
             <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Monthly Target </h4>
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
                        <div id="column-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
        
     <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Month Target(In Qty)</h4>
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
                        <div id="columns-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    
  
             
            
            
 <div class="row">
 
     <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ordered Products</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div id="pie-3d-exploded"></div>
                    </div>
                </div>
            </div>
        </div>
		       <div class="col-xs-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Enquiry Products</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <!--<div id="pie-custom-labels" class="height-400"></div>-->
                         <div id="pie-3d-explodeds"></div>
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
    <script src="robust-assets/js/components/charts/c3/bar-pie/pie.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/stacked-bar.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/bar-pie/stacked-column.js" type="text/javascript"></script>
  
       

	<script src="robust-assets/js/components/charts/c3/other/combine.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/guage.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/scatter-plot.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/sub.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/timeseries.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/zoom.js" type="text/javascript"></script>


  
    <script src="robust-assets/js/components/charts/google/pie/3d-pie-exploded.js" type="text/javascript"></script>
	
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
  

<!-- 3d pie exploded-->
<?php 

	  $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select target_id,target_amount from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($conn, $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
 $year_id                           = $year['target_id'];
    	
$user_code=$_SESSION['user_code']; 
  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and `enq_status`='Completed' and enq_alloted_to='$user_code' and `enq_month_id`='$month'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  
		   $qno=$gauge['enq_quotation'];

		  	$dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='1'"; $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totaldryerqty+=$dryerqty['totalqty'];
}
 $chilleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2'";
 $resultchiller= mysqli_query($conn, $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3'";
 $resultcooler= mysqli_query($conn, $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5'";
 $resultsmall= mysqli_query($conn, $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4'";
 $resultvar= mysqli_query($conn, $varamt);
$varqty=mysqli_fetch_array($resultvar);{

$totalvarqty+=$varqty['totalqty'];
}
}
?>
<script>
function drawPie3dExploded() {
    var a=google.visualization.arrayToDataTable([["Task", "Hours per Day"], ["dryer", <?php  echo $totaldryerqty; ?>], ["chiller", <?php  echo $totalchillerqty; ?>], ["Cooling Tower", <?php  echo $totalcoolerqty; ?>], ["Var", <?php  echo $totalvarqty; ?>], ["Small", <?php  echo $totalsmallqty; ?>]]),
    b= {
        title:"Products Ordered",
        is3D:!0,
        pieSliceText:"label",
        height:400,
        fontSize:12,
        colors:["#99B898",
        "#FECEA8",
        "#FF847C",
        "#E84A5F",
        "#474747"],
        chartArea: {
            left: "5%", width: "90%", height: 350
        }
        ,
        slices: {
            1: {
                offset: .2
            }
            ,
            2: {
                offset: .15
            }
            ,
            3: {
                offset: .16
            }
            ,
            4: {
                offset: .12
            }
        }
    }
    ,
    c=new google.visualization.PieChart(document.getElementById("pie-3d-exploded"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawPie3dExploded),
$(function() {
    function a() {
        drawPie3dExploded()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);
</script>
<?php
$q="select count(enq_id)as total from tbl_enquiry where enq_status='Completed'";
 $resultq= mysqli_query($conn,$q);
$varq=mysqli_fetch_array($resultq);
$completed=$varq['total'];
$q1="select count(enq_id)as total from tbl_enquiry where enq_status='Process'";
 $resultq1= mysqli_query($conn,$q1);
$varq1=mysqli_fetch_array($resultq1);
$Process=$varq1['total'];

$q2="select count(enq_id)as total from tbl_enquiry where enq_status='Dropped'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$Dropped=$varq2['total'];

 ?>
<?php /* <script>

$(window).on("load", function() {
    var a= {
        labels: ["Completed", "Process", "Dropped"], series: [<?php echo $completed; ?>, <?php echo $Process; ?>, <?php echo $Dropped; ?>]
    }
    , b= {
        labelInterpolationFnc:function(a) {
            return a[0]
        }
    }
    , c=[["screen and (min-width: 640px)", {
        chartPadding:30, labelOffset:100, labelDirection:"explode", labelInterpolationFnc:function(a) {
            return a
        }
    }
    ], ["screen and (min-width: 1024px)", {
        labelOffset: 80, chartPadding: 20
    }
    ]];
    new Chartist.Pie("#pie-custom-labels", a, b, c)
}

);
</script> */?>

<?php
$q="select count(enq_id)as total from tbl_enquiry where enq_product_series='1' and enq_created_by='$user_code' and enq_month_id= '$month'";
 $resultq= mysqli_query($conn,$q);
$varq=mysqli_fetch_array($resultq);
$totaldryerqty=$varq['total'];
$q1="select count(enq_id)as total from tbl_enquiry where enq_product_series='2'and enq_created_by='$user_code'and enq_month_id= '$month'";
 $resultq1= mysqli_query($conn,$q1);
$varq1=mysqli_fetch_array($resultq1);
$totalchillerqty=$varq1['total'];

$q2="select count(enq_id)as total from tbl_enquiry where enq_product_series='3'and enq_created_by='$user_code'and enq_month_id= '$month'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$totalcoolerqty=$varq2['total'];
$q2="select count(enq_id)as total from tbl_enquiry where enq_product_series='4'and enq_created_by='$user_code'and enq_month_id= '$month'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$totalvarqty=$varq2['total'];
$q2="select count(enq_id)as total from tbl_enquiry where enq_product_series='5'and enq_created_by='$user_code' and enq_month_id= '$month'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$totalsmallqty=$varq2['total'];
 ?>
<script>
function drawPie3dExploded() {
    var a=google.visualization.arrayToDataTable([["Task", "Hours per Day"], ["dryer", <?php  echo $totaldryerqty; ?>], ["chiller", <?php  echo $totalchillerqty; ?>], ["cooler", <?php  echo $totalcoolerqty; ?>], ["Var", <?php  echo $totalvarqty; ?>], ["Small", <?php  echo $totalsmallqty; ?>]]),
    b= {
        title:"Enquiry Products",
        is3D:!0,
        pieSliceText:"label",
        height:400,
        fontSize:12,
        colors:["#99B898",
        "#FECEA8",
        "#FF847C",
        "#E84A5F",
        "#474747"],
        chartArea: {
            left: "5%", width: "90%", height: 350
        }
        ,
        slices: {
            1: {
                offset: .2
            }
            ,
            2: {
                offset: .15
            }
            ,
            3: {
                offset: .16
            }
            ,
            4: {
                offset: .12
            }
        }
    }
    ,
    c=new google.visualization.PieChart(document.getElementById("pie-3d-explodeds"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawPie3dExploded),
$(function() {
    function a() {
        drawPie3dExploded()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);
</script>
<?php

  $q="SELECT * FROM `tbl_user_target_for_the_month` WHERE `user_target_user_code`=$user_code and `user_target_status`='1' ORDER BY `tbl_user_target_for_the_month`.`user_target_month_id` ASC ";
$res=mysqli_query($conn,$q);
$response=array();
 	  $user=array();
 	 

while($row=mysqli_fetch_array($res)){
	
		
		 $month=$row['user_target_month_id'];
		 $fetch_month=mysqli_fetch_array(mysqli_query($conn,"select month_name from tbl_target_month where target_month_id='$month'"));
		 $total="0";
		 $qs="SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and `enq_status`='Completed' and `enq_alloted_to`='$user_code' and `enq_month_id`='$month'";
$getaacheived= mysqli_query($conn,$qs);
while($acheived_array=mysqli_fetch_array($getaacheived)){
	 $qno=$acheived_array['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($conn, $qamount);
   $results                    = mysqli_fetch_array($resultss);
  $total+= $results['total'];
}		 
		 
		$user['month']=$fetch_month['month_name'];
		
		  $user['target']= $row['user_target_amount'];
		  $user['acheived']= $total;
		 
		 

	

  array_push($response, $user);
}
$count=count($response);

?>
<script>
 
var tempArray = <?php echo json_encode($response); ?>;
var count=<?php echo $count?>;
var k="";


	
function drawColumn() {
     var a=google.visualization.arrayToDataTable([["Year", "Target(in Rs)", "Acheived(in Rs)"],<?PHP for($i=0;$i<$count;$i++){ ?>["<?php echo $response[$i]['month']?>",<?php echo $response[$i]['target']?>,<?php echo $response[$i]['acheived']?>],
<?php } ?>
	]),
   
 b= {
		'width': 960,
        height:400,

        fontSize:12,
        colors:["#2494be",
        "#F6B75A"],
        chartArea: {
            left: "10%", width: "100%",
        height: 350,
      
        }
        ,
        vAxis: {
            gridlines: {
                color: "#e9e9e9", count: 10
            }
            ,
            minValue:0
        }
        ,
		hAxis : {viewWindow : {max : 4}},

        legend: {
            position:"top",
            alignment:"center",
            textStyle: {
                fontSize: 12
            }
        }
    }
    ,
    c=new google.visualization.ColumnChart(document.getElementById("column-chart"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawColumn),
$(function() {
    function a() {
        drawColumn()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);

 </script>
 
 
<?php 

	  $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select target_id,target_amount from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($conn, $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
 $year_id                           = $year['target_id'];
    	
$user_code=$_SESSION['user_code']; 
  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and `enq_status`='Completed' and enq_alloted_to='$user_code' and `enq_month_id`='$month'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		 
		  $qno=$gauge['enq_quotation'];

		  	$dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='1'"; $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totaldryerqty+=$dryerqty['totalqty'];
}
 $chilleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2'";
 $resultchiller= mysqli_query($conn, $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3'";
 $resultcooler= mysqli_query($conn, $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5'";
 $resultsmall= mysqli_query($conn, $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4'";
 $resultvar= mysqli_query($conn, $varamt);
$varqty=mysqli_fetch_array($resultvar);{

$totalvarqty+=$varqty['totalqty'];
}
}

  $q222   = "SELECT * FROM `tbl_user_target_for_the_month` WHERE `user_target_user_code`='$user_code' and `user_target_month_id`='$month'";
    $q322   = mysqli_query($conn, $q222);
 $row22 = mysqli_fetch_array($q322);


 $user_target_dryer="0";
$user_target_chiller="0";
$user_target_cooler="0";
$user_target_var="0";
$user_small_products="0";
//DRYER
    $user_target_dryer+= $row22["user_target_dryer"];
    
    //DRYER
    
    //CHILLER
    $user_target_chiller+= $row22["user_target_chiller"];
  
    
  
    //COOLER
    
    $user_target_cooler+= $row22["user_target_cooler"];
      
  
    
    //VAR
    
    $user_target_var+= $row22["user_target_var"];
    
 
    
    $user_small_products+= $row22["user_target_small_products"];
?>
 <script>
 	function drawColumn() {
		var a=google.visualization.arrayToDataTable([["Month", "Target", "Acheived"], ["Dryer",<?php echo $user_target_dryer;?>,<?php echo $totaldryerqty;?>],["chiller",<?php echo $user_target_chiller;?>,<?php echo $totalchillerqty;?>],["cooling tower",<?php echo $user_target_cooler;?>,<?php echo $totalcoolerqty;?>],["Var Products",<?php echo $user_target_var;?>,<?php echo $totalvarqty;?>],["Small Products",<?php echo $user_small_products;?>,<?php echo $totalsmallqty;?>]]),
		b= {
			height:400,
			fontSize:12,
			colors:["#673ab7",
			"#e91e63"],
			chartArea: {
				left: "5%", width: "90%", height: 350
			}
			,
			vAxis: {
				gridlines: {
					color: "#e9e9e9", count: 10
				}
				,
				minValue:0
			}
			,
			legend: {
				position:"top",
				alignment:"center",
				textStyle: {
					fontSize: 12
				}
			}
		}
		,
		c=new google.visualization.ColumnChart(document.getElementById("columns-charts"));
		c.draw(a, b)
	}

	google.load("visualization", "1.0", {
		packages: ["corechart"]
	}

	),
	google.setOnLoadCallback(drawColumn),
	$(function() {
		function a() {
			drawColumn()
		}
		$(window).on("resize", a), $(".menu-toggle").on("click", a)
	}

	);
	</script>
  </body>
</html>