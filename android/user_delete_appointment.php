<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["appoint_id"]) ){
	
	$Appoint_id= $_REQUEST['appoint_id'];
		
	$query = "DELETE FROM `tbl_appointment` WHERE `appointment_id`='$Appoint_id'";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Appointment Deleted Sucessfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Appointment Delete Failure";
		echo json_encode($response);
		
	 }
?>