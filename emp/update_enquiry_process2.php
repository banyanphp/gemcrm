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
$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_no'";
				$query=mysqli_query($conn,$toaddr);
				$resultss=mysqli_fetch_array($query);
					
			$enq_contact_person_name=$resultss['enq_contact_person_name'];
$cadd=$results['enq_company_address'];
$cphone=$results['enq_company_phn_no'];
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
$created_by=$_SESSION['user_code'];
 $discount=$_POST['Discount'];
$priceadd=$_POST['priceadd'];

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
$date=$_REQUEST['date'];
$date= date("d/m/Y", strtotime($date));

     $time=$_REQUEST['appoint_tme'];
     $appointment_through=$_REQUEST['appoint_thrugh']; 
     $appointment_location=$_REQUEST['appoint_locatn'];
     $appointment_description=$_REQUEST['appoint_cmd']; 
	$Date = date('Y-m-d H:i:s');

$created_by=$_SESSION['user_code'];

 $sql="INSERT INTO `tbl_appointment`(`appointment_id`, `appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`,`appointment_company_name`, `appointment_through`, `appointment_location`, `appointment_description`, `appointment_created_on`, `appointment_status`) VALUES ('','$date','$time','$created_by','$enq_contact_person_name','$company_name','$appointment_through','$appointment_location','$appointment_description','$Date','1')";

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

 $user=$_SESSION['user_code']; 
		   $enq_nos='Enquiry No';

$enq_nos.=$enq_no;
$selecttl=mysqli_fetch_array(mysqli_query($conn,"select team_id from tbl_team_members where members_code='$user'"));
$team_id=$selecttl['team_id'];
$selectthuser=mysqli_fetch_array(mysqli_query($conn,"select team_head_user_code from tbl_team where team_id='$team_id'"));
$assignto=$selectthuser['team_head_user_code'];

	 $sql = "INSERT INTO `tbl_task`(`task_name`, `task_assigned_by`, `task_assigned_to`, `task_about`, `task_report_description`, `task_created_on`, `task_closed_on`, `task_status`) VALUES('$enq_nos','$user','$assignto','enquiry','$enq_desc','$Date','','0')";
$res = mysqli_query($conn,$sql);
    $ids = mysqli_insert_id($conn);

$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_task_id`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$ids','$Date')";
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
mysqli_query($conn,$updateqno);
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

	$quotationno=$_REQUEST['shows_quotation'];
$pono=$_REQUEST['pono'];
	$enq_remarks=$_REQUEST['enq_remarks'];
		$Date = date('Y-m-d H:i:s');

	 $updateqno="UPDATE `tbl_enquiry` SET `enq_po`='$imagename',`enq_quotation`='$quotationno',`enq_status`='Completed',`enq_description`='$enq_desc',`enq_remarks`='$enq_remarks',`enq_completed_on`='$Date',`enq_po_no`='$pono' WHERE `enq_no`='$enq_no'";
	
	$result3 = mysqli_query($conn,$updateqno);

 $updateqno="UPDATE `tbl_quotation` SET `quotation_status`='0' WHERE `enq_no`='$enq_no'";
mysqli_query($conn,$updateqno);

 $updateqno="UPDATE `tbl_quotation` SET `quotation_status`='1' WHERE `quotation_no`='$quotationno'";
mysqli_query($conn,$updateqno);

if($result3){
	
				$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq_no'";
				$query=mysqli_query($conn,$toaddr);
				$results=mysqli_fetch_array($query);
					
			$cname=$results['enq_company_name'];
$cadd=$results['enq_company_address'];
$cphone=$results['enq_company_phn_no'];
$enq_contact_person_name=$results['enq_contact_person_name'];
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
                                  Please find the final quotation for your enquiry .Meanwhile if you have any questions .Please Contact us at <a href="mailto:sales@gemindia.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">sales@gemindia.com</a> or call on 9344455927

                                </p>
                                <p style="line-height:16px;margin:16px 0 6px">.</p>
                            </td></tr>
                        <tr>
                       
                            <td>
                                
            <br>



<p style="margin:0 0 10px 0"></p>
</td>
</tr>

</tbody></table>
</td>
</tr>
</tbody></table>';


	$quation_id=$enq_quotation;
	
						$dat=date('Y');
						$split = substr((string)$dat,-2);
$split.="/";

							$split.= date('m');
							$split.="/";
$split.="$quation_id";
					
				$total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY  `quotation_no`";
					$query=mysqli_query($conn,$total);
					$res = mysqli_fetch_array($query);	
$t=$res['total']; 
$phpdate = $res['quotation_created_on'];

				$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY `enq_no`";
				$query=mysqli_query($conn,$sql);
				$result=mysqli_fetch_array($query);
				$enq = $result['enq_no'];
				$discount = $result['enq_product_discount'];
				$tax=$result['tax'];
				$vat_tax=$result['vat_tax'];
				$exc_tax=$result['exc_tax'];
				$erectn_val=$result['erectn_val'];
				$freigt_term=$result['freigt_term'];
				$delevry_week=$result['delevry_week'];
				$user_code = $result['created_by'];
				$attach_ga=$result['attach_ga'];
				$toaddr ="SELECT * FROM `tbl_enquiry` WHERE `enq_no`='$enq'";
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
$ts='';

$sql="SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$quation_id' AND `quotation_status`='1'";
							$query=mysqli_query($conn,$sql);
							while($result=mysqli_fetch_array($query)){
							
							$code=$result['enq_product_model_no'];
							 $qq=mysqli_query($conn,"select * from tbl_type_price where type_price_model_no='$code'"); 
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
	P & F Tax &nbsp; &nbsp; &nbsp; : ".$taxes." %
	<br>VAT/CST &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : ".$vat_tax." %
	<br>Excise Duty	&nbsp;&nbsp;: ".$excise_tax." %</p>";
	
			  $q21="select * from tbl_user where `user_code`='$user_code'";
                                 
                                    $r2=mysqli_query($conn,$q21);
                                    $row2= mysqli_fetch_array($r2);                                       
                                $user=   $row2['user_name']; 
				                                $user_mobile=   $row2['user_name']; 
							       $user_email=   $row2['user_email']; 
											
$message.="<table style='border:1px solid #e0e0e0;border-style: double;'>
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
                <div style='display:inline-block;margin:0 0 8px 0'><img style='padding:10px' src='http://gemservice.in/crm/logo.jpg' alt='gem' >
				<br><span style='margin-left:30px;'>
				Coimbtore,Tamilnadu</span>
				<br><span style='margin-left:30px;'>
				India.</span></div><div style='display:inline-block;margin:0 0 8px 0'>
				<br><span style='margin-left:30px;'>
				</span>
				<br><br><br>
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
				<span style='margin-right:0px;'><strong> Rs.$t</p></span></strong>
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
					Discount &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;&nbsp;".$dis." %
					<br>Freight terms&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; ".$freigt_term."
					<br>Valid &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 30 DAYS </p>
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
                      Erection &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     :&nbsp; 0.00<br>
					  Surcharge  &nbsp;&nbsp;&nbsp;&nbsp;   :&nbsp;   Not Applicable<br>
					  Delivered in  &nbsp;   :&nbsp; ".$delevry_week." Weeks  
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

$message2 = '<table cellspacing="0" cellpadding="0" border="0" width="100%">
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
                                   Please Find the attachement for GA diagrams For your enquiried Products.
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