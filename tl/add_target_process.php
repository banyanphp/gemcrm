<?php


include 'dbconnect.php';

	$year= $_POST['year'];
		$amt = $_POST['amt'];
		$Dryer = $_POST['Dryer'];
		$Chiller = $_POST['Chiller'];
		$Cooler = $_POST['Cooler'];
		$smallproducts = $_POST['smallproducts'];
		$varproducts = $_POST['varproducts'];
		$enquiry = $_POST['enquiry'];
		$campaign= $_POST['Campaign'];
		
			$target_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));



$q="INSERT INTO `tbl_target`(`target_id`, `target_year`, `target_amount`, `target_dryer`, `target_chiller`, `target_cooler`, `target_var`, `target_small_products`, `target_enquiry`, `target_campaign`, `target_created_on`, `target_status`) VALUES ('','$year','$amt','$Dryer','$Chiller','$Cooler','$varproducts','$smallproducts','$enquiry','$campaign','$target_reg_timestamp','1')";
$r=mysqli_query($conn,$q);
if($r){
	echo "1";
}
else{
	echo "2";
}

