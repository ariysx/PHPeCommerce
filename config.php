<?php
// SQL Connection
$db_addr = "localhost";
$db_port = "3306";
$db_user = "root";
$db_pass = "";
$db_name = "ecommerce";

$db_host = $db_addr . ":" . $db_port;

$site_name = "Threaded";
$homepage = explode("\\", __DIR__)[count(explode("\\", __DIR__))-1];
$categories = array("Tops", "Pants", "Accessories", "Miscellaneous");
$category_icon = array("icons8-clothes-30.png", "icons8-trousers-30.png","icons8-necklace-30.png","icons8-dice-30.png");
//echo $homepage;