<?php
include "../func/login.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) || empty($password)){
    exit;
}

login($username, $password);