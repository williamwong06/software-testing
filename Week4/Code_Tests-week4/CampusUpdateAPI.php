<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$Naam = mysqli_real_escape_string($conn, $_REQUEST['Naam']);
$sql = "UPDATE Campus SET Naam=('$Naam') WHERE ID = ('$ID')";
if(mysqli_query($conn, $sql)){
    echo "uw data met ID ('$ID') is gewijzigd.";
} else{
    echo "fout: kan data niet wijzigen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>