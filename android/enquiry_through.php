<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
	
	$authentication_check = "SELECT * FROM `tbl_enquiry_through` WHERE `enquiry_through_status` ='1'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["enquiry"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["enquiry_through_id"] = $row1["enquiry_through_id"];
		 $user["enquiry_through_name"] = $row1["enquiry_through_name"];
//		 $user["created_on"] = $row1["created_on"];
//		 $user["status"] = $row1["status"];
		 	 
		 array_push($response["enquiry"], $user);	
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

?>