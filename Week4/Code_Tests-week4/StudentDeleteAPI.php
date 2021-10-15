<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$StudentenNummer = mysqli_real_escape_string($conn, $_REQUEST['StudentenNummer']);
$sql = "DELETE FROM Student WHERE StudentenNummer = ('$StudentenNummer')";
if(mysqli_query($conn, $sql)){
    echo "Student is verwijderd.";
} else{
    echo "fout: kan Student niet verwijderen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>