<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');
$data = array();


if (isset($_GET['category'])) {
    $sql = "SELECT * FROM Products WHERE Category_Name ='" . $_GET['category'] . "'";
    $result = $conn ->query($sql);
    while($row = $result
    ->fetch_assoc()) {
        $data[] = $row;
    }
}

else {
    $sql = "SELECT * FROM Products";
    $result = $conn
    ->query($sql);
    while($row = $result
    ->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
exit(0);

?>
