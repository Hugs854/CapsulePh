<?php
    function connection(){
        $servername = "sql6.freemysqlhosting.net";
        $username = "sql6451241";
        $password = "bVRimSp8yD";
        $dbname = "sql6451241";

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