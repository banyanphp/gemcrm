
<?php 
ECHO"<PRE>";print_r($_POST);exit();

  $enq_email=$_POST['enq_email'];
  $enq_phone= $_POST['enq_phone'];
  $enq_pin=  $_POST['enq_pin'];  
  $enq_contactper_phone=$_POST['enq_contactper_phone'];
$enq_specification=$_POST['enq_specification'];
 $enq_model=   $_POST['enq_model'] ;
 $model_no=  $_POST['model_no'];  
  $get_type =$_POST['get_type'];
 $qprice = $_POST['qprice'];
$status=   $_POST['status']; 
 $discount=   $_POST['Discount'];

$id=$_POST['id']  ;



UPDATE `tbl_enquiry` SET `enq_company_email`='$enq_email',`enq_company_phn_no`='enq_phone',`enq_company_pincode`='$enq_pin',
`enq_contact_person_phone_no`='$enq_contactper_phone',`enq_product_model`='$enq_model',`enq_product_model_no`='model_no',`enq_product_type`='$get_type',`enq_product_qty`='',`enq_product_price`=[value-19],`enq_alloted_to`=[value-20],`enq_team_id`=[value-21],`enq_discount`=[value-22],`enq_description`=[value-23],`enquiry_through`=[value-24],`enquiry_through_description`=[value-25],`enq_status`=[value-26],`enq_remarks`=[value-27],`enq_created_on`=[value-28],`enq_completed_on`=[value-29] WHERE 1
	?>