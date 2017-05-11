<?php

require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(($_REQUEST['enq_no']!='') && ($_REQUEST['companyname']!='')&& ($_REQUEST['email']!='')&& ($_REQUEST['address']!='')&& ($_REQUEST['pin']!='')&& ($_REQUEST['phone_no']!='')&&($_REQUEST['contact_person']!='') && ($_REQUEST['contact_person_phone']!='') && ($_REQUEST['enq_through']!='')  && ($_REQUEST['enq_desc']!='')&&($_REQUEST['status']!='')&&($_REQUEST['user']!='')){

$cpname=$_REQUEST['contact_person'];
$company_name=$_REQUEST['companyname'];


if($_REQUEST['status']=='New Quotation'){
echo "1";
$enq_no=$_REQUEST['enq_no'];
	$quotationnno="SELECT  `quotation_no` FROM  `tbl_quotation` WHERE quotation_status='1' ORDER BY  `quotation_no` DESC";


	$result1 = mysqli_query($db->connect(),$quotationnno);
$row1 = mysqli_fetch_array($result1);
$qno=$row1['quotation_no']+1;
//price1
if($_REQUEST['pro_price']!=''){

    $pro_group=$_REQUEST['pro_group'];
     $pro_model=$_REQUEST['pro_model'];
     $pro_model_no=$_REQUEST['pro_model_no']; 
     $pro_model_type=$_REQUEST['pro_model_type'];
     $pro_qty=$_REQUEST['pro_qty']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price']; 


$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','','')";

	$result = mysqli_query($db->connect(),$Q);
	$response["success"] = 1;


}
//price2
if($_REQUEST['pro_price2']!=''){

    $pro_group=$_REQUEST['pro_group2'];
     $pro_model=$_REQUEST['pro_model2'];
     $pro_model_no=$_REQUEST['pro_model_no2']; 
     $pro_model_type=$_REQUEST['pro_model_type2'];
     $pro_qty=$_REQUEST['pro_qty2']; 
     $discount=$_REQUEST['discount2']; 
     $pro_price=$_REQUEST['pro_price2']; 


$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','','')";

	$result = mysqli_query($db->connect(),$Q);
	$response["success2"] = 1;

}
//price3
if($_REQUEST['pro_price3']!=''){

     $pro_group=$_REQUEST['pro_group3'];
     $pro_model=$_REQUEST['pro_model3'];
     $pro_model_no=$_REQUEST['pro_model_no3']; 
     $pro_model_type=$_REQUEST['pro_model_type3'];
     $pro_qty=$_REQUEST['pro_qty3']; 
     $discount=$_REQUEST['discount3']; 
     $pro_price=$_REQUEST['pro_price3']; 



$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','','')";

	$result = mysqli_query($db->connect(),$Q);	$response["success3"] = 1;


}
if($_REQUEST['pro_price4']!=''){

  $pro_group=$_REQUEST['pro_group4'];
     $pro_model=$_REQUEST['pro_model4'];
     $pro_model_no=$_REQUEST['pro_model_no4']; 
     $pro_model_type=$_REQUEST['pro_model_type4'];
     $pro_qty=$_REQUEST['pro_qty4']; 
     $discount=$_REQUEST['discount4']; 
     $pro_price=$_REQUEST['pro_price4']; 



$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','','')";

	$result = mysqli_query($db->connect(),$Q);	$response["success4"] = 1;


}
if($_REQUEST['pro_price5']!=''){

    $pro_group=$_REQUEST['pro_group5'];
     $pro_model=$_REQUEST['pro_model5'];
     $pro_model_no=$_REQUEST['pro_model_no5']; 
     $pro_model_type=$_REQUEST['pro_model_type5'];
     $pro_qty=$_REQUEST['pro_qty5']; 
     $discount=$_REQUEST['discount5']; 
     $pro_price=$_REQUEST['pro_price5']; 

$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','','')";

	$result = mysqli_query($db->connect(),$Q);	$response["success5"] = 1;


}
if($_REQUEST['pro_price6']!=''){

     $pro_group=$_REQUEST['pro_group6'];
     $pro_model=$_REQUEST['pro_model6'];
     $pro_model_no=$_REQUEST['pro_model_no6']; 
     $pro_model_type=$_REQUEST['pro_model_type6'];
     $pro_qty=$_REQUEST['pro_qty6']; 
     $discount=$_REQUEST['discount6']; 
     $pro_price=$_REQUEST['pro_price6']; 


$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','','')";

	$result = mysqli_query($db->connect(),$Q);	
$response["success6"] = 1;


}
$response["quotation_no"] =$qno;


}
else if($_REQUEST['status']=='Appointment'){

 $date=$_REQUEST['date'];
     $time=$_REQUEST['time'];
     $appointment_through=$_REQUEST['appointment_through']; 
     $appointment_location=$_REQUEST['appointment_location'];
     $appointment_description=$_REQUEST['appointment_description']; 
	$Date = date('Y-m-d H:i:s');

       $user=$_REQUEST['user']; 
$sql="INSERT INTO `tbl_appointment`(`appointment_id`, `appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`,`appointment_company_name`, `appointment_through`, `appointment_location`, `appointment_description`, `appointment_created_on`, `appointment_status`) VALUES ('','$date','$time',$user,'$cpname','$company_name','$appointment_through','$appointment_location','$appointment_description','$Date','1')";

$result1=mysqli_query($db->connect(),$sql);



}


}
else{
  $response["success"] = 0;
    $response["notification"] = "Campaign Data Not Found";
    echo json_encode($response);
}


?>