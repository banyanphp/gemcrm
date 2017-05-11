<?php
session_start();
	include('dbconnect.php');
	$usr=$_SESSION['admin_user_name'];
	
	

		$appoint_dates		= $_POST['appoint_date'];
		$appoint_dates = date('d/m/Y', strtotime($appoint_dates));
		$appoint_tmes		= $_POST['appoint_tme'];
		$appoint_usrnams	= $_POST['appoint_usrnam'];
		$appoint_Cmpnys		= $_POST['appoint_Cmpny'];
		$appoint_thrughs	= $_POST['appoint_thrugh'];
		$appoint_locatns	= $_POST['appoint_locatn'];
		$appiont_cmds		= $_POST['appoint_cmd'];
		
		$sql=mysqli_query($conn,"INSERT INTO `tbl_appointment`(`appointment_id`, `appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`, `appointment_through`,`appointment_company_name`, `appointment_location`, `appointment_description`) VALUES ('','$appoint_dates','$appoint_tmes','$usr','$appoint_usrnams','$appoint_thrughs','$appoint_Cmpnys','$appoint_locatns','$appiont_cmds')");
		if($sql){
			//$_SESSION['msg']= 'sucess';
			echo '1';
		}
		else{
			echo '2';
			//$_SESSION['msg']='fail';
		}

		//echo "<script>window.location.href='appointment_list.php'</script>";

 ?>
  