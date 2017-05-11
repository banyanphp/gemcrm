<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['user']) && isset($_REQUEST['password']))
{
	if($_REQUEST['password'] == "")
	{
			$password = "Null";
	}
	else
	{
			$password = $_REQUEST['password'];
	}
	$authentication_check = "SELECT `user_code`,`user_name`,`user_permsission_self_allotment`,`user_image` FROM `tbl_user` WHERE `user_code`='".$_REQUEST['user']."' and `user_password`= md5('$password')";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["login_user"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 $user["permission"] = $row1["user_permsission_self_allotment"];
		 $user["user_id"] = $row1["user_code"];
		 $user["user_name"] = $row1["user_name"];
		 $user["user_image"] = $row1["user_image"];
		 	 
		 array_push($response["login_user"], $user);	
		 }
		
		$response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
    }

 else {

    $response["success"] = 0;
    $response["notification"] = "Login Failed, Incorrect Data Entered";
    echo json_encode($response);

	}
}
else {
		$response["success"] = 0;
    $response["notification"] = "Please Enter Valid Parameter";
    echo json_encode($response);
	}


?>