<?php

include 'dbconnect.php';
$taskdes = $_POST['task'];
$tname = $_POST['tname'];
$user = $_POST['user'];


$dates = date('Y-m-d H:i:s');

$sql = "INSERT INTO `tbl_task`(`task_name`, `task_assigned_by`, `task_assigned_to`, `task_about`, `task_report_description`, `task_created_on`, `task_closed_on`, `task_status`) VALUES('$tname','admin','$user','$taskdes','','$dates','','0')";
$res = mysqli_query($conn,$sql);
if ($res) {
   
            echo "1";
       
} else {
    echo "2";
}
?>