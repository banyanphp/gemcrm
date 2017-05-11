<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["user"]) && isset($_REQUEST['camp_title']) && isset($_REQUEST['camp_start']) && isset($_REQUEST['camp_end']) && isset($_REQUEST['camp_desc'])&& isset($_REQUEST['camp_place'])){
	
	$User = $_REQUEST['user'];
	$Camp_title = $_REQUEST['camp_title'];
	$Camp_start = $_REQUEST['camp_start'];
	$Camp_end = $_REQUEST['camp_end'];
	$Camp_desc = $_REQUEST['camp_desc'];
	$Camp_place = $_REQUEST['camp_place'];
	$Date = date('Y-m-d H:i:s');
	
$get_id=mysqli_fetch_array(mysqli_query($db->connect(),"select target_id from tbl_target where target_status='1'"));
		$get_year_ids=$get_id['target_id'];
		$get_month_ids=date('n');
	$get_tid=mysqli_fetch_array(mysqli_query($db->connect(),"select team_id from tbl_team_members where members_code='$User'"));
 $get_tids=$get_tid['team_id'];

	 $query = "INSERT INTO `tbl_campaign`(`campaign_title`, `campaign_start_date`, `campaign_end_date`, `campaign_description`, `campaign_place`, `created_by`, `campaign_created_on`, `campaign_status`,`campaign_year_id`,`campaign_month_id`,`campaign_team_id`) VALUES ('$Camp_title','$Camp_start','$Camp_end','$Camp_desc','$Camp_place','$User','$Date','1','$get_year_ids','$get_month_ids','$get_tids')";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Campaign Created Sucessfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Campaign Creation Failure";
		echo json_encode($response);
		
	 }
?>