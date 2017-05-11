<?php
include 'dbconnect.php';

	$emp_name = $_POST['fname'];
		$emp_mail = $_POST['e_mail'];
		$gender = $_POST['gender'];
		$emp_cell = $_POST['ecell'];
		$emp_code = $_POST['ecode'];
		$password1 = $_POST['password'];
                $password = md5($password1);
		$epassword = md5($password);
		$emp_dept = $_POST['edept'];
		$emp_discount = $_POST['discount'];
		$emp_Grade= $_POST['Grade'];
		$emp_address = $_POST['address'];
		$emp_pincode = $_POST['pincode'];
function GetImageExtension($imagetype) {

            if (empty($imagetype))
                return false;

            switch ($imagetype) {

                case 'image/bmp': return '.bmp';

                case 'image/gif': return '.gif';

                case 'image/jpeg': return '.jpg';

                case 'image/png': return '.png';

                default: return false;
            }
        }
 $file_name = $_FILES["file"]["name"];

        $temp_name = $_FILES["file"]["tmp_name"];

        $imgtype = $_FILES["file"]["type"];

    
        $ext = GetImageExtension($imgtype);

        $imagename = date("d-m-Y") . "-" . time() . $ext;


        $target_path = "executive/".$imagename ;

        move_uploaded_file($temp_name,$target_path);
			$emp_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
			if($_POST['reg'] == 'yes')
{ $cont_user = 'yes'; } else { $cont_user = 'no'; }

if($_POST['self'] == 'yes')
{ $cont_cms = 'yes'; } else { $cont_cms = 'no'; }

if($_POST['allot'] == 'yes')
{ $cont_news = 'yes'; } else { $cont_news = 'no'; }


$st_ex = mysqli_query($conn,"select * from tbl_user where user_code = '$emp_code'");
		$st_result = mysqli_num_rows($st_ex);

		if($st_result == '0')
		{

$q="INSERT INTO `tbl_user`(`user_id`, `user_code`, `user_name`, `user_email`, `user_password`, `user_phone_no`, `user_address`, `user_pincode`,`user_speciality`, `user_discount`, `user_grade`, `user_created_on`, `user_last_login_on`, `user_status`,`user_gender`,`user_permsission_sales`,`user_permsission_self_allotment`,`user_permsission_alotment`,`user_image`) VALUES ('','$emp_code','$emp_name','$emp_mail','$password','$emp_cell','$emp_address','$emp_pincode','$emp_dept','$emp_discount','$emp_Grade','$emp_reg_timestamp','','1','$gender','$cont_user','$cont_cms','$cont_news','$imagename')";
$r=mysqli_query($conn,$q);
if($r){
echo '1';
}
else{
echo '3';

}
}
else{
echo '2';
}
?>