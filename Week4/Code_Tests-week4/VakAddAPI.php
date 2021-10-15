<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Naam = mysqli_real_escape_string($conn, $_REQUEST['Naam']);
$Begin_Datum = mysqli_real_escape_string($conn, $_REQUEST['Begin_Datum']);
$Eind_Datum = mysqli_real_escape_string($conn, $_REQUEST['Eind_Datum']);
$Vak_DocentID = mysqli_real_escape_string($conn, $_REQUEST['Vak_DocentID']);
$Studenten_Nummer = mysqli_real_escape_string($conn, $_REQUEST['Studenten_Nummer']);
$Campus = mysqli_real_escape_string($conn, $_REQUEST['Campus']);
$sql = "INSERT INTO Vak (Naam, Begin_Datum, Eind_Datum, Vak_DocentID, Studenten_Nummer, Campus) VALUES ('$Naam','$Begin_Datum', '$Eind_Datum', '$Vak_DocentID', '$Studenten_Nummer', '$Campus')";
if(mysqli_query($conn, $sql)){
    echo "Vak is toegevoegd.";
} else{
    echo "fout: kan vak niet toevoegen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>