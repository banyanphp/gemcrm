<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['user']))
{
	$user= $_REQUEST['user'];
	
	$authentication_check = "SELECT * FROM `tbl_enquiry` WHERE `enq_alloted_to` = '$user' AND `enq_status` = 'Completed'
ORDER BY `tbl_enquiry`.`enq_id`  DESC";

	$result1 = mysqli_query($db->connect(),$authentication_check);
	
	if (mysqli_num_rows($result1) > 0) {
		 $response["enquiry"] = array();
	 
		while ($row1 = mysqli_fetch_assoc($result1)){
		 $user = array();
		 
		 $user["$user"] = $row1["$user"];
		 $user["enq_created_by"] = $row1["enq_created_by"];
		 $user["enq_no"] = $row1["enq_no"];
		 $user["enq_year_id"] = $row1["enq_year_id"];
		 $user["enq_year_id"] = $row1["enq_year_id"];
		 $user["enq_month_id"] = $row1["enq_month_id"];
		 $user["enq_company_name"] = $row1["enq_company_name"];
		 $user["enq_company_email"] = $row1["enq_company_email"];
		 $user["enq_addon_email"] = $row1["enq_addon_email1"];
		 $user["enq_addon_email2"] = $row1["enq_addon_email2"];
		 $user["enq_addon_email3"] = $row1["enq_addon_email3"];
		 $user["enq_company_phn_no"] = $row1["enq_company_phn_no"];
		 $user["enq_company_address"] = $row1["enq_company_address"];
		 $user["enq_company_pincode"] = $row1["enq_company_pincode"];
		 $user["enq_contact_person_name"] = $row1["enq_contact_person_name"];
		 $user["enq_contact_person_phone_no"] = $row1["enq_contact_person_phone_no"];
		 $product_id= $row1["enq_product_series"];
if($row1["ofm_id"]=='0'){
$user["ofm_id"]='0';

}
else{
$user["ofm_id"]=$row1["enq_no"];
}


$n="select product_group_name from tbl_product_group where product_id='$product_id'";
	$r=mysqli_fetch_array(mysqli_query($db->connect(),$n));
									
$user["enq_product_series"] = $r["product_group_name"];

		 $user["enq_product_model"] = $row1["enq_product_model"];
		 $user["enq_product_model_no"] = $row1["enq_product_model_no"];
		 $user["enq_product_type"] = $row1["enq_product_type"];
		 $user["enq_product_qty"] = $row1["enq_product_qty"];
		 $user["enq_product_price"] = $row1["enq_product_price"];
		 $user["enq_alloted_to"] = $row1["enq_alloted_to"];
		 $user["enq_team_id"] = $row1["enq_team_id"];
		 $user["enq_discount"] = $row1["enq_discount"];
		 $user["enq_description"] = $row1["enq_description"];
		 $enquiry_through_id= $row1["enquiry_through"];

	$enquiry="select enquiry_through_name from tbl_enquiry_through where enquiry_through_id='$enquiry_through_id'";
	$enquiry_data=mysqli_fetch_array(mysqli_query($db->connect(),$enquiry));
									
		 $user["enquiry_through"] = $enquiry_data["enquiry_through_name"];

		 $user["enquiry_through_description"] = $row1["enquiry_through_description"];
		$user["enq_po"] = $row1["enq_po"];
		$user["enq_quotation"] = $row1["enq_quotation"];
		 $user["enq_status"] = $row1["enq_status"];
		 $user["enq_remarks"] = $row1["enq_remarks"];
		 $user["enq_created_on"] = $row1["enq_created_on"];
		 $user["enq_completed_on"] = $row1["enq_completed_on"];
		 
		 array_push($response["enquiry"], $user);	
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