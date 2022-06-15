<?php
include "config.php";
include "connect.php";

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getCode() . "<br>";
    if ($e->getCode() == 1049) {
        echo "Unknown Database<br>";
        $conn = new PDO("mysql:host=$db_host", $db_user, $db_pass);
        $sql = "CREATE DATABASE $db_name";
        $conn->exec($sql);
        echo "Database Created: $db_name<br>";

        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE auth (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(50) NOT NULL,
role VARCHAR(30) NOT NULL,
reg_date DATE NOT NULL,
activated BOOLEAN NOT NULL
)";
        $conn->exec($sql);
        echo "Table Created: auth";
    }
}

$conn = null;