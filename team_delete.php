<?php 
include 'dbconnect.php'; 
if(!empty($_POST['id'])){
	$id=$_POST['id'];
		$delete=mysqli_query($conn,"delete from tbl_team where team_id='$id'");
		$delete=mysqli_query($conn,"delete from tbl_team_members where team_id='$id'");
		if($delete)
		{
			echo "Team is deleted successfully";
		}
		else{
			echo "Team is Not deleted ";
		}
		
	 
}
else{
	echo "Please select Team";
		
	
}

?>