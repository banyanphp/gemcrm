<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["appoint_id"]) && isset($_REQUEST['appoint_date']) && isset($_REQUEST['appoint_time']) && isset($_REQUEST['appoint_with']) && isset($_REQUEST['appoint_through']) && isset($_REQUEST['appoint_location']) && isset($_REQUEST['appoint_description']) && isset($_REQUEST['appoint_status'])){
	
	$Appoint_id= $_REQUEST['appoint_id'];
	$Appoint_date = $_REQUEST['appoint_date'];
	$Appoint_time = $_REQUEST['appoint_time'];
	$Appoint_with = $_REQUEST['appoint_with'];
	$Appoint_through = $_REQUEST['appoint_through'];
	$Appoint_location = $_REQUEST['appoint_location'];
	$Appoint_description = $_REQUEST['appoint_description'];
	$Appoint_status= $_REQUEST['appoint_status'];
	$Date = date('Y-m-d H:i:s');
		
	$query = "UPDATE `tbl_appointment` SET `appointment_date`='$Appoint_date',`appointment_time`='$Appoint_time',`appointment_with`='$Appoint_with',`appointment_through`='$Appoint_through',`appointment_location`='$Appoint_location',`appointment_description`='$Appoint_description',`appointment_status`='$Appoint_status' WHERE `appointment_id`='$Appoint_id'";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Appointment Updated Sucessfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Appointment Updatation Failure";
		echo json_encode($response);
		
	 }
?>