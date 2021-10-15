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
$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$sql = "UPDATE Vak SET Naam=('$Naam'), Begin_Datum=('$Begin_Datum'), Eind_Datum=('$Eind_Datum'), Vak_DocentID=('$Vak_DocentID'), Studenten_Nummer=('$Studenten_Nummer'), Campus=('$Campus') WHERE ID = ('$ID')";
if(mysqli_query($conn, $sql)){
    echo "Vak met ID ('$ID') is gewijzigd.";
} else{
    echo "fout: kan vak niet wijzigen. " . mysqli_error($conn);
}
mysqli_close($conn);
?>