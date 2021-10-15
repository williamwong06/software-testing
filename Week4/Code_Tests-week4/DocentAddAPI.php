<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Voornaam = mysqli_real_escape_string($conn, $_REQUEST['Voornaam']);
$Naam = mysqli_real_escape_string($conn, $_REQUEST['Naam']);
$GeboorteDatum = mysqli_real_escape_string($conn, $_REQUEST['GeboorteDatum']);
$Adres = mysqli_real_escape_string($conn, $_REQUEST['Adres']);
$Nummer = mysqli_real_escape_string($conn, $_REQUEST['Nummer']);
$Postcode = mysqli_real_escape_string($conn, $_REQUEST['Postcode']);
$AanwervingsDatum = mysqli_real_escape_string($conn, $_REQUEST['AanwervingsDatum']);
$Salaris = mysqli_real_escape_string($conn, $_REQUEST['Salaris']);
$GSM = mysqli_real_escape_string($conn, $_REQUEST['GSM']);
$Email = mysqli_real_escape_string($conn, $_REQUEST['Email']);
$Campus_ID = mysqli_real_escape_string($conn, $_REQUEST['Campus_ID']);
$sql = "INSERT INTO Docent (Naam, Voornaam, GeboorteDatum, Adres, Nummer, Postcode, AanwervingsDatum, Salaris, GSM, Email, Campus_ID) VALUES ('$Naam','$Voornaam', '$GeboorteDatum', '$Adres', '$Nummer', '$Postcode', '$AanwervingsDattum', '$Salaris','$GSM', '$Email', '$Campus_ID')";
if(mysqli_query($conn, $sql)){
    echo "Docent is toegevoegd.";
} else{
    echo "fout: kan Docent niet toevoegen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>