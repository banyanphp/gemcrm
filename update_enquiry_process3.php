<?php

include 'dbconnect.php';
session_start();
	$enq_user = $_REQUEST['allotedto'];
	
	$id = $_REQUEST['id'];
	$Date = date('Y-m-d H:i:s');

	if($enq_user!='0'){
			$get_team=mysqli_fetch_array(mysqli_query($conn,"select team_id from tbl_team_members where members_code='$enq_user'"));
			$team_id=$get_team['team_id'];
	}
	
		
	 $query = "UPDATE `tbl_enquiry` SET `enq_alloted_to`='$enq_user',`enq_team_id`='$team_id',`enq_status`='Pending' WHERE `enq_id`='$id'";
				
			$res=mysqli_query($conn,$query);
				if($res){
					echo "1";
				}
				else{
					echo "2";
				}
?>