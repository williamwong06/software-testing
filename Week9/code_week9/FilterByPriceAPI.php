<?php
header('Content-type: application/json');
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