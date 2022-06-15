<?php
include "../../config.php";
session_start();
$_SESSION['toast'] = array("la-check-circle", "Success", "You've logged out!");
unset($_SESSION['username']);
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/".$homepage."/". "index.php");
