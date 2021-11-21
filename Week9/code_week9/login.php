<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');

$stmt = $conn->prepare("select * FROM Customers WHERE Login like ? and Password like ?"); 


if(!$stmt->bind_param("ss", $postvars['Login'], $postvars['Password'])){
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

$response['data'] = getJsonObjFromResult($result); 
$result->free();
$conn->close();
deliver_JSONresponse($response);
?>