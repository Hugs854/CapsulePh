<?php
    function connection(){
        $servername = "sql6.freemysqlhosting.net";
        $username = "sql6451081";
        $password = "KCmsVvLwb2";
        $dbname = "sql6451081";

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