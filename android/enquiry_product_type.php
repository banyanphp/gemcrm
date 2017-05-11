<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if (isset($_REQUEST["series"])) {

    $series = $_REQUEST['series'];
    
$sql="SELECT * FROM `tbl_type_price` WHERE `type_price_model`='$series '";
 $result1 = mysqli_query($db->connect(), $sql);

        if (mysqli_num_rows($result1) > 0) {
            $response["product_group"] = array();

            while ($row1 = mysqli_fetch_assoc($result1)) {
 $user = array();
$user["product_type_main"]=array();$user["product_price_main"]=array();
$user["product_model_no"] = $row1["type_price_model_no"];
$type=$row1["type"];
$price=$row1["price"];

$typearray=explode(",",$type);
$count=count($typearray);
$pricearray=explode(",",$price);
for($i=0;$i<$count;$i++){
$types["product_type"] = $typearray[$i];
$prices["product_price"] = $pricearray[$i];
  $user['product_types']=array_push($user["product_type_main"] ,$types);
$user['product_price']=array_push($user["product_price_main"] , $prices);
 //$price["product_price"] = $pricearray[$i];
  

}


  array_push($response["product_group"] , $user);
}
}
 $response["success"] = 1;

            $response["success"] = 1;
            // echoing JSON response
            echo json_encode($response);

}
?>