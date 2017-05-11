<?php

include 'dbconnect.php';
$cname = $_POST['cname'];
$cplace = $_POST['cplace'];
$cdescription = $_POST['cdescription'];
$date = $_POST['date'];
$test = $_POST['test'];
$id = $_POST['id'];
$date = explode('-',$date);
$date1=$date['0'];
$date2=$date['1'];
$tse = explode(',',$test);
$vount = count($tse);


$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));
$sql="UPDATE `tbl_campaign` SET `campaign_title`='$cname',`campaign_start_date`='$date1',`campaign_end_date`='$date2',`campaign_description`='$cdescription',`campaign_place`='$cplace' WHERE campaign_id='$id'";


$res = mysqli_query($conn,$sql);
if ($res) {
	 $sql1='';
    $sql2=mysqli_query($conn,"DELETE FROM `tbl_campaign_participants` WHERE `campaign_id`='$id'");
    for ($i = 0; $i < $vount; $i++) {
         $name=$tse[$i];
       $name = preg_replace('/\s+/', '', $name);

        $sql1= "INSERT INTO `tbl_campaign_participants`(`campaign_participants_id`, `campaign_id`, `campaign_participants_code`, `campaign_participants_created_on`, `campaign_participants_status`) VALUES "
                . "('','$id','$name','$dates','1')";
        $res1 = mysqli_query($conn,$sql1);
      
    }
      if ($res1) {
            echo "1";
        } else {
            echo $sql2;
        }
} else {
    echo "2";
}
?>