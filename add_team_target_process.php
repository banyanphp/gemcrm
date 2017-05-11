<?php


include 'dbconnect.php';

	$year= $_POST['year'];
	$team= $_POST['team'];
	$month= $_POST['month'];
		$amt = $_POST['amt'];
		$Dryer = $_POST['Dryer'];
		$Chiller = $_POST['Chiller'];
		$Cooler = $_POST['Cooler'];
		$smallproducts = $_POST['smallproducts'];
		$varproducts = $_POST['varproducts'];
		$enquiry = $_POST['enquiry'];
		$campaign= $_POST['Campaign'];
		
			$target_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
			$select_data=mysqli_query($conn,"select * from `tbl_target_team` where `year_id` ='$year' and `team_id`='$team' and `month_id`='$month'");
			$count=mysqli_num_rows($select_data);
if($count==0){

 $q="INSERT INTO `tbl_target_team`(`team_target_id`, `team_id`, `year_id`, `month_id`, `team_amount`, `team_dryer`, `team_chiller`, `team_cooler`, `team_var`, `team_small_products`, `team_enquiry`, `team_campaign`, `team_target_created_on`, `team_target_status`) "
        . "VALUES ('','$team','$year','$month','$amt','$Dryer','$Chiller','$Cooler','$varproducts','$smallproducts','$enquiry','$campaign','$target_reg_timestamp',1)";

if(mysqli_query($conn,$q)){
	
	     $r1="select * from tbl_team_members where team_id='$team'";

$row2=mysqli_query($conn,$r1);
    while($fetch_team_members=  mysqli_fetch_array($row2)){
		 $fetch_user_code=$fetch_team_members['members_code'];
		
        $q3s="INSERT INTO `tbl_user_target_for_the_month`(`user_target_id`, `user_targer_year_id`, `user_target_month_id`, `user_target_team_id`, `user_target_amount`, `user_target_dryer`, `user_target_chiller`, `user_target_cooler`, `user_target_var`, `user_target_small_products`, `user_target_enquiry`, `user_target_campaign`, `user_target_created_on`, `user_target_status`,`user_target_user_code`)VALUES ('','$year','$month','$team','0','0','0','0','0','0','0','0','$target_reg_timestamp','1','$fetch_user_code')";
	  
      $q2=  mysqli_query($conn,$q3s);
		
    }
    if($q2){
    
	echo "1";
    }
}
else{
	echo "2";
} 
}

else {
	echo "3";
}
