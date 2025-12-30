<?php
include '../db/database.php';
session_start();
if(isset($_POST['submit']))
{
    $vorname=$_POST['vorname'];
    $nachname=$_POST['nachname'];
    $email=$_POST['email'];
    $stadt=$_POST['stadt'];
    $plz=$_POST['plz'];
    $einschreibeschluessel=$_POST['einschreibeschluessel'];
    $_SESSION['einschreibeschluessel'] = $einschreibeschluessel;
    $url = "wahlen.html"; // Note: This might need further adjustment if accessed from frontend
    $überprüfung = "SELECT einschreibeschluessel FROM register WHERE einschreibeschluessel= '$einschreibeschluessel';";
    $result = mysqli_query($verbindung, $überprüfung);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        $_SESSION['einschreibeschluessel'] = $einschreibeschluessel;
        header("Location: ../frontend/index.html");   
    }
    else{
        $anmeldung="insert into register(vorname,nachname,email,stadt,plz,einschreibeschluessel) 
        values('$vorname','$nachname','$email','$stadt','$plz','$einschreibeschluessel')";
        if(mysqli_query($verbindung,$anmeldung))
        {
            header('Location: ../frontend/' . $url);
            exit();
        }
    }
}
