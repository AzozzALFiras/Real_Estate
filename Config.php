<?php

// Developer By : Azozz ALFiras
// Created : 2023/2/5


error_reporting(0);

$servername = "localhost";
$username = "eeal_estate";
$password = "EJz8nnxfEEnWS8Dj";
$dbname = "eeal_estate";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}


$TimeNow = date('Y/m/d');

$ext = array('image/jpg', 'image/jpeg', 'jpg', 'jpeg', 'png','image/png');



function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

    // return: http://localhost/myproject/
    return $protocol.'://'.$hostName.$pathInfo['dirname']."/";
}

// echo password_hash("3zozz6201",PASSWORD_DEFAULT);