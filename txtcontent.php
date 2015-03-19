<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Content-Type: application/octet-stream");

if (!empty($_GET['contname'])) {
    $quan = $_GET['getContent'];
    $ua = $_SERVER["HTTP_USER_AGENT"];
    $filename = $_GET['contname'] . ".txt";
    $encoded_filename = urlencode($filename);
    $encoded_filename = str_replace("+", "%20", $encoded_filename);

    if (preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT'])) {
        header('Content-Disposition:  attachment; filename="' . $encoded_filename . '"');
    } elseif (preg_match("/Firefox/", $_SERVER['HTTP_USER_AGENT'])) {
        // header('Content-Disposition: attachment; filename*="utf8' .  $filename . '"');
        header('Content-Disposition: attachment; filename*="' . $filename . '"');
    } else {
        header('Content-Disposition: attachment; filename="' . $filename . '"');
    }

    //echo 'This is what you want to save' . $quan;
    
    echo date('d-m-y h:i:s', time()).PHP_EOL. $quan;
} else {
    echo '<script>alert("Please enter a name!")</script>';
}