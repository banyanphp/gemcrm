<?php
	session_start();
	include('dbconnect.php');
	$usr=$_SESSION['team_head_user_code'];
	
	$appoint_dates		= $_POST['appoint_date'];
	$appoint_dates = date('d/m/Y', strtotime($appoint_dates));
	$appoint_tmes		= $_POST['appoint_tme'];
	$appoint_thrughs	= $_POST['appoint_thrugh'];
	$appoint_Cmpnys		= $_POST['appoint_Cmpny'];
	$appoint_locatns	= $_POST['appoint_locatn'];
	$appiont_cmds		= $_POST['appoint_cmd'];
	$id=$_POST['id'];
		
	$sql=mysqli_query($conn,"UPDATE `tbl_appointment` SET `appointment_date`='$appoint_dates',`appointment_time`='$appoint_tmes',`appointment_through`='$appoint_thrughs',`appointment_company_name`='$appoint_Cmpnys',`appointment_location`='$appoint_locatns',`appointment_description`='$appiont_cmds' WHERE `appointment_id`='$id'");
	if($sql){
		echo '1';
	}
	else{
		echo '2';
	}
	?>