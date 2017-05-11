<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
	
	$authentication_check = "SELECT * FROM `tbl_product_group` WHERE `status`='1'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["product_group"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["product_id"] = $row1["product_id"];
		 $user["product_group_name"] = $row1["product_group_name"];
//		 $user["created_on"] = $row1["created_on"];
//		 $user["status"] = $row1["status"];
		 	 
		 array_push($response["product_group"], $user);	
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