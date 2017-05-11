<?php

require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["quotation_no"])){ 

$quation_id=$_REQUEST['quotation_no'];
					$totals="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' GROUP BY  `quotation_no`";
					$query=mysqli_query($db->connect(),$totals);
					$res = mysqli_fetch_array($query);
$total=0;
 $response["created_on"]= $res['quotation_created_on'];
$enq_no= $res['enq_no'];
	$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_no'";
				$query2=mysqli_query($db->connect(),$toaddr);
				$results2=mysqli_fetch_array($query2);
				
$i=0;

 $sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id'";
							$query1=mysqli_query($db->connect(),$sql);
$count=mysqli_num_rows($query1);
							$response["products"]=array();
							while($result=mysqli_fetch_array($query1)){
							 $user = array();
$user['qid'.$i]= $result['quotation_id'];
$user['enq_product_model_no'.$i]=$result['enq_product_model_no'];
$user['enq_product_qty'.$i]=$result['enq_product_qty']; 
$user['enq_product_price'.$i]=$result['enq_product_price']; 
$tax=$result['tax']; 
$qq="select * from tbl_tax where tax_id='$tax'";
		$q2=mysqli_query($db->connect(),$qq);
		$row3=mysqli_fetch_array($q2);
$m=$user['enq_product_model_no'.$i];
$user['discount'.$i]= $res['enq_product_discount'];

 $a="select * from tbl_type_price where type_price_model_no='$m'";
 $qq=mysqli_query($db->connect(),$a); 
						 $row=mysqli_fetch_array($qq);
					 
						 
 $user['enq_product_description'.$i]= $row['description'];


						 
	 $user['sapcode'.$i]= $row['sapcode'];	


$user['actual_price'.$i]= round($result['enq_product_price']-($result['enq_product_price']*$res['enq_product_discount'])/100);
$total+=round($result['enq_product_price']-($result['enq_product_price']*$res['enq_product_discount'])/100);
array_push($response["products"], $user);	

$i++;
}
$response["total"]=$total;

$response["count"]=$count;
$response["success"]='1';
			echo json_encode($response);

}
else{
$response["success"] = 0;
		$response["notification"] = "Enquiry Creation Failure";
		echo json_encode($response);
}
						?>
						


			