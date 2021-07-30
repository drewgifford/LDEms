<?php

    

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $root = dirname(__FILE__); 


    $data = $_POST;

    $str_allowed = 'abcdefghijklmnopqrstuvwxyz';

    $done = false;
    $counter = 0;

    while ($done == false) {
        $id = substr(str_shuffle($str_allowed), 0, 7);

        if (!file_exists($root . '/maps/' . $id . '.txt')) {
            break;
        }
        $counter = $counter + 1;

        if ($counter > 10) {
            die("Error - Caught in loop");
            break;
        }
    }

    $file = fopen($root . '/maps/' . $id . '.txt', "w");


    fwrite($file, json_encode(json_decode($_POST['data']), true));
    fclose($file);

    $img_data = $_POST['img'];
    //$img_data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_data));

    $img_data = str_replace('data:image/png;base64,', '', $img_data);
    $img_data = str_replace(' ', '+', $img_data);
    $img_data_export = base64_decode($img_data);
    
    $img_file = fopen($root . '/maps/' . $id . '.png', "w");
    fwrite($img_file, $img_data_export);
    fclose($img_file);

    echo 'letsdoelections.com/app?m=' . $id . " " . $id . '.txt';
    


    
    




?>