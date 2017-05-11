<?php
include 'dbconnect.php';
include 'mail_functionlity.php';
session_start();
	$team_id = $_REQUEST['enq_team'];
	$enq_user = $_REQUEST['enq_user'];
	
	$id = $_REQUEST['id'];
	$Date = date('Y-m-d H:i:s');

	if($enq_user!='0'){
			$get_team=mysqli_fetch_array(mysqli_query($conn,"select team_id from tbl_team_members where members_code='$enq_user'"));
			$team_id=$get_team['team_id'];
	}
	
		
	 $query = "UPDATE `tbl_enquiry` SET `enq_alloted_to`='$enq_user',`enq_team_id`='$team_id',`enq_status`='Pending' WHERE `enq_id`='$id'";
				
			$res=mysqli_query($conn,$query);
				if($res){
 $q="select enq_company_name,enq_company_email,enq_no,enq_company_phn_no,enq_contact_person_name,enq_contact_person_phone_no from tbl_enquiry  WHERE `enq_id`='$id'";
					$qs=mysqli_fetch_array(mysqli_query($conn,$q));

 $q21="select * from tbl_user where `user_code`='$enq_user'";
                                 
                                    $r2=mysqli_query($conn,$q21);
                                    $row2= mysqli_fetch_array($r2);
                                        $name3=$row2['user_name'];
$email3=$row2['user_email'];
    $phone3=$row2['user_phone_no'];      
 $enq_no=$qs['enq_no'];                          
if($qs['enq_company_email']!=''){
$messages = '<table cellspacing="0" cellpadding="0" border="0" width="100%">
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
Our Product expert Mr/Mrs.'.$name3.' has been alloted to attend your enquiry.Our Expert contact details are Email-id: '.$email3.' and Mobile no is: '.$phone3.'.<br>
                                  Meanwhile if you have any questions .Please Contact us at <a href="mailto:sales@gemindia.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">sales@gemindia.com</a> or call us on 9487914513

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
$Email=$qs['enq_company_email'];
$Name=$qs['enq_company_name'];
$mail=send_simple_mail($Email, $Name, "Enquiry Alloted", $messages);



if($qs['enq_company_phn_no']!=''){
$phonNo = $qs['enq_company_phn_no'];

		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Dear Sir/Madam\r\n";
		$message .= "Our Product expert Mr/Mrs. ".$name3." has been alloted to attend your enquiry.Our Expert contact details are Email-id:".$email3." and Mobile no is: ".$phone3;
                    $message;               
		$message.= " Meanwhile If you have any questions .Please Contact us at sales@gemindia.com or call on 9344455927 \r\n";
	
		
		$message1 = urlencode($message);

		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1.'');
$phonNo = "9344455927";





$message4 = "GEM Equipments (P) Ltd.\r\n";
$message4.= "New Enquiry is alloted to you.\r\n";
$message4.= "Enquiry No is : ".$enq_no."\r\n";
$message5 = urlencode($message4);

file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phone3.'&sender=GEMEQP&message='.$message5.'');
echo "1";
				}
				}
				else{
					echo "2";
				}
				}