<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['user']))
{
	$user= $_REQUEST['user'];
	
	$authentication_check = "SELECT * FROM `tbl_task` WHERE task_assigned_to='$user' and task_status='0'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["task"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		
		 $user["task_id"] = $row1["task_id"]; 
		 $user["task_name"] = $row1["task_name"];
		$user["task_about"] = $row1["task_about"];		
		$user["task_report_description"]=$row1["task_report_description"];
		$user["task_status"]=$row1["task_status"];
		$user["task_createon"]=$row1["task_created_on"];
		$task_assigned_by=$row1["task_assigned_by"];


if($task_assigned_by=="admin"){
$user["task_assigned_by"]="Admin";

}
else{
$user_name= "SELECT * FROM `tbl_user` WHERE user_code='$task_assigned_by'";

	$result2 = mysqli_query($db->connect(),$user_name);

$row2=mysqli_fetch_array($result2);

	$user["task_assigned_by"]=$row2['user_name'];	 

}
		 array_push($response["task"], $user);	
		 }
		
		$response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
    }

 else {

    $response["success"] = 0;
    $response["notification"] = "Data Not Found";
    echo json_encode($response);

	}
}
else {
		$response["success"] = 0;
    $response["notification"] = "Please Enter Valid Parameter";
    echo json_encode($response);
	}


?>