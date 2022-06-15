<?php
include "../func/register.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(empty($username) || empty($password) || empty($email)){
    exit;
}

register($username, $password, $email);