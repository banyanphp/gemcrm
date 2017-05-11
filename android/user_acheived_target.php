<?php

$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST["user"])){
	
	$User = $_REQUEST['user'];
	  

	  $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select target_id,target_amount from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($db->connect(), $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
 $year_id                           = $year['target_id'];
    	
$user_code=$_SESSION['user_code']; 
 $sqlamount= "SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and `enq_status`='Completed' and enq_alloted_to='$User '";
$totaldryerqty="0"; 
$totalchillerqty="0"; 
$totalcoolerqty="0"; 
$totalsmallqty="0"; 
$totalvarqty="0"; 
$total="0"; 
	    $result                            = mysqli_query($db->connect(), $sqlamount);
      while($gauge                           = mysqli_fetch_array($result)){
		  $qno=$gauge['enq_quotation'];

 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($db->connect(), $qamount);
   $results                    = mysqli_fetch_array($resultss);
 $total+= $results['total'];
 

		  	$dryeramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='1'";
 $resultdryer= mysqli_query($db->connect(), $dryeramt);
$dryerqty=mysqli_fetch_array($resultdryer);{

$totaldryerqty+=$dryerqty['totalqty'];
}
 $chilleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='2'";
 $resultchiller= mysqli_query($db->connect(), $chilleramt);
$chillerqty=mysqli_fetch_array($resultchiller);{

$totalchillerqty+=$chillerqty['totalqty'];
}
 $cooleramt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='3'";
 $resultcooler= mysqli_query($db->connect(), $cooleramt);
$coolerqty=mysqli_fetch_array($resultcooler);{

$totalcoolerqty+=$coolerqty['totalqty'];
}
 $smallamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='5'";
 $resultsmall= mysqli_query($db->connect(), $smallamt);
$smallqty=mysqli_fetch_array($resultsmall);{

$totalsmallqty+=$smallqty['totalqty'];
}
 $varamt= "SELECT sum(enq_product_qty) as totalqty FROM `tbl_quotation` where  `quotation_no`='$qno' and `enq_product_group`='4'";
 $resultvar= mysqli_query($db->connect(), $varamt);
$varqty=mysqli_fetch_array($resultvar);{

$totalvarqty+=$varqty['totalqty'];
}
}
 echo $sqlcampaign="select count(`campaign_id`) as total from tbl_campaign where campaign_year_id='$year_id' and campaign_month_id='$month' and created_by='$User'";
		$resultcampaign=mysqli_query($db->connect(),$sqlcampaign);
                                    $totalcampaign=mysqli_fetch_array($resultcampaign);	
 $sqlenquiry="SELECT count(`enq_id`) as total FROM `tbl_enquiry` where `enq_alloted_to`='$User'  and `enq_month_id`='$month' and `enq_year_id`='$year_id'";
		$resultenq=mysqli_query($db->connect(),$sqlenquiry);
                                    $totalenq=mysqli_fetch_array($resultenq);	
		if($result) {
			
			$response["success"] = 1;
			
$response["totalamount"] = $total;
$response["totalenq"] = $totalenq['total'];
$response["totalsmall"] = $totalsmallqty;
$response["totalcooler"] = $totalcoolerqty;
$response["totalvar"] = $totalvarqty;
$response["totalchiller"] = $totalchillerqty;
$response["totaldryer"] = $totaldryerqty;
$response["totalcampaign"] = $totalcampaign['total'];
			echo json_encode($response);
			
		}
    // echoing JSON response
	 }
	 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Campaign Creation Failure";
		echo json_encode($response);
		
	 }
?>