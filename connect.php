<?php

include "config.php";

$full_conn = null;

try {
    $full_conn = new PDO("mysql:host=$db_host", $db_user, $db_pass);
    // set the PDO error mode to exception
    $full_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Full DB Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "DB Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$GLOBALS['conn'] = $conn;
$GLOBALS['full_conn'] = $full_conn;


