<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['user']))
{
	$user= $_REQUEST['user'];
	
	$authentication_check = "SELECT * FROM `tbl_appointment` WHERE `appointment_user_code`='$user' AND `appointment_status` ='1'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["appointment"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["appointment_id"] = $row1["appointment_id"];
		 $user["appointment_date"] = $row1["appointment_date"];
		 $user["appointment_time"] = $row1["appointment_time"];
		 $user["appointment_company_name"] = $row1["appointment_company_name"];
		 $user["appointment_with"] = $row1["appointment_with"];
		 $user["appointment_through"] = $row1["appointment_through"];
		 $user["appointment_description"] = $row1["appointment_description"];
		 $user["appointment_location"] = $row1["appointment_location"];
		 $user["appointment_created_on"] = $row1["appointment_created_on"];
		 	 
		 array_push($response["appointment"], $user);	
		 }
		
		$response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
    }

 else {

    $response["success"] = 0;
    $response["notification"] = "Campaign Data Not Found";
    echo json_encode($response);

	}
}
else {
		$response["success"] = 0;
    $response["notification"] = "Please Enter Valid Parameter";
    echo json_encode($response);
	}


?>