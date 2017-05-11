<?php 
include 'dbconnect.php'; 
if(!empty($_POST['id'])){
	$id=$_POST['id'];
$fetch_data=mysqli_fetch_array(mysqli_query($conn,"select team_id,year_id,month_id from  tbl_target_team where team_target_id='$id'"));
$t_id=$fetch_data['team_id'];
$y_id=$fetch_data['year_id'];
$m_id=$fetch_data['month_id'];

$delete=mysqli_query($conn,"delete from  tbl_user_target_for_the_month where `user_targer_year_id`='$y_id' and `user_target_month_id`='$m_id' and `user_target_team_id`='$t_id'");

		$delete=mysqli_query($conn,"delete from  tbl_target_team where 	team_target_id='$id'");
		if($delete)
		{
			echo "Target is deleted  Successfully ";
		}
		else{
			echo "Target is Not deleted ";
		}
		
	 
}
else{
	echo "Please select User";
		
	
}

?>