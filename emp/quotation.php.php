<?php 
	include('dbconnect.php');
	$quation_id=$_GET['id'];
	
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Quotation</title>
    <link rel="apple-touch-icon" sizes="60x60" href="robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
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

    <?php include('header.php'); ?>
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        
        <div class="content-body"><section class="card">
	<div id="invoice-template" class="card-block">
		<!-- Invoice Company Details -->
		<div id="invoice-company-details" class="row">
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<img src="robust-assets/images/logo/dashboard.png" alt="company logo" class=""/>
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800">GEM INDIA SERVICE</li>
					<li></li>
					<li>Coimbatore,Tamilnadu</li>
					<li>India.</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
				<h2>Quotation</h2>
				<p class="pb-3" style="color:#0099d3;">Id : GEM
					<?php 
						$dat=date('Y');
						$split = substr((string)$dat,-2);
							echo $split;
					?>/<?php echo $quation_id; ?>
						</p>
				<ul class="px-0 list-unstyled">
					<li>TOTAL AMOUNT</li>
					<li class="lead text-bold-800">Rs. 17,00,000.00</li>
				</ul>

			</div>
		</div>
		<!--/ Invoice Company Details -->

		<!-- Invoice Customer Details -->
		<div id="invoice-customer-details" class="row pt-2">
			<div class="col-sm-12 text-xs-center text-md-left">
				<p class="text-muted">Bill To</p>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800">Mr. Bret</li>
					<li>48A,Thousand lights</li>
					<li>Anna saalai,</li>
					<li>Chennai-600001.</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
				<p><span class="text-muted">Quotation Date :</span> 08/03/2017</p>	
			</div>
		</div>
		<hr>
		<!--/ Invoice Customer Details -->

		<!-- Invoice Items Details -->
		<div id="invoice-items-details" class="pt-2">
			<div class="row">
				<div class="table-responsive col-sm-12">
					<table class="table table-bordered text-xs-center" style="text-align:center !important;">
					  <thead>
					    <tr>
					      <th style="text-align:center;">Item</th>
						  <th style="text-align:center;">Product Model</th>
						  <th style="text-align:center;">Product Series</th>
						  <th style="text-align:center;">Product Model type</th>
					      <th style="text-align:center;">Quantity</th>
					      <th class="text-xs-right">Amount</th>
					    </tr>
					  </thead>
					  <tbody>
						
						<?php 
								$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1'";
									$query=mysqli_query($conn,$sql);
									while($result=mysqli_fetch_array($query)){
									
								?>
					    <tr>
					      <td><p><?php echo $result['enq_product_group']; ?></p></td>
					      <td ><?php echo $result['enq_product_model']; ?></td>
						<td ><?php echo $result['enq_product_model_no']; ?></td>
						<td ><?php echo $result['enq_product_model_type']; ?></td>
						<td ><?php echo $result['enq_product_qty']; ?></td>
					    <td class="text-xs-right">RS.<?php echo $result['enq_product_price']; ?></td>
					    </tr>
<?php } ?>

					  </tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
				</div>
				<div class="col-md-offset-6 col-md-6 col-sm-12 pull-left">
					<div class="table-responsive">
						<table class="table">
						<?php
							
								$total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='10000' AND `quotation_status`='1' GROUP BY  `enq_product_discount`";
								$query=mysqli_query($conn,$total);
								$res = mysqli_fetch_array($query);
						?>
						  <tbody>
						  	<tr>
						  		<td class="text-bold-800">Total</td>
						  		<td class="text-bold-800 text-xs-right"> Rs. <?php echo $res['total']; ?></td>
						  	</tr>
						  </tbody>
						</table>
					</div>
					<div class="text-xs-right">
						<p>Authorized person</p>
						<img src="robust-assets/images/logo/dashboard.png" alt="gem" style="width:100px;height:50px!important"/>
						<h6>Mr. Ravichandran</h6>
						<p class="text-muted">Managing Director</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Invoice Footer -->
		<div id="invoice-footer">
			<div class="row">
				<div class="col-md-7 col-sm-12">
                                    <p>Discount Percentage Is :<span style="color:red;"><?php echo $res['enq_product_discount']; ?></span>%</p>	
				</div>
				<div class="col-md-12 col-sm-12 text-xs-center">
					<button type="button" class="btn btn-primary btn-lg my-1"><i class="icon-paperplane"></i> Send Invoice</button>
				</div>
			</div>
		</div>
		<!--/ Invoice Footer -->

	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php include('footer.php'); ?> 

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>