<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../db/database.php';

if(isset($_POST['wahl']))
{   
    $erststimme = $_POST['versteckte_eingabe1'] ?? '';
    $zweitstimme = $_POST['versteckte_eingabe2'] ?? '';
    $einschreibeschluessel = $_SESSION['einschreibeschluessel'] ?? '';

    if($einschreibeschluessel != ""){
        $sql = "INSERT INTO auszaehlung(einschreibeschluessel, erststimme, zweitstimme) VALUES ('$einschreibeschluessel', '$erststimme', '$zweitstimme')";
        mysqli_query($verbindung, $sql);
    }
}

// Session aufräumen
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

header("Location: ../frontend/pie_chart.php");
exit();
