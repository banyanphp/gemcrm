<?php
/*
include('dbconnect.php');

$sql=mysqli_query($conn,"SELECT * FROM `tbl_catalogue`");
$reslut= mysqli_fetch_array($sql);
*/
include 'mail_functionlity.php';
$Email = $_REQUEST['snd_cat'];
	
$cat = $_REQUEST['type'];
$Name = "";
 $count=count($cat);

         
$ta="";
for($i=0;$i<$count;$i++){
 $names=$cat[$i];
                                                            $ta.='<table cellspacing="0" cellpadding="0"  style="border-collapse:collapse;padding:0;margin:10 auto;width:100%;">
                                  <tbody>

                                    <tr  style="height:40px">
									<td style="width:300px">
                                          
                                              <span style="">Click Here to download '.$names.'Catalogue:</span></td>
                                      <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:middle;padding:0;background-color:#3696c2;color:#fff;width:19%;display:block;border:0 none;text-align:center;white-space:nowrap">
                                          <a href="http://gemservice.in/crm/catalogue/'.$names.'.pdf" style="color:#3696c2;line-height:32px;font-size:15px;display:inline-block;text-decoration:none" download>
                                              <span style="color:#fff">Download</span></a></td>
                                    </tr>
									<tr></tr>
									
                                  </tbody>
                                </table>';
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
                                <h1 style="font-size:16px;font-weight:700;line-height:20px;margin:0 0 16px 0">Dear Sir/Madam,Greeting from Gem Equipments Pvt limited</h1>
                                <p style="line-height:16px;margin:0">
Please find the attachement for our products Catalogues.
                                  Meanwhile you have any questions .Please Contact us at <a href="mailto:sales@gemindia.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">sales@gemindia.com</a> or call us on 9344455927

                                </p>
'.$ta.'
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

$mail=send_simple_mail($Email, $Name, "Catalogue ", $message);

if($mail==true){
					echo "1";
				}
				else{
					echo "2";
				}

