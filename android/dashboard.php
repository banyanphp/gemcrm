<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["user"])){ 


    $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select target_id,target_amount from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($db->connect(), $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
    
    $year_id                           = $year['target_id'];
    $target_amount= $year['target_amount'];
$total='0';
	  $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and enq_status='Completed'";
	  
	    $result                            = mysqli_query($db->connect(), $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($db->connect(), $qamount);
   $results                    = mysqli_fetch_array($resultss);
 $total+= $results['total'];
 
	  }
$response["success"] = "1";
$response['yearly_acheived']=$total;
$response['target_amount']=$target_amount;
echo json_encode($response);

}
?>