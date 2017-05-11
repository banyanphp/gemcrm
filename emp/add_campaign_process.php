<?php

include 'dbconnect.php';
$cname = $_POST['cname'];
$cplace = $_POST['cplace'];
$cdescription = $_POST['cdescription'];
$date = $_POST['date'];

$date = explode('-', $date);
$date1=$date['0'];
$date2=$date['1'];



$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));
session_start();
$code=$_SESSION['user_code'];
$get_id=mysqli_fetch_array(mysqli_query($conn,"select target_id from tbl_target where target_status='1'"));
		$get_year_ids=$get_id['target_id'];
		$get_month_ids=date('n');
$get_tid=mysqli_fetch_array(mysqli_query($conn,"select team_id from tbl_team_members where members_code='$code'"));
$get_tids=$get_id['team_id'];

$res = mysqli_query($conn,"INSERT INTO `tbl_campaign`(`campaign_id`, `campaign_title`, `campaign_start_date`,`campaign_end_date`, `campaign_description`, `campaign_place`, `created_by`, `campaign_created_on`, `campaign_status`,`campaign_year_id`,`campaign_month_id`,	`campaign_team_id`) VALUES ('','$cname','$date1','$date2','$cdescription','$cplace','$code','$dates','1','$get_year_ids','$get_month_ids','$get_tids')");
if ($res) {
    $id = mysqli_insert_id($conn);
    
        $sql1 = "INSERT INTO `tbl_campaign_participants`(`campaign_participants_id`, `campaign_id`, `campaign_participants_code`, `campaign_participants_created_on`, `campaign_participants_status`) VALUES('','$id','$code','$dates','1')";
        $res1 = mysqli_query($conn,$sql1);
      
   
      if ($res1) {
            echo "1";
        } else {
            echo "2";
        }
} else {
    echo "2";
}
?>