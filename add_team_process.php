<?php

include 'dbconnect.php';

$cname = $_POST['cname'];
$team = $_POST['team'];
$test = $_POST['test'];
$discount = $_POST['discount'];
 $password = md5($_POST['password']);
 $tl_mails = $_POST['tl_mails'];
 
$tse = explode(',', $test);
$vount = count($tse);


$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));

$sql = "INSERT INTO `tbl_team`(`team_id`, `team_name`,`team_mail`, `team_head_user_code`, `team_password`, `team_discount`, `team_created_on`, `team_last_login_on`, `team_status`)  VALUES"
        . " ('','$cname','$tl_mails','$team','$password','$discount','$dates','','1')";
$res = mysqli_query($conn,$sql);
if ($res) {
    $id = mysqli_insert_id($conn);
    for ($i = 0; $i < $vount; $i++) {
        $name = $tse[$i];
       $sql1 = "INSERT INTO `tbl_team_members`(`team_members_id`, `team_id`, `members_code`,`team_members_created_on` ,`team_members_status`) VALUES ('','$id','$name','$dates','1')";
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