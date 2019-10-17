<?php
$dbhost = 'localhost';
$dbname='mysql';
$dbuser = 'root';
$dbpass = '';
try {
    $conn = new PDO("mysql:host=$dbhost;$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
date_default_timezone_set( "Europe/Warsaw" ); 
?>