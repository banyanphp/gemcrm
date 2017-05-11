<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="">
        <title>Enquiry Registration</title>
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
        <link rel="stylesheet" type="text/css" href="robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/ui/jquery-ui.min.css">

        <!-- END Font icons-->
        <!-- BEGIN Plugins CSS-->
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/sliders/slick/slick.css">
        <!-- END Plugins CSS-->
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

        <?php include 'header.php' ?>
        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body"><!-- Basic form layout section start -->
                    <section id="horizontal-form-layouts">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="card-body collapse in">
                                        <div class="card-block">
                                            <div class="col-sm-6 col-xs-8 col-md-8 pull-left" align="left">

                                                <h4 class="form-section"><i class="icon-head"></i> Enquiry Info</h4>
                                            </div>
                                            <!-- Button trigger modal -->
                                            <div class="col-sm-6 col-xs-4 col-md-4 pull-right" align="right">
                                                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#iconModal">Send Mail</button>
                                            </div>
                                            <br><br><hr>
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


                                            <form class="form form-horizontal" id="enq-update">
                                                <div class="form-body">

                                                    <!-- Button trigger modal -->



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
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Product</label>
                                                        <div class="col-md-9">
                                                            <select id="enq_product1" name="enq_product[]" class="form-control" onchange="getmodelno(this.value)">
                                                                <option value="0">Select Model</option>
                                                                <?php
                                                                $q3 = mysqli_query($conn, "select product_series_tbl_name,product_series_name from tbl_product_tables where product_group_id='$enq_product_series'");
                                                                while ($row3 = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                    <option value="<?php echo $row3['product_series_tbl_name']; ?>(<?php echo $row3['product_series_name']; ?>)"><?php echo $row3['product_series_name'] ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Model</label>
                                                        <div class="col-md-9">
                                                            <select id="enq_model" name="enq_model" class="form-control" onchange="getmodelno(this.value)">
                                                                <option value="0">Select Model</option>
                                                                <?php
                                                                $q3 = mysqli_query($conn, "select product_series_tbl_name,product_series_name from tbl_product_tables where product_group_id='$enq_product_series'");
                                                                while ($row3 = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                    <option value="<?php echo $row3['product_series_tbl_name']; ?>(<?php echo $row3['product_series_name']; ?>)"><?php echo $row3['product_series_name'] ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group row" id="qty_price" style="display:none">
                                                        <label class="col-md-3 label-control" for="projectinput7">Quantity</label>



                                                        <div class="col-md-2">

                                                            <div class="input-group">
                                                                <input type="text" class="touchspin form-control" value="1" id="qty" onchange="getgroupprice()">
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <span id="show"></span>
                                                    <span id="shows"></span>
                                                    <span id="shows-price"></span>


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
                                                    <div class="form-group row" id="message">
                                                        <label class="col-md-3 label-control" for="projectinput9">Specification</label>
                                                        <div class="col-md-9">
                                                            <textarea id="enq_specification"  rows="5" class="form-control" name="enq_specification" placeholder="Specification"><?php echo $enq_description ?></textarea>
                                                        </div>
                                                    </div> 
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <div class="form-group col-md-12" style="text-align:center">
                                                        <span id="errors"  style="color:#ff0000;text-align:center"></span></div>
                                                    <div class="form-group col-md-12" style="text-align:center">	
                                                        <span id="success"  style="color:#139c9b;text-align:center"></span></div>

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
                                                
                                                  
                      <section id="validation">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Validation Example</h4>
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
                        <form action="#" class="steps-validation wizard-circle">

                            <!-- Step 1 -->
                            <h6>Step 1</h6>
                            <fieldset>
							
							  <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Product</label>
                                                        <div class="col-md-9">
                                                            <select id="enq_product1" name="enq_product[]" class="form-control required" onchange="getmodel(this.value)">
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
                                                            <select id="enq_model1" name="enq_model[]" class="form-control" onchange="getmodelno(this.value)">
                                                                <option value="0">Select Product First</option>
                                                              
                                                            </select>
                                                        </div><span id="show-model"></span>

                                                    </div>
													
														<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Model No</label>
                                                        <div class="col-md-9" id="hide-modelno">
                                                            <select id="enq_model_no1" name="enq_Model_no[]" class="form-control" onchange="gettype(this.value)">
                                                                <option value="0">Select Model First</option>
                                                              
                                                            </select>
                                                        </div>
														<span id="show-modelno"></span>

                                                    </div>
														<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Model Type</label>
                                                        <div class="col-md-9" id="hide-type">
                                                            <select id="enq_type1" name="enq_type_no[]" class="form-control" onchange="getprice(this.value)">
                                                                <option value="0">Select Model First</option>
                                                              
                                                            </select>
                                                        </div>
														<span id="shows-type"></span>

                                                    </div>
													 <span id="shows-price"></span>
                              </fieldset>

                            <!-- Step 2 -->
                            <h6>Step 2</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="proposalTitle3">
                                                Proposal Title :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress6">
                                                Email Address :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="email" class="form-control required" id="emailAddress6" name="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="videoUrl3">Video URL :</label>
                                            <input type="url" class="form-control" id="videoUrl3" name="videoUrl" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle5">
                                                Job Title :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" >
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription3">Short Description :</label>
                                            <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6>Step 3</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                Event Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3" name="eventName" >
                                        </div>
                                        <div class="form-group">
                                            <label for="eventType3">
                                                Event Type :
                                                <span class="danger">*</span>
                                            </label>
                                            <select class="custom-select form-control required" id="eventType3" name="eventType">
                                                <option value="Banquet">Banquet</option>
                                                <option value="Fund Raiser">Fund Raiser</option>
                                                <option value="Dinner Party">Dinner Party</option>
                                                <option value="Wedding">Wedding</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventLocation3">Event Location :</label>
                                            <select class="custom-select form-control" id="eventLocation3" name="eventLocation">
                                                <option value="">Select City</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Frankfurt">Frankfurt</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventDate">
                                                Event Date - Time :
                                                <span class="danger">*</span>
                                            </label>
                                            <div class='input-group'>
                                                <input type='text' class="form-control datetime required" id="eventDate" name="eventDate" />
                                                <span class="input-group-addon">
                                                    <span class="icon-calendar-o"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">
                                                Event Status :
                                                <span class="danger">*</span>
                                            </label>
                                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Requirements :</label>
                                            <div class="c-inputs-stacked">
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">Staffing</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">Catering</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 4 -->
                            <h6>Step 4</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meetingName3">
                                                Name of Meeting :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="meetingName3" name="meetingName" >
                                        </div>

                                        <div class="form-group">
                                            <label for="meetingLocation3">
                                                Location :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="meetingLocation3" name="meetingLocation" >
                                        </div>

                                        <div class="form-group">
                                            <label for="participants3">Names of Participants</label>
                                            <textarea name="participants" id="participants3" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="decisions3">Decisions Reached</label>
                                            <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Agenda Items :</label>
                                            <div class="c-inputs-stacked">
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">1st item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">2nd item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">3rd item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">4th item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">5th item</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        
						 <h6>Step 3</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                Event Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3" name="eventName" >
                                        </div>
                                        <div class="form-group">
                                            <label for="eventType3">
                                                Event Type :
                                                <span class="danger">*</span>
                                            </label>
                                            <select class="custom-select form-control required" id="eventType3" name="eventType">
                                                <option value="Banquet">Banquet</option>
                                                <option value="Fund Raiser">Fund Raiser</option>
                                                <option value="Dinner Party">Dinner Party</option>
                                                <option value="Wedding">Wedding</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventLocation3">Event Location :</label>
                                            <select class="custom-select form-control" id="eventLocation3" name="eventLocation">
                                                <option value="">Select City</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Frankfurt">Frankfurt</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventDate">
                                                Event Date - Time :
                                                <span class="danger">*</span>
                                            </label>
                                            <div class='input-group'>
                                                <input type='text' class="form-control datetime required" id="eventDate" name="eventDate" />
                                                <span class="input-group-addon">
                                                    <span class="icon-calendar-o"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">
                                                Event Status :
                                                <span class="danger">*</span>
                                            </label>
                                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Requirements :</label>
                                            <div class="c-inputs-stacked">
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">Staffing</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">Catering</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 4 -->
                            <h6>Step6</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meetingName3">
                                                Name of Meeting :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="meetingName3" name="meetingName" >
                                        </div>

                                        <div class="form-group">
                                            <label for="meetingLocation3">
                                                Location :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="meetingLocation3" name="meetingLocation" >
                                        </div>

                                        <div class="form-group">
                                            <label for="participants3">Names of Participants</label>
                                            <textarea name="participants" id="participants3" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="decisions3">Decisions Reached</label>
                                            <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Agenda Items :</label>
                                            <div class="c-inputs-stacked">
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">1st item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">2nd item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">3rd item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">4th item</span>
                                                </label>
                                                <label class="inline custom-control custom-checkbox block">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">5th item</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                      
						 <div class="form-actions" style="float:right;">
                                                        <button type="reset" class="btn btn-warning mr-1">
                                                            <i class="icon-cross2"></i> Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary" id="enq_update">
                                                            <i class="icon-check2"></i> Save
                                                        </button>
                                                       
                                                    </div>
						
						</form>
						 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
	
	
	<script>

                                                                function getmodel(id) {
                                                                  

                                                                    if (id != 0) {
                                                                        // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_model.php',
                                                                            data: {
                                                                                id: id,
                                                                            },
                                                                            success: function (data)

                                                                            {
																				
                                                                                $('#show-model').show();
                                                                                $('#hide').hide();
                                                                                $('#show-model').html(data);
                                                                            },
                                                                        });




                                                                    } 


                                                                }



                                                                function getmodelno(id) {
                                                                  
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
                                                                                $('#show-modelno').show();
                                                                                $('#hide-modelno').hide();
                                                                                $('#show-modelno').html(data);
                                                                            },
                                                                        });




                                                                    } 


                                                                }

                                                                function gettype(id) {





                                                                    if (id != 0) {       // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_type_no.php',
                                                                            data: {
                                                                                id: id,
                                                                            },
                                                                            success: function (data)

                                                                            {
                                                                                $('#shows-type').show();
                                                                                $('#hide-type').hide();

                                                                                $('#shows-type').html(data);
                                                                            },
                                                                        });

                                                                    } 


                                                                }

                                                                function getprice(id, type) {





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
                                                                                $('#shows-price').show();
                                                                                $('#qty_price').show();
                                                                                $('#shows-price').html(data);
                                                                            },
                                                                        });

                                                                    } else {

                                                                        $('#price').hide();
                                                                        $('#qty_price').hide();
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
                                                                function getgroupprice() {

                                                                    var qty = $('#qty').val();

                                                                    var enq_update = $('#enq-update').serialize();
                                                                    var qprice = $('#qprice').val();
                                                                    var tests = qty * qprice;
                                                                    $('#prices').val(tests);
                                                                }

        </script>   



     </body>
</html>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->


        <?php ?>


        <!-- Modal -->
        <div class="modal fade text-xs-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id=""><i class="icon-android-share	"></i> SEND QUOTATION</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form form-horizontal" id="enq-update">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput2">Send To</label>
                                    <div class="col-md-9">
                                        <input type="text" id="snt_mal" class="form-control" placeholder="Company Name" name="snt_mal">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->	
        <!-- BEGIN VENDOR JS-->
        <script src="robust-assets/js/vendors.min.js"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="robust-assets/js/plugins/forms/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/toggle/bootstrap-checkbox.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/toggle/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/toggle/switchery.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/forms/spinner/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="robust-assets/js/app.min.js"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->    <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script> 

        <!-- END ROBUST JS-->

        <script>
                                                                function getmodelno(id) {
                                                                    $('#gettypes').hide();
                                                                    $('#price').hide();
                                                                    $('#qty_price').hide();

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
                                                                                $('#show').show();
                                                                                $('#hide').hide();
                                                                                $('#show').html(data);
                                                                            },
                                                                        });




                                                                    } else {
                                                                        $('#modelno').hide();
                                                                        $('#gettypes').hide();
                                                                        $('#price').hide();
                                                                        $('#qty_price').hide();
                                                                    }


                                                                }

                                                                function gettype(id) {





                                                                    if (id != 0) {       // alert('sss');
                                                                        $.ajax({
                                                                            type: "POST",
                                                                            url: 'get_type_no.php',
                                                                            data: {
                                                                                id: id,
                                                                            },
                                                                            success: function (data)

                                                                            {
                                                                                $('#shows').show();

                                                                                $('#shows').html(data);
                                                                            },
                                                                        });

                                                                    } else {

                                                                        $('#gettypes').hide();
                                                                        $('#price').hide();
                                                                        $('#qty_price').hide();
                                                                    }


                                                                }

                                                                function getprice(id, type) {





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
                                                                                $('#shows-price').show();
                                                                                $('#qty_price').show();
                                                                                $('#shows-price').html(data);
                                                                            },
                                                                        });

                                                                    } else {

                                                                        $('#price').hide();
                                                                        $('#qty_price').hide();
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
                                                                function getgroupprice() {

                                                                    var qty = $('#qty').val();

                                                                    var enq_update = $('#enq-update').serialize();
                                                                    var qprice = $('#qprice').val();
                                                                    var tests = qty * qprice;
                                                                    $('#prices').val(tests);
                                                                }

        </script>   <script src="robust-assets/js/components/forms/checkbox-radio.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/forms/switch.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/forms/input-groups.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/extensions/datedropper.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/extensions/timedropper.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="robust-assets/js/components/extensions/date-time-dropper.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/enquiry/update.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    </body>
</html>
