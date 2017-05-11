

<?php 
$product_id=$_REQUEST['id'];
$type=$_REQUEST['type'];

include ("dbconnect.php");


   $q3 = mysqli_query($conn, "select price,type from `tbl_type_price` where type_price_model_no='$type'");
$row3 = mysqli_fetch_array($q3);	

 $type=$row3['type'];
$typearray=explode(",",$type);
$price=$row3['price'];

$pricearray=explode(",",$price);

$count=count($pricearray);

for($i=0;$i<$count;$i++){
	
	//echo $typearray[$i];
	if($typearray[$i]==$product_id){
echo preg_replace('/\s+/', '', $pricearray[$i]);
	}
}
?>
 