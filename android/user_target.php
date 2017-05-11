<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if (isset($_REQUEST["user"])) {
    
    $users = $_REQUEST['user'];
    $month = date("n");
    $days  = date("t");
    
    $q2   = "SELECT * FROM `tbl_user_target_for_the_month` WHERE `user_target_user_code`='$users' and `user_target_month_id`='$month'";
    $q3   = mysqli_query($db->connect(), $q2);
 $c=mysqli_num_rows($q3);  $row3 = mysqli_fetch_array($q3);

    
    $response["finance_group"]  = array();
    $response["product_group"]  = array();
    $response["enquiry_group"]  = array();
    $response["campaign_group"] = array();
    
    $user            = array();
    $finance_target  = array();
    $producttarget   = array();
    $enquiry_target  = array();
    $campaign_target = array();
    $pending_task    = array();
    
  
    $month                           = date("n");
    $today                           = date('Y-m-d');
    $sqlyear                         = "select target_id from tbl_target where target_status='1'";
    $resultyear                      = mysqli_query($db->connect(), $sqlyear);
    $year                            = mysqli_fetch_array($resultyear);
    
    $year_id                           = $year['target_id'];

//GET AMOUNT
      if($c<=0){
        $finance_target['target_amount'] ="0";

    }
    
  
    else{
        $finance_target['target_amount'] = $row3["user_target_amount"];
}

$total="0";
		 $qs="SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and `enq_status`='Completed' and `enq_alloted_to`='$users' and `enq_month_id`='$month'";
$getaacheived= mysqli_query($db->connect(),$qs);
while($acheived_array=mysqli_fetch_array($getaacheived)){
	 $qno=$acheived_array['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($db->connect(), $qamount);
   $results                    = mysqli_fetch_array($resultss);
  $total+= $results['total'];
}		 
    $finance_target['acheived_amount'] = $total;


    $toacheive                         = $finance_target['target_amount'];

  $q5   = "SELECT sum(user_target_amount) as totalamount FROM `tbl_user_target_for_the_month` WHERE `user_target_user_code`='$users' and user_target_status='1'";
    $q6   = mysqli_query($db->connect(), $q5);
    $row6 = mysqli_fetch_array($q6);
    

    $ytd                               = $row6['totalamount'];
    $finance_target['ytd']             = $ytd ;
    
     $qs="SELECT enq_quotation  FROM `tbl_enquiry` where  `enq_year_id`='$year_id' and `enq_status`='Completed' and `enq_alloted_to`='$users' ";
$getaacheived= mysqli_query($db->connect(),$qs);
while($acheived_array=mysqli_fetch_array($getaacheived)){
	 $qno=$acheived_array['enq_quotation'];
		  	 $qamount= "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
 $resultss= mysqli_query($db->connect(), $qamount);
   $results                    = mysqli_fetch_array($resultss);
  $total+= $results['total'];
}		 
  
    
    $finance_target['totaltodayamount'] = $total;
    array_push($response["finance_group"], $finance_target);
    

//END AMOUNT
 $user["user_target_dryer"]="0";
$user["user_target_chiller"]="0";
$user["user_target_cooler"]="0";
$user["user_target_var"]="0";
$user["user_small_products"]="0";
//DRYER
    $user["user_target_dryer"]+= $row3["user_target_dryer"];
    
    //DRYER
    
    //CHILLER
    $user["user_target_chiller"]+= $row3["user_target_chiller"];
  
    
  
    //COOLER
    
    $user["user_target_cooler"] += $row3["user_target_cooler"];
      
  
    
    //VAR
    
    $user["user_target_var"] += $row3["user_target_var"];
    


  


    
    
    $user["user_small_products"] += $row3["user_target_small_products"];



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
$user["user_acheived_dryer"] = $totaldryerqty;
$user["user_acheived_chiller"] = $totalchillerqty;
$user["user_acheived_cooler"] = $totalcoolerqty;
$user["user_acheived_var"] = $totalvarqty;
$user["user_acheived_small"] = $totalsmallqty;
    array_push($response["product_group"], $user);
     $enquiry_target["enquiry_target"] ='0';
    
    //ENQUIRY
    $enquiry_target["enquiry_target"] += $row3["user_target_enquiry"];
    
    $sqlenquiry = "SELECT count(`enq_id`) as total FROM `tbl_enquiry` where `enq_alloted_to`='$users'  and `enq_month_id`='$month' and `enq_year_id`='$year_id'";
    $resultenq  = mysqli_query($db->connect(), $sqlenquiry);
    $totalenq   = mysqli_fetch_array($resultenq);
    
    $enquiry_target["totalenq"] = $totalenq['total'];
    
    $toacheiveenquiry             = $enquiry_target['enquiry_target'];
    $ytdenquiry                   = $toacheiveenquiry / $days;
    $enquiry_target['ytdenquiry'] = round($ytdenquiry);
    
    
    $sqltodayenquiry    = "SELECT count(`enq_id`) as total FROM `tbl_enquiry` where `enq_alloted_to`='$users'  and `enq_month_id`='$month' and `enq_year_id`='$year_id'and date(`enq_created_on`) ='$today'";
    $resulttodayenquiry = mysqli_query($db->connect(), $sqltodayenquiry);
    $totaltodayenquiry  = mysqli_fetch_array($resulttodayenquiry);
    
    
    $enquiry_target['totaltodayenq'] = $totaltodayenquiry["total"];
    array_push($response["enquiry_group"], $enquiry_target);
     $campaign_target["campaign_target"]='0';
    
    $campaign_target["campaign_target"] += $row3["user_target_campaign"];
    //CAMPAIGN
    $sqlcampaign    = "select count(`campaign_id`) as total from tbl_campaign where campaign_year_id='$year_id' and campaign_month_id='$month' and created_by='$users'";
    $resultcampaign = mysqli_query($db->connect(), $sqlcampaign);
    $totalcampaign  = mysqli_fetch_array($resultcampaign);
    
    $campaign_target["campaign_acheived"] = $totalcampaign["total"];
    array_push($response["campaign_group"], $campaign_target);
    $response["success"] = 1;
    
    $response["success"] = 1;
    // echoing JSON response
    echo json_encode($response);
}


?>

