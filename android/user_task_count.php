

<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
	if(isset($_REQUEST['user'])){
$user=$_REQUEST['user'];
	$authentication_check = "SELECT count(*) as total FROM `tbl_task` WHERE `task_status`='0' and task_assigned_to='$user'";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	$row1 = mysqli_fetch_assoc($result1);

		$response["success"] = 1;
$response["count"] =$row1['total']  ;

    // echoing JSON response
    echo json_encode($response);
    }

 else {

    $response["success"] = 0;
    $response["notification"] = "Data Not Found";
    echo json_encode($response);

	}

?>