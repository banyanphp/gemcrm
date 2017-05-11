<?php 
include 'dbconnect.php'; 
if(!empty($_POST['id'])){
	$id=$_POST['id'];
		$delete=mysqli_query($conn,"UPDATE tbl_target set target_status='1' where target_id='$id'");

		if($delete)
		{
			echo "Target is completd successfully";
		}
		else{
			echo "Target  is Not Completed ";
		}
		
	 
}
else{
	echo "Please select Campaign";
		
	
}

?>