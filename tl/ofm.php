<?php
include('dbconnect.php');
$enq = $_GET['id'];
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
    <title>GEM ORDER FORWARDING MEMO</title>
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
	
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/ui/jquery-ui.min.css">

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
      
        <div class="content-body"><!-- Form wizard with number tabs section start -->

<!-- Form wizard with icon tabs section start -->
<section id="icon-tabs validation">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">GEM ORDER FORWARDING MEMO</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                      <form id="ofm_form" action="add_ofm_process.php" name="ofm_form" method="post" class="steps-validation wizard-notification">

                            <!-- Step 1 -->
                            <h6><i class="step-icon icon-paper"></i> OFM</h6>
							
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="location2"><strong>Price List :</strong></label>
                                            <select class="c-select form-control required" id="price_lst" name="price_lst" >
                                                <option value="" >--Select Price--</option>
                                                <option value="As Per Price Master">As Per Price Master </option>
                                                <option value="As Per OEM Price List">As Per OEM Price List</option>
                                            </select>
                                        </div>
                                    </div>
									

									<div class="col-md-6" id="per_price">
									<div class="col-md-6">
										<label><b> Q.REF </b>: &nbsp;&nbsp;</label>
										
										<select class="c-select form-control required" id="qref" name="qref" onChange="getplace(this.value)">
										<option value="" id="selection">-- Select Q.Ref --</option>
										<?php
	$sql=mysqli_query($conn,"SELECT * FROM `tbl_quotation` WHERE `enq_no`='$enq' AND `quotation_status`='1' GROUP BY`quotation_no`");
	while($result=mysqli_fetch_array($sql)){
?>
							
                                                
												<option value="<?php echo $result['quotation_no']; ?>" id="selection"><?php echo $result['quotation_no']; ?></option>
													<?php } ?>
                                            </select>

									</div>
									

									<div class="col-md-6" id="Qref_dates">
									<label><b>Date </b>: &nbsp;&nbsp;</label>
									<div class="input-group">
                                        <input type="hidden" class="form-control" name="enq_num" value="<?php echo $enq; ?>" id="enq_num" />
                                        <input type="text" class="form-control" name="qdate" value="" id="qdate" />
                                    </div>
                                    </div>
                                    </div>
									</div>
									 <div class="row">
									<div class="col-md-6"id="sap_cod">
                                        <div class="form-group">
                                            <label for="location2">SAP Code :</label>
                                            <input type="text" class="form-control required" id="sap_cd" name="sap_cd" placeholder="Enter SAP Code" >
                                        </div>
                                    </div>
									<div class="col-md-6" id="per_price">
									<div class="col-md-6">
										<label><b> PO.REF </b>: &nbsp;&nbsp;</label>
										<input type="text" class="form-control required" value="" name="poref" id="poref">
									</div>
									<div class="col-md-6">
									<label><b>Date </b>: &nbsp;&nbsp;</label>
									<div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                        <input type="text" class="form-control required datepicker-animation" name="podate" id="podate"/>
                                    </div>
                                    
                                    </div>
									</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="location2"><strong>From :</strong></label>
                                            <select class="c-select form-control required" id="from_prc" name="from_prc">
                                                <option value="" selected>-- Select Price --</option>
                                                <option value="Project">Project</option>
                                                <option value="OEM">OEM</option>
                                                <option value="Dealer">Dealer</option>
                                                <option value="Stocklist">Stocklist</option>
                                                <option value="Region">Region</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber2"><strong>To :</strong></label>
											<p><input type="radio" name="to_gem" value="GEM Equipment(p)LTD, Coimbatore-641407."> GEM Equipment(p)LTD, Coimbatore-641407.</p>
											<p><input type="radio" name="to_gem" value="GEM Equipment(p)LTD, Mumbai"> GEM Equipment(p)LTD, Mumbai</p>
											<p><input type="radio" name="to_gem" value="GOM"> GOM</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
							
							
                       

                            <!-- Step 2 -->
                            <h6><i class="step-icon icon-android-contact"></i>CUSTOMER DETAILS</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="proposalTitle2">First Name <span style="color:red;">*</span>  :</label>
                                            <input type="text" name="cfirst_name" class="form-control required" id="cfirst_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress4">Address line 1 <span style="color:red;">*</span> :</label>
                                            <input type="text" name="c_address_line_1" class="form-control required" id="c_address_line_1" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">City <span style="color:red;">*</span> :</label>
                                            <input type="text" name="c_city" class="form-control required" id="c_city" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Pin code <span style="color:red;">*</span> :</label>
                                            <input type="text" name="c_pin_code"class="form-control required" id="c_pin_code" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">CST No <span style="color:red;">*</span> :</label>
                                            <input type="text" name="c_cst_no"class="form-control required" id="c_cst_no" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">PAN No <span style="color:red;">**</span> :</label>
                                            <input type="text" name="c_pan_no"class="form-control required" id="c_pan_no" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Contact No <span style="color:red;">**</span> :</label>
                                            <input type="text" name="c_contact_no"class="form-control required" id="c_contact_no" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle2">Last Name <span style="color:red;">*</span>:</label>
                                            <input type="text" name="c_last_name" class="form-control required" id="c_last_name" >
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription2">Address line 2 :</label>
                                           <input type="text" class="form-control required" name="c_address_line_2" id="c_address_line_2" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">State <span style="color:red;">*</span> :</label>
                                           <input type="text" name="c_state"class="form-control required" id="c_state" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Tin No <span style="color:red;">*</span> :</label>
                                           <input type="text" name="c_tin_no"class="form-control required" id="c_tin_no" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">ECC No <span style="color:red;">*</span> :</label>
                                           <input type="text" name="c_ecc_no"class="form-control required" id="c_ecc_no" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Name of the Contact Person <span style="color:red;">*</span> :</label>
                                           <input type="text" name="c_name_contact_persion"class="form-control required" id="c_name_contact_persion" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">E-Mail <span style="color:red;">*</span> :</label>
                                           <input type="text" name="c_email"class="form-control required" id="c_email" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6><i class="step-icon icon-android-compass"></i>BILLING ADDRESS</h6>
					
                               <fieldset>
							<center><div class="form-group">
											<p><b><input type="checkbox" name="chkPassport" id="chkPassport"> Same as Previous Address</b></p>
                                 </div></center>
                                <div class="row" id="dvPassport">
								
                                    <div class="col-md-6">
                                        <!--<div class="form-group">
                                            <label for="proposalTitle2">First Name <span style="color:red;">*</span>  :</label>
                                            <input type="text" name="b_first_name"class="form-control " id="b_first_name" >
                                        </div>-->
                                        <div class="form-group">
                                            <label for="emailAddress4">Address line 1 <span style="color:red;">*</span> :</label>
                                            <input type="text" name="b_address_line_1"class="form-control " id="b_address_line_1" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">City <span style="color:red;">*</span> :</label>
                                            <input type="text" name="b_city"class="form-control " id="b_city" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Pin code <span style="color:red;">*</span> :</label>
                                            <input type="text" name="b_pin_code"class="form-control " id="b_pin_code" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">CST No <span style="color:red;">*</span> :</label>
                                            <input type="text" name="b_cst_no"class="form-control " id="b_cst_no" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">PAN No <span style="color:red;">**</span> :</label>
                                            <input type="text" name="b_pan_no"class="form-control " id="b_pan_no" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Contact No <span style="color:red;">**</span> :</label>
                                            <input type="text" name="b_contact_no"class="form-control " id="b_contact_no" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!--<div class="form-group">
                                            <label for="jobTitle2">Last Name <span style="color:red;">*</span>:</label>
                                            <input type="text" name="b_last_name"class="form-control " id="b_last_name" >
                                        </div>-->
                                        <div class="form-group">
                                            <label for="shortDescription2">Address line 2 :</label>
                                           <input type="text" name="b_address_line_2"class="form-control " id="b_address_line_2" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">State <span style="color:red;">*</span> :</label>
                                           <input type="text" name="b_state"class="form-control " id="b_state" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Tin No <span style="color:red;">*</span> :</label>
                                           <input type="text" name="b_tin_no"class="form-control " id="b_tin_no" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">ECC No <span style="color:red;">*</span> :</label>
                                           <input type="text" name="b_ecc_no"class="form-control " id="b_ecc_no" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Name of the Contact Person <span style="color:red;">*</span> :</label>
                                           <input type="text" name="b_name_contact_persion"class="form-control " id="b_name_contact_persion" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">E-Mail <span style="color:red;">*</span> :</label>
                                           <input type="text" name="b_email"class="form-control " id="b_email" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
							<!-- Step 4 -->
                            <h6><i class="step-icon icon-redo2"></i>SHIP TO/ CONSIGNEE ADDRESS</h6>
                           <fieldset>
								<center><div class="form-group">
											<p><b><input type="checkbox" name="ship_addr" id="ship_addr"> Same as Previous Address</b></p>
                                 </div></center>
                                <div class="row" id="ship_address">
                                    <div class="col-md-6">
                                        <!--<div class="form-group">
                                            <label for="proposalTitle2">First Name <span style="color:red;">*</span>  :</label>
                                            <input type="text" name="s_first_name"class="form-control " id="s_first_name" >
                                        </div>-->
                                        <div class="form-group">
                                            <label for="emailAddress4">Address line 1 <span style="color:red;">*</span> :</label>
                                            <input type="text" name="s_address_line_1"class="form-control " id="s_address_line_1" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">City <span style="color:red;">*</span> :</label>
                                            <input type="text" name="s_city"class="form-control " id="s_city" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Pin code <span style="color:red;">*</span> :</label>
                                            <input type="text" name="s_pin_code"class="form-control " id="s_pin_code" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">CST No <span style="color:red;">*</span> :</label>
                                            <input type="text" name="s_cst_no"class="form-control " id="s_cst_no" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">PAN No <span style="color:red;">**</span> :</label>
                                            <input type="text" name="s_pan_no"class="form-control " id="s_pan_no" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Contact No <span style="color:red;">**</span> :</label>
                                            <input type="text" name="s_contact_no"class="form-control " id="s_contact_no" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!--<div class="form-group">
                                            <label for="jobTitle2">Last Name <span style="color:red;">*</span>:</label>
                                            <input type="text" name="s_last_name"class="form-control " id="s_last_name" >
                                        </div>-->
                                        <div class="form-group">
                                            <label for="shortDescription2">Address line 2 :</label>
                                           <input type="text" name="s_address_line"class="form-control " id="s_address_line" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">State <span style="color:red;">*</span> :</label>
                                           <input type="text" name="s_state"class="form-control " id="s_state" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Tin No <span style="color:red;">*</span> :</label>
                                           <input type="text" name="s_tin_no"class="form-control " id="s_tin_no" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">ECC No <span style="color:red;">*</span> :</label>
                                           <input type="text" name="s_ecc_no"class="form-control " id="s_ecc_no" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Name of the Contact Person <span style="color:red;">*</span> :</label>
                                           <input type="text" name="s_name_contact_persion"class="form-control " id="s_name_contact_persion" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">E-Mail <span style="color:red;">*</span> :</label>
                                           <input type="text" name="s_email"class="form-control " id="s_email" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
					   	<!-- Step 5 -->
                     
							    <h6><i class="step-icon icon-android-cart"></i>PRODUCT DETAILS</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table>
                          

		<tbody>
            <span id="td" class="td"></span>
		</tbody>
        
                           
                        </table>
										
									
                                    </div>
                                </div><br><br>

	<script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>

			<div class="col-md-6 pull-left">
								</div>
								<div class="col-md-6 pull-right">
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">P&f </label>
				                        	<div class="col-md-9">
				                            	<input type="text" class="form-control required" id="p_f" name="p_f" placeholder="Enter the P&F percentage">
			                        		</div>
				                        </div>
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">P&f Total</label>
				                        	<div class="col-md-9">
				                            	<input type="hidden" class="form-control" id="pf_ttl1"  name="pf_ttl" >
												<input type="text" class="form-control" id="pf_ttl"  name="pf_ttl" disabled>
			                        		</div>
				                        </div>
										
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">B.E.D</label>
				                        	<div class="col-md-9">
				                            	<input type="text" class="form-control required" id="bed_per" name="bed_per" placeholder="Enter the B.E.D Percentage">
			                        		</div>
				                        </div>
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">B.E.D Total  </label>
				                        	<div class="col-md-9">
				                            	<input type="hidden" class="form-control" id="bed_ttl1" name="bed_ttl">
												<input type="text" class="form-control" id="bed_ttl" name="bed_ttl" disabled>
			                        		</div>
				                        </div>
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">VAT/CST  </label>
				                        	<div class="col-md-9">
				                            	<input type="text" class="form-control required" id="vat_cst" name="vat_cst" placeholder="Enter the VAT/CST Percentage">
			                        		</div>
				                        </div>
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">VAT/CST Total </label>
				                        	<div class="col-md-9">
				                            	<input type="hidden" class="form-control" id="vat_ttl1" name="vat_ttl">
				                            	<input type="text" class="form-control" id="vat_ttl" name="vat_ttl" disabled>
			                        		</div>
				                        </div>
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">GRAND TOTAL </label>
				                        	<div class="col-md-9">
				                            	<input type="hidden" class="form-control" id="grd_ttl1"  name="grd_ttl" >
												<input type="text" class="form-control" id="grd_ttl"  name="grd_ttl" disabled>
			                        		</div>
				                        </div>
										<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">Note </label>
				                        	<div class="col-md-9">
				                            	<textarea id="prd_note" rows="5" class="form-control square" name="prd_note" placeholder="comments"></textarea>
			                        		</div>
				                        </div>
								</div>
                            </fieldset>
								

	<!-- Step 6 -->
					<h6><i class="step-icon icon-layout"></i>Form 6</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meetingName2"><strong>Form Applicable :</strong></label>
											<select class="c-select form-control required" id="form_applicable" name="form_applicable">
                                                <option value="" selected>-- Select Applicable Form --</option>
                                                <option value="NA">NA</option>
                                                <option value="C-FORM">C-FORM</option>
                                                <option value="FORM-H">FORM-H</option>
                                                <option value="CT-1">CT-1</option>
                                                <option value="CT-3">CT-3</option>
                                                <option value="SEZ">SEZ</option>
                                                <option value="100% EOU">100% EOU</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="meetingLocation2"><strong>Insurance : &nbsp;&nbsp;</strong></label>
                                            <p>
											<input type="radio" id="insurance" name="insurance" value="Applicable" > Applicable
											<input type="radio" id="insurance" name="insurance" value="Not Applicable"> Not Applicable </p>
                                        </div>

                                        <div class="form-group">
                                            <label for="participants2"><strong>Freight Terms</strong></label>
                                            <select class="c-select form-control required" id="freight_terms" name="freight_terms">
                                                <option value="" >-- Select Freight Terms --</option>
                                                <option value="CFA /Topay">CFA /Topay</option>
                                                <option value="CIF/Freight & Insurance Paid">CIF/Freight & Insurance Paid</option>
                                                <option value="CIP/CARRIAGE & Insurance">CIP/CARRIAGE & Insurance</option>
                                                <option value="FOB/FREE ON BOARD">FOB/FREE ON BOARD</option>
                                                <option value="EXW/EX-WORKS">EXW/EX-WORKS</option>
                                                <option value="OTH/OTHERS">OTH/OTHERS</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label for="decisions2"><strong>Payment Terms</strong></label>
                                            <select class="c-select form-control required" id="payment_terms" name="payment_terms" onChange="getval(this)">
                                                <option value="" selected>-- Select Payment Terms --</option>
                                                <option value="30%ADV,70%@PROFORMA">30%ADV,70%@PROFORMA</option>
                                                <option value="100@ PROFORMA">100@ PROFORMA</option>
                                                <option value="CREDIT DAYS">CREDIT DAYS</option>
                                                <option value="Others">Others</option>
                                            </select>
											
											<div class="form-group" id="day" name="" style="display:none;">
                                            <label for="meetingLocation2">Credit days (Please Mention days)<span style="color:red;">* :</span></label>
                                            <p>
											<input type="radio" name="days" id="days" value="7" > 7
											<input type="radio" name="days" id="days" value="15"> 15 
											<input type="radio" name="days" id="days" value="30"> 30 
											<input type="radio" name="days" id="days" value="45"> 45 
											<input type="radio" name="days" id="days" value="60"> 60 
											<input type="radio" name="days" id="days" value="90"> 90 </p>
											</div>
											
											<div class="form-group" id="other_payment" style="display:none;">
                                            <label for="shortDescription2">Others (Please Mention) <span style="color:red;">*</span>   :</label>
                                           <input type="text" class="form-control " id="other_payment" name="other_payment" >
                                        </div>
										<br>
										<div class="form-group" id="pbg_abg">
                                            <label for="shortDescription2"><strong>PBG / ABG  </strong><span style="color:red;">*</span>   :</label>
											<input type="radio" name="pbg_abg"  id="pbg_abg" value="Applicable"> Applicable
											<input type="radio" name="pbg_abg" id="pbg_abg" value="Not Applicable"> Not Applicable
                                           
                                        </div>
											
                                        </div>
										 <div class="form-group">
                                            <label for="meetingLocation2"><strong>Inspection : &nbsp;&nbsp;</strong></label>
                                            <p>
											<input type="radio" name="inspection"  id="inspection" value="Applicable"> Applicable
											<input type="radio" name="inspection" id="inspection" value="Not Applicable"> Not Applicable </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                      
                                        <div class="form-group">
                                            <label for="meetingLocation2">
											<strong>LD Clause : &nbsp;&nbsp;</strong></label>
                                            <select class="c-select form-control required" id="ld_clause" name="ld_clause" onChange="getld(this)">
                                                <option value="" selected>-- Select Payment Terms --</option>
                                                <option value="Applicable">Applicable</option>
                                                <option value="Not Applicable">Not Applicable</option>
                                            </select>
                                        </div>
									
											<div class="form-group" id="ldclause_applicable" style="display:none;">
                                            
											<label for="shortDescription2">IF APPLICABLE DESCRIBE DETAIL <span style="color:red;">*</span>   :</label>
                                           <input type="text" class="form-control " id="applicable_detail" name="applicable_detail" >
                                        </div>
										<div class="form-group">
                                            <label for="participants2"><strong>Permit</strong></label>
                                            <select class="c-select form-control " id="Permite" name="Permite">
                                                <option value="" selected>-- Select PERMIT --</option>
                                                <option value="NA">NA</option>
                                                <option value="Road permit">Road permit</option>
                                                <option value="E-SUGAM">E-SUGAM</option>
                                                <option value="FORM 403">FORM 403</option>
                                                <option value="FORM 8">FORM 8</option>
                                                <option value="Declaration">Declaration</option>
                                            </select>
										</div>
										<div class="form-group">
											 <label for="participants2"><strong>Commission to</strong></label>
											 <select class="c-select form-control" id="Permit" name="Permit" onChange="getpermit(this)"><!--commisson-->
                                                <option value="" selected>-- Select Commission to --</option>
                                                <option value="NA">NA</option>
                                                <option value="TPC">TPC</option>
                                                <option value="Dealer">Dealer</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Persent">Persent</option>
                                                <option value="Values">Value</option>
                                            </select>
											
										<br>
											<div class="form-group" id="commission_permit_per">
                                            
											<label for="shortDescription2">COMMISSION in (%) <span style="color:red;"></span>   :</label>
                                           <input type="text" class="form-control" id="commission_permit_per" name="commission_permit_per">
                                        </div>
										<div class="form-group" id="commission_permit_value">
                                            
											<label for="shortDescription2">COMMISSION (Value)<span style="color:red;"></span>   :</label>
                                           <input type="text" class="form-control" id="commission_permit_value" name="commission_permit_value" >
                                        </div>
										<div class="form-group">
											<label for="shortDescription2"><strong>LOGISTIC PREFERED</strong><span style="color:red;"></span>   :</label>
                                           <input type="text" class="form-control required" id="logistic_prefer" name="logistic_prefer" >
                                        </div>
                                        </div>
											
                                       
										
                                    </div>
                                </div>
                            </fieldset>
							
							<!-- Step 7 -->
                        <h6><i class="step-icon icon-shuffle3"></i>DESPATCH DOCUMENT TO BE SENT TO</h6>
                           <fieldset>
                                <div class="row" id="ship_address">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="proposalTitle2">Name of the Contact Person <span style="color:red;">*</span>  :</label>
                                            <input type="text" name="despatch_contact_person"class="form-control required" id="despatch_contact_person" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Address line 1  <span style="color:red;">*</span> :</label>
                                            <input type="text" name="despatch_addr"class="form-control required" id="despatch_addr" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">City <span style="color:red;">*</span> :</label>
                                            <input type="text" name="despatch_city"class="form-control required" id="despatch_city" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Pin Code <span style="color:red;">*</span> :</label>
                                            <input type="text" name="despatch_pin"class="form-control required" id="despatch_pin" >
                                        </div>
										<div class="form-group">
                                            <label for="videoUrl2">Commissioning Instruction <span style="color:red;">*</span> :</label>
                                            <input type="text" name="despatch_commisssioning"class="form-control required" id="despatch_commisssioning" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress4">Contact no <span style="color:red;">*</span> :</label>
                                            <input type="text" name="despatch_contact"class="form-control required" id="despatch_contact" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="shortDescription2">Address line 2 :</label>
                                           <input type="text" name="despatch_addr2"class="form-control required" id="despatch_addr2" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">State <span style="color:red;">*</span> :</label>
                                           <input type="text" name="despatch_state"class="form-control required" id="despatch_state" >
                                        </div>
										<div class="form-group">
                                            <label for="shortDescription2">Special Instruction <span style="color:red;">*</span> :</label>
                                           <input type="text" name="despatch_spacial"class="form-control required" id="despatch_spacial" >
                                        </div>
										<div class="form-group">
										<label for="donationinput7">Note</label>
										<textarea id="despatch_note" rows="5" class="form-control square" name="despatch_note" placeholder="comments"></textarea>
									</div>
										
                                    </div>
                                </div>
								
                            </fieldset>

							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->



        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include('footer.php'); ?>


    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/forms/wizard-steps.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

<!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script>   
	<script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script>
	
	<!--<script src="robust-assets/js/ofm.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

<script type="text/javascript">
$(function(){
    
    $('#ttl_val').on('input', function() {
      calculate();
    });
    $('#p_f').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = ($('#ttl_val').val()); 
        var pEarned = ($('#p_f').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/100) * pPos).toFixed(2);
           }
        
        $('#pf_ttl').val(perc);
        $('#pf_ttl1').val(perc);
    }

});
</script>
<script type="text/javascript">
$(function(){
    
    $('#ttl_val').on('input', function() {
      calculate();
    });
    $('#bed_per').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = ($('#ttl_val').val()); 
        var pEarned = ($('#bed_per').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/100) * pPos).toFixed(2);
           }
        
        $('#bed_ttl').val(perc);
        $('#bed_ttl1').val(perc);
    }

});
</script>
<script type="text/javascript">
$(function(){
    
    $('#ttl_val').on('input', function() {
      calculate();
    });
    $('#vat_cst').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = ($('#ttl_val').val()); 
        var pEarned = ($('#vat_cst').val());
        if(isNaN(pPos) || isNaN(pEarned)){
            var perc="";
           }else{
			   
         var    perc = ((pEarned/100) * pPos).toFixed(2);;
		  var   perc_ttl=perc+pPos;
		   
           }
        
        $('#vat_ttl').val(perc);
        $('#vat_ttl1').val(perc);
      
    }

});
</script>
	
<script type="text/javascript">
								$(function () {

									$("#chkPassport").click(function () {
									if ($(this).is(":checked")) {
										$("#dvPassport").hide();
										
										} else {
											$("#dvPassport").show();
												}
        });
    });
</script>


<script type="text/javascript">
								$(function () {
									$("#ship_addr").click(function () {
									if ($(this).is(":checked")) {
										$("#ship_address").hide();
										
										} else {
											$("#ship_address").show();
												}
        });
    });
</script>
<script type="text/javascript">
	function getplace(id){
$.ajax({
type : 'POST',
url : 'date_pick.php',
     data: {
id:id
},
success : function(response){
 $("#qdate").val(response);
}
});
$.ajax({
type : 'POST',
url : 'product_echo.php',
     data: {
id:id
},
success : function(response){
	//alert(response);
 $("#td").html(response);
}
});
	}	
</script>

<script>
												 function getval(sel){
													var id = sel.value;
												if(id == 'CREDIT DAYS'){
												$('#day').show();
												$('#other_payment').hide();
												}
												else if(id == 'Others'){
														$('#day').hide();
												$('#other_payment').show();
													}
												else{
												$('#day').hide();
												$('#other_payment').hide();
													}
												}
											</script> 
									<script>
										function getld(aplica){
											var id = aplica.value;		
											if(id == 'Applicable'){
												$('#ldclause_applicable').show();
													}
											else{
												$('#ldclause_applicable').hide();}
										}
									</script>
									<script>
										function getpermit(permits){
											var id = permits.value;		
											if(id == 'NA'){
												$('#commission_permit_per').hide();
												$('#commission_permit_value').hide();
													}
											else{
												$('#commission_permit_per').show();
												$('#commission_permit_value').show();
												}
										}
									</script>
									<script type="text/javascript">
$(function () {
    
    $('#ttl_val').on('input', function() {
      calculate();
    });
    $('#p_f').on('input', function() {
     calculate();
    });
	$('#bed_per').on('input', function() {
     calculate();
    });
	$('#vat_cst').on('input', function() {
     calculate();
    });
    function calculate(){
             var pPos = $('#ttl_val').val(); 
        var pf 	 =   $('#p_f').val();
        var bed  = $('#bed_per').val();
        var vat  = $('#vat_cst').val();
       
        var vats =+bed + +vat + +pf;
	 var    grd_ttl1 = ((vats/100) * pPos);
	 var    grd_ttl2 = +grd_ttl1 + +pPos ;
	 
	  $('#grd_ttl').val(grd_ttl2);
	  $('#grd_ttl1').val(grd_ttl2);
	 
        //$('#vat_ttl').val(perc);
        //$('#grd_ttl').val(ttls);
    }

});
</script>
    <script src="robust-assets/js/plugins/forms/extended/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/typeahead/bloodhound.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/typeahead/handlebars.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/formatter/formatter.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/maxlength/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/card/jquery.card.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-typeahead.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-inputmask.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-formatter.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-maxlength.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-card.js" type="text/javascript"></script>
  </body>
</html>