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

$get_id=mysqli_fetch_array(mysqli_query($conn,"select target_id from tbl_target where target_status='1'"));
		$get_year_ids=$get_id['target_id'];
		$get_month_ids=date('n');
$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));

$sql = "INSERT INTO `tbl_campaign`(`campaign_id`, `campaign_title`, `campaign_start_date`,`campaign_end_date`, `campaign_description`, `campaign_place`, `created_by`, `campaign_created_on`, `campaign_status`,`campaign_year_id`,`campaign_month_id`) VALUES"
        . " ('','$cname','$date1','$date2','$cdescription','$cplace','admin','$dates','1','$get_year_ids','$get_month_ids')";
$res = mysqli_query($conn,$sql);
if ($res) {
    $id = mysqli_insert_id($conn);
    for ($i = 0; $i < $vount; $i++) {
        $name = $tse[$i]; 
		$name = preg_replace('/\s+/', '', $name);
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