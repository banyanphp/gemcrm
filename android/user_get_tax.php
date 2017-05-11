<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
	
	$authentication_check = "SELECT * FROM `tbl_tax` WHERE `tax_status`='1'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["tax"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["tax_id"] = $row1["tax_id"];
		 $user["tax_name"] = $row1["tax_name"];
//		 $user["created_on"] = $row1["created_on"];
//		 $user["status"] = $row1["status"];
		 	 
		 array_push($response["tax"], $user);	
		 }
		
		$response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
    }

 else {

    $response["success"] = 0;
    $response["notification"] = "tax Data Not Found";
    echo json_encode($response);

	}

?>