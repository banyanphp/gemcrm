<?php
session_start();
include('dbconnect.php');
$id = $_SESSION['admin_user_name'];

 //user is logged in
 

	$nwpass			= mysqli_real_escape_string($conn,$_POST['newpassword']);
	$rppasswrd		= mysqli_real_escape_string($conn,$_POST['repeatnewpassword']);
	
	
	$md5 = md5($nwpass);
if($nwpass == $rppasswrd){
	$sql=mysqli_query($conn,"UPDATE `tbl_admin` SET `admin_password`='$md5' WHERE `admin_user_name`='$id'");
		if($sql){
		echo '1';
		}
}
else{
		echo 'password Missmatch';
}
?>

