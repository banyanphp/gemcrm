<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["user"])){
	
	$User = $_REQUEST['user'];
	$Date = date('Y-m-d H:i:s');
		
	$query = "UPDATE `tbl_user` SET `user_last_login_on`= '$Date' WHERE `user_code`='$User'";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$response["success"] = 1;
			$response["notification"] = "Last Login Updated Sucessfully";
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Last Login Failure";
		echo json_encode($response);
		
	 }
?>