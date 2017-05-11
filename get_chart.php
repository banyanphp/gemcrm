  <?php
include 'dbconnect.php';
$total      = '0';
$id         = $_REQUEST['id'];
$response   = array();
$user       = array();
$fetch_team = mysqli_query($conn, "select * from tbl_team where team_id='$id'");
while ($fetch_array = mysqli_fetch_array($fetch_team)) {
    $response['data'] = array();
    $target           = '0';
    $totalamount      = '0';
    $team_id          = $fetch_array['team_id'];
    $sql              = mysqli_query($conn, "select * from tbl_target_team where team_target_status='1' and team_id='$team_id'");
    while ($row = mysqli_fetch_array($sql)) {
        $target += $row['team_amount'];
        $month        = $row['month_id'];
        $qq           = "SELECT enq_quotation  FROM `tbl_enquiry` where `enq_status`='Completed' and `enq_team_id`='$team_id' and `enq_month_id`='$month'";
        $acheived_amt = mysqli_query($conn, $qq);
        while ($acheived_array = mysqli_fetch_array($acheived_amt)) {
            
            $qno      = $acheived_array['enq_quotation'];
            $qamount  = "SELECT sum(enq_product_price) as total FROM `tbl_quotation` where  `quotation_no`='$qno'";
            $resultss = mysqli_query($conn, $qamount);
            $results  = mysqli_fetch_array($resultss);
            $totalamount += $results['total'];
        }
    }
    $user['team_name'] = trim($fetch_array['team_name']);
    $user['target']    = trim($target);
    $user['acheived']  = trim($totalamount);
    array_push($response['data'], $user);
    
}

$count = count($response);
$json  = json_encode($response);
echo $json;