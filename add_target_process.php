<?php


include 'dbconnect.php';


	$from= $_POST['from'];
	
  $from=date('Y-m-d', strtotime($from));

	$to= $_POST['to'];
 $to=date('Y-m-d', strtotime($to));
	 $year=$from;
	$year.="to";
	$year.=$to;
		$amt = $_POST['amt'];
		$Dryer = $_POST['Dryer'];
		$Chiller = $_POST['Chiller'];
		$Cooler = $_POST['Cooler'];
		$smallproducts = $_POST['smallproducts'];
		$varproducts = $_POST['varproducts'];
		$enquiry = $_POST['enquiry'];
		$campaign= $_POST['Campaign'];
		
			$target_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
if(mysqli_num_rows(mysqli_query($conn,"select * from tbl_target where target_status='1'"))==0){


$q="INSERT INTO `tbl_target`(`target_id`, `target_year`, `target_amount`, `target_dryer`, `target_chiller`, `target_cooler`, `target_var`, `target_small_products`, `target_enquiry`, `target_campaign`, `target_created_on`, `target_status`) VALUES ('','$year','$amt','$Dryer','$Chiller','$Cooler','$varproducts','$smallproducts','$enquiry','$campaign','$target_reg_timestamp','1')";
$r=mysqli_query($conn,$q);
if($r){
	echo "1";
}
else{
	echo "2";
}
}
else{
	echo "3";
}

