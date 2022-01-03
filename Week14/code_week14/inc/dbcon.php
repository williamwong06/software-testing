<?php
if (!defined('INDEX')) {
   header("HTTP/1.1 404 Not Found");
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL /wm/api/inc/dbcon.php was not found on this server.</p>
</body></html>');
}
$servername = "ID328986_webShop.db.webhosting.be";
$username = "ID328986_webShop"; // username 
$password = "azerty123"; // paswoord DATABANK
$dbname = "ID328986_webShop"; // naam databank

$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8mb4'); 
?>