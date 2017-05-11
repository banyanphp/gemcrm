<?php 
session_start();
include 'dbconnect.php';

$username = mysqli_real_escape_string($conn,$_REQUEST['email']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);

$md5 = md5($password);
$user_check = mysqli_num_rows(mysqli_query($conn,"select * from tbl_admin where admin_user_name='$username' and admin_password = '$md5'"));
if ($user_check == 1) {
echo "1";
$user_fetch1 =mysqli_query($conn,"select * from tbl_admin where admin_user_name='$username' and admin_password = '$md5'");
$user_fetch=  mysqli_fetch_array($user_fetch1);
$_SESSION['admin_id'] = $user_fetch['admin_id'];
$_SESSION['admin_name'] = $user_fetch['admin_name'];
$_SESSION['admin_user_name'] = $user_fetch['admin_user_name'];

/* echo "<script>window.location.href = 'home.php';</script>"; */
}
else 
{
echo "username or password are wrong.";
}
