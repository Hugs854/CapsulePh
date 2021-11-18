<?php

$servername = "sql6.freemysqlhosting.net";
$username = "sql6451241";
$password = "bVRimSp8yD";
$db = "sql6451241";


// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>


