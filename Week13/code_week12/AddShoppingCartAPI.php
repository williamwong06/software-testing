<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-type: application/json');

$servername = "ID328986_webShop.db.webhosting.be";
$username = "ID328986_webShop"; // username (zie Hosting)
$password = "azerty123"; // paswoord DATABANK (zie hosting)
$dbname = "ID328986_webShop"; // naam databank (zie hosting ; zelf gekozen)

$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_connect_error());
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$CustomerLogin = mysqli_real_escape_string($conn, $_REQUEST['CustomerLogin']);
$Price = mysqli_real_escape_string($conn, $_REQUEST['Price']);
if(preg_match("/[a-z]/i", $Price)) {
    echo "Price may only contain  numbers";
}
else {
    if($Price >= 0) {
        $sql = "INSERT INTO ShoppingCarts (ID, CustomerLogin, Price) VALUES ('$ID','$CustomerLogin', '$Price')";
        if(mysqli_query($conn, $sql)){
            echo "shopping cart $ID added.";
        } else{
            echo "error: Can not add shopping cart. " . mysqli_error($conn);
        }
    }
    else {
        echo "error: price must be greater than zero.";
    }
}
mysqli_close($conn);

//$sql = "select * FROM ShoppingCarts where ID = $ID";

/*$result = $conn ->query($sql);
while($row = $result
->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
mysqli_close($conn);
*/
// test
/*if(mysqli_query($conn, $sql)){
    echo "shoppingcart $ID is gevonden.";
} else{
    echo "fout: kan data niet invoeren. " . mysqli_error($conn);
}*/


/*$servername = "ID328986_webShop.db.webhosting.be";
$username = "ID328986_webShop"; // username (zie Hosting)
$password = "azerty123"; // paswoord DATABANK (zie hosting)
$dbname = "ID328986_webShop"; // naam databank (zie hosting ; zelf gekozen)

$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_connect_error());
$sql="select * FROM Products";*/

// geen prepared statement nodig, aangezien we geen parameters
// van de gebruiker verwerken.

/*$result = $conn -> query($sql);

if (!$result) {
    $response['code'] = 7;
    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
    $response['data'] = $conn->error;
    deliver_response($response);
}*/

// Vorm de resultset om naar een structuur die we makkelijk kunnen 
// doorgeven en stop deze in $response['data']


//$response['data'] = getJsonObjFromResult($result); // -> fetch_all(MYSQLI_ASSOC)


// maak geheugen vrij op de server door de resultset te verwijderen
//$result->free();
// sluit de connectie met de databank
//$conn->close();
// Return Response to browser
//deliver_JSONresponse($response);


/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');*/

//$conn = new mysqli('ID328986_webShop.db.webhosting.be', 'ID328986_webShop', 'azerty123', 'ID328986_webShop');

/*define ('INDEX', true);
require 'inc/dbcon.php';
require 'inc/base.php';

$stmt = $conn->prepare("insert into ShoppingCarts (ID, CustomerLogin, Price) VALUES (?,?,?)"));*/


//$stmt = $conn->prepare("select ID, NAME FROM gebruikers where NAME like ? and PW like ?");


/*if(!$stmt = $conn->prepare("INSERT INTO ShoppingCarts (ID, CustomerLogin, Price) VALUES (?,?,?)")) {
    die('{"error":"prepared statment failed on prepare", "errNo":"' . json_encode(($conn -> errno). '","mysqlError":"'. json_encode($conn -> error) . '","status":"fail"}');
}*/











/*header('Content-type: application/json');
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
*/
?>
