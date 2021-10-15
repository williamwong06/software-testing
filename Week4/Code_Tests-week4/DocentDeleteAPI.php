<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$sql = "DELETE FROM Docent WHERE ID = ('$ID')";
if(mysqli_query($conn, $sql)){
    echo "Docent is verwijderd.";
} else{
    echo "fout: kan Docent niet verwijderen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>