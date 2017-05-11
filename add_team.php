<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Team</title>
        <link rel="apple-touch-icon" sizes="60x60" href="robust-assets/ico/apple-icon-60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="robust-assets/ico/apple-icon-76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="robust-assets/ico/apple-icon-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="robust-assets/ico/apple-icon-152.png">
        <link rel="shortcut icon" type="image/x-icon" href="robust-assets/ico/favicon.ico">
        <link rel="shortcut icon" type="image/png" href="robust-assets/ico/favicon-32.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <!-- BEGIN VENDOR CSS-->
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

        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/selects/select2.min.css">
        <!-- BEGIN Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/ui/jquery-ui.min.css">
        <!-- END Vendor CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <!-- END Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
       <style>
            .select2-selection{

            }
            .select2-container--classic, .select2-container--default{
                width:74% !important;
            }
            .select2 select2-container select2-container--default select2-container--focus select2-container--below select2-container--open{
                margin-left:5px !important;	
            }
        </style>
    </head>
    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

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
        


        <?php include 'header.php';
        include 'dbconnect.php'; ?>
        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body"><!-- Basic form layout section start -->
                    <section id="horizontal-form-layouts">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="card-body collapse in">
                                        <div class="card-block">

                                            <form class="form form-horizontal" id="add_team_form" name="theform">
                                                <div class="form-body">
                                                    <h4 class="form-section"><i class="icon-head"></i> Add Team</h4>
                                                    <div class="form-group row" >
                                                        <label class="col-md-3 label-control" > Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="cname" class="form-control" placeholder="Name" name="fname" style="width:99%;">
                                                        </div>
                                                    </div>
<div class="form-group row" >
                                                        <label class="col-md-3 label-control" > Discount</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="discount" class="form-control" placeholder="discount" name="discount" style="width:99%;">
                                                        </div>
                                                    </div>

                                             <div class="form-group row">
                                            <label class="col-md-3 label-control">Select Team Head</label>
                                            <div class=" col-md-9">
                                                        <select class="form-control"  name="team" id="team">
														  <option selected="selected" value="0">Select</option>
														  <?php 
														  include 'dbconnect.php';
														  $q=mysqli_query($conn,"select * from tbl_user");
														  while($row=mysqli_fetch_array($q)){
														  ?>
                                                                <option value="<?php echo $row['user_code'] ?>"><?php echo $row['user_name']; ?>(<?php echo $row['user_code']; ?>)</option>
														  <?php } ?>
														</select>
                                               
                                            </div>
                                        </div>
													<div class="form-group row" >
                                                        <label class="col-md-3 label-control" > Email</label>
                                                        <div class="col-md-9">
                                                            <input type="mail" id="tl_mail" class="form-control" placeholder="E-mail" name="tl_mail" style="width:99%;">
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <label class="col-md-3 label-control">Password</label>
                                                        <div class=" col-md-9">
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter  Password">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Confirm Password</label>
                                                        <div class=" col-md-9">
                                                            <input type="password" class="form-control" name="confirm_password" id="rpassword" placeholder="Enter Confirm Password">

                                                        </div>
                                                    </div>   
                                                  

                                                    <div class="form-group">
                                                        <label class="col-md-3 label-control" for="projectinput5">Select Team Members</label>
                                                        <select class="select2 form-control block participants" name="participants" multiple="multiple" id="participants" style="width: 75%;margin-left:100px">

                                                            <?php
                                                            $q = mysqli_query($conn,"select * from tbl_user");
                                                            while ($row = mysqli_fetch_array($q)) {
                                                                ?>       



                                                                <option value="<?php echo $row['user_code'] ?>"><?php echo $row['user_name']; ?>(<?php echo $row['user_code']; ?>)</option>
<?php } ?>


                                                        </select>
                                                    </div>  


                                                    <div class="col-md-12" style="text-align:center">
                                                        <span id="errors" style="color:#ff0000;text-align:center"></span>

                                                        <span id="success" style="color:#967ADC;text-align:center"></span>

                                                    </div>
                                                    <div class="form-actions" style="float:right;">
                                                        <button type="reset" class="btn btn-warning mr-1" >
                                                            <i class="icon-cross2"></i> Cancel
                                                        </button>
                                                        <button type="button" class="btn btn-primary" id="add_team">
                                                            <i class="icon-check2"></i> Submit
                                                        </button>
                                                    </div></div>
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
            <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="#" target="_blank" class="text-bold-800 grey darken-2">BanyanInfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
        </footer>

        <!-- BEGIN VENDOR JS-->
        <script src="robust-assets/js/vendors.min.js"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="robust-assets/js/app.min.js"></script>

        <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>   
 
        <!-- BEGIN ROBUST JS-->

        <script src="robust-assets/js/components/team/addteam.js"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->

        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="robust-assets/js/plugins/forms/select/select2.full.min.js" type="text/javascript"></script>

        <script src="robust-assets/js/components/forms/select/form-select2.js" type="text/javascript"></script>


    </body>
</html>
</html>
</html>