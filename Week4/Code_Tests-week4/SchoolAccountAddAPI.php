<?php
header('Content-type: application/json');
$conn = new mysqli('ID328986_SchoolDB.db.webhosting.be', 'ID328986_SchoolDB', 'azerty123', 'ID328986_SchoolDB');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$login = mysqli_real_escape_string($conn, $_REQUEST['login']);
$Passwoord = mysqli_real_escape_string($conn, $_REQUEST['Passwoord']);
$GebruikersNummer = mysqli_real_escape_string($conn, $_REQUEST['GebruikersNummer']);
$StatusUpdate = mysqli_real_escape_string($conn, $_REQUEST['Status']);
$sql = "INSERT INTO SchoolAccount (login, Passwoord, GebruikersNummer, Status) VALUES ('$login','$Passwoord', '$GebruikersNummer', '$StatusUpdate')";
if(mysqli_query($conn, $sql)){
    echo "Schoolaccount is toegevoegd.";
} else{
    echo "fout: kan Schoolaccount niet toevoegen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>