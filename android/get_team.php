<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
	
	$authentication_check = "SELECT `team_id`,`team_name` FROM `tbl_team` WHERE `team_status`='1'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["team"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["team_id"] = $row1["team_id"];
		 $user["team_name"] = $row1["team_name"];
		 	 
		 array_push($response["team"], $user);	
		 }
		
		$response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
    }

 else {

    $response["success"] = 0;
    $response["notification"] = "team Data Not Found";
    echo json_encode($response);

	}

?>