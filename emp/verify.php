<?php
session_start();
include('dbconnect.php');
$id = $_SESSION['user_code'];

 //user is logged in
 

	$curent_pass	= mysqli_real_escape_string($conn,$_POST['curent_pass']);
	$md5 = md5($curent_pass);
	
	$sql=mysqli_query($conn,"SELECT * FROM `tbl_user` WHERE `user_code`='$id' AND `user_password`='$md5'");
	$count=mysqli_num_rows($sql);
	if($count>0){
		?> <script>window.location.href = "changepasswords.php?id=<?php echo $id; ?>";</script><?php 
}
else{
		echo 'password Missmatch';
}
?>

