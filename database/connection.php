<?php
    $dbHost = "localhost";
    $runsLocally = true;
    
    if($runsLocally == true){
        $dbName     = "autee";
        $dbUsername = "root";
        $dbPassword = "";
    }else{
        $dbName = "avisen_autee";
        $dbUsername = "avisen_auteeuser";
        $dbPassword = "AlF0optC";
    }
    
    $con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    $con->query("SET NAMES 'utf8'");
	$con->query("set time_zone = '+03:30'"); 

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?> 