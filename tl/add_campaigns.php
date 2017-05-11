<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Campaigns</title>
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
        include 'dbconnect.php'; 
		$team=$_SESSION['team_id'];?>
        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body"><!-- Basic form layout section start -->
                    <section id="horizontal-form-layouts">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="card-body collapse in">
                                        <div class="card-block">

                                            <form class="form form-horizontal" id="add_campaign_form" name="theform">
                                                <div class="form-body">
                                                    <h4 class="form-section"><i class="icon-head"></i> Add Campaign</h4>
                                                    <div class="form-group row" >
                                                        <label class="col-md-3 label-control" > Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="cname" class="form-control" placeholder="Name" name="fname" style="width:99%;">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row" >
                                                        <label class="col-md-3 label-control" > Campaign Place</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="cplace" class="form-control" placeholder="Place" name="Place" style="width:99%;">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row" >
                                                        <label class="col-md-3 label-control" > Campaign Description</label>
                                                        <div class="col-md-9">
                                                            <textarea name="description" id="description" class="form-control"></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="card-body collapse in">
                                                        <div class="card-block form-group row">

                                                            <label class="col-md-3 label-control" for="projectinput9" style="padding-left: 0px;padding-right: 31px;">Date</label>
                                                            <div class="col-md-9" style="padding-left: 0px;"><div class='input-group'>
                                                                    <input type='text' placeholder="date" class="form-control daterange" id="from" name="date" />
                                                                    <span class="input-group-addon">
                                                                        <span class="icon-calendar3"></span>
                                                                    </span>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-1" style="visibility: hidden;display:none;">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar5"></span>
                                                            </span>
                                                            <input id="picker_from" class="datepicker" type="date" name="picker_from">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style="visibility: hidden;display:none;">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar5"></span>
                                                            </span>
                                                            <input id="picker_to" class="datepicker" type="hidden" name="picker_to">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-md-3 label-control" for="projectinput5">Add Participants</label>
                                                        <select class="select2 form-control block participants" name="participants" multiple="multiple" id="participants" style="width: 75%;margin-left:100px">

                                                            <?php
                                                            $q = mysqli_query($conn,"select * from  tbl_team_members where team_id='$team'");
                                                            while ($row = mysqli_fetch_array($q)) {
															$user_code=	$row['members_code'];
															 $q2 = mysqli_query($conn,"select * from  tbl_user where user_code='$user_code'");
                                                             $row2 = mysqli_fetch_array($q2);
                                                                ?>       



                                                                <option value="<?php echo $user_code;?>"><?php echo $row2['user_name']; ?>(<?php echo $user_code; ?>)</option>
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
                                                        <button type="button" class="btn btn-primary" id="add_campaign">
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
        <script src="robust-assets/js/plugins/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/pickers/dateTime/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/pickers/pickadate/picker.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/pickers/pickadate/picker.date.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/pickers/pickadate/picker.time.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/pickers/pickadate/legacy.js" type="text/javascript"></script>
        <script src="robust-assets/js/plugins/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>

        <script src="robust-assets/js/components/campaign/addcampaign.js"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->

        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script> 
        <script src="robust-assets/js/plugins/forms/select/select2.full.min.js" type="text/javascript"></script>

        <script src="robust-assets/js/components/forms/select/form-select2.js" type="text/javascript"></script>
        <script src="robust-assets/js/components/pickers/dateTime/picker-date-time.js" type="text/javascript"></script>


    </body>
</html>
</html>
</html>