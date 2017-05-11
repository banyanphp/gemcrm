<?php
include('dbconnect.php');

$id = $_POST['id'];

$sql=mysqli_query($conn,"SELECT date(quotation_created_on) as created FROM `tbl_quotation` WHERE `quotation_no`='$id'");
	$results=mysqli_fetch_array($sql);
echo $results['created'];


?>