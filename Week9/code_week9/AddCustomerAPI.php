<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$login = mysqli_real_escape_string($conn, $_REQUEST['Login']);
$firstName = mysqli_real_escape_string($conn, $_REQUEST['FirstName']);
$lastName = mysqli_real_escape_string($conn, $_REQUEST['LastName']);
$email = mysqli_real_escape_string($conn, $_REQUEST['Email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
$address = mysqli_real_escape_string($conn, $_REQUEST['Address']);
$telephone = mysqli_real_escape_string($conn, $_REQUEST['Telephone']);
$sql = "INSERT INTO Customers (Login, FirstName, LastName, Email, Password, Address, Telephone) VALUES ('$Login','$firstName', '$lastName', '$email', '$password', '$address', '$telephone')";
if(mysqli_query($conn, $sql)){
    echo "Customer {$firstName} added.";
} else{
    echo "error: Can not add customer. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
