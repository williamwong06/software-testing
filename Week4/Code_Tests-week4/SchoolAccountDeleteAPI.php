<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$login = mysqli_real_escape_string($conn, $_REQUEST['login']);
$sql = "DELETE FROM SchoolAccount WHERE login = ('$login')";
if(mysqli_query($conn, $sql)){
    echo "account is verwijderd.";
} else{
    echo "fout: kan account niet verwijderen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>