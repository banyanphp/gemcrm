<?php

include 'dbconnect.php';
$cname = $_POST['cname'];
$cplace = $_POST['cplace'];
$cdescription = $_POST['cdescription'];
$date = $_POST['date'];
$test = $_POST['test'];

$date = explode('-', $date);
$date1=$date['0'];
$date2=$date['1'];
$tse = explode(',', $test);
$vount = count($tse);


$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));
session_start();
$code=$_SESSION['team_head_user_code'];

$sql = "INSERT INTO `tbl_campaign`(`campaign_id`, `campaign_title`, `campaign_start_date`,`campaign_end_date`, `campaign_description`, `campaign_place`, `created_by`, `campaign_created_on`, `campaign_status`) VALUES"
        . " ('','$cname','$date1','$date2','$cdescription','$cplace','$code','$dates','1')";
$res = mysqli_query($conn,$sql);
if ($res) {
    $id = mysqli_insert_id($conn);
    for ($i = 0; $i < $vount; $i++) {
        $name = $tse[$i];
        $sql1 = "INSERT INTO `tbl_campaign_participants`(`campaign_participants_id`, `campaign_id`, `campaign_participants_code`, `campaign_participants_created_on`, `campaign_participants_status`) VALUES "
                . "('','$id','$name','$dates','1')";
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