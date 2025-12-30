<?php
$servername = getenv('DB_HOST') ?: "localhost";
$username="root";
$password="";
$database="online_wahlen";
$verbindung=mysqli_connect($servername,$username,$password,$database);
