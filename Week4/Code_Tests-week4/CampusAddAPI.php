<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Naam = mysqli_real_escape_string($conn, $_REQUEST['Naam']);
$sql = "INSERT INTO Campus (Naam) VALUES ('$Naam')";
if(mysqli_query($conn, $sql)){
    echo "uw data is ingevoerd.";
} else{
    echo "fout: kan data niet invoeren. " . mysqli_error($conn);
}
mysqli_close($conn);
?>