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
$sql = "UPDATE SchoolAccount SET Passwoord = ('$Passwoord') , Status=('$StatusUpdate') WHERE login=('$login')";
if(mysqli_query($conn, $sql)){
    echo "Schoolaccount met ID: $login is gewijzigd.";
} else{
    echo "fout: kan Schoolaccount niet wijzigen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>