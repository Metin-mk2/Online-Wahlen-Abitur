<?php
include 'database.php';
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
    $url = "wahlen.html";

    $überprüfung = "SELECT einschreibeschluessel FROM register WHERE einschreibeschluessel= '$einschreibeschluessel';";
    $result = mysqli_query($verbindung, $überprüfung);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        $_SESSION['einschreibeschluessel'] = $einschreibeschluessel;
        header("Location: index.html");   
    }
    else{
        $anmeldung="insert into register(vorname,nachname,email,stadt,plz,einschreibeschluessel) 
        values('$vorname','$nachname','$email','$stadt','$plz','$einschreibeschluessel')";
        if(mysqli_query($verbindung,$anmeldung))
        {
            header('Location: ' . $url);
            exit();
        }
    }
}
?>


<!--

$sql="insert into student <-- sSEHR WICHTIG. GIBT AN WO MAN DAS SPEICHERN SOLL
header("Location: http://localhost:7882/online_wahlen/wahlen.html");
    
        $js_var = $_POST['zweitstimme'];
       

        $wahl="insert into wahl(einschreibeschluessel,zweitwahl) values('$einschreibeschluessel','$js_var')";
