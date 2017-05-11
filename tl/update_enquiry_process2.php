<?PHP
include 'dbconnect.php';	include 'mail_functionlity.php';
	include 'msg_functionality.php';
			
session_start();
$enq_desc=$_POST['enq_specification'];
$enq_no=$_POST['enq_no'];
$enq_product=$_POST['enq_product'];
$enq_model=$_POST['enq_model'];
$enq_type=$_POST['enq_type'];
$enq_model_no=$_POST['enq_model_no'];
$company_name=$_POST['company_name'];
	$Date = date('Y-m-d H:i:s');

$qprice=$_POST['qprice'];
$qqty=$_POST['enq_qty'];
$status=$_REQUEST['status'];
 $discount=$_POST['Discount'];
$tax=$_POST['tax'];
$vat_tax=$_POST['vat_tax'];
$exc_tax=$_POST['exc_tax'];
$erectn_val=$_POST['erectn_val'];
$freigt_term=$_POST['freigt_term'];
$delevry_week=$_POST['delevry_week'];

 if(isset($_POST['ga']))
{ $ga = 'yes'; }
 else {
	 $ga = 'no'; } 
 if($discount==''){
	$discount='0';
 }
if($status=='New Quotation'){
		$quotationnno="SELECT  `quotation_no` FROM  `tbl_quotation` WHERE quotation_status='1' ORDER BY  `quotation_no` DESC";


	$result1 = mysqli_query($conn,$quotationnno);
$row1 = mysqli_fetch_array($result1);
$qno=$row1['quotation_no']+1;
	$count=count($qprice);
	$q='';

	for($i=0;$i<$count;$i++){

$pro_group=$enq_product[$i];
$pro_model=$enq_model[$i];
$pro_model_no=$enq_model_no[$i];
$pro_model_type=$enq_type[$i];
$pro_qty=$qqty[$i];
 $q_price=$qprice[$i];
$discount=$_POST['Discount'];

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

$created_by=$_SESSION['team_head_user_code'];

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
	       $user=$_SESSION['team_head_user_code']; 
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


if($status=='Another Quotation'){
	$enq_no=$_POST['enq_no'];
		$quotationnno="SELECT  `quotation_no` FROM  `tbl_quotation` WHERE quotation_status='1'  and  enq_no ='$enq_no' ORDER BY  `quotation_no` DESC";
		


	$result1 = mysqli_query($conn,$quotationnno);
$row1 = mysqli_fetch_array($result1);
 $qno=$row1['quotation_no'];
 $qnoarray=explode("-",$qno);
 $qnocount=count($qnoarray);
if($qnocount>1){
	$qno=$qnoarray['0'];
	$qno.="-";
	$qno.=$qnoarray['1']+1;
}
else{
$qno.="-";
	$qno.=1;	
}
$updateqno="UPDATE `tbl_quotation` SET `quotation_status`='0' WHERE `enq_no`='$enq_no'";
	$count=count($qprice);
	$q='';

	for($i=0;$i<$count;$i++){
	
$pro_group=$enq_product[$i];
$pro_model=$enq_model[$i];
$pro_model_no=$enq_model_no[$i];
$pro_model_type=$enq_type[$i];
$pro_qty=$qqty[$i];
 $q_price=$qprice[$i];
$discount=$_POST['Discount'];
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
if($status=='Completed'){
	
	

  function GetImageExtension($imagetype) {

            if (empty($imagetype))
                return false;

            switch ($imagetype) {

                case 'image/bmp': return '.bmp';

                case 'image/gif': return '.gif';

                case 'image/jpeg': return '.jpg';

                case 'image/png': return '.png';

                default: return false;
            }
        }
 $file_name = $_FILES["file"]["name"];

        $temp_name = $_FILES["file"]["tmp_name"];

        $imgtype = $_FILES["file"]["type"];

    
        $ext = GetImageExtension($imgtype);

        $imagename = date("d-m-Y") . "-" . time() . $ext;


        $target_path = "../po/".$imagename ;

        move_uploaded_file($temp_name,$target_path);
$pono=$_REQUEST['pono'];

	$quotationno=$_REQUEST['shows_quotation'];
	$enq_remarks=$_REQUEST['enq_remarks'];
		$Date = date('Y-m-d H:i:s');

	 $updateqno="UPDATE `tbl_enquiry` SET `enq_po`='$imagename',`enq_quotation`='$quotationno',`enq_status`='Completed',`enq_description`='$enq_desc',`enq_remarks`='$enq_remarks',`enq_completed_on`='$Date',`enq_po_no`='$pono' WHERE `enq_no`='$enq_no'";
	
	$result3 = mysqli_query($conn,$updateqno);
if($result3){
	
				$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_no'";
				$query=mysqli_query($conn,$toaddr);
				$results=mysqli_fetch_array($query);
					
			$cname=$results['enq_company_name'];
$cadd=$results['enq_company_address'];
$cphone=$results['enq_company_phn_no'];
$pin=$results['enq_company_pincode'];
$cemail=$results['enq_company_email'];
$cemail1=$results['enq_addon_email1'];
$cemail2=$results['enq_addon_email2'];
$cemail3=$results['enq_addon_email3'];
$enq_quotation=$results['enq_quotation'];
	if($cemail!=''){
   $recipients[] = $cemail;
}

if($cemail1!=''){
   $recipients[] = $cemail1;
}

if($cemail2!=''){
   $recipients[] = $cemail2;
}

if($cemail3!=''){
   $recipients[] = $cemail3;
}
$message = '<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
            <td align="center" valign="top" style="padding:20px">
                <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="750">

                    <tbody><tr>
                            <td align="" valign="top"><a href="http://gemspares.in" target="_blank"> <img src="http://gemservice.in/crm/logo.jpg" alt="Gem" style="margin-bottom:10px;border=0;width:150px;height:100px"></a></td>
                        </tr>

                        <tr>
                            <td valign="top">
                                <h1 style="font-size:16px;font-weight:700;line-height:20px;margin:0 0 16px 0">Dear Sir/Madam,Greeting from Gem Equipments Pvt limited </h1>
                                <p style="line-height:16px;margin:0">
                                    Thanks for your Enquiry.<br>Your Enquiry is Completed.Completed Quotation no is '.$enq_quotation.'   <br>
                                  Meanwhile if you have any questions .Please Contact us at <a href="mailto:sales@gemindia.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">sales@gemindia.com</a> or call on 9344455927

                                </p>
                                <p style="line-height:16px;margin:16px 0 6px">.</p>
                            </td></tr>
                        <tr>
                       
                            <td>
                                
            <br>



<p style="margin:0 0 10px 0"></p>
</td>
</tr>
<tr>
    <td align="right" style="text-align:right"><p style="margin:0">Thank you, <strong>Gem Equipments</strong></p></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>';
$mail=send_multiple_mail($recipients,$cname,"Completed", $message);
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Dear Sir/Madam\r\n";
		$message .= "Your Enquiry is Completed\r\n";
		$message .= "Completed Quotation no is ".$enq_quotation."\r\n";
		$message .= " Meanwhile If you have any questions .Please Contact us at sales@gemindia.com or call on 9344455927. \r\n";
		$message1 = urlencode($message);
$mes=send_message($cphone,$message1);
		echo "1";
	
}	
else{
	echo "2";
}
}

if($status=='Dropped'){
	$enq_remarks=$_REQUEST['enq_remarks'];
		$Date = date('Y-m-d H:i:s');

	 $updateqno="UPDATE `tbl_enquiry` SET `enq_status`='Dropped',`enq_remarks`='$enq_remarks',`enq_completed_on`='$Date' WHERE `enq_no`='$enq_no'";
	
	$result3 = mysqli_query($conn,$updateqno);
if($result3){
	echo '1';
}	
else{
	echo '2';
}
}

?>