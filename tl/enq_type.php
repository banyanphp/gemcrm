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
 $response["product_t"] = array();

            while ($row1 = mysqli_fetch_assoc($result1)) {
                $user = array();
                $user["product_model"] = $row1["product_model"];
                $user["product_type"] = "Air Cooled R134a";
                $user["product_price"] = $row1["2kd_ac_r134a"];
                array_push($response["product_group"], $user);
                $user["product_type"] = "Air Cooled R404c";
                $user["product_price"] = $row1["2kd_ac_r404a"];
                array_push($response["product_group"], $user);

                $user["product_type"] = "Air Cooled R407c";

                $user["product_price"] = $row1["2kd_ac_r407c"];
                array_push($response["product_group"], $user);
            }

            $response["success"] = 1;

            $response["success"] = 1;

            // echoing JSON response
            echo json_encode($response);
        }
    }
}
?>