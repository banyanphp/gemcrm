<?php

include 'dbconnect.php';
$cname = $_POST['cname'];
$cplace = $_POST['cplace'];
$cdescription = $_POST['cdescription'];
$date = $_POST['date'];

$id = $_POST['id'];
$date = explode('-', $date);
$date1=$date['0'];
$date2=$date['1'];



$dates = date('Y-m-d H:i:s', strtotime('+330 minute'));
echo $sql="UPDATE `tbl_campaign` SET `campaign_title`='$cname',`campaign_start_date`='$date1',`campaign_end_date`='$date2',`campaign_description`='$cdescription',`campaign_place`='$cplace' WHERE campaign_id='$id'";


$res = mysqli_query($conn,$sql);

  
      if ($res1) {
            echo "1";
        } else {
            echo "2";
        }

?>