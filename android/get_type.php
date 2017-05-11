<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if (isset($_REQUEST["model_no"])) {

    $series = $_REQUEST['model_no'];
 $q2="select * from `tbl_type_price` where type_price_model_no='$series'";
 $q3= mysqli_query($db->connect(), $q2);
$row3 = mysqli_fetch_array($q3);
	  $response["product_group"] = array();

 $user = array();
$user["product_type_main"]=array();
$user["product_price_main"]=array();
$user["product_model_no"] = $row1["type_price_model_no"];

 $type=$row3['type'];
$typearray=explode(",",$type);
$count=count($typearray);
 $price=$row3['price'];
$pricearray=explode(",",$price);
for($i=0;$i<$count;$i++){

$types["product_type"] = $typearray[$i];
$prices["product_price"] = $pricearray[$i];

  $user['product_types']=array_push($user["product_type_main"] ,$types);
$user['product_price']=array_push($user["product_price_main"] , $prices);
 

}
  array_push($response["product_group"] , $user);
$response["success"] = 1;

            $response["success"] = 1;
            // echoing JSON response
            echo json_encode($response);
}

 
?>
