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
$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$sql = "UPDATE Docent SET Naam = ('$Naam') , Voornaam=('$Voornaam'), GeboorteDatum=('$GeboorteDatum'), Adres=('$Adres'), Nummer=('$Nummer') , Postcode=('$Postcode'), AanwervingsDatum=('$AanwervingsDattum'), Salaris = ('$Salaris'), GSM=('$GSM'), Email =('$Email') , Campus_ID=('$Campus_ID') WHERE ID=('$ID')";
if(mysqli_query($conn, $sql)){
    echo "Docent met ID: $ID is gewijzigd.";
} else{
    echo "fout: kan Docent niet wijzigen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>