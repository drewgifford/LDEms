<?php

    

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $root = dirname(__FILE__); 

    $servername = "127.0.0.1";
    $username = "letsysml_app";
    $password ="W.6xx@D95kd6Pws";
    $database = "letsysml_lde";


    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error){
        die("Connection failed");
    }

    $str_allowed = 'abcdefghijklmnopqrstuvwxyz';

    $done = false;

    while ($done == false) {
        $id = substr(str_shuffle($str_allowed), 0, 7);

        if (!file_exists($root . '/maps/' . $id . '.txt')) {
            break;
        }
    }

    $file = fopen($root . '/maps/' . $id . '.txt', "w");


    fwrite($file, json_encode($_GET));
    fclose($file);

    $output = [];
    $output[0] = 'letsdoelections.com/app?m=' . $id;
    $output[1] = $id . '.txt';

    echo $output;
    


    
    




?>