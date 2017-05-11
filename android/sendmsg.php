<?php

// array for JSON response
$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

if(isset($_REQUEST["message"]) && isset($_REQUEST["to_user_id"])){
	$message = $_REQUEST["message"];
	$To_User_Id = $_REQUEST["to_user_id"];

	// get all products from products table
$query = "SELECT `user_gcm` FROM `tb_user` WHERE `user_id`='$To_User_Id'";

$result = mysqli_query($db->connect(),$query) or die(mysqli_error());
// check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping throu
		while ($row = mysqli_fetch_array($result)) { 
        // temp user array    	
        $dis_profile = array();
		$red_id1 ="";
		
        $dis_profile["user_gcm"] = $row["user_gcm"];
		$red_id1 =$dis_profile["user_gcm"];
		echo($red_id1);
    }
	
	 include_once './GCM.php';
     
    $gcm = new GCM();

    $registatoin_ids = array($dis_profile["user_gcm"]);
    $message = array("price" => $message);
 
    $result = $gcm->send_notification($registatoin_ids, $message);
	    $message1 = $_REQUEST["message"];
	        
		echo $result;
		$response["success"] = 1;
		
		echo json_encode($response);
	
    }
    

} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No Distributor for this ID";

    // echo no users JSON
    echo json_encode($response);
}

?>