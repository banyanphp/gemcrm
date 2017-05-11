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
		<div id="invoice-company-details" class="row"  id="test">
<?php
$total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id'  GROUP BY  `quotation_no`";
					$query=mysqli_query($conn,$total);
					$res = mysqli_fetch_array($query);	
$t=$res['total']; 
$phpdate = $res['quotation_created_on'];
$enq_product_group= $res['enq_product_group'];


 if($enq_product_group==2){ ?>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<img src="http://gemservice.in/crm/gemorion.png" alt="company logo" class=""/>
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800">GEM ORION MACHINERY PRIVATE LIMITED,
</li>
					<li>SF.NO. 100/2A, AVINASHI RAOD, ARASUR,
</li>
					<li>COIMBATORE – 641 407.Tamil Nadu</li>
					<li>India.</li>
				</ul>
				
			</div>
<?php  } else { ?>
<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<img src="robust-assets/images/logo/dashboard.png" alt="company logo" class=""/>
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800">GEM INDIA SERVICE</li>
					<li></li>
					<li>Coimbatore,Tamilnadu</li>
					<li>India.</li>
				</ul>
			</div>
<?php } ?>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
				<h2>Quotation</h2>
				<p class="pb-3" style="color:#0099d3;">No : GEM
					<?php 
						$dat=date('Y');
						$split = substr((string)$dat,-2);
							echo $split;?>/<?php
							$mnth= date('m');
							echo $mnth;
					?>/<?php echo $quation_id; ?>
						</p>
				<ul class="px-0 list-unstyled">
				<?php
					 $total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' GROUP BY  `quotation_no`";
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
				$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id'  GROUP BY `enq_no`";
				$query=mysqli_query($conn,$sql);
				$result=mysqli_fetch_array($query);
				$enq = $result['enq_no'];
				$discount = $result['enq_product_discount'];
				$tax = $result['tax'];
				$vat_tax = $result['quotation_vattax'];
				$excise_tax = $result['quotation_excise'];
				$user_code = $result['created_by'];
				$erectn_val=$result['quotation_erection'];
				$freigt_term=$result['quotation_freight'];
				$delevry_week=$result['quotation_deleivery'];
				
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
		<div class="row col-md-12" style="line-height:20px;">
		<h5>Dear Madam/Sir,</h5>
		<p style="font-size:14px;color:#000;"> Thank for your enquiry. We are pleased to offer our best price for your requirements. For any additional information / clarification ,Please keep in touch with us .</p>
	
		
		</div>
		<!-- Invoice Items Details -->
		<div id="invoice-items-details" class="pt-2">
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
							$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id'";
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
		<h4>Commercial Terms</h4>
		<hr>
		<div class="row col-md-12" style="line-height:12px;">
		<div class="col-md-5">
		
		<p style="font-size:14px;color:#000;">Discount : <?php echo $discount; ?>.00 %</p>
	    <!--<p style="font-size:14px;color:#000;">P & F &nbsp; &nbsp; &nbsp; : 0.00 %</p>-->
		
		<p style="font-size:14px;color:#000;">  Freight &nbsp;&nbsp; : <?php echo $freigt_term; ?> </p>
			
				  <p style="font-size:14px;color:#000;"> Valid &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;: 30 DAYS</p>
		</div>
		<div class="col-md-4">
		<p style="font-size:14px;color:#000;">
		 P & F Tax &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <?php echo $tax;  ?> %<br><br>
		 VAT/CST Tax &nbsp; &nbsp; : &nbsp; <?php echo $vat_tax; ?> % <br><br>
		 Excise Duty &nbsp; &nbsp; &nbsp; : &nbsp;<?php echo $excise_tax; ?> %</p>
		</div>
		<div class="col-md-3">
 <p style="font-size:14px;color:#000;"> Erection &nbsp; &nbsp; &nbsp;:&nbsp; <?php echo $erectn_val; ?></p>
 		<p style="font-size:14px;color:#000;"> Surcharge &nbsp; :&nbsp; Not Applicable</p>
 		<p style="font-size:14px;color:#000;"> Delivery &nbsp; &nbsp; &nbsp; :&nbsp; <?php echo  $delevry_week; ?> Weeks</p>


	<!--	<p style="font-size:14px;color:#000;"> GST &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; : 0.00%</p>-->
		</div>
		
		</div>
			<div class="row col-md-12"  style="line-height:12px;">
			<hr>
		<div class="col-md-6">
		
		<p style="font-size:14px;color:#000;">Thanking You,</p>
	    <p style="font-size:14px;color:#000;"></p>
		 <p style="font-size:14px;color:#000;"><br/></p>
		<p style="font-size:14px;color:#000;"> Yours Faith fully</p>
		<p style="font-size:14px;color:#000;"> GEM EQUIPMENTS(P)LTD </p>
			<p style="font-size:14px;color:#000;"> <br/></p>

			 <?php 
if($user_code!='admin'){
 $q21="select * from tbl_user where `user_code`='$user_code'";
                                 
                                    $r2=mysqli_query($conn,$q21);
                                    $row2= mysqli_fetch_array($r2);                                       
                                    
									?>
				<p style="font-size:14px;color:#000;">Name &nbsp;&nbsp; &nbsp; : <?php echo $row2['user_name'];?></p>
				 <p style="font-size:14px;color:#000;">Mob no &nbsp; : <?php echo $row2['user_phone_no'];?></p>
				 <p style="font-size:14px;color:#000;">Email-Id &nbsp; : <?php echo $row2['user_email'];?></p>
			<?php 	}  
else{
 $q21="select * from tbl_user where `user_code`='$user_code'";
                                 
                                    $r2=mysqli_query($conn,$q21);
                                    $row2= mysqli_fetch_array($r2);                                       
                                    
									?>
				<p style="font-size:14px;color:#000;">Name &nbsp;&nbsp; &nbsp; : Admin</p>
				 <p style="font-size:14px;color:#000;">Mob no &nbsp; : 9344455927</p>
				 <p style="font-size:14px;color:#000;">Email-Id &nbsp; : sales@gemindia.com</p>
			<?php 	}  ?>
				   
		</div>
	 
		</div>
			<div id="invoice-footer">
			<div class="row">

				
				
				<div class="col-md-12 col-sm-12 text-xs-center">
					

                  										<button type="button"  class="btn btn-primary btn-lg my-1" data-toggle="modal" data-target="#iconModal">Forward Quotation </button>

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
<div class="modal fade text-xs-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">×</span>
											</button>											</button>
											 
											</button>
											<h4 class="modal-title" id=""><i class="icon-android-share	"></i> Forward Quotation</h4>
										  </div>
										  <div class="modal-body">
											<form  action="quotation_forward.php">
                                                <div class="form-body">
													<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Email1</label>
                                                        <div class="col-md-9">
                                                            <input type="email" required id="" value="" class="form-control" placeholder="Enter Mail Id" name="cemail1">
                                                        </div>
                                                    </div>
													
											<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Email2</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="" value="" class="form-control" placeholder="Enter Mail Id" name="cemail2">
                                                        </div>
                                                    </div>						
												</div>
												
												<div class="col-md-12" style="text-align:center">
                                                        <span id="errors1" style="color:#ff0000;text-align:center"></span>

                                                        <span id="successe" style="color:#967ADC;text-align:center"></span>

                                                    </div>
<input type ="hidden" name="id" value="<?php echo $_GET['id'] ?>">
													
												<div class="modal-footer">
											<button type="submit" id="catalogue_submit" name="catalogue_submit" class="btn btn-outline-primary">Send</button>
										  </div>
											</form>
										  </div>
										  
										</div>
									  </div>
									</div>
						
													
												

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