<?php
include 'database.php';
include 'login.php';

if(isset($_POST['wahl']))

{   
    $erststimme=$_POST['versteckte_eingabe1'];
    $zweitstimme=$_POST['versteckte_eingabe2'];
    $einschreibeschluessel = $_SESSION['einschreibeschluessel'];

    if($einschreibeschluessel!=""){
    $wahl ="insert into auszaehlung(einschreibeschluessel,erststimme,zweitstimme) values('$einschreibeschluessel','$erststimme','$zweitstimme')";

    if(mysqli_query($verbindung,$wahl))
    {
        header("Location: http://localhost:7882/online_wahlen/index.html");

    }
    else{
        echo "error:";
    }

}
}
session_destroy();
unset($_SESSION['einschreibeschluessel']);
?>