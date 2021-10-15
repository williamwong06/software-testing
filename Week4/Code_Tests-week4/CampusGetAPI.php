<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
$data = array();

$sql = "SELECT * FROM Campus";
$result = $conn
->query($sql);
while($row = $result
->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
exit(0);
?>