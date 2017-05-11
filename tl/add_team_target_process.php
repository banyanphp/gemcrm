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



$q="INSERT INTO `tbl_target_team`(`team_target_id`, `team_id`, `year_id`, `month_id`, `team_amount`, `team_dryer`, `team_chiller`, `team_cooler`, `team_var`, `team_small_products`, `team_enquiry`, `team_campaign`, `team_target_created_on`, `team_target_status`) VALUES ('','$team','$year','$month','$amt','$Dryer','$Chiller','$Cooler','$varproducts','$smallproducts','$enquiry','$campaign','$target_reg_timestamp',1)";
$r=mysqli_query($q);
if($r){
	echo "1";
}
else{
	echo "2";
}

