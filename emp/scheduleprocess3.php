<?php
include 'dbconnect.php';
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$q=mysql_query("INSERT INTO `tbl_participants`(`id`, `name`, `mail`, `phone_no`, `status`) VALUES ('','$fname','$email','$phone','1')");
if($q){
	echo "1";
}
else{
	echo "2";
}
?>