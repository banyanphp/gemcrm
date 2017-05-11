<?php

include 'dbconnect.php';

$id = $_POST['id'];
$status = $_POST['status'];
$report = $_POST['report'];


$dates = date('Y-m-d H:i:s');



 $sql = "UPDATE `tbl_task` SET `task_status`='$status',`task_report_description`='$report' where task_id='$id'" ;
$res = mysqli_query($conn,$sql);
if ($res) {
   
            echo "1";
       
} else {
    echo "2";
}
?>