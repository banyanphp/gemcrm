<?PHP
include 'dbconnect.php';
session_start();

$email=$_POST['enq_email'];
$phone_no=$_POST['enq_phone'];
$address=$_POST['enq_address'];
$pin=$_POST['enq_pin'];
$contact_person_phone=$_POST['enq_contactper_phone'];
$enq_desc=$_POST['enq_specification'];
$enq_no=$_POST['enq_no'];
$enq_product=$_POST['enq_product'];
$enq_model=$_POST['enq_model'];
$enq_type=$_POST['enq_type'];
$enq_model_no=$_POST['enq_model_no'];
$company_name=$_POST['enq_name'];
$tax=$_POST['tax'];
$vat_tax=$_POST['vat_tax'];
$exc_tax=$_POST['exc_tax'];
$erectn_val=$_POST['erectn_val'];
$freigt_term=$_POST['freigt_term'];
$delevry_week=$_POST['delevry_week'];

$created_by="admin";
$priceadd=$_POST['priceadd'];

 $discount=$_POST['Discount'];
 if($discount==''){
	$discount='0';
 }

	$Date = date('Y-m-d H:i:s');
	$email1 = $_REQUEST['enq_email1'];
	$email2 = $_REQUEST['enq_email2'];
	$email3 = $_REQUEST['enq_email3'];
$qprice=$_POST['qprice'];
$qqty=$_POST['enq_qty'];
$status=$_REQUEST['status'];
 if(isset($_POST['ga']))
{ $ga = 'yes'; }
 else {
	 $ga = 'no'; } 
 $sql="UPDATE `tbl_enquiry` SET `enq_company_email`='$email',`enq_addon_email1`='$email1',`enq_addon_email2`='$email2',`enq_addon_email3`='$email3',`enq_company_phn_no`='$phone_no',`enq_company_address`='$address',`enq_company_pincode`='$pin',`enq_contact_person_phone_no`='$contact_person_phone',`enq_description`='$enq_desc',`enq_status`='Process' where `enq_no`='$enq_no'";
$res=mysqli_query($conn,$sql);
if($status=='New Quotation'){
		$quotationnno="SELECT  `quotation_no` FROM  `tbl_quotation` WHERE quotation_status='1' ORDER BY  `quotation_no` DESC";


	$result1 = mysqli_query($conn,$quotationnno);
$row1 = mysqli_fetch_array($result1);
$qno=$row1['quotation_no']+1;
	  $count=count($priceadd);
	$q='';
	for($i=0;$i<$count;$i++){
	
 $pro_group=$enq_product[$i];
  $pro_model=$enq_model[$i];
$pro_model_no=$enq_model_no[$i];
$pro_model_type=$enq_type[$i];
$pro_qty=$qqty[$i];
 $q_price=$qprice[$i];
  $priceadds=$priceadd[$i];
$pro_price=$pro_qty*$q_price;
if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);	
	 $q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`, `quotation_vattax`, `quotation_excise`,`created_by`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES 	('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$vat_tax','$exc_tax','$created_by','$erectn_val','$freigt_term','$delevry_week')";

	$res=mysqli_query($conn,$q);
	//$q.=";";
	}


	
$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_process_quotation_no`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$qno','$Date')";
	$result3 = mysqli_query($conn,$sql3);	
	if($result3){
		$response=array();
		$response['success']='1';
		$response['qno']=$qno;
	echo json_encode($response);
	}
}


	
	if($status=='Appointment'){
		
 $date=$_REQUEST['date'];
$date= date("d/m/Y", strtotime($date));
     $time=$_REQUEST['appoint_tme'];
     $appointment_through=$_REQUEST['appoint_thrugh']; 
     $appointment_location=$_REQUEST['appoint_locatn'];
     $appointment_description=$_REQUEST['appoint_cmd']; 
	$Date = date('Y-m-d H:i:s');

       $user=$_SESSION['user_code']; 
 $sql="INSERT INTO `tbl_appointment`(`appointment_id`, `appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`,`appointment_company_name`, `appointment_through`, `appointment_location`, `appointment_description`, `appointment_created_on`, `appointment_status`) VALUES ('','$date','$time',$user,'$contact_person_phone','$company_name','$appointment_through','$appointment_location','$appointment_description','$Date','1')";

$result1=mysqli_query($conn,$sql);
    $ids = mysqli_insert_id($conn);

$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_process_appointment_id`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$ids','$Date')";
	$result3 = mysqli_query($conn,$sql3);	
if($result1){
	echo "1";
}
else{
	echo "2";
}


	}
if($status=='Call with TL'){
	       $user=$_SESSION['user_code']; 
		   $enq_nos='Enquiry No';

$enq_nos.=$enq_no;

	 $sql = "INSERT INTO `tbl_task`(`task_name`, `task_assigned_by`, `task_assigned_to`, `task_about`, `task_report_description`, `task_created_on`, `task_closed_on`, `task_status`) VALUES('$enq_nos','$user','1002','enquiry','$enq_desc','$Date','','0')";
$res = mysqli_query($conn,$sql);
    $ids = mysqli_insert_id($conn);

$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_process_appointment_id`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$ids','$Date')";
	$result3 = mysqli_query($conn,$sql3);	
if($res){
	echo "1";
}
else{
	echo "2";
}
}
?>