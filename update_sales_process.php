<?php
include 'dbconnect.php';error_reporting('0');
	$emp_name = $_POST['fname'];
		$emp_mail = $_POST['e_mail'];
		$gender = $_POST['gender'];
		$emp_cell = $_POST['ecell'];
		
		$emp_dept = $_POST['edept'];
		$emp_discount = $_POST['discount'];
		$emp_Grade= $_POST['Grade'];
		$emp_address = $_POST['address'];
		$emp_pincode = $_POST['pincode'];
		$emp_user_id = $_POST['id'];

			$emp_reg_timestamp = date('Y-m-d H:i:s');

			if($_POST['reg'] == 'yes')
{ $cont_user = 'yes'; } else { $cont_user = 'no'; }

if($_POST['self'] == 'yes')
{ $cont_cms = 'yes'; } else { $cont_cms = 'no'; }

if($_POST['allot'] == 'yes')
{ $cont_news = 'yes'; } else { $cont_news = 'no'; }

$q="UPDATE `tbl_user` SET `user_name`='$emp_name',`user_gender`='$gender',`user_email`='$emp_mail',`user_phone_no`='$emp_cell',`user_address`='$emp_address',`user_pincode`='$emp_pincode',`user_speciality`='$emp_dept',`user_discount`='$emp_discount',`user_grade`='$emp_Grade',`user_permsission_sales`='$cont_user',`user_permsission_self_allotment`='$cont_cms',`user_permsission_alotment`='$cont_news' where `user_id`='$emp_user_id'";
$r=mysqli_query($conn,$q);
if($r){
echo '1';
}
else{
echo '2';

}

?>