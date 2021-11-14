<?php
    function connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "onlineshop";

        // Create Connection

        $con = new mysqli($servername, $username, $password, $dbname);

        // Check Connection

        if($con->connect_error)
        {
            die("Connection Failed: ".$con->connect_error);
        }
        else{
            return $con;
        }
    }
?>