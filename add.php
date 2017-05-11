<?php
include 'dbconnect.php';

$reason=$_REQUEST['fname'];
$date=$_REQUEST['dates'];$date=date('Y-m-d', strtotime($date));

$time=$_REQUEST['time'];
$tse=$_REQUEST['tests'];


$vount=count($tse);
$url=date("y-m-d h:i:s");
$md=md5($url);
$urls="https://appear.in/$md";
for($i=0;$i<$vount;$i++){
	$name=$tse[$i];

$q=mysqli_query($conn,"INSERT INTO `tbl_video`(`id`, `reason`, `url`, `date`, `time`, `participants`, `status`) VALUES
 ('','$reason','$urls','$date','$time','$name','1')");



$qs1=mysqli_query($conn,"select * from tbl_participants where id='$name'"); 
								$rows1=mysqli_fetch_array($qs1);
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
$description.="This is to inform ";
$description.=$reason;

$description.=" video conference call is scheduled on ";
$description.=$date;
$description.="    ";
$description.=$time;
$description.="<br>";
$description.="Thank you,";
$description.="<br>";
$description.="Gem Equipments";

mail($email,$sub,$description,$headers);
	$description="Dear ";
$description.=$name;
$description.=",";

$description.="This is to inform ";
$description.=$reason;
$description.=" video conference call is scheduled on ";$description.=$date;
$description.="    ";
$description.=$time;
$description.="Thank you,";
$description.="Gem Equipments";		

		
		$message1 = urlencode($description);
		//echo "http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1";

		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1);


}
if($q){
	echo "1";
}
else{
	echo "2";
}


?>