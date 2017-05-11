<?php
include 'dbconnect.php';
include 'mail_functionlity.php';
session_start();
 $User = "admin";
	$Name= $_REQUEST['enq_name'];
	$Email= $_REQUEST['enq_email'];
	$Address = $_REQUEST['enq_address'];
	$Phone = $_REQUEST['enq_phone'];
	$contact_person = $_REQUEST['enq_contactperson'];
	$contact_person_phone = $_REQUEST['enq_contactper_phone'];
	$contact_pin = $_REQUEST['enq_pin'];
	$product_series = $_REQUEST['enq_product'];
	$enq_specification = $_REQUEST['enq_specification'];
	$enq_team = $_REQUEST['enq_team'];
	$enq_user = $_REQUEST['enq_user'];
	$status="New";
	$ethrouch = $_REQUEST['ethrouch'];
	$email1 = $_REQUEST['enq_email1'];
	$email2 = $_REQUEST['enq_email2'];
	$email3 = $_REQUEST['enq_email3'];
	$Date = date('Y-m-d H:i:s');
	if($ethrouch=='1'){
$edescription = $_REQUEST['enq_campaign'];		
	}
	else if($ethrouch=='2'){
		$edescription='';
		
	}
	else if($ethrouch=='3'){
		$edescription='';
		
	}
	else if($ethrouch=='4'){
		$edescription='';
	}
	else if($ethrouch=='5'){
		$edescription='';
	}
	if($enq_user!='0'){
			$get_team=mysqli_fetch_array(mysqli_query($conn,"select team_id from tbl_team_members where members_code='$enq_user'"));
			$team_id=$get_team['team_id'];
			$status="Pending";
	}
	$query_year = "";
$get_enq_no_count=mysqli_num_rows(mysqli_query($conn,"select * from tbl_enquiry order by enq_id desc"));
if($get_enq_no_count=='0'){
	$enq_no="1000";
}
else{

		$get_enq_no=mysqli_fetch_array(mysqli_query($conn,"select enq_no from tbl_enquiry order by enq_id desc"));
		$enq_no=$get_enq_no['enq_no']+1;
}		
		$get_id=mysqli_fetch_array(mysqli_query($conn,"select target_id from tbl_target where target_status='1'"));
		$get_year_ids=$get_id['target_id'];
		$get_month_ids=date('n');
		
	 $query = "INSERT INTO `tbl_enquiry`(`enq_addon_email1`,`enq_addon_email2`,`enq_addon_email3`,`enq_created_by`,`enq_no`, `enq_year_id`, `enq_month_id`, `enq_company_name`, `enq_company_email`, `enq_company_phn_no`, `enq_company_address`, `enq_company_pincode`, `enq_contact_person_name`, `enq_contact_person_phone_no`, `enq_product_series`, `enq_created_on`,`enquiry_through`,`enquiry_through_description`,`enq_description`,`enq_team_id`,`enq_alloted_to`,`enq_created_team`,`enq_status`)
	VALUES ('$email1','$email2','$email3','$User','$enq_no','$get_year_ids','$get_month_ids','$Name','$Email','$Phone','$Address','$contact_pin','$contact_person','$contact_person_phone','$product_series','$Date','$ethrouch','$edescription','$enq_specification','$team_id','$enq_user','admin','$status')";
				
			$res=mysqli_query($conn,$query);
				if($res){
					
					
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
                                    Thanks for your Enquiry.<br>Our Product Expert will be in touch with you shortly<br>
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
if($Email!=''){



$mail=send_simple_mail($Email, $Name, "New Enquiry", $message);


				}
				if($Phone!='') {

					

		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Dear Sir/Madam\r\n";
		$message .= " Thanks for your enquiry.Our Product Expert will be in touch with you shortly\r\n";
		$message .= " Meanwhile If you have any questions .Please Contact us at sales@gemindia.com or call on 9344455927 \r\n";
	
		
		$message1 = urlencode($message);

		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$Phone.'&sender=GEMEQP&message='.$message1.'');


				}
echo "1";
				}
				
				else{
					echo "2";
				}