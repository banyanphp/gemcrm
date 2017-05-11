<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["camp_id"]) && isset($_REQUEST['camp_title']) && isset($_REQUEST['camp_start']) && isset($_REQUEST['camp_end']) && isset($_REQUEST['camp_desc'])&& isset($_REQUEST['camp_place'])){
	
	$camp_id = $_REQUEST['camp_id'];
	$Camp_title = $_REQUEST['camp_title'];
	$Camp_start = $_REQUEST['camp_start'];
	$Camp_end = $_REQUEST['camp_end'];
	$Camp_desc = $_REQUEST['camp_desc'];
	$Camp_place = $_REQUEST['camp_place'];
	$Date = date('Y-m-d H:i:s');
		
	$query = "UPDATE `tbl_campaign` SET `campaign_title`='$Camp_title',`campaign_start_date`='$Camp_start',`campaign_end_date`='$Camp_end',`campaign_description`='$Camp_desc',`campaign_place`='$Camp_place' WHERE `campaign_id`='$camp_id'";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Campaign Updated Sucessfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Campaign Updatation Failure";
		echo json_encode($response);
		
	 }
?>