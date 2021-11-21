<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$CustomerLogin = mysqli_real_escape_string($conn, $_REQUEST['CustomerLogin']);
$Price = mysqli_real_escape_string($conn, $_REQUEST['Price']);
$sql = "INSERT INTO ShoppingCarts (ID, CustomerLogin, Price) VALUES ('$ID','$CustomerLogin', '$Price')";
if(mysqli_query($conn, $sql)){
    echo "shopping cart $ID added.";
} else{
    echo "error: Can not add shopping cart. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
