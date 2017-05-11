<?php

require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
if(isset($_REQUEST['enq_no'])){
	$enq_id=$_REQUEST['enq_no'];
$enq	="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_id'";
					$query = mysqli_query($db->connect(),$enq);
					$enq_result = mysqli_fetch_array($query);
						 $tat 			= $enq_result['enq_created_on'];
						$created_by		= $enq_result['enq_created_by'];
						$response['descript']		= $enq_result['enq_description'];
						$product_seris= $enq_result['enq_product_series'];
						$alloted_to		= $enq_result['enq_alloted_to'];
						$response['process_status'] 	= $enq_result['enq_status'];
						$response['process_remark']	= $enq_result['enq_remarks'];
						$proce_cmplt 	= $enq_result['enq_completed_on'];
						
						
					// date modifier for created on
						$timestamp = strtotime($tat);
						$response['enq_created_on'] = date( 'Y-m-d', $timestamp);
						
						// date modifier for updated on
						$timestamps = strtotime($proce_cmplt);
						$response['process_completed_on']  = date( 'Y-m-d', $timestamps);
						$response["success"] ="1";
						
						$series = "SELECT `product_id`,`product_group_name` FROM `tbl_product_group` WHERE `product_id`='$product_seris'";
					$query_s = mysqli_query($db->connect(),$series);
					$series_result = mysqli_fetch_array($query_s);
						$response['series_name']= $series_result['product_group_name'];
						
						
						$usr = "SELECT `user_code`,`user_name` FROM `tbl_user` WHERE `user_code`='$created_by'";	
					$query_usr = mysqli_query($db->connect(),$usr);
					$user_result = mysqli_fetch_array($query_usr);
						$response['created_user_name']= $user_result['user_name'];

					// alloted process
				$usr_allot = "SELECT `user_code`,`user_name` FROM `tbl_user` WHERE `user_code`='$alloted_to'";	
					$query_alot = mysqli_query($db->connect(),$usr_allot);
					$user_alot = mysqli_fetch_array($query_alot);
						$response['alotted_user_name']= $user_alot['user_name'];
						
							$enq_procs = "SELECT * FROM `tbl_enq_process` WHERE `enq_no`='$enq_id'";	
					$query_enq = mysqli_query($db->connect(),$enq_procs);
					if (mysqli_num_rows($query_enq) > 0) {
						
		 $response["process"] = array();
					while($enq_prcs_result   = mysqli_fetch_array($query_enq)){
						$enq_prcs_quota_no		= $enq_prcs_result['enq_process_quotation_no'];	
						$enq_prcs_appiontment   = $enq_prcs_result['enq_process_appointment_id'];	
						$enq_prcs_tsk 			= $enq_prcs_result['enq_task_id'];
	
						$enq_process_update_on= $enq_prcs_result['enq_process_update_on'];
						
						//quatation process
						$user = array();
						if($enq_prcs_quota_no!=''){
$user["message"] = "Quotation Created";
							$user["process"] = $enq_prcs_quota_no;
$user["description"] ='';
$user['report']="";
$user["created_on"]=$enq_process_update_on;
							 array_push($response["process"], $user);	
						}
						//appoinment process
						if($enq_prcs_appiontment!=''){
							
							 $apointmnt_no = "SELECT * FROM `tbl_appointment` WHERE `appointment_id`='$enq_prcs_appiontment'";
								$query_apointmnt = mysqli_query($db->connect(),$apointmnt_no);
								$apointmnt_res   = mysqli_fetch_array($query_apointmnt);
$user["message"] = "Appointment Created";

$user["process"]= $apointmnt_res['appointment_date'];
$user["process"].=" ";
$user["process"].= $apointmnt_res['appointment_time'];	
$user["process"].=" ";
								
$user["description"]= $apointmnt_res['appointment_description'];
$user['report']="";
$user["created_on"]=$enq_process_update_on;
										
							 array_push($response["process"], $user);	

								
						}
						//task process
						if($enq_prcs_tsk!=''){
							 $task_no = "SELECT * FROM `tbl_task` WHERE `task_id`='$enq_prcs_tsk' ";
								$query_task = mysqli_query($db->connect(),$task_no);
								$task_res   = mysqli_fetch_array($query_task);
$user["message"] = "Task Created";

$user["process"]= $task_res['task_about'];
$user["process"].=" ";
$user["created_on"]=$enq_process_update_on;

								
									
									if($task_res['task_status']==1){
										$user['description']= "Task is  Completed";
										$user['report']= $task_res['task_report_description'];
									}
										else{
																					$user['description']= "Task is Process";

										}						
 array_push($response["process"], $user);	

								
						}
					}
					}
						
    echo json_encode($response);
}
