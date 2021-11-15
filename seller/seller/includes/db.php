<?php

$servername = "sql6.freemysqlhosting.net";
$username = "sql6451081";
$password = "KCmsVvLwb2";
$db = "sql6451081";


// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
