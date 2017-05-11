<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["user"]) && isset($_REQUEST['appoint_date']) && isset($_REQUEST['appoint_time']) && isset($_REQUEST['appoint_with']) && isset($_REQUEST['appoint_through']) && isset($_REQUEST['appoint_location']) && isset($_REQUEST['appoint_description'])&& isset($_REQUEST['appoint_company_name'])){
	
	$User = $_REQUEST['user'];
	$Appoint_date = $_REQUEST['appoint_date'];
	$Appoint_time = $_REQUEST['appoint_time'];
	$Appoint_with = $_REQUEST['appoint_with'];
	$Appoint_through = $_REQUEST['appoint_through'];
	$Appoint_location = $_REQUEST['appoint_location'];
	$Appoint_description = $_REQUEST['appoint_description'];
	$appoint_company_name = $_REQUEST['appoint_company_name'];

	$Date = date('Y-m-d H:i:s');
		
	$query = "INSERT INTO `tbl_appointment`(`appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`, `appointment_through`, `appointment_location`, `appointment_description`, `appointment_created_on`, `appointment_status`,`appointment_company_name`) VALUES ('$Appoint_date','$Appoint_time','$User','$Appoint_with','$Appoint_through','$Appoint_location','$Appoint_description','$Date','1','$appoint_company_name');";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Appointment Created Successfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Appointment Creation Failure";
		echo json_encode($response);
		
	 }
?>