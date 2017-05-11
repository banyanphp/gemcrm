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
           	<div class="col-xs-12">
		    <div class="card" style="">
                <div class="card-header">
				                             <ul class="list-inline mb-0 " style="float:right">
                            <li>   <a href="home.php"class="btn btn-info" style="color:#fff">View All reports </a>  </li>
							</ul>
														</div></div>
														</div>
														
        
             <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yearly Target(In Rs) </h4>
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
                        <div id="column-chartS"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
	<div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Monthly Target(In Rs) </h4>
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
                        <div id="column-chart-month"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
	<span id="data-response"></span>
		
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
    <!-- BEGIN PAGE LEVEL JS-->   
	<script src="https://www.google.com/jsapi" type="text/javascript"></script>
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
	<?php
	$total='0';
		  
	$response=array();
 	  $user=array();
	  $fetch_team=mysqli_query($conn,"select * from tbl_team");
	  while($fetch_array=mysqli_fetch_array($fetch_team)){
$target='0';$totalamount='0';	
		  $team_id=$fetch_array['team_id'];
	$sql=mysqli_query($conn,"select * from tbl_target_team where team_target_status='1' and team_id='$team_id'");
	while($row=mysqli_fetch_array($sql)){
		$target+=$row['team_amount'];
		$month=$row['month_id'];
		$qq="SELECT enq_quotation  FROM `tbl_enquiry` where `enq_status`='Completed' and `enq_team_id`='$team_id' and `enq_month_id`='$month'";
	$acheived_amt=mysqli_query($conn,$qq);
	while($acheived_array=mysqli_fetch_array($acheived_amt)){
		
		 $qno=$acheived_array['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($conn, $qamount);
   $results                    = mysqli_fetch_array($resultss);
  $totalamount+= $results['total'];
	}
	}
	$user['team_name']=$fetch_array['team_name'];
	$user['target']=$target;
	$user['acheived']=$totalamount;
	  array_push($response, $user);

	  }
 $count=count($response);
	  
	?>
	
	<script>
	function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Ytd Target", "Acheived Ytd"],<?PHP for($i=0;$i<$count;$i++){ ?>["<?php echo $response[$i]['team_name']?>",<?php echo $response[$i]['target']?>,<?php echo $response[$i]['acheived']?>],
<?php } ?>
	]),

 b= {
		
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
		hAxis : {viewWindow : {max : 7}},

        legend: {
            position:"top",
            alignment:"center",
            textStyle: {
                fontSize: 12
            }
        }
    }
    ,
    c=new google.visualization.ColumnChart(document.getElementById("column-chartS"));
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
	$total='0';
		  
	$response=array();
 	  $user=array();
	  $month=date('n');
	  $fetch_team=mysqli_query($conn,"select * from tbl_team");
	  while($fetch_array=mysqli_fetch_array($fetch_team)){
$target='0';$totalamount='0';	
		  $team_id=$fetch_array['team_id'];
	$sql=mysqli_query($conn,"select * from tbl_target_team where team_target_status='1' and team_id='$team_id' and month_id='$month'");
	while($row=mysqli_fetch_array($sql)){
		$target+=$row['team_amount'];
		$month=$row['month_id'];
		$qq="SELECT enq_quotation  FROM `tbl_enquiry` where `enq_status`='Completed' and `enq_team_id`='$team_id' and `enq_month_id`='$month'";
	$acheived_amt=mysqli_query($conn,$qq);
	while($acheived_array=mysqli_fetch_array($acheived_amt)){
		
		 $qno=$acheived_array['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($conn, $qamount);
   $results                    = mysqli_fetch_array($resultss);
  $totalamount+= $results['total'];
	}
	}
	$user['team_name']=$fetch_array['team_name'];
	$user['target']=$target;
	$user['acheived']=$totalamount;
	  array_push($response, $user);

	  }
 $count=count($response);
	 
	?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <script>
	function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Ytd Target", "Acheived Ytd"],<?PHP for($i=0;$i<$count;$i++){ ?>["<?php echo $response[$i]['team_name']?>",<?php echo $response[$i]['target']?>,<?php echo $response[$i]['acheived']?>],
<?php } ?>
	]),
   
 b= {
		
        height:400,

        fontSize:12,
       colors:["#581845","#daf7a6"],
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
		hAxis : {viewWindow : {max : 7}},

        legend: {
            position:"top",
            alignment:"center",
            textStyle: {
                fontSize: 12
            }
        }
    }
    c=new google.visualization.ColumnChart(document.getElementById("column-chart-month"));
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
 
<script type="text/javascript">
  function gets(id) {


      // Load the Visualization API and the line package.
      google.charts.load('current', {'packages':['bar']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
  
    function drawChart() {
  
        $.ajax({
        type: 'POST',
        url: 'get_chart.php',
		dataType: 'json',
         data:{
			 id:id,
		 },
		 
        success: function (data1) {
			
        var data = new google.visualization.DataTable();
      data.addColumn('string', 'Year');
      data.addColumn('number', 'Sales');
      data.addColumn('number', 'Expense');
      
     

s = data1.replace(/[\u0000-\u0019]+/g,"data1"); 
var jsonData = JSON.parse(s);
	 		
alert(jsonData);
	$('#data-response').html(jsonData);
      for (var i = 0; i < jsonData.length; i++) {
		
            data.addRow([jsonData[i].team_name, parseInt(jsonData[i].target), parseInt(jsonData[i].acheived)]);
      }
      var options = {
        chart: {
          title: 'Company Performance',
          subtitle: 'Show Sales and Expense of Company'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
         
      };
      var chart = new google.charts.Bar(document.getElementById('bar_charts'));
      chart.draw(data, options);
       }
     });
    }
 
 
  }
  


                                                                        
</script>

	
  </body>
</html>