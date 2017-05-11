<?php
include 'dbconnect.php';
include 'mail_functionlity.php';

session_start();
 $User = $_SESSION['user_code'];
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
	$email1 = $_REQUEST['enq_email1'];
	$email2 = $_REQUEST['enq_email2'];
	$email3 = $_REQUEST['enq_email3'];
	$ethrouch = $_REQUEST['ethrouch'];
	$Date = date('Y-m-d H:i:s');
	
	$ml=mysqli_query($conn,"SELECT * FROM `tbl_user` WHERE `user_code`='$User'");
	$fetchg = mysqli_fetch_array($ml);
	
	$usr_ph = $fetchg['user_phone_no'];
	$usr_mail = $fetchg['user_email'];
	
	if($ethrouch=='1'){
$edescription = $_REQUEST['enq_campaign'];		
	}
	else if($ethrouch=='2'){
		$edescription = $_REQUEST['refername'];		

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
	$query_year = "";
		$get_enq_no=mysqli_fetch_array(mysqli_query($conn,"select enq_no from tbl_enquiry order by enq_id desc"));
		$enq_no=$get_enq_no['enq_no']+1;
		
		$get_id=mysqli_fetch_array(mysqli_query($conn,"select user_targer_year_id,user_target_month_id from tbl_user_target_for_the_month where user_target_status='1' and user_target_user_code='$User'"));
		$get_year_ids=$get_id['user_targer_year_id'];
		$get_month_ids=$get_id['user_target_month_id'];
		$get_team=mysqli_fetch_array(mysqli_query($conn,"select team_id from tbl_team_members where members_code='$User'"));
		$team_id=$get_team['team_id'];
		
	 $query = "INSERT INTO `tbl_enquiry`(`enq_addon_email1`,`enq_addon_email2`,`enq_addon_email3`,`enq_created_by`,`enq_no`, `enq_year_id`, `enq_month_id`, `enq_company_name`, `enq_company_email`, `enq_company_phn_no`, `enq_company_address`, `enq_company_pincode`, `enq_contact_person_name`, `enq_contact_person_phone_no`, `enq_product_series`,`enq_created_on`,`enquiry_through`,`enquiry_through_description`,`enq_description`,`enq_status`,`enq_created_team`,`enq_team_id`) VALUES ('$email1','$email2','$email3','$User','$enq_no','$get_year_ids','$get_month_ids','$Name','$Email','$Phone','$Address','$contact_pin','$contact_person','$contact_person_phone','$product_series','$Date','$ethrouch','$edescription','$enq_specification','New','$team_id','$enq_team')";
				
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
                                <h1 style="font-size:16px;font-weight:700;line-height:20px;margin:0 0 16px 0">Dear Sir/Madam,Greeting from Gem Equipments Pvt limited</h1>
                                <p style="line-height:16px;margin:0">
                                    Thanks for your Enquiry.Our Product Expert will be in touch with you shortly
                                  Meanwhile if you have any questions .Please Contact us at <a href="mailto:'.$usr_mail.'" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank"> '.$usr_mail.' </a> or call on '.$usr_ph.'

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



$mail = send_simple_mail($Email, $Name, "New Enquiry", $message);


				
				}
				if($Phone!='') {

					

		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Dear Sir/Madam\r\n";
		$message .= " Thanks for your enquiry.Our Product Expert will be in touch with you shortly\r\n";
		$message .= " Meanwhile If you have any questions .Please Contact us at '.$usr_mail.' or call on '.$usr_ph.' \r\n";
	
		
		$message1 = urlencode($message);

		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$Phone.'&sender=GEMEQP&message='.$message1.'');
				}
							
$phonNo = "9344455927";

		$message2 = "GEM Equipments (P) Ltd.\r\n";
$message2.= "New Enquiry is Created.\r\n";
$message2.= "New Enquiry is Created by : ".$User."\r\n";
$message3 = urlencode($message2);
file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message3.'');	
echo "1";
		
		}

				
				
				else{
					echo "2";
				}
				
				