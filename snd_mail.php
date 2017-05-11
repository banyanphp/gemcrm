<?php

	@include('dbconnect.php');
	$email=$_POST['mails'];
        


//$activation="1";
 $activation = $email . time();
$query="SELECT * FROM `tbl_user` WHERE `user_email`= '$email'";
$result=mysqli_query($conn,$query);
$val=mysqli_num_rows($result);

if($val==1){
	$query1="SELECT * FROM `tbl_user` WHERE `user_email`= '$email'";
$result1=mysqli_query($conn,$query1);
$fetchuser=  mysqli_fetch_array($result1);
$nam=$fetchuser['user_name'];
$pass=$fetchuser['user_password'];
       
    
//$confirmationlink = "http://www.kwikpatch.com/activation_verification.php?username=$email&activation=$activation";
  $message='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_4275388581297042370background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px">
  <tbody>
    <tr>
      <td valign="top" align="center" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
	  <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
          <tbody>
            <tr>
              <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
			  <table cellpadding="0" cellspacing="0" border="0"  style="border-collapse:collapse;padding:0;margin:0;width:100%">
                  <tbody>
                    <tr>
                      <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0"><a href="http://gemservice.in/gemcrm1/" style="color:#3696c2;float:left;display:block" target="_blank"> <img width="200" height="100" src="http://gemservice.in/gemcrm1/logo.jpg" alt="kwikpatch" border="0" style="outline:none;text-decoration:none" ></a></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td valign="top" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px;margin:0;border:1px solid #ebebeb;background:#fff"><table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;width:100%">
                  <tbody>
                    <tr>
                      <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0"><table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                          <tbody>
                            <tr>
                              <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 20px 15px;margin:0;line-height:18px"><h1 style="font-family:Verdana,Arial;font-weight:bold;font-size:25px;margin-bottom:25px;margin-top:5px;line-height:28px">Hello &nbsp;' .   $nam . ','. '</h1>
                                <p style="font-family:Verdana,Arial;font-weight:normal">Your email <a href="mailto:'.$email.'" target="_blank">'.$email.'</a> must be confirmed before using it to log in to our store.</p>
                                <p  style="font-family:Verdana,Arial;font-weight:normal;border:1px solid #c3ced4;padding:13px 18px;background:#f1f1f1"> Use the following values when prompted to log in Our Site:<br>
                                  <strong style="font-family:Verdana,Arial;font-weight:normal">Email:</strong> <a href="'.$email.'" target="_blank">'.$email.'</a><br>
                                  <strong style="font-family:Verdana,Arial;font-weight:normal">Password:</strong>'.$pass.'</p>
                                </td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table>
        <h5  style="font-family:Verdana,Arial;font-weight:normal;text-align:center;font-size:22px;line-height:32px;margin-bottom:75px;margin-top:30px">Thank you, <span >GEM Equipments</span>
            !</h5></td>
    </tr>
  </tbody>
</table>';
   $to = $email;
    $subject = 'Forgot Password|GEM Equipments';
    $build = "Enquiry";
$headers = "From:GEM Equipments <" . $build . ">\r\n" ;

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (mail($email, $subject, $message, $headers)) {
  /*  $updatequery=mysqli_query($con,"UPDATE `registration` SET `activation_code` = '$activation' WHERE `registration`.`username` ='$email'");
    if($updatequery){
    header("Location:login.php");

    }
} else {

    header("Location:login.php");
}
*/
header("Location:index.php");
 }
 }
?>