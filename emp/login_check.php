<?php 
session_start();
include 'dbconnect.php';
$username = mysqli_real_escape_string($conn,$_REQUEST['code']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);
$md5 = md5($password);
$user_check = mysqli_num_rows(mysqli_query($conn,"select * from tbl_user where user_code='$username' and user_password = '$md5' and `user_status`='1'"));
if ($user_check == 1) {
echo "1";
$user_fetch1 =mysqli_query($conn,"select * from tbl_user where user_code='$username' and user_password = '$md5' and `user_status`='1'");
$user_fetch=  mysqli_fetch_array($user_fetch1);
$_SESSION['user_id'] = $user_fetch['user_id'];
$_SESSION['user_name'] = $user_fetch['user_name'];
$_SESSION['user_code'] = $user_fetch['user_code'];

$_SESSION['user_permsission_self_allotment'] = $user_fetch['user_permsission_self_allotment'];
$_SESSION['user_permsission_alotment'] = $user_fetch['user_permsission_alotment'];
$_SESSION['user_permsission_sales'] = $user_fetch['user_permsission_sales'];

/* echo "<script>window.location.href = 'home.php';</script>"; */
}
else 
{
echo "username or password are wrong.";
}

?>