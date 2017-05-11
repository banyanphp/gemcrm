<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['group_id']))
{
	$Group= $_REQUEST['group_id'];
	
	$authentication_check = "SELECT `product_series_name` FROM `tbl_product_tables` WHERE `product_group_id`='$Group' ORDER BY `tbl_product_tables`.`product_series_name` ASC";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["model"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["product_series_name"] = $row1["product_series_name"];
		 		 	 
		 array_push($response["model"], $user);	
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