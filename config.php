<?php
// SQL Connection
$db_addr = "localhost";
$db_port = "3306";
$db_user = "root";
$db_pass = "";
$db_name = "ecommerce";

$db_host = $db_addr . ":" . $db_port;

$site_name = "Groceri";
$homepage = explode("\\", __DIR__)[count(explode("\\", __DIR__))-1];
//echo $homepage;