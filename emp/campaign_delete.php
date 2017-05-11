<?php 
include 'dbconnect.php'; 
if(!empty($_POST['id'])){
	$id=$_POST['id'];
		$delete=mysqli_query($conn,"delete from tbl_campaign where campaign_id='$id'");
                $delete1=mysqli_query($conn,"delete from tbl_campaign_participants where campaign_id='$id'");
		if($delete)
		{
			echo "Campaign is deleted successfully";
		}
		else{
			echo "Campaign is Not deleted ";
		}
		
	 
}
else{
	echo "Please select Campaign";
		
	
}

?>