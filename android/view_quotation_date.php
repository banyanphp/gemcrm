<?php

require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["quotation_no"])){ 

$quation_id=$_REQUEST['quotation_no'];
					$totals="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY  `quotation_no`";
					$query=mysqli_query($db->connect(),$totals);
					$res = mysqli_fetch_array($query);
$response["total"]=$res['total'];
 $response["created_on"]= $res['quotation_created_on'];
$response['discount']= $res['enq_product_discount'];
$enq_no= $res['enq_no'];
	$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_no'";
				$query2=mysqli_query($db->connect(),$toaddr);
				$results2=mysqli_fetch_array($query2);
				$response['enq_company_name']=$results2['enq_company_name'];
								$response['enq_company_phn_no']=$results2['enq_company_phn_no'];

				$response['enq_company_address']=$results2['enq_company_address'];

$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1'";
							$query1=mysqli_query($db->connect(),$sql);
							$response["products"]=array();
							while($result=mysqli_fetch_array($query1)){
							 $user = array();
$usergroup=$result['enq_product_group']; 
 $group="SELECT * FROM `tbl_product_group` WHERE `product_id`='$usergroup'";
				$group2=mysqli_query($db->connect(),$group);
				$groupresults2=mysqli_fetch_array($group2);
 $user['enq_product_group']=$groupresults2['product_group_name']; 

$user['enq_product_model']=$result['enq_product_model']; 
$user['enq_product_model_no']=$result['enq_product_model_no'];
$user['enq_product_model_type']=$result['enq_product_model_type']; 
$user['enq_product_qty']=$result['enq_product_qty']; 
$user['enq_product_price']=$result['enq_product_price']; 
$tax=$result['tax']; 
$qq="select * from tbl_tax where tax_id='$tax'";
		$q2=mysqli_query($db->connect(),$qq);
		$row3=mysqli_fetch_array($q2);

$user['enq_product_tax_name']=$row3['tax_name']; 
$user['enq_product_tax_percentage']=$row3['tax_percent']; 
$m=$user['enq_product_model_no'];
 $a="select * from tbl_type_price where type_price_model_no='$m'";
 $qq=mysqli_query($db->connect(),$a); 
						 $row=mysqli_fetch_array($qq);
					 
						 
 $user['enq_product_description']= $row['description'];						 
						
array_push($response["products"], $user);	


}
$response["success"]='1';
			echo json_encode($response);

}
						?>
						


			