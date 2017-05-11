<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["task_id"]) && isset($_REQUEST['task_desc']) && isset($_REQUEST['task_status'])){
	
	$task_id = $_REQUEST['task_id'];
	$task_desc = $_REQUEST['task_desc'];
	$task_status = $_REQUEST['task_status'];
		
	$query = "UPDATE `tbl_task` SET `task_report_description`='$task_desc',`task_status`='$task_status' WHERE `task_id`='$task_id'";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Task Updated Sucessfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Task Updatation Failure";
		echo json_encode($response);
		
	 }
?>