<?php 
include('dbconnect.php');
$enq_id=$_GET['id'];

 ?>
<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="">
    <title>Timeline </title>
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
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/js/plugins/gallery/photo-swipe/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/js/plugins/gallery/photo-swipe/default-skin/default-skin.css">
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
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            
          </div>
      
       
        </div>
        <div class="content-body"><section id="timeline" class="timeline-left timeline-wrapper">
		<?php
					// fetch from tbl_enq
				$enq	="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_id'";
					$query = mysqli_query($conn,$enq);
					$enq_result = mysqli_fetch_array($query);
						$tat 			= $enq_result['enq_created_on'];
						$created_by		= $enq_result['enq_created_by'];
						$descript		= $enq_result['enq_description'];
						$product_seris	= $enq_result['enq_product_series'];
						$alloted_to		= $enq_result['enq_alloted_to'];
						$proce_status 	= $enq_result['enq_status'];
						$proce_remrk 	= $enq_result['enq_remarks'];
		$enq_po_no= $enq_result['enq_po_no'];
$enq_po= $enq_result['enq_po'];
						$proce_cmplt 	= $enq_result['enq_completed_on'];
						
						
					// date modifier for created on
						$timestamp = strtotime($tat);
						$curent = date( 'Y-m-d', $timestamp);
						
						// date modifier for updated on
						$timestamps = strtotime($proce_cmplt);
						$curent_updat = date( 'Y-m-d', $timestamps);
						
					
					//fetch product_serisname 
				$series = "SELECT `product_id`,`product_group_name` FROM `tbl_product_group` WHERE `product_id`='$product_seris'";
					$query_s = mysqli_query($conn,$series);
					$series_result = mysqli_fetch_array($query_s);
						$seies_name= $series_result['product_group_name'];
					// fetch usert name
				$usr = "SELECT `user_code`,`user_name` FROM `tbl_user` WHERE `user_code`='$created_by'";	
					$query_usr = mysqli_query($conn,$usr);
					$user_result = mysqli_fetch_array($query_usr);
						$usr_name= $user_result['user_name'];

					// alloted process
				$usr_allot = "SELECT `user_code`,`user_name` FROM `tbl_user` WHERE `user_code`='$alloted_to'";	
					$query_alot = mysqli_query($conn,$usr_allot);
					$user_alot = mysqli_fetch_array($query_alot);
						$alot_usr_name= $user_alot['user_name'];
						
					

					
?>
    <h3 class="page-title text-xs-center text-lg-left">Enquiry details for <?php echo $seies_name; ?> </h3><br>
				
							
    <ul class="timeline">
        <li class="timeline-line"></li>
        <li class="timeline-item">
            <div class="timeline-badge">
                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="">1</i></span>
            </div>
            <div class="timeline-card card border-grey border-lighten-2">
                <div class="card-header">
                    <h4 class="card-title"><a href="#">New Enquiry </a></h4>
                    <p class="card-subtitle text-muted pt-1">
                        <span class="font-small-3"><i class="icon-calendar"></i> <?php echo  $curent; ?></span>
                    </p>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
								<p>Created By <b style="text-transform: uppercase;"> 
								<?php echo $usr_name; ?> (<?php echo $created_by; ?>)</b></p>
                                <p class="card-text m-0"><b>DESCRIPTION</b> : <?php echo $descript; ?></p>
                               </div>
                               </div>
                    </div>
                </div>
            </div>
        </li>
        
		  <li class="timeline-item">
            <div class="timeline-badge">
                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="">2</i></span>
            </div>
            <div class="timeline-card card border-grey border-lighten-2">
                <div class="card-header">
                    <h4 class="card-title"><a href="#">Alloted To</a></h4>
                    <p class="card-subtitle text-muted pt-1">
                        <span class="font-small-3"><i class="icon-calendar"></i> <?php echo  $curent;  ?></span>
                    </p>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                  <h5><?php echo $alot_usr_name; ?>( <?php echo $alloted_to; ?>)</h5>
                                <p class="card-text m-0"> </p>
                               </div>
                               </div>
                    </div>
                </div>
            </div>
        </li>
		
			<?php
			$sno=2;
						//Enquiry Process
				$enq_procs = "SELECT * FROM `tbl_enq_process` WHERE `enq_no`='$enq_id'";	
					$query_enq = mysqli_query($conn,$enq_procs);
					while($enq_prcs_result   = mysqli_fetch_array($query_enq)){
						
						$enq_prcs_quota_no		= $enq_prcs_result['enq_process_quotation_no'];	
						$enq_prcs_appiontment   = $enq_prcs_result['enq_process_appointment_id'];	
						$enq_prcs_tsk 			= $enq_prcs_result['enq_task_id'];	
						$enq_process_update_on 			= $enq_prcs_result['enq_process_update_on'];	
							$timestamps = strtotime($enq_process_update_on);
						$enq_process_update_on = date( 'Y-m-d', $timestamps);
						
						//quatation process
						
						
						//appoinment process
						if($enq_prcs_appiontment!=''){
							 $apointmnt_no = "SELECT * FROM `tbl_appointment` WHERE `appointment_id`='$enq_prcs_appiontment'";
								$query_apointmnt = mysqli_query($conn,$apointmnt_no);
								$apointmnt_res   = mysqli_fetch_array($query_apointmnt);
									$apointmnt_dte	 =  $apointmnt_res['appointment_date'];
									$apointmnt_tmes	 =  $apointmnt_res['appointment_time'];
									$apointmnt_des	 =  $apointmnt_res['appointment_description'];
									
								
						}
						
						if($enq_prcs_tsk!=''){
							 $task_no = "SELECT * FROM `tbl_task` WHERE `task_id`='$enq_prcs_tsk' ";
								$query_task = mysqli_query($conn,$task_no);
								$task_res   = mysqli_fetch_array($query_task);
								
									
								
						}

					
			?>
		
             
			<li class="timeline-item">
            <div class="timeline-badge">
                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class=""><?php  echo ++$sno;?></i></span>
            </div>
            <div class="timeline-card card border-grey border-lighten-2">
                <div class="card-header">
                    <h4 class="card-title"><a href="#">Enquiry Process</a></h4>
                    <p class="card-subtitle text-muted pt-1">
                        <span class="font-small-3"><i class="icon-calendar"></i> <?php echo  $enq_process_update_on;  ?></span>
                    </p>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                  <h5>
				  <?php
				  if($enq_prcs_quota_no!=''){ ?>
				  Quotation Created :(<a href="quotation_follow.php?id=<?php echo $enq_prcs_quota_no; ?>" target="_blank"><?php echo $enq_prcs_quota_no; ?></a>)
				  <?php } 
				  else if($enq_prcs_appiontment!=''){?>
				  Appointment : <?php echo $apointmnt_dte; ?>
				  <br>
				  <?php echo $apointmnt_tmes; ?>
				  <br>
				  <?php echo $apointmnt_des; ?>
					<?php } if($enq_prcs_tsk!=''){
if($task_res['task_status']   =='1'){

						
									echo 'task completed';
								}
								else{
									echo 'task Process';
								}
}
					 ?>
				  
				  
				  
				  </h5>
                                <p class="card-text m-0">
								
								</p>
                               </div>
                               </div>
                    </div>
                </div>
            </div>
        </li>
					<?php } if($proce_status=='Completed' ||  $proce_status=='Dropped'){ ?>
	  
	<li class="timeline-item">
            <div class="timeline-badge">
                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class=""><?php echo ++$sno; ?></i></span>
            </div>
            <div class="timeline-card card border-grey border-lighten-2">
                <div class="card-header">
                    <h4 class="card-title"><a href="#"><?php echo $proce_status;?></a></h4>
                    <p class="card-subtitle text-muted pt-1">
                        <span class="font-small-3">Status Updated On <?php echo $curent_updat; ?></span>
                    </p>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                  <h5>Remarks</h5>
                                <p class="card-text m-0"><?php echo $proce_remrk; ?></p>
     <h5>Purchase Order No is</h5>
                                <p class="card-text m-0"><?php echo $enq_po_no; ?></p>
 <h5>Purchase </h5>
                               <img src="../po/<?php echo $enq_po; ?>"
                               </div>
                               </div>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
      
 </ul>
   
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php include('footer.php'); ?>

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/charts/gmaps.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/gallery/masonry/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/gallery/photo-swipe/photoswipe.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/gallery/photo-swipe/photoswipe-ui-default.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/charts/echarts/echarts.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/charts/echarts/bar-column/stacked-column.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/charts/echarts/radar-chord/non-ribbon-chord.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/gallery/photo-swipe/photoswipe-script.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/pages/timeline.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>