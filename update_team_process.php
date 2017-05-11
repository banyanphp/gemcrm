<?php

include 'dbconnect.php';
$cname = $_POST['cname'];
$team = $_POST['team'];
$test = $_POST['test'];
$tl_mail = $_POST['tl_mail'];
$discount = $_POST['discount'];
$t_id = $_POST['t_id'];

 
$tse = explode(',', $test);
$vount = count($tse);


$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));

$sql = "UPDATE `tbl_team` SET `team_name`='$cname',`team_mail`='$tl_mail',`team_head_user_code`='$team',`team_discount`='$discount' WHERE team_id='$t_id'";
$res = mysqli_query($conn,$sql);

$sql2 = "DELETE FROM `tbl_team_members` WHERE team_id='$t_id'";
$res2= mysqli_query($conn,$sql2);

if ($res2) {
 
    for ($i = 0; $i < $vount; $i++) {
        $name=$tse[$i];
       $sql1 = "INSERT INTO `tbl_team_members`(`team_members_id`, `team_id`, `members_code`,`team_members_created_on` ,`team_members_status`) VALUES ('','$t_id','$name','$dates','1')";
        $res1 = mysqli_query($conn,$sql1);
      
    }
      if ($res1) {
            echo "1";
        } else {
            echo "2";
        }
} else {
    echo "2";
}
?>