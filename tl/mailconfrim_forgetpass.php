<?php
include('dbconnect.php');

$id=$_POST['chng_pass'];

 //user is logged in
 

	$nwpass			= mysqli_real_escape_string($conn,$_POST['newpassword']);
	$rppasswrd		= mysqli_real_escape_string($conn,$_POST['repeatnewpassword']);
	
	
	$md5 = md5($nwpass);
if($nwpass == $rppasswrd){
	$sql=mysqli_query($conn,"UPDATE `tbl_user` SET `user_password`='$md5' WHERE `user_code`='$id'");
	$sql=mysqli_query($conn,"UPDATE `tbl_team` SET `team_password`='$md5' WHERE `team_head_user_code`='$id'");
		if($sql){
		echo '1';
		}
}
else{
		echo 'password Missmatch';
}
?>

