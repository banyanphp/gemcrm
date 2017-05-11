<?php

include 'dbconnect.php';
$taskdes = $_POST['task'];
$user = $_POST['user'];
$id = $_POST['id'];


$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));
session_start();
$code=$_SESSION['team_head_user_code'];

 $sql = "UPDATE `tbl_task` SET `task_assigned_to`='$user',`task_about`='$taskdes' where task_id='$id'" ;
$res = mysqli_query($conn,$sql);
if ($res) {
   
            echo "1";
       
} else {
    echo "2";
}
?>