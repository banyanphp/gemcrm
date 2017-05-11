
<html>
<head>
<title>Save the particular div in PDF format onclick using Jquery</title>
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
<style>
body {
background: #fff;
}
#page_content {
margin-top: 50px;
position: relative;
max-width: 100%;
width: 100%;
}

</style>
</head>
<body>
<div class="container">
<div align="center">
<h1 align="center" id="download_pdf" class="glyphicon glyphicon-download" style="cursor:pointer;" title="Click to Download Page as PDF"></h1>
</div>
<br>
<section id="page_content">
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
				<p class="pb-3" style="color:#0099d3;">No : GEM
					<?php include('dbconnect.php');
	$quation_id=$_GET['id'];
						$dat=date('Y');
						$split = substr((string)$dat,-2);
							echo $split;?>/<?php
							$mnth= date('m');
							echo $mnth;
					?>/<?php echo $quation_id; ?>
						</p>
				<ul class="px-0 list-unstyled">
				<?php
					$total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY  `quotation_no`";
					$query=mysqli_query($conn,$total);
					$res = mysqli_fetch_array($query);
						?>
					<li>TOTAL AMOUNT</li>
					<li class="lead text-bold-800">Rs. <?php echo $res['total']; ?></li>
				</ul>

			</div>
		</div>
		<!--/ Invoice Company Details -->

		<!-- Invoice Customer Details -->
		<div id="invoice-customer-details" class="row pt-2">
			<div class="col-sm-12 text-xs-center text-md-left">
				<p class="text-muted">To</p>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
			<?php
				$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY `enq_no`";
				$query=mysqli_query($conn,$sql);
				$result=mysqli_fetch_array($query);
				$enq = $result['enq_no'];
				
				$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq'";
				$query=mysqli_query($conn,$toaddr);
				$results=mysqli_fetch_array($query);
					
			?>
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800"><?php echo $results['enq_company_name']; ?></li>
					<li><?php echo $results['enq_company_address']; ?></li>
					<li>Contact :<?php echo $results['enq_company_phn_no']; ?>.</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
				<p><span class="text-muted">Quotation Date :</span> <?php 
$phpdate = $res['quotation_created_on'];


echo date('Y-m-d', strtotime($phpdate));
		?></p>	
			</div>
		</div>
		<hr>
		<!--/ Invoice Customer Details -->

		<!-- Invoice Items Details -->
		<div id="invoice-items-details" class="pt-2" id="test">
			<div class="row">
				<div class="table-responsive col-sm-12">
					<table class="table table-bordered text-xs-center" style="text-align:center !important;">
					  <thead>
					    <tr>
					     
						  <th style="text-align:center;">Product Series</th>
						    <th style="text-align:center;">Sap Code</th>
						  <th style="text-align:center;">Product Description</th> 
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
					     
						<td ><?php echo $model=$result['enq_product_model_no']; ?></td>
				         <td ><?php $qq=mysqli_query($conn,"select * from tbl_type_price where type_price_model_no='$model'"); 
						 $row=mysqli_fetch_array($qq);
echo $row['sapcode'];						 
						 ?></td>
<td ><?php 
echo $row['description'];						 
						 ?></td>

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
						  <tbody>
						  	<tr>
						  		<td class="text-bold-800">Total</td>
						  		<td class="text-bold-800 text-xs-right"> Rs. <?php echo $res['total']; ?></td>
						  	</tr>
						  </tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
		<h3>Commercial Terms</h3>
		<table class="table table-bordered text-xs-center " style="text-align:center !important;">
					  <thead>
					    <tr>
					     
						  <th style="text-align:center;">Product Series</th>
						    <th style="text-align:center;">Sap Code</th>
						  <th style="text-align:center;">Product Description</th> 
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
					     
						<td ><?php echo $model=$result['enq_product_model_no']; ?></td>
				         <td ><?php $qq=mysqli_query($conn,"select * from tbl_type_price where type_price_model_no='$model'"); 
						 $row=mysqli_fetch_array($qq);
echo $row['sapcode'];						 
						 ?></td>
<td ><?php 
echo $row['description'];						 
						 ?></td>

						<td ><?php echo $result['enq_product_model_type']; ?></td>
						<td ><?php echo $result['enq_product_qty']; ?></td>
					    <td class="text-xs-right">RS.<?php echo $result['enq_product_price']; ?></td>
					    </tr>
						<?php } ?>

					  </tbody>
					</table>
		<!-- Invoice Footer -->
		<div id="invoice-footer">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-xs-center">
					<button type="button" class="btn btn-primary btn-lg my-1" id="cmd"><i class="icon-paperplane"></i> Send Quotation</button><br><br>
                  
				</div>
				

			</div>
		</div>
		<!--/ Invoice Footer -->

	</div>
</section>
        </div>
    
</section>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type='text/javascript' src="jspdf.debug.js"></script>
<script>
$(document).ready(function() {
$('#download_pdf').click(function () {
var pdf = new jsPDF('p', 'pt', 'letter')
, source = $('#page_content')
, specialElementHandlers = {
    '#bypassme': function(element, renderer){      
        return true
    }
}

margins = {
    top: 60,
    bottom: 60,
    left: 40,
    width: 522
  };
  
pdf.fromHTML(
    source
    , margins.left
    , margins.top 
    , {
        'width': margins.width 
        , 'elementHandlers': specialElementHandlers
    },
    function (dispose) {
        pdf.save('download_pdf.pdf');
      },
    margins
  )
});
    });
</script>
</body>
</html>


















