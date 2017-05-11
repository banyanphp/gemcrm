<?php 
session_start();
include 'dbconnect.php';

$username = mysqli_real_escape_string($conn,$_REQUEST['email']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);

$md5 = md5($password);
$user_check = mysqli_num_rows(mysqli_query($conn,"select * from tbl_team where 	team_head_user_code='$username' and team_password = '$md5'"));
if ($user_check == 1) {
echo "1";
$user_fetch1 =mysqli_query($conn,"select * from tbl_team where 	team_head_user_code='$username' and team_password = '$md5'");
$user_fetch=  mysqli_fetch_array($user_fetch1);
$_SESSION['team_id'] = $user_fetch['team_id'];
$_SESSION['team_name'] = $user_fetch['team_name'];
$_SESSION['team_head_user_code'] = $user_fetch['team_head_user_code'];
$_SESSION['team_discount'] = $user_fetch['team_discount'];
/* echo "<script>window.location.href = 'home.php';</script>"; */

$user_fetch1 =mysqli_query($conn,"select * from tbl_user where user_code='$username'and `user_status`='1'");
$user_fetchs=  mysqli_fetch_array($user_fetch1);

		
$_SESSION['user_permsission_self_allotment'] = $user_fetchs['user_permsission_self_allotment'];
$_SESSION['user_permsission_alotment'] = $user_fetchs['user_permsission_alotment'];
$_SESSION['user_permsission_sales'] = $user_fetchs['user_permsission_sales'];

}
else 
{
echo "username or password are wrong.";
}
