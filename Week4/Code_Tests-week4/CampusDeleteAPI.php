<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$sql = "DELETE FROM Campus WHERE ID = ('$ID')";
if(mysqli_query($conn, $sql)){
    echo "Record is verwijderd.";
} else{
    echo "fout: kan record niet verwijderen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>