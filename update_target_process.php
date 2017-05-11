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
			

$q="UPDATE `tbl_target` SET `target_amount`='$amt',`target_dryer`='$Dryer',`target_chiller`='$Chiller',`target_cooler`='$Cooler',`target_var`='$varproducts',`target_small_products`='$smallproducts',`target_enquiry`='$enquiry',`target_campaign`='$campaign' WHERE `target_id`='$id'";

$r=mysqli_query($conn,$q);
if($r){
	echo "1";
}
else{
	echo "2";
}

