<?php
include 'dbconnect.php';
$reason=$_REQUEST['fname'];
$date=$_REQUEST['date'];$date=date('Y-m-d', strtotime($date));

$time=$_REQUEST['time'];
$test=$_REQUEST['test'];
$tse=explode(',',$test);
$vount=count($tse);
$url=date("y-m-d h:i:s");
$md=md5($url);
$urls="http://appear.in/$md";
for($i=0;$i<$vount;$i++){
	$name=$tse[$i];
$q=mysql_query("INSERT INTO `tbl_video`(`id`, `reason`, `url`, `date`, `time`, `participants`, `status`) VALUES
 ('','$reason','$urls','$date','$time','$name','1')");



$qs1=mysql_query("select * from tbl_participants where id='$name'"); 
								$rows1=mysql_fetch_array($qs1);
$email=$rows1['mail'];
$phonNo=$rows1['phone_no'];


$name=$rows1['name'];
$sub="Conference for: $reason";

$build = "service@gemindia.com";
$headers = "From: Gemsevice<" . $build . ">\r\n" ;

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$description="Dear ";
$description.=$name;
$description.=",";
$description.="<br>";
$description.="This is to inform video conference call is sceduled on ";
$description.=$date;
$description.="    ";
$description.=$time;
$description.="<br>";
$description.="Thank you,";
$description.="<br>";
$description.="gemspares";

mail($email,$sub,$description,$headers);

	$description="Dear ";
$description.=$name;
$description.=",";

$description.="Thishis is to inform video conference call is sceduled on";
$description.=$date;
$description.="    ";
$description.=$time;
$description.="Thank you,";
$description.="gemspares";		

		
		$message1 = urlencode($description);
		//echo "http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1";

		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1);

if($q){
	echo "1";
}
else{
	echo "2";
}
}


?>