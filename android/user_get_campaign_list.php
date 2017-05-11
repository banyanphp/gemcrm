<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['user']))
{
	$user= $_REQUEST['user'];
	
	$authentication_check = "SELECT * FROM `tbl_campaign` WHERE `created_by` = '$user' AND `campaign_status` = '1'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["campaign"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["campaign_id"] = $row1["campaign_id"];
		 $user["campaign_title"] = $row1["campaign_title"];
		 $user["campaign_start_date"] = $row1["campaign_start_date"];
		 $user["campaign_end_date"] = $row1["campaign_end_date"];
		 $user["campaign_description"] = $row1["campaign_description"];
		 $user["campaign_place"] = $row1["campaign_place"];
		 $user["created_by"] = $row1["created_by"];
		 $user["campaign_created_on"] = $row1["campaign_created_on"];
		 	 
		 array_push($response["campaign"], $user);	
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