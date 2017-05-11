<?php 
include 'dbconnect.php'; 
if(!empty($_POST['id'])){
	$id=$_POST['id'];
		$delete=mysqli_query($conn,"delete from tbl_user where user_id='$id'");
		if($delete)
		{
			echo "User is deleted successfully";
		}
		else{
			echo "User is Not deleted ";
		}
		
	 
}
else{
	echo "Please select User";
		
	
}

?>