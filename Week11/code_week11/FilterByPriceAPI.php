<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-type: application/json');
//$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');
define ('INDEX', true);
require 'inc/dbcon.php';
require 'inc/base.php';

//$stmt = $conn->prepare("select * FROM Products WHERE Price < $_POST['category']"); 
$Price = $_POST['Price'];
if(is_numeric($Price)) {
    if($Price < 0) {
        echo "error: Price has to be greater than 0.";
    }
    else {
        $sql = "SELECT * FROM Products WHERE Price <='" . $Price . "'";
        $data = array();
        $result = $conn ->query($sql);
        while($row = $result
        ->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
}
else {
    echo "error: Price has to be numeric.";
}

exit(0);
/*if(!$stmt->bind_param("d", $postvars['Price'])){
    $response['code'] = 7;
    $response['status'] = 200; 
    $response['data'] = $conn->error;
    deliver_response($response);
}

if (!$stmt->execute()) {
    $response['code'] = 7;
    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
    $response['data'] = $conn->error;
    deliver_response($response);
}
$result = $stmt->get_result();
if (!$result) {
    $response['code'] = 7;
    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
    $response['data'] = $conn->error;
    deliver_response($response);
}




$result = $conn -> query($sql);

if (!$result) {
    $response['code'] = 7;
    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
    $response['data'] = $conn->error;
    deliver_response($response);
}

$response['data'] = getJsonObjFromResult($result); 
$result->free();
$conn->close();
deliver_JSONresponse($response);
*/
/*header('Content-type: application/json');
$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');
$data = array();

$stmt = $conn->prepare("select * FROM Products WHERE Price < ?"); 

if(!$stmt->bind_param("i", $postvars['Price'])){
    $response['code'] = 7;
    $response['status'] = 200; 
    $response['data'] = $conn->error;
    deliver_response($response);
}

$response['data'] = getJsonObjFromResult($result); 

$conn->close();

deliver_JSONresponse($response);
*/
/*
$sql = "SELECT * FROM Products";
$result = $conn
->query($sql);
while($row = $result
->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
exit(0);*/
?>