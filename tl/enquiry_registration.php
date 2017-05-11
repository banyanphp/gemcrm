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

                                            <form class="form form-horizontal" id="enq-registration">
                                                <div class="form-body">
                                                    <h4 class="form-section"><i class="icon-head"></i> Enquiry Info</h4>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Company Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="cname" class="form-control" placeholder="Company Name" name="enq_name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail" class="form-control" placeholder="E-mail" name="enq_email">
                                                        </div>
                                                    </div>
                                                   <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Addon E-mail1</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail1" class="form-control" placeholder=" Addon  E-mail" name="enq_email1">
                                                        </div>
                                                    </div>   <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Addon E-mail2</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail2" class="form-control" placeholder="Addon  E-mail" name="enq_email2">
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Addon E-mail3</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="cemail3" class="form-control" placeholder="Addon  E-mail" name="enq_email3">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="phone" class="form-control" oncut="return false" onpaste="return false" onKeyPress="return isNumberKey(event)" placeholder="Phone" name="enq_phone">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">Contact Person Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="cpname" class="form-control" placeholder="Contact Person Name" name="enq_contactperson">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">Contact Person Mobile No</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="cphno" class="form-control" oncut="return false" onpaste="return false" onKeyPress="return isNumberKey(event)" placeholder="Contact Person  Mobile No" name="enq_contactper_phone">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Enquiry Through</label>
                                                        <div class="col-md-9">
                                                            <select id="ethrouch" name="ethrouch" class="form-control" onChange="getplace(this.value)">

                                                                <option value="0" selected>Enquiry Through</option><?PHP
                                                                include 'dbconnect.php';
                                                                $enquiry_through_query = mysqli_query($conn, "SELECT * FROM `tbl_enquiry_through` where enquiry_through_status='1'");
                                                                while ($row2 = mysqli_fetch_array($enquiry_through_query)) {
                                                                    ?>
                                                                    <option value="<?php echo $row2['enquiry_through_id'] ?>" ><?php echo $row2['enquiry_through_name'] ?></option>

                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row" id="countryId" style="display:none;">
                                                        <label class="col-md-3 label-control" for="projectinput7">Campaign</label>

                                                        <div class="col-md-9">
                                                            <select id="enq_campaign" name="enq_campaign" class="form-control">
                                                                <option value="0" selected>Please select Campaign List</option>
                                                                <?php
                                                                $q3 = mysqli_query($conn, "select campaign_id,campaign_title from tbl_campaign");
                                                                while ($row = mysqli_fetch_array($q3)) {
                                                                    ?>
                                                                    <option value="<?php echo $row['campaign_id'] ?>" ><?php echo $row['campaign_title'] ?></option>

<?php } ?>	
                                                                	
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="reference" style="display:none;">
                                                        <label class="col-md-3 label-control" for="projectinput5">Reference Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="refername" class="form-control" placeholder="Reference Name" name="refername">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Product</label>
                                                        <div class="col-md-9">
                                                            <select id="enq_product" name="enq_product" class="form-control">
                                                                <option value="0">Product</option>
                                                                 <?php
                                                                $q3 = mysqli_query($conn, "select product_group_name,product_id from tbl_product_group");
                                                                while ($row = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                <option value="<?php echo $row['product_id'] ?>" ><?php echo $row['product_group_name'] ?></option>
<?php
                                                                }
?>
                                                            </select>
                                                        </div>
                                                    </div>
													 <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select Team</label>
                                                        <div class="col-md-9">
                                                            <select id="enq_team" name="enq_team" class="form-control">
                                                                <option value="0">Select Team</option>
                                                                 <?php
                                                                $q3 = mysqli_query($conn, "select team_name,team_id from tbl_team");
                                                                while ($row = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                <option value="<?php echo $row['team_id'] ?>" ><?php echo $row['team_name'] ?></option>
<?php
                                                                }
?>
                                                            </select>
                                                        </div>
                                                    </div>
 <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput7">Select User</label>
                                                        <div class="col-md-9">
                                                            <select id="enq_user" name="enq_user" class="form-control">
                                                                <option value="0">Select User</option>
                                                                 <?php

 $team_id = $_SESSION['team_id'];

  $q34 = mysqli_query($conn, "select members_code from tbl_team_members where team_id='$team_id'");
                                                                while ($rows = mysqli_fetch_array($q34)) {
$user=$rows['members_code'];
                                                                $q3 = mysqli_query($conn, "select user_code,user_name from tbl_user where user_code=$user");
                                                                while ($row = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                <option value="<?php echo $row['user_code'] ?>" ><?php echo $row['user_name'] ?>(<?php echo $row['user_code'] ?>)</option>
<?php
                                                                }
}
?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput9">Specification</label>
                                                        <div class="col-md-9">
                                                            <textarea id="enq_specification" rows="5" class="form-control" name="enq_specification" placeholder="Specification"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput9">Address</label>
                                                        <div class="col-md-9">
                                                            <textarea id="address" rows="5" class="form-control" name="enq_address" placeholder="Address"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">Pin Code</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="enq_pin" class="form-control" placeholder="Pin Code" name="enq_pin">
                                                        </div>
                                                    </div>
                                                </div>
<div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
                                                <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                             
                                                <div class="form-actions" style="float:right;">
                                                    <button type="reset" class="btn btn-warning mr-1">
                                                        <i class="icon-cross2"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-primary" id="enq_reg">
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
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->


        <footer class="footer footer-light">
            <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">banyaninfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
        </footer>

        <!-- BEGIN VENDOR JS-->
        <script src="robust-assets/js/vendors.min.js"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="robust-assets/js/app.min.js"></script>
        <script src="robust-assets/js/components/enquiry/reg.js"></script>
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
        <!-- END ROBUST JS-->

        <script>

                                                                function getplace(countryId) {
                                                                    var id = countryId;

                                                                    if (id == '1') {
                                                                        $('#countryId').show();

                                                                    } else {
                                                                        $('#countryId').hide();
                                                                    }
                                                                    

                                                                }
        </script>
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
    </body>
</html>