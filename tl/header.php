<?php
include('dbconnect.php');
error_reporting('0');
session_start();

if($_SESSION['team_id']==''){
echo "<script>window.location.href='index.php'</script>";
}
 ?>
    <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1" style="color:#443399"></i></a></li>
            <li class="nav-item"><a href="#" class="navbar-brand nav-link"><img alt="branding logo" src="robust-assets/images/logo/dashboard.png" data-expand="robust-assets/images/logo/dashboard.png" data-collapse="robust-assets/images/logo/dashboard.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
				
            
			</ul>
            <ul class="nav navbar-nav float-xs-right">
			  <li class="dropdown dropdown-notification nav-item"><a style="padding:0px;" href="#" data-toggle="dropdown" class="nav-link nav-link-label"><button type="button" class="btn btn-secondary btn-min-width btn-round mr-1 mb-1" style="padding: 9px !important;
margin-top: 10px;">+ ADD</button></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right" style="width:10rem;">
                  
                  <li class="list-group scrollable-container">
				  <a href="appointment.php" class="list-group-item">
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading">Appointment</h6>
                           </div>
                      </div></a>
					  <a href="enquiry_registration.php" class="list-group-item">
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">Enquiry</h6> </div>
                      </div></a>
					  <a href="add_campaigns.php" class="list-group-item">
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Campaign</h6>
                        </div>
                      </div></a>
					  <a href="add_team.php" class="list-group-item">
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading" style="color:#239B56;">Team</h6><small>
                           </small>
                        </div>
                      </div></a>
					  <a href="add_target_team.php" class="list-group-item">
                      <div class="media">
                        <div class="media-body">
                          <h6 class="media-heading" style="color:#7F8C8D;">Target</h6><small>
                           </small>
                        </div>
                      </div></a>					 
					  </li>
                </ul>
              </li>	
				<li class="dropdown dropdown-notification nav-item">
				<?php 
					$usr	 = $_SESSION['team_head_user_code'];
					$dat	 =	date('d/m/Y');
				$cnt =mysqli_query($conn,"SELECT * FROM `tbl_appointment` WHERE `appointment_date` = '$dat' AND `appointment_user_code`='$usr'");
					$result=mysqli_num_rows($cnt);
							
				?> 
					<a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up"><?php  echo $result; ?></span></a>
					
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Appointment</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0"></span></h6>
                  </li>
                  <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="91ecb0b8-17a6-c61d-8c73-450e9a3d0138">
				  <?php 
							$sql=mysqli_query($conn,"SELECT * FROM `tbl_appointment` WHERE appointment_date = '$dat' AND `appointment_user_code`='$usr'");
								while($row=mysqli_fetch_array($sql)){
								$name	=	$row['appointment_with'];
								$dat	=	$row['appointment_date'];
								$tme	=	$row['appointment_time'];
								$loc	=	$row['appointment_location'];
						?>
				  <a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-calculator2 icon-bg-circle bg-cyan"></i></div>
						
                        <div class="media-body">
                          <h6 class="media-heading"><?php echo $name; ?></h6>
                          <p class="notification-text font-small-3 text-muted"><i class="icon-android-alarm-clock" aria-hidden="true"> <?php echo $dat; ?></i> <i class="icon-android-calendar"> <?php echo $tme; ?></i></p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted"><i class="icon-location22" style="color:red;font-size:18px;	"></i> <?php echo $loc; ?></time></small>
                        </div>
                      </div>
					  </a>
								<?php } ?>
					  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 280px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 198px;"></div></div></li>
                  <li class="dropdown-menu-footer"><a href="todys_appoinment.php" class="dropdown-item text-muted text-xs-center">View All</a></li>
                </ul>
              </li>
			  <li class="dropdown dropdown-notification nav-item">
			  <?php
					$dats = date('Y-m-d');
					 $val=mysqli_query($conn,"SELECT * FROM `tbl_task` WHERE date(`task_created_on`)='$dats' AND `task_status`='0' AND `task_assigned_to`='$usr'");
					$res=mysqli_num_rows($val);{
				  ?>
					<a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up"><?php echo $res; ?></span></a><?php } ?>
			  
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2"> Task</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0"></span></h6>
                  </li>
                  <li class="list-group scrollable-container">
				  <?php 
					$task=mysqli_query($conn,"SELECT * FROM `tbl_task` WHERE `task_status`='0' AND `task_created_by`='$usr'");
					while($res=mysqli_fetch_array($val)){
						 ?>
				  <a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle">
						<i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading"><?php echo $res['task_name']; ?></h6>
                          <p class="notification-text font-small-3 text-muted"><?php echo $res['task_assigned_by']; ?></p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted"><?php echo $res['task_about']; ?></time></small>
                        </div>
                      </div></a>
					  <?php } ?>
					  </li>
                  <li class="dropdown-menu-footer"><a href="task_list.php" class="dropdown-item text-muted text-xs-center">View All</a></li>
                </ul>
              </li>
             <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="http://gemservice.in/crm/executive/user.png" alt="avatar"><i></i></span><span class="user-name">TL</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
	
	
   
 <div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="home.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
            
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paper"></i><span data-i18n="nav.templates.main" class="menu-title">Enquiry</span></a>
            <ul class="menu-content">
        
                  <li><a href="enquiry_registration.php" data-i18n="nav.templates.vert.classic_menu" class="menu-item">Enquiry Registration</a>
                  </li>
                  <li><a href="enquiry_list.php" data-i18n="nav.templates.vert.compact_menu" class="menu-item">New Enquiries</a>
                  </li>
                 
              <li><a href="new_Scheduling.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item"> Pending Enquiries</a>
              <li><a href="list_Scheduling.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item"> Process Enquiries</a>
              </li>
	  <li><a href="sucessleads.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Successful Enquiry</a>
			  <ul class="menu-content">
			  <li><a href="pending_ofm.php" data-i18n="nav.templates.vert.classic_menu" class="menu-item">Pending OFM</li>
			  <li><a href="sucess_ofm.php" data-i18n="nav.templates.vert.classic_menu" class="menu-item">Completed OFM </li>
			  </ul>
              </li>
 <li><a href="negativeleads.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Negative  Enquiries</a>
              </li>
             
             
             
            </ul>
          </li>
         
          <li class=" nav-item"><a href="#"><i class="icon-briefcase"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Sales Executives</span></a>
            <ul class="menu-content">
              <li><a href="sales_executive_registration.php" data-i18n="nav.page_layouts.1_column" class="menu-item">Sales Executive Registration</a>
              </li>
              <li><a href="sales_executive_list.php" data-i18n="nav.page_layouts.2_columns" class="menu-item">Sales Executive List</a>
              </li>
             
           
            </ul>
          </li>
        
            <li class=" nav-item"><a href="#"><i class="icon-cube"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Products</span></a>
            <ul class="menu-content">
              <li><a href="add_products.php" data-i18n="nav.page_layouts.1_column" class="menu-item">Products</a>
              </li>
              <li><a href="sales_executive_list.php" data-i18n="nav.page_layouts.2_columns" class="menu-item">List</a>
              </li>
             
           
            </ul>
          </li>
        
          
           <li class=" nav-item"><a href="#"><i class="icon-ei-trophy"></i><span data-i18n="nav.page_headers.main" class="menu-title">Campaign</span></a>
            <ul class="menu-content">
              <li><a href="add_campaigns.php" data-i18n="nav.page_headers.headers_breadcrumbs_basic" class="menu-item">Add Campaign</a>
              </li>
              <li><a href="campaign_list.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Campaign List</a>
              </li>
          
            </ul>
          </li>
        
        
          <li class=" nav-item"><a href="#"><i class="icon-push"></i><span data-i18n="nav.horz_nav.main" class="menu-title">Reports</span></a>
            <ul class="menu-content">
              <li><a href="enq_reports.php" data-i18n="nav.horz_nav.horizontal_navigation_types.main" class="menu-item">Enquiry Reports</a>
                
              </li>
              
               <li><a href="user_reports.php" data-i18n="nav.horz_nav.horizontal_navigation_types.main" class="menu-item">User Reports</a>
                
              </li>
			  
              </li>
			   
                
              </li>
			   
                
              </li>
            </ul>
          </li>
           <li class=" nav-item"><a href="#"><i class="icon-target"></i><span data-i18n="nav.page_headers.main" class="menu-title">Target</span></a>
            <ul class="menu-content">
              
               
              <li><a href="target_list.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Target List</a>
              </li>

            <li><a href="target_list_team.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Team Target List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-edit2"></i><span data-i18n="nav.page_headers.main" class="menu-title">Appointments</span></a>
            <ul class="menu-content">
            <li><a href="todys_appoinment.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Today Appointments</a>
              </li>
              <li><a href="upcomming_appoinnment.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item"> Upcoming Appointments</a>
              </li> 
            </ul>
          </li>
          
          <li class=" nav-item"><a href="#"><i class="ficon icon-mail6"></i><span data-i18n="nav.page_headers.main" class="menu-title">Task Assigned</span></a>
            <ul class="menu-content">
              <li><a href="add_task.php" data-i18n="nav.page_headers.headers_breadcrumbs_basic" class="menu-item">Add Task</a>
              </li>
              <li><a href="task_list.php" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Task List</a>
              </li>
          
            </ul>
          </li>
		
		  	
          <li class=" nav-item"><a href="changepassword_verification.php?id=<?php echo $usr; ?>"><i class="icon-security"></i><span data-i18n="nav.footers.main" class="menu-title">Change Password</span></a>
            
          </li>
         <li class=" nav-item"><a href="logout.php"><i class="icon-power3"></i><span data-i18n="nav.footers.main" class="menu-title">Log Out</span></a>
            
          </li>
          
          
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
     
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->