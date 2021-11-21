<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');
$data = array();


if (isset($_GET['accessoires'])) {
    $sql = "SELECT * FROM Products WHERE Category_Name = accessoires" ;
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
}

else if (isset($_GET['keuken'])) {
        $sql = "SELECT * FROM Products WHERE Category_Name = keuken" ;
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
    }
}

else if (isset($_GET['GSSM'])) {
    $sql = "SELECT * FROM Products WHERE Category_Name = GSM" ;
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
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







$sql = "SELECT * FROM Products where";
$result = $conn
->query($sql);
while($row = $result
->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
exit(0);
?>