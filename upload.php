<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    

    $servername = "127.0.0.1";
    $username = "letsysml_app";
    $password ="W.6xx@D95kd6Pws";
    $database = "letsysml_lde";

    $root = dirname(__FILE__); 

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error){
        die("Connection failed");
    }

    $str_allowed = 'abcdefghijklmnopqrstuvwxyz';

    $done = false;

    while ($done == false) {
        $id = substr(str_shuffle($str_allowed), 0, 7);

        if (file_exists($root . '/maps/' . $id . '.txt')) {
            $done = true;
        }
    }

    $file = fopen($root . '/maps/' . $id . '.txt', "w");

    fwrite($file, $_GET);
    fclose($file);
    


    
    




?>