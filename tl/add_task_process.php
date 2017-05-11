<?php

include 'dbconnect.php';
$taskdes = $_POST['task'];
$tname = $_POST['tname'];
$user = $_POST['user'];


$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));
session_start();
$code=$_SESSION['team_head_user_code'];

$sql = "INSERT INTO `tbl_task`(`task_name`, `task_assigned_by`, `task_assigned_to`, `task_about`, `task_report_description`, `task_created_on`, `task_closed_on`, `task_status`) VALUES('$tname','$code','$user','$taskdes','','$dates','','1')";
$res = mysqli_query($conn,$sql);
if ($res) {
   
            echo "1";
       
} else {
    echo "2";
}
?>