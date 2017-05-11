<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Enquiry Update</title>
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
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/selects/select2.min.css">
        <!-- BEGIN Vendor CSS--> 
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/extensions/datedropper.min.css">
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/extensions/timedropper.min.css">
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/icheck/icheck.css">
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/icheck/custom.css">
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/toggle/bootstrap-switch.min.css">
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/toggle/switchery.min.css">
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/spinner/jquery.bootstrap-touchspin.css">
        <!-- END Vendor CSS-->
        <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/ui/jquery-ui.min.css">

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


        <?php error_reporting('0'); include 'header.php'; ?>
        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body"><!-- Form wizard with number tabs section start -->
                    <section id="number-tabs">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-header">
			
									<div class="col-sm-6 col-xs-8 col-md-8 pull-left" align="left">
									
                                     <h4 class="form-section"><i class="icon-head"></i> Update Enquiry</h4>
									 </div>
										<!-- Button trigger modal -->
										<div class="col-sm-6 col-md-4 pull-right" align="right">
										<button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#iconModal">Send Catalogue</button>
										</div>
                                    </div>
                                    <div class="card-body collapse in">
                                        <div class="card-block">
							

                                           
                                            <form action="" method="post" id="enq_update_form" class="">
 <?php
                                            include 'dbconnect.php';
                                            $id = $_GET['id'];
                                            $q = mysqli_query($conn, "select * from tbl_enquiry where enq_id='$id'");
                                            $row = mysqli_fetch_array($q);

                                            $enq_no = $row['enq_no'];
                                            $enq_company_name = $row['enq_company_name'];
                                            $enq_company_email = $row['enq_company_email'];
                                            $enq_company_email1 = $row['enq_addon_email1'];
                                            $enq_company_email2 = $row['enq_addon_email2'];
                                            $enq_company_email3 = $row['enq_addon_email3'];
                                            $enq_company_phn_no = $row['enq_company_phn_no'];
                                            $enq_company_address = $row['enq_company_address'];
                                            $enq_company_pincode = $row['enq_company_pincode'];
                                            $enq_contact_person_name = $row['enq_contact_person_name'];
                                            $enq_contact_person_phone_no = $row['enq_contact_person_phone_no'];
                                            $enq_product_series = $row['enq_product_series'];
                                            $enq_description = $row['enq_description'];
                                            $enq_created_by = $row['enq_created_by'];
                                            $enq_company_pincode = $row['enq_company_pincode'];
                                            $q2 = mysqli_query($conn, "select * from  tbl_user where user_code='$enq_created_by'");
                                            $row2 = mysqli_fetch_array($q2);
                                            $username = $row2['user_name'];
                                            $enq_no = $row['enq_no'];

                                            $n = "select product_group_name from tbl_product_group where product_id='$enq_product_series'";
                                            $r = mysqli_fetch_array(mysqli_query($conn, $n));
                                            $pname = $r['product_group_name'];
                                            ?>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput2">Enquiry No</label>
                                                    <div class="col-md-9">
                                                        <input type="text" disabled id="enqno" class="form-control" placeholder="Company Name" name="enq_name" value="<?php echo $enq_no; ?>" >
														 <input type="hidden"  id="enqno" class="form-control" placeholder="Company Name" name="enq_no" value="<?php echo $enq_no; ?>" >

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput2">Company Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="cname" class="form-control" placeholder="Company Name" name="enq_name" value="<?php echo $enq_company_name; ?>" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="cemail" class="form-control" placeholder="E-mail" name="enq_email" value="<?php echo $enq_company_email; ?>" >
                                                    </div>
                                                </div>
 <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Addon E-mail1</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail1" class="form-control" placeholder=" Addon  E-mail" name="enq_email1" value="<?php echo $enq_company_email1; ?>">
                                                        </div>
                                                    </div>   <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Addon E-mail2</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail2" class="form-control" placeholder="Addon  E-mail" name="enq_email2" value="<?php echo $enq_company_email2; ?>">
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Addon E-mail3</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail3" class="form-control" placeholder="Addon  E-mail" name="enq_email3" value="<?php echo $enq_company_email3; ?>">
                                                        </div>
                                                    </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="phone" class="form-control" onKeyPress="return isNumberKey(event)" placeholder="Phone" name="enq_phone" value="<?php echo $enq_company_phn_no; ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Contact Person Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text"   id="cpname" class="form-control" placeholder="Contact Person Name" name="enq_contactperson" value="<?php echo $enq_contact_person_name; ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Address</label>
                                                    <div class="col-md-9">
                                                        <textarea id="address"  rows="5" class="form-control" name="enq_address" placeholder="Address"><?php echo $enq_company_address; ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Pin Code</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="enq_pin" class="form-control" placeholder="Pin Code" name="enq_pin" value="<?php echo $enq_company_pincode; ?>"> 
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Contact Person Mobile No</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="cphno" class="form-control" oncut="return false" onpaste="return false" onKeyPress="return isNumberKey(event)" placeholder="Contact Person  Mobile No" name="enq_contactper_phone" value="<?php echo $enq_contact_person_phone_no; ?>" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Specification</label>
                                                    <div class="col-md-9">
                                                        <textarea id="enq_specification"  rows="5" class="form-control" name="enq_specification" placeholder="Specification"><?php echo $enq_description ?></textarea>
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Product</label>
                                                    <div class="col-md-9">
                                                        <input type="text" disabled id="cphno" class="form-control" name="enq_contactper_phone" value="<?php echo $pname; ?>" >

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Select Status</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" id="status" name="status" Onchange="gets(this.value)">
														<option value="">Select Status</option>
                                                            <option value="New Quotation">New Quotation</option>
                                                            <option value="Appointment">Create Appointment</option>
                                                            <option value="Call with TL">Call with TL</option>
                                                        </select>
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Erection</label>
													 <div class="col-md-9">
                                                        <input type="text" oncut="return false" onpaste="return false" maxlength="6" id="erectn_val" class="form-control" name="erectn_val" placeholder="Enter Excise Duty"  onKeyPress="return isNumberKey(event)">

                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Select Freight terms</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" id="freigt_term" name="freigt_term">
														<option value="">Select Freight terms</option>
                                                            <option value="To pay">To pay</option>
                                                            <option value="Paid">Paid</option>
                                                        </select>
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Select Delivery in weeks</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" id="delevry_week" name="delevry_week" >
														<option value="">Select week</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
															<option value="3">3</option>
                                                            <option value="4">4</option>
															<option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                </div>
<?php $code=$_SESSION['team_head_user_code'];
 $my="select user_discount from tbl_user where user_code='$code'";  
$d=mysqli_fetch_array(mysqli_query($conn,$my));

 $da=$d['user_discount'];?>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Discount</label>
                                                    <div class="col-md-9">
                                                        <input type="text" oncut="return false" onpaste="return false" maxlength="2" id="Discount" class="form-control" name="Discount" onKeyPress="return isNumberKey(event)"  onkeyup="this.value = minmax(this.value,<?php echo $da;?>)">

                                                    </div>
                                                </div>
                                                <div id="appointment" style="display:none">
                                                    <div class="form-group row">
                                                        <label class ="col-md-3 label-control"> Date</label>
                                                        <div class="input-group col-md-9" style="margin-top: -10px;width: 75%;">
                                                            <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                                            <input type="text" id="test" name="date"  class="form-control datepicker-default col-md-9" style="width:99%;" />
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput1">Appointment Time :</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="textColor" placeholder="Select Your Appointment Time" name="appoint_tme">	
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Appointment Through :</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="appthrough"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Enter Appointment Through" data-title="(Ex: Phone,skype,video call,direct)" data-original-title="" title="" name="appoint_thrugh">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Appointment Location :</label>
                                                        <div class="col-md-9">
                                                            <input type="text"  id="applocation" class="form-control" placeholder="Enter Appointment Location" name="appoint_locatn">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Appointment Description :</label>
                                                        <div class="col-md-9">
                                                            <textarea  id="appoint_cmd" rows="5" class="form-control" name="appoint_cmd" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">





                                                <div id="entry1" class="clonedInput">      
                                                    <h2 id="reference" class="heading-reference">Add Products #1</h2>
                                                  <span id="loading"></span>  <!-- Step 1 -->

                                                    <fieldset>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control " for="projectinput7">Select Product</label>
                                                            <div class="col-md-9">
                                                                <select id="enq_product" name="enq_product[]" class="form-control required input_fn" onchange="getmodel(this.value, $(this).attr('id'))" required ="required">
                                                                    <option value="">Select Model</option>
                                                                    <?php
                                                                    $q3 = mysqli_query($conn, "select product_group_name,product_id from tbl_product_group");
                                                                    while ($row3 = mysqli_fetch_array($q3)) {
                                                                        ?>                                                            
                                                                        <option value="<?php echo $row3['product_id']; ?>"><?php echo $row3['product_group_name'] ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
																

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Select Model</label>
                                                            <div class="col-md-9" id="hide">
                                                                <select id="enq_model"  name="enq_model[]" class="form-control required input_ln" onchange="getmodelno(this.value, $(this).attr('id'))" required>

                                                                    <option value="">Select Product First</option>

                                                                </select>
															
                                                            </div>

                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Select Model No</label>
                                                            <div class="col-md-9" id="hide-modelno">
                                                                <select id="enq_model_no" name="enq_model_no[]" class="form-control required input_gn" onchange="gettype(this.value, $(this).attr('id'))"required>
                                                                    <option value="">Select Model First</option>

                                                                </select>
                                                            </div>
                                                            <span id="show-modelno"></span>

                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Select Model Type</label>
                                                            <div class="col-md-9" id="hide-type">
                                                                <select id="enq_type" name="enq_type[]" class="form-control required input_mn"  onchange="getprice(this.value, $(this).attr('id'))"required>
                                                                    <option value="">Select Model First</option>

                                                                </select>
                                                            </div>


                                                        </div>

                                                        <div class="form-group row" id="price">
                                                            <label class="col-md-3 label-control" for="projectinput7">Price</label>
                                                            <div class="col-md-9">
                                                                <input type="text" disabled name="price[]" id="prices" class="form-control required input_price" value="" required>
                                                                <input type="hidden" value=""id="qprice" name="qprice[]"  class="form-control  required input_price_hn">
                                                            </div>
                                                        </div>


<div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Additional Price in %</label>
                                                            <div class="col-md-9">
                                                                <input type="text"  name="priceadd[]" id="priceadd" class="form-control required input_add" value=""  onKeyPress="return isNumberKey(event)"  onkeyup="this.value = maxadd(this.value,25)">
                                                              
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Quantity</label>



                                                            <div class="col-md-2">

                                                                <div class="input-group">
                                                                    <input type="text" class="form-control required input_qn" name="enq_qty[]" value="1" id="enq_qty" onchange="getgroupprice($(this).attr('id'))"required>
                                                                </div>

                                                            </div>

                                                        </div>


                                                    </fieldset>

                                                    <!-- Step 2 -->


                                                </div>		




                                                <p>
                                                    <button type="button" id="btnAdd" name="btnAdd" class="btn btn-info" value="You&#39;ve reached the limit" disabled="disabled">ADD Products</button>
                                                    <button type="button" id="btnDel" name="btnDel" class="btn btn-danger">Remove Products</button>
                                                </p>
												 <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Attach GA diagram</label>



                                                            <div class="col-md-2">

                                                                <div class="input-group">
                                                                    <input type="checkbox"  id="ga"  name="ga" value="yes">
                                                                </div>

                                                            </div>

                                                        </div>


 <div class="col-md-12" style="text-align:center">
                                                        <span id="errors" style="color:#ff0000;text-align:center"></span>

                                                        <span id="success" style="color:#967ADC;text-align:center"></span>

                                                    </div>

                                                <div class="form-actions" style="float:right;">
                                                    <button type="reset" class="btn btn-warning mr-1">
                                                        <i class="icon-cross2"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-primary" id="enq_update">
                                                        <i class="icon-check2"></i> Save
                                                    </button>
                                                   
                                                </div>

                                                <!-- Form wizard with step validation section end -->

</form>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Form wizard with number tabs section end -->


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
											<h4 class="modal-title" id=""><i class="icon-android-share	"></i> SEND CATALOGUE</h4>
										  </div>
										  <div class="modal-body">
											<form class="form form-horizontal" name="catalogue_submit_form" id="catalogue_submit_form">
                                                <div class="form-body">
													<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Send To</label>
                                                        <div class="col-md-9">
                                                            <input type="mail" id="snd_cat" value="<?php echo $enq_company_email; ?>" class="form-control" placeholder="Enter Mail Id" name="snd_cat">
                                                        </div>
                                                    </div>
													<hr>
													<div class="row">
													<center><h4><b><input type="checkbox"  id="sel"  checked> &nbsp; SELECT CATALOGUE </b></h4></center><br>
													
                                    <div class="col-md-4" style="text-transform:uppercase">
                                        <div class="form-group">
											<p><input type="checkbox"  id="sel"  name="type[]" value="2KD+"> 2KD+ </p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="2KW"> 2KW </p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="ADV"> ADV</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="Aftercoolers"> Aftercoolers</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="Air_Receiver"> Air Receiver</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="All_Products"> All Products</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="CHT"> CHT</p>
											
                                        </div>
                                    </div>
									<div class="col-md-4" style="text-transform:uppercase">
                                        <div class="form-group" >
											<p><input type="checkbox"  id="sel"  name="type[]" value="GAS"> GAS</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="GCT+"> GCT+</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="GEM_Airreceiver"> GEM_Airreceiver</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="GZF"> GZF</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="hld"> hld</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="HLN"> HLN</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="DCT"> DCT</p>

											
                                        </div>
                                    </div>
									<div class="col-md-4" style="text-transform:uppercase">
                                        <div class="form-group" >
											<p><input type="checkbox"  id="sel"  name="type[]" value="ECO"> ECO</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="ECT_FRP"> ECT FRP</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="Vortex_Separator"> Vortex Separator</p>
											<p><input type="checkbox"  id="sel"  name="type[]" value="NexGen_Dryer"> NexGen Dryer</p>
											<p><input type="checkbox"  id="sel"  name="PET_Series" value="PET_Series"> PET Series</p>
											<p><input type="checkbox"  id="sel"  name="Super_Pack_SPD" value="Super_Pack_SPD"> Super Pack SPD</p>
											
                                        </div>
                                    </div>
                                </div>
												</div>
												
												<div class="col-md-12" style="text-align:center">
                                                        <span id="errors1" style="color:#ff0000;text-align:center"></span>

                                                        <span id="successe" style="color:#967ADC;text-align:center"></span>

                                                    </div>
													
												<div class="modal-footer">
											<button type="button" id="catalogue_submit" name="catalogue_submit" class="btn btn-outline-primary">Send</button>
										  </div>
											</form>
										  </div>
										  
										</div>
									  </div>
									</div>
						
													
												
									<!-- Modal -->	
		
		
		
		
		
		

        <footer class="footer footer-light">
            <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
        </footer>

        <!-- BEGIN VENDOR JS-->
        <script src="robust-assets/js/vendors.min.js"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="robust-assets/js/plugins/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="robust-assets/js/app.min.js"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->

        <script type="text/javascript" src="./Dynamically Duplicating a form, by Tristan Denyer_files/clone-form-td.js.download"></script>
        <script src="robust-assets/js/components/enquiry/update1.js" type="text/javascript"></script>
		
		
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
	
	
	
        <script>

                                                                        function getmodel(idd, main) {
                                                                            if (idd != 0) {
                                                                                // alert('sss');
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: 'get_model.php',
                                                                                    data: {
                                                                                        id: idd,
                                                                                    },
																					  beforeSend: function () {
                    $("#errors").html('');
					$("#loading").html('<img src="ajaxloading.svg" style="width:20px;">');

                },
                                                                                    success: function (data)

                                                                                    {
																						$("#loading").html('');

                                                                                        if (main == 'enq_product') {
                                                                                            $('#entry1 #enq_model').html('');

                                                                                            $('#entry1 #enq_model').append(data);
                                                                                        }
                                                                                        if (main == 'ID2_enq_product') {
                                                                                            $('#entry2 #ID2_enq_model').html('');
                                                                                            $("#entry2 #ID2_enq_model").html(data);
                                                                                        }
																						 if (main == 'ID3_enq_product') {
                                                                                            $('#entry3 #ID3_enq_model').html('');
                                                                                            $("#entry3 #ID3_enq_model").html(data);
                                                                                        }
																						 if (main == 'ID4_enq_product') {
                                                                                            $('#entry4 #ID4_enq_model').html('');
                                                                                            $("#entry4 #ID4_enq_model").html(data);
                                                                                        }
																						if (main == 'ID5_enq_product') {
                                                                                            $('#entry5 #ID5__enq_model').html('');
                                                                                            $("#entry5 #ID5__enq_model").html(data);
                                                                                        }
if (main == 'ID6_enq_product') {
                                                                                            $('#entry6 #ID6__enq_model').html('');
                                                                                            $("#entry6 #ID6__enq_model").html(data);
                                                                                        }

                                                                                    },
                                                                                });




                                                                            }


                                                                        }



                                                                        function getmodelno(id, main) {
                                                                            if (id != 0) {
                                                                                // alert('sss');
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: 'get_model_no.php',
                                                                                    data: {
                                                                                        id: id,
                                                                                    },  beforeSend: function () {
                    $("#errors").html('');
					$("#loading").html('<img src="ajaxloading.svg" style="width:20px;">');

                },
                                                                                    success: function (data)

                                                                                    {
                                                                                   
$("#loading").html('');
                                                                                        if (main == 'enq_model') {
                                                                                            $('#entry1 #enq_model_no').html('');

                                                                                            $('#entry1 #enq_model_no').append(data);

                                                                                        }
                                                                                        if (main == 'ID2_enq_model') {
                                                                                            $('#entry2 #ID2_enq_model_no').html('');

                                                                                            $('#entry2 #ID2_enq_model_no').append(data);

                                                                                        }   if (main == 'ID3_enq_model') {
                                                                                            $('#entry3 #ID3_enq_model_no').html('');

                                                                                            $('#entry3 #ID3_enq_model_no').append(data);

                                                                                        }   if (main == 'ID4_enq_model') {
                                                                                            $('#entry4 #ID4_enq_model_no').html('');

                                                                                            $('#entry4 #ID4_enq_model_no').append(data);

                                                                                        }
																						
																						 if (main == 'ID5_enq_model') {
                                                                                            $('#entry5 #ID5_enq_model_no').html('');

                                                                                            $('#entry5 #ID5_enq_model_no').append(data);

                                                                                        }
																						 if (main == 'ID6_enq_model') {
                                                                                            $('#entry6 #ID6_enq_model_no').html('');

                                                                                            $('#entry6 #ID6_enq_model_no').append(data);

                                                                                        }
																						
                                                                                       
                                                                                    },
                                                                                });




                                                                            }


                                                                        }

                                                                        function gettype(id, main) {




                                                                            if (id != 0) {       // alert('sss');
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: 'get_type_no.php',
                                                                                    data: {
                                                                                        id: id,
                                                                                    },
                                                                                     beforeSend: function () {
                    $("#errors").html('');
					$("#loading").html('<img src="ajaxloading.svg" style="width:20px;">');

                },
                                                                                    success: function (data)

                                                                                    {
                                                                                   
$("#loading").html('');
                                                                         
							
                                                                                        if (main == 'enq_model_no') {
                                                                                            $('#entry1 #enq_type').html('');

                                                                                            $('#entry1 #enq_type').append(data);

                                                                                        }
                                                                                        if (main == 'ID2_enq_model_no') {
                                                                                            $('#entry2 #ID2_enq_type').html('');

                                                                                            $('#entry2 #ID2_enq_type').append(data);

                                                                                        }
																						if (main == 'ID3_enq_model_no') {
                                                                                            $('#entry3 #ID3_enq_type').html('');

                                                                                            $('#entry3 #ID3_enq_type').append(data);

                                                                                        } if (main == 'ID4_enq_model_no') {
                                                                                            $('#entry4 #ID4_enq_type').html('');

                                                                                            $('#entry4 #ID4_enq_type').append(data);

                                                                                        }
																						 if (main == 'ID5_enq_model_no') {
                                                                                            $('#entry5 #ID5_enq_type').html('');

                                                                                            $('#entry5 #ID5_enq_type').append(data);

                                                                                        }
																						 if (main == 'ID6_enq_model_no') {
                                                                                            $('#entry6 #ID6_enq_type').html('');

                                                                                            $('#entry6 #ID6_enq_type').append(data);

                                                                                        }
                                                                                    },
                                                                                });

                                                                            }


                                                                        }

                                                                        function getprice(id, main) {

                                                                            if (main == 'enq_type') {
                                                                                var type = $('#enq_model_no').val();

                                                                            } 
																			else if (main == 'ID2_enq_type') {
                                                                                var type = $('#ID2_enq_model_no').val();

                                                                            }
																			else if (main == 'ID3_enq_type') {
                                                                                var type = $('#ID3_enq_model_no').val();

                                                                            }else if (main == 'ID4_enq_type') {
                                                                                var type = $('#ID4_enq_model_no').val();

                                                                            }
																			else if (main == 'ID5_enq_type') {
                                                                                var type = $('#ID5_enq_model_no').val();

                                                                            }
																			else if (main == 'ID6_enq_type') {
                                                                                var type = $('#ID6_enq_model_no').val();

                                                                            }
                                                                            if (id != '') {       // alert('sss');
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: 'get_price.php',
                                                                                    data: {
                                                                                        id: id,
                                                                                        type: type,
                                                                                    },
                                                                                    beforeSend: function () {
                    $("#errors").html('');
					$("#loading").html('<img src="ajaxloading.svg" style="width:20px;">');

                },
                                                                                    success: function (data)

                                                                                    {
                                                                                   
$("#loading").html('');
                                                                         if (main == 'enq_type') {

																		 $('#entry1 #prices').val(data);
																		 var a=data;
																		 a=a.replace(/\s/g, "");
                                                                                            $('#entry1 #qprice').val(a);
																							
																							

                                                                                        }
                                                                                        if (main == 'ID2_enq_type') {
                                                                                            $('#entry2 #ID2_prices').val(data);
																							 var a=data;
																		 a=a.replace(/\s/g, "");
                                                                                            $('#entry2 #ID2_qprice').val(a);

                                                                                        } if (main == 'ID3_enq_type') {
                                                                                            $('#entry3 #ID3_prices').val(data);
																							 var a=data;
																		 a=a.replace(/\s/g, "");
                                                                                          //  $('#entry2 #ID2_qprice').val(a);

                                                                                            $('#entry3 #ID3_qprice').val(a);

                                                                                        } if (main == 'ID4_enq_type') {
                                                                                            $('#entry4 #ID4_prices').val(data);
																							 var a=data;
																		 a=a.replace(/\s/g, "");
                                                                                            //$('#entry2 #ID2_qprice').val(a);

                                                                                            $('#entry4 #ID4_qprice').val(a);

                                                                                        }
																						if (main == 'ID5_enq_type') {
                                                                                            $('#entry5 #ID5_prices').val(data);
																							 var a=data;
																		 a=a.replace(/\s/g, "");
                                                                                            //$('#entry2 #ID2_qprice').val(a);

                                                                                            $('#entry5 #ID5_qprice').val(a);

                                                                                        }
																						if (main == 'ID6_enq_type') {
                                                                                            $('#entry6 #ID6_prices').val(data);
																							 var a=data;
																		 a=a.replace(/\s/g, "");
                                                                                            //$('#entry2 #ID2_qprice').val(a);

                                                                                            $('#entry6 #ID6_qprice').val(a);

                                                                                        }
                                                                                    },
                                                                                });

                                                                            }



                                                                        }
                                                                        function gets(id) {

 if (id == "New Quotation") {
                                                                                $('#quotation').show();
																				    $('#appointment').hide();

                                                                            }
                                                                        
                                                                            if (id == "Appointment") {

                                                                                $('#appointment').show();
																				$('#quotation').hide();

                                                                            } else {
                                                                                $('#appointment').hide();
                                                                                $('#quotation').hide();
                                                                               
                                                                            }


                                                                        }


                                                                        function getgroupprice(main) {


                                                                            if (main == 'enq_qty') {

                                                                                var qprice = $('#entry1 #prices').val();
                                                                                var qpricess = $('#entry1 #qprice').val();


                                                                                if (qprice == '' || qprice == '0') {
                                                                                    alert("Please select  valuable product and model");
                                                                                    $('#entry1 #enq_qty').val('1');
                                                                                } else {

                                                                                    var qty = $('#entry1 #enq_qty').val();

                                                                                    var tests = qty * qpricess;

                                                                                    $('#entry1 #prices').val(tests);


                                                                                }
                                                                            }
																			else if (main == 'ID2_enq_qty') {
                                                                               

                                                                                var qprice = $('#entry2 #ID2_qprice').val();
                                                                                var qpricess = $('#entry2 #ID2_qprice').val();

                                                                                if (qprice == '' || qprice == '0') {
                                                                                    alert("Please select  valuable product and model");
                                                                                    $('#entry2 #ID2_enq_qty').val('1');
                                                                                } else {

                                                                                    var qty = $('#entry2 #ID2_enq_qty').val();

                                                                                    var tests = qty * qpricess;

                                                                                    $('#entry2 #ID2_prices').val(tests);


                                                                                }
                                                                            }
																				else if (main == 'ID3_enq_qty') {

                                                                                var qprice = $('#entry3 #ID3_qprice').val();
                                                                                var qpricess = $('#entry3 #ID3_qprice').val();

                                                                                if (qprice == '' || qprice == '0') {
                                                                                    alert("Please select  valuable product and model");
                                                                                    $('#entry3 #ID3_enq_qty').val('1');
                                                                                } else {

                                                                                    var qty = $('#entry3 #ID3_enq_qty').val();

                                                                                    var tests = qty * qpricess;

                                                                                    $('#entry3 #ID3_prices').val(tests);


                                                                                }
                                                                            }
																			else if (main == 'ID4_enq_qty') {

                                                                                var qprice = $('#entry4 #ID4_qprice').val();
                                                                                var qpricess = $('#entry4 #ID4_qprice').val();

                                                                                if (qprice == '' || qprice == '0') {
                                                                                    alert("Please select  valuable product and model");
                                                                                    $('#entry4 #ID4_enq_qty').val('1');
                                                                                } else {

                                                                                    var qty = $('#entry4 #ID4_enq_qty').val();

                                                                                    var tests = qty * qpricess;

                                                                                    $('#entry4 #ID4_prices').val(tests);


                                                                                }
                                                                            }
																				else if (main == 'ID5_enq_qty') {

                                                                                var qprice = $('#entry5 #ID5_qprice').val();
                                                                                var qpricess = $('#entry5 #ID5_qprice').val();

                                                                                if (qprice == '' || qprice == '0') {
                                                                                    alert("Please select  valuable product and model");
                                                                                    $('#entry5 #ID5_enq_qty').val('1');
                                                                                } else {

                                                                                    var qty = $('#entry5 #ID5_enq_qty').val();

                                                                                    var tests = qty * qpricess;

                                                                                    $('#entry5 #ID5_prices').val(tests);


                                                                                }
                                                                            }
                                                                            else if (main == 'ID6_enq_qty') {

                                                                                var qprice = $('#entry6 #ID6_qprice').val();
                                                                                var qpricess = $('#entry6 #ID6_qprice').val();

                                                                                if (qprice == '' || qprice == '0') {
                                                                                    alert("Please select  valuable product and model");
                                                                                    $('#entry6 #ID6_enq_qty').val('1');
                                                                                } else {

                                                                                    var qty = $('#entry6 #ID6_enq_qty').val();

                                                                                    var tests = qty * qpricess;

                                                                                    $('#entry6 #ID6_prices').val(tests);


                                                                                }
                                                                            }
                                                                            
                                                                        }
																		


        </script>   

 <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->

    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script> 
	    <script src="robust-assets/js/plugins/extensions/datedropper.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/extensions/timedropper.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/extensions/date-time-dropper.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/catalogue.js" type="text/javascript"></script>
		 <script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode == 32) {
                return true;
            } else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            } else {
                return true;
            }
        }
    </script>
	<script type="text/javascript">
function minmax(value,max) 
{
    var t="<?php echo $da; ?>";
     if(parseInt(value) > max){ 
        return t; 
	 }
    else return value;
}
</script>
<script type="text/javascript">
function maxadd(value,max) 
{
    
     if(parseInt(value) > max){ 
        return 25; 
	 }
    else return value;
}
</script>
    </body>
</html>
</html>