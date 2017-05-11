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
                                        <h4 class="card-title">Enquiry  Allotment</h4>
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


                                           
                                            <form action="" method="post" id="enq_update_form" class="">
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
                                                        <input type="text" disabled id="enqno" class="form-control" placeholder="Company Name" name="enq_name" value="<?php echo $enq_no; ?>" >
														 <input type="hidden"  id="enqno" class="form-control" placeholder="Company Name" name="enq_no" value="<?php echo $enq_no; ?>" >

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput2">Company Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" disabled id="cnames" class="form-control" placeholder="Company Name" name="enq_name" value="<?php echo $enq_company_name; ?>" >
                                                        <input type="hidden" id="cname" class="form-control" placeholder="Company Name" name="company_name" value="<?php echo $enq_company_name; ?>" >
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
                                               <?php
											   if($_SESSION['user_permsission_self_allotment']=='yes'&& $_SESSION['user_permsission_alotment']!='yes'){
												 ?>  
												 <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Self Allotment</label>
                                                    <div class="col-md-9">
                                                        <input type="checkbox"  id="allotment" class="" name="allotedto" value="<?php echo $_SESSION['user_code']; ?>">Self Allotment

                                                    </div>
                                                </div>
											   <?php }
											   ?>
											     <?php
											   if($_SESSION['user_permsission_alotment']=='yes'){
												 ?>  
												  <div class="form-group">
                                                        <label class="col-md-3 label-control" for="projectinput5">Alloted To</label>
														<div class="col-md-9">
                                                        <select  class="form-control" name="allotedto" id="participants">
														  <option selected="selected" value="0">Select</option>

                                                            <?php
                                                            $q = mysqli_query($conn,"select * from tbl_user");
                                                            while ($row = mysqli_fetch_array($q)) {
                                                                ?>       



                                                                <option value="<?php echo $row['user_code'] ?>"><?php echo $row['user_name']; ?>(<?php echo $row['user_code']; ?>)</option>
<?php } ?>


                                                        </select>
                                                    </div></div>
											   <?php }
											   ?>
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
												<input type="hidden" name="permission" id="permission" value="<?php   if($_SESSION['user_permsission_alotment']=='yes'){ echo "1"; } else if($_SESSION['user_permsission_self_allotment']=='yes'&& $_SESSION['user_permsission_alotment']!='yes'){ echo "2"; } ?>">





                                               


                                             

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

       
        <script src="robust-assets/js/components/enquiry/allot.js" type="text/javascript"></script>
		
		
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
	
	
	
      
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->

    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
 

    </body>
</html>