<?php
	
	$quation_id=$_REQUEST['id'];
$response = array();
require_once __DIR__ . '/db_connect.php';
include 'mail_functionlity.php';

$db = new DB_CONNECT();

$response = array();

			ignore_user_abort(true);
set_time_limit(0);

ob_start();
			$response["success"] = 1;
			
			echo json_encode($response);
header('Connection: close');
header('Content-Length: '.ob_get_length());
ob_end_flush();
ob_flush();
flush();


			$dat=date('Y');
						$split = substr((string)$dat,-2);
$split.="/";

							$split.= date('m');
							$split.="/";
$split.="$quation_id";
					
				 $total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY  `quotation_no`";
					$query=mysqli_query($db->connect(),$total);
					$res = mysqli_fetch_array($query);	
$t=$res['total']; 
$phpdate = $res['quotation_created_on'];

				$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY `enq_no`";
				$query=mysqli_query($db->connect(),$sql);
				$result=mysqli_fetch_array($query);
				$enq = $result['enq_no'];
				$discount = $result['enq_product_discount'];
				$taxes = $result['tax'];
				$vat_tax = $result['quotation_vattax'];
				$excise_tax = $result['quotation_excise'];
				$user_code = $result['created_by'];

				
				$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq'";
				$query=mysqli_query($db->connect(),$toaddr);
				$results=mysqli_fetch_array($query);
					
			$cname=$results['enq_company_name'];
$cadd=$results['enq_company_address'];
$cphone=$results['enq_company_phn_no'];
$pin=$results['enq_company_pincode'];
$cemail=$results['enq_company_email'];
$cemail1=$results['enq_addon_email1'];
$cemail2=$results['enq_addon_email2'];
$cemail3=$results['enq_addon_email3'];
$ts='';

$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1'";
							$query=mysqli_query($db->connect(),$sql);
							while($result=mysqli_fetch_array($query)){
							
							$code=$result['enq_product_model_no'];
							 $qq=mysqli_query($db->connect(),"select * from tbl_type_price where type_price_model_no='$code'"); 
						 $row=mysqli_fetch_array($qq);
						 
						
							
							$code=$result['enq_product_model_no'];
								$sap= $row['sapcode'];
								$des=$row['description'];
								$type=$result['enq_product_model_type'];
								$qty=$result['enq_product_qty'];
						                $price=$result['enq_product_price'];
						                $dis=$result['enq_product_discount'];
						                $user_code=$result['created_by'];
 $taxs=$result['tax'];

$ts.="
                        <tbody>
			                      
						 
                          <tr>
                            <td>
                              <font align='center' size='1'>
                              <center><span style='font-weight:normal'>&nbsp;
                              <span style='font-size:14px;font-weight:200px;text-align:center;color:#373A3C;'>".$code."</span>
                              </span></center>
                              </font>
                            </td>
                            <td align='left'>
                              <font align='center' size='1'>
                              <center><span style='font-weight:normal'>&nbsp;
                              <span style='font-size:14px;font-weight:200px;text-align:center;color:#373A3C;'>".$sap."</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align='left'>
                              <font align='center' size='1'>
                              <center><span style='font-weight:normal'>&nbsp;
                              <span style='font-size:14px;font-weight:200px;text-align:center;color:#373A3C;'>".$des."</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align='left'>
                              <font align='center' size='1'>
                              <center><span style='font-weight:normal'>&nbsp;
                              <span style='font-size:14px;font-weight:200px;text-align:center;color:#373A3C;'>".$type."</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align='left'>
                              <font align='center' size='1'>
                              <center><span style='font-weight:normal'>&nbsp;
                              <span style='font-size:14px;font-weight:200px;text-align:center;color:#373A3C;'>".$qty."</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align='right'>
                              <font align='right' size='1'>
                              <span style='font-weight:normal'>&nbsp;
                              <span style='font-size:14px;font-weight:200px;text-align:right;color:#373A3C;'>RS.".$price."</span>
                              </span>
                              </font>                                                                              
                            </td>
                          </tr>
				
                        </tbody>";
}
$tax="";
$tax.="<p style='margin:0'>
				
					 Packaging & Forwarding Tax : &nbsp;&nbsp; ".$taxes." %
					<br>VAT/CST &nbsp;&nbsp; : &nbsp;&nbsp; ".$vat_tax." %
					<br>Excise Duty	&nbsp;&nbsp; : &nbsp;&nbsp; ".$excise_tax." %</p>
					";

			  $q21="select * from tbl_user where `user_code`='$user_code'";
                                 
                                    $r2=mysqli_query($db->connect(),$q21);
                                    $row2= mysqli_fetch_array($r2);                                       
                                $user=   $row2['user_name']; 
				                                $user_mobile=   $row2['user_phone_no']; 
							       $user_email=   $row2['user_email']; 
if($user_code=='admin'){
  $user="admin"; 
				                                $user_mobile="9344455927";
							       $user_email="sales@gemindia.com";  
}

if($enq_product_group==2){

$img="<img style='padding:10px' src='http://gemservice.in/crm/gemorion.png' alt='gem' >
				<br><span style='margin-left:30px;'>
				GEM ORION MACHINERY PRIVATE LIMITED,</span>
				<br><span style='margin-left:30px;'>
				SF.NO. 100/2A, AVINASHI RAOD, ARASUR,
</span>
<br><span style='margin-left:30px;'>
				COIMBATORE – 641 407.

</span>
</div><div style='display:inline-block;margin:0 0 8px 0'>
				<br><span style='margin-left:30px;'>
				</span>
				<br><br><br>";


 }  else { 

$img="<img style='padding:10px' src='http://gemservice.in/crm/logo.jpg' alt='gem' >
				<br><span style='margin-left:30px;'>
				Coimbatore,Tamilnadu</span>
				<br><span style='margin-left:30px;'>
				India.</span></div><div style='display:inline-block;margin:0 0 8px 0'>
				<br><span style='margin-left:30px;'>
				</span>
				<br><br><br>";

 } 
											
$message="<table style='border:1px solid #e0e0e0;border-style: double;'>
  <tbody>
    <tr>
      <td>
        <table style='overflow:visible;text-align:left;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:900px'>
          <tbody>
            <tr>
              <td colspan='6'>
                <div id='m_-8301856412589471734printEmailDiv' style='display:none;background-color:#f1f1f1;width:98%;padding:10px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;overflow:hidden'>
                  <a style='border-radius:5px;padding:5px 20px 6px;font-size:14px;color:#666;border:1px solid #ccc;background:rgb(255,255,255);background:-moz-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:-webkit-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:-o-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:-ms-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);text-decoration:none;float:right;margin-right:20px' href='#' target='_blank' data-saferedirecturl='#'>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td style='margin:0 20px 0 0;padding:0 15px 0 0;width:1%'>
                <div style='display:inline-block;margin:0 0 8px 0'>

$img
				<span style='margin-left:30px;color:#818A91;'>
				TO</span>
				<ul>
					<li style='list-style-type: none;'><strong>".$cname."</strong></li>
					<li style='list-style-type: none;'>".$cadd."-".$pin."</li>
				
					<li style='list-style-type: none;'>MobileNo:".
$cphone ."</li>
				</ul>
				<br></br></br>
				</span></div>
              </td>
              <td style='font-size:30px;margin:0;padding:3px;width:1%'></td>
              <td colspan='3' style='font-size:30px;margin:0;padding:3px;width:1%'>
              </td>
              <td style='width:35%;padding:0;margin:0;text-align:right;'>
                <h2 style='font-weight:bold;margin:0 0 5px;padding:0'><span><strong>Quotation</strong></span></h2>
                <p style='margin:0;padding:0'><span style='color:#0099d3;'>No :GEM-".$split."</span></p>
                <br><br>TOTAL AMOUNT<strong><h3>RS.".$t."</h3></strong><br><p style='color:#818A91;'>Quotation Date : ".$phpdate."</p>	
              </td>
            </tr>
            <tr>
              <td colspan='6'>
                <hr style='border-top:0px solid #ccc'>
              </td>
            </tr>
			
            <tr style='height:60px;overflow:hidden;margin-top:20px;padding:0 0 5px'>
              <td colspan='6' >
                <p>
					<b>Dear Madam/Sir,</b><br>
					Thank for your enquiry. We are pleased to offer our best price for your requirements. For any additional information / clarification ,Please keep in touch with us .</p>
				<div>
<table border='1'  colspan='6' cellspacing='3' align='Left' cellpadding='4'  rules='all' border='1' height='57' width='100%' style='border-color:#E3EBF3; padding:0;margin-bottom:7px;margin-top:30px;'>

<tr align='left'>
                            <th align='center' scope='col'><font size='1'><h2>Product Series</h2></font></th>
							<th align='center' scope='col' ><font size='1'><h2>Sap Code</h2></font></th>
							<th align='center' scope='col' ><font size='1'><h2>Product Description</h2></font></th>
							<th align='center' scope='col' ><font size='1'><h2>Product Model type</h2></font></th>
                            <th align='center' scope='col' ><font size='1'><h2>Quantity</h2></font></th>
                            <th align='right' scope='col' style='padding-right: 10px;'><font size='1'><h2>Amount</h2></font></th>
                          </tr>
				".$ts."
</table>
				</div>
              </td>
            </tr>
          </tbody>
        </table>
        <table style='overflow:visible;text-align:right;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:100%;'>
         
            <tr style='margin:0;padding:0'>
              <td align='right' colspan='6' style='border-top:1px solid none;border-bottom:1px solid none;'>
					&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;
			  </td >
			
			<td align='left' colspan='2' style='border-top:1px solid #E3EBF3;border-bottom:1px solid #E3EBF3;'>
				<span style='margin-right:0px;'><strong>TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;</p></span></strong>
			  </td >
			  <td align='left' colspan='2' style='border-top:1px solid #E3EBF3;border-bottom:1px solid #E3EBF3;'>
				<span style='margin-right:0px;'><strong> RS.".$t."</p></span></strong>
			  </td >
			  
		
			  
            </tr>
	
            
          </tbody>
        </table>
<br>
<table cellspacing='3' style='overflow:visible;text-align:left;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:900px;' >
          <tbody>
	<h2 style='margin-bottom: 0px;margin-top: 0px;color:#373a3c;'>Commercial Terms</h2>
<hr style='border-top:0px solid #ccc'>
            <tr>
              <td style='width:50%;font-size:12px;line-height:16px;vertical-align:top'>
                  <li style='list-style-type:none;'><br>
					
                   <p style='margin:0'>
					Discount &nbsp;&nbsp; : &nbsp;&nbsp;".$dis." %
					<br>P & F &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; 0.00 %
					<br>Freight &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; TO PAY
					<br>Valid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 30 DAYS </p>
                  </li>
              </td>
              <td style='width:20%;font-size:12px;line-height:16px;vertical-align:top'>
				<li style='list-style-type:none;'><br>
                    ".$tax."
                  </li>
              </td>
              <td style='width:30%;font-size:12px;line-height:16px;vertical-align:top'>
                  <li style='list-style-type:none;'><br>
                    <p style='margin:0'>
                      Erection &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     : 0.00<br>
					  Surcharge  &nbsp;&nbsp;&nbsp;&nbsp;   :   Not Applicable
                    </p>
                  </li>
              </td>
            </tr>
            <tr>
              <td colspan='6'>
                <hr style='border-top:0px solid #ccc'>
              </td>
            </tr>
          </tbody>
        </table>
<table cellspacing='3' style='overflow:visible;text-align:left;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:900px;' >
          <tbody>
	<p style='margin-bottom: 0px;margin-top: 0px;color:#676767;'>Thanking You</p>
            <tr>
              <td style='width:50%;font-size:12px;line-height:16px;vertical-align:top'>
                  <li style='list-style-type:none;'><br>
					
                   <p style='margin:0'>
					Yours Faith fully<br>

GEM EQUIPMENTS(P)LTD <br><br>
Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    :".$user."<br>

Mob no  &nbsp;&nbsp;&nbsp; :".$user_mobile."<br>

Email-Id  &nbsp;&nbsp; :".$user_email."<br></p>
                  </li>
              </td>
              <td style='width:20%;font-size:12px;line-height:16px;vertical-align:top'>
				
              </td>
              <td style='width:30%;font-size:12px;line-height:16px;vertical-align:top'>
                 
              </td>
            </tr>
            <tr>
              <td colspan='6'>
                <hr style='border-top:0px solid #ccc'>
              </td>
            </tr>
          </tbody>
        </table>
        
      </td>
    </tr>
  </tbody>
</table>";
     
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

$mail=send_multiple_mail($recipients,$cname,"Quotation", $message);



				
			
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Dear Sir/Madam\r\n";
		$message .= " New Quotation is Created for your enquiry Products.\r\n";
		$message .= " Meanwhile If you have any questions .Please Contact us at sales@gemindia.com or call on 9344455927. \r\n";
	
		
		$message1 = urlencode($message);
$mes=send_message($cphone,$message1);
		
		
		
			echo "<script>window.location.href='enquiry_list.php'</script>";
