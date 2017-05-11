<?php
include 'dbconnect.php';

$amt = $_POST['amt'];
		$Dryer = $_POST['Dryer'];
		$Chiller = $_POST['Chiller'];
		$Cooler = $_POST['Cooler'];
		$smallproducts = $_POST['smallproducts'];
		$varproducts = $_POST['varproducts'];
		$enquiry = $_POST['enquiry'];
		$campaign= $_POST['Campaign'];
		$id= $_POST['id'];
		

$s="UPDATE `tbl_user_target_for_the_month` SET `user_target_amount`='$amt',`user_target_dryer`='$Dryer',`user_target_chiller`='$Chiller',`user_target_cooler`='$Cooler',`user_target_var`='$varproducts',`user_target_small_products`='$smallproducts',`user_target_enquiry`='$enquiry',`user_target_campaign`='$campaign' WHERE `user_target_id`='$id'";
$r=mysqli_query($conn,$s);

if($r){
	echo '1';
}
else{
	echo '2';
}
?>
