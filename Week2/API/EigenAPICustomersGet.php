<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_Webshop.db.webhosting.be', 'ID328986_Webshop', 'azerty123', 'ID328986_Webshop');
$data = array();

$sql = "SELECT * FROM Customers";
$result = $conn
->query($sql);
while($row = $result
->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
exit(0);
?>