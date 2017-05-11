<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
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
	    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/charts/morris.css">

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
 
<?php include 'dbconnect.php';
	
	  $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select * from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($conn, $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
    
    $year_id                           = $year['target_id'];
    $target_amount= $year['target_amount'];
    $target_dryer= $year['target_dryer'];
    $target_chiller= $year['target_chiller'];
    $target_cooler= $year['target_cooler'];
    $target_var= $year['target_var'];
    $target_small_products= $year['target_small_products'];
    $target_enquiry= $year['target_enquiry'];
    $target_campaign= $year['target_campaign'];
   $target_year= $year['target_year'];
$total='0';
	  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and enq_status='Completed'";
	  
	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($conn, $qamount);
   $results                    = mysqli_fetch_array($resultss);
 $total+= $results['total'];
 
	  }
		
  $percent=$total/$target_amount; 
 $percentage=$percent*100;
	$dates=explode("to",$target_year);
	$datetoday=date("Y-m-d");
$startTimeStamp = strtotime($dates['0']);
$endTimeStamp = strtotime($dates['1']);

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);

$businessrate=$target_amount/$numberDays;


$todayTimeStamp = strtotime($datetoday);
$timeDiff = abs($todayTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);


$tobusinessrate=$total/$numberDays;

$timeDiff = abs($endTimeStamp - $todayTimeStamp );

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);
$balance=$target_amount-$total;
$rebusinessrate=$balance/$numberDays;


?>
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
		<div class="col-xs-12" style="margin-bottom:10px;text-align:center;">
					<a href="enquiry_list.php" style="margin-bottom:10px;margin-left:1px;">
					<div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" STYLE="background-color: #D98880;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-paper" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Enquiry</h5>
						
					</div></a>
					<a href="sales_executive_list.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" style="background-color:#C39BD3;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-briefcase" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">User</h5>
						
					</div></a>
					<a href="task_list.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" style="background-color:#76D7C4	;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom:10px;margin-left:20px;"> <i class="ficon icon-mail6" style="font-size:30px;"></i>  </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Task</h5>
					</div></a>
					
					<a href="campaign_list.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" style="background-color:#7DCEA0;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;margin-left: 15px;"> <i class="icon-ei-trophy" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Campaign</h5>
					</div></a>
					
					<a href="appointment_list.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg"style="background-color:#F7DC6F;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-edit2" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Appointment</h5>
					</div></a>
					
					<a href="enquiry_list.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" style="background-color:#F0B27A;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-caret-square-o-right" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left: 15px;">Conference</h5>
					</div></a>
					
					<a href="scedulelist.php"><div class="cpl-xs-2" style="float:left;margin-left: 10px;">
						<button class="btn btn-lg" style="background-color:#E74C3C;color:#ffffff;border-radius: 50%;padding: 30px;margin-bottom: 10px;margin-left:20px;"> <i class="icon-location3" style="font-size:30px;"></i> </button><br>
						<h5 style="text-align:center;margin-left:20px;">Contact</h5>
					</div></a>
					
        </div>
        </div>
		
 
                                            
														
                                                   
        <div class="content-body" style="">
		<div class="col-xs-12">
		    <div class="card" style="">
                <div class="card-header">
				<div class="col-md-3">    
		        <label class="label-control" for="projectinput7">Select Status</label></div>
                                           <div class="col-md-3">        
                                                   
                                                        <select class="form-control" id="status" name="status" Onchange="gets(this.value)">
														
                                                            <option value="1">Yearly target</option>
                                                            <option value="2">EnquiryProducts vs Ordered (In Amount)</option>
                                                            <option value="3">EnquiryProducts vs Ordered(In Qty) </option>
                                                        </select>
														</div>  <ul class="list-inline mb-0 " style="float:right">
                            <li>   <a href="team_home.php"class="btn btn-info" style="color:#fff">View Team reports </a>  </li>
							</ul>
														</div></div>
														</div>
														
												<!-- Sales stats -->
		<span id="target">
             <div class="col-xs-12">
            <div class="card" style="height:584px;">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target in amount</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                   
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="gauge-chart"></div><br>
<h3>Run Rate required:Rs.<?php echo round($businessrate,2); ?> Per day</h3><br>
<h3>Current Run  Rate is:Rs.<?php echo round($tobusinessrate,2); ?> Per day</h3><br>

<h3>Required Run Rate is:Rs.<?php echo round($rebusinessrate,2); ?> Per day</h3><br>

                    </div>
                </div>
            </div>
        </div>
      <div class="col-xs-12">
       <div class="col-xs-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target for Campaign & Enquiry</h4>
                   
                    
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="columns-charts"></div>
                    </div>
                </div>
            </div>
			</div>
       
    
   <div class="col-xs-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target for Products</h4>
                   
                   
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="columns-charts-for products"></div>
                    </div>
                </div>
            </div>
        </div>
        
    
  </div>

           <!-- 3d Pie Exploded Chart -->
             
   <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target(In Rs) </h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                   
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="column-chart"></div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ytd&MTD Target in Rs </h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                      
                        
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div id="column-chart-ytd"></div>
                    </div>
                </div>
            </div>
        </div>
		
      
    </div>      
        
		</span>
		
		<span id="qty"style="display:none">
		<div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ordered Products(In Qty)
</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                   
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div id="pie-3d-exploded"></div>
                    </div>
                </div>
            </div>
        </div>
        
		 <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Enquiry Products(In Qty)
</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                       
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div id="pie-3d-explodeds"></div>
                    </div>
                </div>
            </div>
        </div>
		      
		</span>
    
  <span id="amount" style="display:none">
  <div class="col-md-6 col-sm-12">
            <div class="card">
              
                <div class="card-body">
                    <div class="card-block">
                        <div id="pie-3d-exploded-amount-ordered"></div>
                    </div>
                </div>
            </div>
        </div>
		 
		 <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div id="pie-3d-exploded-amount-quotation-given"></div>
                    </div>
                </div>
            </div>
        </div>
		     </span>           
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
        <script src="robust-assets/js/components/charts/google/bar/bar.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/bar-stacked.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/bar-intervals.js" type="text/javascript"></script>
      

    <script src="robust-assets/js/components/charts/google/bar/stacked-column.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/combo.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/bar/histogram.js" type="text/javascript"></script>
	<script src="robust-assets/js/components/charts/c3/other/combine.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/guage.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/scatter-plot.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/sub.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/timeseries.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/c3/other/zoom.js" type="text/javascript"></script>


    <script src="robust-assets/js/components/charts/google/pie/pie.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/pie/pie-exploded.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/pie/pie-rotated.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/pie/3d-pie.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/google/pie/3d-pie-exploded.js" type="text/javascript"></script>


<?php include 'dbconnect.php';
	
	  $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select target_id,target_amount,target_dryer,target_chiller,target_cooler,target_var,target_small_products,target_enquiry,target_campaign from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($conn, $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
    
    $year_id                           = $year['target_id'];
    $target_amount= $year['target_amount'];
    $target_dryer= $year['target_dryer'];
    $target_chiller= $year['target_chiller'];
    $target_cooler= $year['target_cooler'];
    $target_var= $year['target_var'];
    $target_small_products= $year['target_small_products'];
    $target_enquiry= $year['target_enquiry'];
    $target_campaign= $year['target_campaign'];
$total='0';
	  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and enq_status='Completed'";
	  
	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($conn, $qamount);
   $results                    = mysqli_fetch_array($resultss);
  $total+= $results['total'];
 
	  }
		
  $percent=$total/$target_amount; 
 $percentage=$percent*100;
	?>
	<!--gauge chart -->
<script>

$(window).on("load", function() {
    var a = c3.generate({
        bindto: "#gauge-chart",
        data: {
            columns: [
                ["Acheived", 0]
            ],
            type: "gauge",
            onclick: function(a, b) {
                console.log("onclick", a, b)
            },
            onmouseover: function(a, b) {
                console.log("onmouseover", a, b)
            },
            onmouseout: function(a, b) {
                console.log("onmouseout", a, b)
            }
        },
        gauge: {},
        color: {
            pattern: ["#2196F3", "#3F51B5", "#673AB7", "#9C27B0"],
            threshold: {
                values: [30, 60, 90, 100]
            }
        },
        size: {
            height: 250,
			
        }
    });
   setTimeout(function() {
        a.load({
            columns: [
                ["Acheived", 0]
            ]
        })
    }, 4e3), setTimeout(function() {
        a.load({
            columns: [
                ["Acheived", <?php echo $percentage;?>]
            ]
        })
    }, 5e3), $(".menu-toggle").on("click", function() {
        a.resize()
    })
});
</script>
<!-- 3d pie exploded qty-->
<?php 	 
  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and enq_status='Completed'";
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
 $chilleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2' and `quotation_status`='1'";
 $resultchiller= mysqli_query($conn, $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3' and `quotation_status`='1'";
 $resultcooler= mysqli_query($conn, $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5' and `quotation_status`='1'";
 $resultsmall= mysqli_query($conn, $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4' and `quotation_status`='1'";
 $resultvar= mysqli_query($conn, $varamt);
$varqty=mysqli_fetch_array($resultvar);{

$totalvarqty+=$varqty['totalqty'];
}
}
?>
<script>
function drawPie3dExploded() {
    var a=google.visualization.arrayToDataTable([["Task", "Acheived"], ["dryer", <?php  echo $totaldryerqty; ?>], ["chiller", <?php  echo $totalchillerqty; ?>], ["cooling tower", <?php  echo $totalcoolerqty; ?>], ["Var", <?php  echo $totalvarqty; ?>], ["Small", <?php  echo $totalsmallqty; ?>]]),
    b= {
        title:"Product Target",
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
 $q="select count(quotation_id)as total from tbl_quotation where enq_product_group='1' and quotation_status='1'";
 $resultq= mysqli_query($conn,$q);
$varq=mysqli_fetch_array($resultq);
$totaldryerqty=$varq['total'];
$q1="select count(quotation_id)as total from tbl_quotation where enq_product_group='2'and quotation_status='1'";
 $resultq1= mysqli_query($conn,$q1);
$varq1=mysqli_fetch_array($resultq1);
$totalchillerqty=$varq1['total'];

$q2="select count(quotation_id)as total from tbl_quotation where enq_product_group='3'and quotation_status='1'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$totalcoolerqty=$varq2['total'];
$q2="select count(quotation_id)as total from tbl_quotation where enq_product_group='4'and quotation_status='1'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$totalvarqty=$varq2['total'];
$q2="select count(quotation_id)as total from tbl_quotation where enq_product_group='5'and quotation_status='1'";
 $resultq2= mysqli_query($conn,$q2);
$varq2=mysqli_fetch_array($resultq2);
$totalsmallqty=$varq2['total'];
 ?>
<script>
function drawPie3dExploded() {
    var a=google.visualization.arrayToDataTable([["Task", "Hours per Day"], ["dryer", <?php  echo $totaldryerqty; ?>], ["chiller", <?php  echo $totalchillerqty; ?>], ["Cooling Tower", <?php  echo $totalcoolerqty; ?>], ["Var", <?php  echo $totalvarqty; ?>], ["Small", <?php  echo $totalsmallqty; ?>]]),
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

 ?>
<SCRIPT>
function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"],["Yearly Target",<?php echo $target_amount; ?>,<?php echo $total; ?>]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#0f5959",
        "#17a697"],
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
</SCRIPT>

<SCRIPT>
function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"],["Yearly Target",<?php echo $target_amount; ?>,<?php echo $total; ?>]]),
   
 b= {
		'width': 960,
        height:400,

        fontSize:12,
        colors:["#0f5959",
        "#17a697"],
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
</SCRIPT>
  <?php
$total_team_amount7=0;
$total_team_amount=0;
  $monthq= "select sum(team_amount) as total_team_amount from tbl_target_team where month_id='$month'";
  $monthq2= mysqli_query($conn,$monthq);
  $monthq4=mysqli_fetch_array($monthq2);
  $total_team_amount+=$monthq4['total_team_amount'];
 

   $monthq5= "select sum(team_amount) as total_team_amount from tbl_target_team where team_target_status='1'";
 $monthq6= mysqli_query($conn,$monthq5);
  $monthq7=mysqli_fetch_array($monthq6);
  $total_team_amount7+=$monthq7['total_team_amount'];
 ?>
<SCRIPT>
function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"],["Ytd target",<?php echo $total_team_amount7; ?>,<?php echo $total; ?>],["mtd target",<?php echo $total_team_amount; ?>,<?php echo $total; ?>]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#5C34A4",
        "#291749"],
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
    c=new google.visualization.ColumnChart(document.getElementById("column-chart-ytd"));
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
</SCRIPT>
 <?php
 $sqlenquiry="SELECT count(`enq_id`) as total FROM `tbl_enquiry`";
		$resultenq=mysqli_query($conn,$sqlenquiry);
                                    $totalenq=mysqli_fetch_array($resultenq);	
$totalenq = $totalenq['total'];
$sqlcampaign="select count(`campaign_id`) as total from tbl_campaign";
		$resultcampaign=mysqli_query($conn,$sqlcampaign);
                                    $totalcampaign=mysqli_fetch_array($resultcampaign);	
$totalcampaign = $totalcampaign['total'];
 ?>
<script>
function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"],["Enquiry",<?php  echo $target_enquiry;?>,<?php  echo $totalenq;?>], ["Campaign",  <?php echo $target_campaign; ?>,<?php echo $totalcampaign ?>]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#5b1647",
        "#93073e"],
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
<!-- 3d pie exploded ordered amount-->
<?php 	$sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and enq_status='Completed'";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 

	    $result                            = mysqli_query($conn, $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

		  $dryeramt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='1'";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

 $totaldryerqty+=$dryerqty['totalqty'];
}
 $chilleramt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2'";
 $resultchiller= mysqli_query($conn, $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3'";
 $resultcooler= mysqli_query($conn, $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5'";
 $resultsmall= mysqli_query($conn, $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4'";
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
        title:"Product Target",
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
    c=new google.visualization.PieChart(document.getElementById("pie-3d-exploded-amount-ordered"));
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

<?php 	$sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' ";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 


		  $qno=$gauge['enq_quotation'];

		  $dryeramt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `enq_product_group`='1' and `quotation_status`='1' ";
 $resultdryer= mysqli_query($conn, $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totaldryerqty+=$dryerqty['totalqty'];
}
 $chilleramt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where  `enq_product_group`='2' and `quotation_status`='1' ";
 $resultchiller= mysqli_query($conn, $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where   `enq_product_group`='3' and `quotation_status`='1' ";
 $resultcooler= mysqli_query($conn, $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where   `enq_product_group`='5' and `quotation_status`='1' ";
 $resultsmall= mysqli_query($conn, $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_price) as totalqty FROM `tbl_quotation` where `enq_product_group`='4' and `quotation_status`='1' ";
 $resultvar= mysqli_query($conn, $varamt);
$varqty=mysqli_fetch_array($resultvar);{

$totalvarqty+=$varqty['totalqty'];
}

?>
<script>
function drawPie3dExploded() {
    var a=google.visualization.arrayToDataTable([["Task", "Hours per Day"], ["dryer", <?php  echo $totaldryerqty; ?>], ["chiller", <?php  echo $totalchillerqty; ?>], ["Cooling tower", <?php  echo $totalcoolerqty; ?>], ["Var", <?php  echo $totalvarqty; ?>], ["Small", <?php  echo $totalsmallqty; ?>]]),
    b= {
        title:"Product Target",
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
    c=new google.visualization.PieChart(document.getElementById("pie-3d-exploded-amount-quotation-given"));
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
  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and enq_status='Completed'";
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
 $chilleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2' and `quotation_status`='1'";
 $resultchiller= mysqli_query($conn, $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3' and `quotation_status`='1'";
 $resultcooler= mysqli_query($conn, $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5' and `quotation_status`='1'";
 $resultsmall= mysqli_query($conn, $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4' and `quotation_status`='1'";
 $resultvar= mysqli_query($conn, $varamt);
$varqty=mysqli_fetch_array($resultvar);{

$totalvarqty+=$varqty['totalqty'];
}
}
?>
<script>
function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"],["Dryer", <?php echo $target_dryer; ?>,<?php echo $totaldryerqty; ?>],["chiller",  <?php echo $target_chiller; ?>,<?php echo $totalchillerqty; ?>],["Cooling Tower",  <?php echo $target_cooler; ?>,  <?php echo $totaldryerqty; ?>],["Var Products",  <?php echo $target_var; ?>, <?php echo $totalvarqty; ?>],["Small Products",  <?php echo $target_small_products; ?>,<?php echo $totalsmallqty ?>]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#5b1647",
        "#93073e"],
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
    c=new google.visualization.ColumnChart(document.getElementById("columns-charts-for products"));
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
<script>
  function gets(id) {

 if (id == "1") {
                                                                                $('#target').show();
																				    $('#amount').hide();
																				    $('#qty').hide();

                                                                            }
                                                                        
                                                                            if (id == "2") {

                                                                               $('#target').hide();
																				    $('#amount').show();
																				    $('#qty').hide();
                                                                            }
if (id == "3") {

                                                                               $('#target').hide();
																				    $('#amount').hide();
																				    $('#qty').show();
                                                                            }																			


                                                                        }
</script>

 </body>
</html>