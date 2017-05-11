<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Circle Style - Robust Admin Template</title>
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
        <script src="./Dynamically Duplicating a form, by Tristan Denyer_files/jquery.min.js.download"></script>

        <script type="text/javascript" src="./Dynamically Duplicating a form, by Tristan Denyer_files/clone-form-td.js.download"></script>
        <script src="./Dynamically Duplicating a form, by Tristan Denyer_files/bootstrap.min.js.download"></script> 
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


        <?php include 'header.php' ?>
        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body"><!-- Form wizard with number tabs section start -->
                    <section id="number-tabs">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Form wizard with number tabs</h4>
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


                                           
                                            <form action="update_process.php" method="post" id="enq_update" class="steps-validation">
 <?php
                                            include 'dbconnect.php';
                                            $id = $_GET['id'];
                                            $q = mysqli_query($conn, "select * from tbl_enquiry where enq_id='$id'");
                                            $row = mysqli_fetch_array($q);

                                            $enq_no = $row['enq_no'];
                                            $enq_company_name = $row['enq_company_name'];
                                            $enq_company_email = $row['enq_company_email'];
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
                                                        <input type="text" disabled id="cname" class="form-control" placeholder="Company Name" name="enq_name" value="<?php echo $enq_no; ?>" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput2">Company Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" disabled id="cname" class="form-control" placeholder="Company Name" name="enq_name" value="<?php echo $enq_company_name; ?>" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="cemail" class="form-control" placeholder="E-mail" name="enq_email" value="<?php echo $enq_company_email; ?>" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="phone" class="form-control" placeholder="Phone" name="enq_phone" value="<?php echo $enq_company_phn_no; ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Contact Person Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" disabled  id="cpname" class="form-control" placeholder="Contact Person Name" name="enq_contactperson" value="<?php echo $enq_contact_person_name; ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">Address</label>
                                                    <div class="col-md-9">
                                                        <textarea id="address" disabled rows="5" class="form-control" name="enq_address" placeholder="Address"><?php echo $enq_company_address; ?></textarea>
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
                                                        <input type="text"  id="cphno" class="form-control" placeholder="Contact Person  Mobile No" name="enq_contactper_phone" value="<?php echo $enq_contact_person_phone_no; ?>" >
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
                                                            <option value="New Quotation">New Quotation</option>
                                                            <option value="Appointment">Create Appointment</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Discount</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  id="Discount" class="form-control" name="Discount"  >

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
                                                            <input type="text" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Enter Appointment Through" data-title="(Ex: Phone,skype,video call,direct)" data-original-title="" title="" name="appoint_thrugh">
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
                                                            <textarea id="projectinput9" rows="5" class="form-control" name="appoint_cmd" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">







                                                <div id="entry1" class="clonedInput">      
                                                    <h2 id="reference" class="heading-reference">Add Products #1</h2>
                                                    <!-- Step 1 -->

                                                    <fieldset>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control input_fn" for="projectinput7">Select Product</label>
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

                                                                    <option value="0">Select Product First</option>

                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Select Model No</label>
                                                            <div class="col-md-9" id="hide-modelno">
                                                                <select id="enq_model_no" name="enq_model_no[]" class="form-control required input_gn" onchange="gettype(this.value, $(this).attr('id'))"required>
                                                                    <option value="0">Select Model First</option>

                                                                </select>
                                                            </div>
                                                            <span id="show-modelno"></span>

                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Select Model Type</label>
                                                            <div class="col-md-9" id="hide-type">
                                                                <select id="enq_type" name="enq_type[]" class="form-control required input_mn"  onchange="getprice(this.value, $(this).attr('id'))"required>
                                                                    <option value="0">Select Model First</option>

                                                                </select>
                                                            </div>


                                                        </div>

                                                        <div class="form-group row" id="price">
                                                            <label class="col-md-3 label-control" for="projectinput7">Price</label>
                                                            <div class="col-md-9">


                                                                <input type="text"  disabled name="price[]" id="prices" class="form-control required input_price" value="" required>
                                                                <input type="hidden" value="" id="qprice" name="qprice[]"  class="form-control  required input_price_hn">

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
                                                    <button type="button" class="btn btn-Success" id="Send_update">
                                                        <i class="icon-note"></i> Save & Send Quotation
                                                    </button>
                                                </div>

                                                <!-- Form wizard with step validation section end -->







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

        <script src="robust-assets/js/plugins/forms/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/toggle/bootstrap-checkbox.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/toggle/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/toggle/switchery.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/spinner/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->   <script src="robust-assets/js/components/forms/checkbox-radio.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/forms/switch.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/forms/input-groups.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/enquiry/update1.js" type="text/javascript"></script>
		
		
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/forms/wizard-steps.js" type="text/javascript"></script>
	
	
	
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
                                                                                    success: function (data)

                                                                                    {

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
                                                                                    },
                                                                                    success: function (data)

                                                                                    {

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
                                                                                    success: function (data)

                                                                                    {

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
                                                                                    success: function (data)

                                                                                    {
                                                                                        if (main == 'enq_type') {
                                                                                            $('#entry1 #prices').val(data);
                                                                                            $('#entry1 #qprice').val(data);

                                                                                        }
                                                                                        if (main == 'ID2_enq_type') {
                                                                                            $('#entry2 #ID2_prices').val(data);
                                                                                            $('#entry2 #ID2_qprice').val(data);

                                                                                        } if (main == 'ID3_enq_type') {
                                                                                            $('#entry3 #ID3_prices').val(data);
                                                                                            $('#entry3 #ID3_qprice').val(data);

                                                                                        } if (main == 'ID4_enq_type') {
                                                                                            $('#entry4 #ID4_prices').val(data);
                                                                                            $('#entry4 #ID4_qprice').val(data);

                                                                                        }
																						if (main == 'ID5_enq_type') {
                                                                                            $('#entry5 #ID5_prices').val(data);
                                                                                            $('#entry5 #ID5_qprice').val(data);

                                                                                        }
																						if (main == 'ID6_enq_type') {
                                                                                            $('#entry6 #ID6_prices').val(data);
                                                                                            $('#entry6 #ID6_qprice').val(data);

                                                                                        }
                                                                                    },
                                                                                });

                                                                            }



                                                                        }
                                                                        function gets(id) {


                                                                            if (id == "Completed") {
                                                                                $('#completed').show();

                                                                            }
                                                                            if (id == "dropped") {


                                                                                $('#remarks').show();
                                                                            }
                                                                            if (id == "Appointment") {

                                                                                $('#appointment').show();
                                                                            } else {
                                                                                $('#appointment').hide();
                                                                                $('#remarks').hide();
                                                                                $('#shows-pnrno').hide();
                                                                                $('#shows_quotation_list').hide();
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
                                                                                alert(main);

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



    </body>
</html>