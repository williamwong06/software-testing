<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Naam = mysqli_real_escape_string($conn, $_REQUEST['Naam']);
$Voornaam = mysqli_real_escape_string($conn, $_REQUEST['Voornaam']);
$GeboorteDatum = mysqli_real_escape_string($conn, $_REQUEST['GeboorteDatum']);
$Rijkregisternummer = mysqli_real_escape_string($conn, $_REQUEST['Rijkregisternummer']);
$Adres = mysqli_real_escape_string($conn, $_REQUEST['Adres']);
$Nummer = mysqli_real_escape_string($conn, $_REQUEST['Nummer']);
$Postcode = mysqli_real_escape_string($conn, $_REQUEST['Postcode']);
$Campus_ID = mysqli_real_escape_string($conn, $_REQUEST['Campus_ID']);
$sql = "INSERT INTO Student (Naam, Voornaam, GeboorteDatum, Rijkregisternummer, Adres, Nummer, Postcode, Campus_ID) VALUES ('$Naam','$Voornaam', '$GeboorteDatum', '$Rijkregisternummer', '$Adres', '$Nummer', '$Postcode', '$Campus_ID')";
if(mysqli_query($conn, $sql)){
    echo "Student is toegevoegd.";
} else{
    echo "fout: kan Student niet toevoegen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>