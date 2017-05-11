<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if (isset($_REQUEST["series"])) {

    $series = $_REQUEST['series'];
    $type = "";
    if ($series == "2KD") {

        $sql = "select `product_model`,`2kd_ac_r134a`,`2kd_ac_r404a`,`2kd_ac_r407c` from tbl_product_2kd where `2kd_status`='1'";
        $result1 = mysqli_query($db->connect(), $sql);

        if (mysqli_num_rows($result1) > 0) {
            $response["product_group"] = array();

            while ($row1 = mysqli_fetch_assoc($result1)) {
                $user = array();
 $user["product_type_main"]=array();
 $user["product_price_main"]=array();

                $user["product_model"] = $row1["product_model"];

                $type["product_type"] = "Air Cooled R134a";
$price["product_price"]= $row1["2kd_ac_r134a"];

                 $user['product_types']=array_push($user["product_type_main"] , $type);
 $user['product_prices']=array_push($user["product_price_main"] , $price);
 $type["product_type"] = "Air Cooled R404c";
$price["product_price"]= $row1["2kd_ac_r404a"];

                 $user['product_types']=array_push($user["product_type_main"] , $type);
 $user['product_prices']=array_push($user["product_price_main"] , $price);

$type["product_type"] = "Air Cooled R407c";
$price["product_price"]= $row1["2kd_ac_r407c"];

                 $user['product_types']=array_push($user["product_type_main"] , $type);
 $user['product_prices']=array_push($user["product_price_main"] , $price);

                array_push($response["product_group"] , $user);
            
          
            }

            $response["success"] = 1;

            $response["success"] = 1;
            // echoing JSON response
            echo json_encode($response);
        }
    }
}
?>