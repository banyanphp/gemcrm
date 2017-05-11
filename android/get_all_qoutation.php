<?php

require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();
if(isset($_REQUEST['enq_no'])){

	
	$id = $_REQUEST['enq_no'];
	$Date = date('Y-m-d H:i:s');

	if($id !=''){
$response["quotation"]=array();
			$get_query=mysqli_query($db->connect(),"select quotation_no,sum(enq_product_price) as t,date(quotation_created_on) as date from tbl_quotation where enq_no='$id' group by quotation_no");
			if (mysqli_num_rows($get_query) > 0) {
			while($get_team=mysqli_fetch_array($get_query)){
	 $user = array();
		 $user["quotation_no"] = $get_team["quotation_no"];
		  $user["enq_product_price"] = $get_team["t"];
		 $user["created_on"] = $get_team["date"];
		 array_push($response["quotation"], $user);	
	}

						$response["success"] ="1";
}
else{
						$response["success"] ="0";
 $response["notification"] = "Datas not found";
				}
				    echo json_encode($response);

}	
		
	
			
				
}
else{
						$response["success"] ="0";
 $response["notification"] = "Data not found";
    echo json_encode($response);
				}
?>