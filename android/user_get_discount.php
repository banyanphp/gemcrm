<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['user']))
{
	$user= $_REQUEST['user'];
	
	$authentication_check = "SELECT `user_discount` FROM `tbl_user` WHERE `user_code`='$user'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["discount"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["user_discount"] = $row1["user_discount"];
		 		 	 
		 array_push($response["discount"], $user);	
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