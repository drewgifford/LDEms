<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    

    $servername = "127.0.0.1";
    $username = "letsysml_app";
    $password ="W.6xx@D95kd6Pws";
    $database = "letsysml_lde";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error){
        die("Connection failed");
    }
    echo "lol"
    
    




?>