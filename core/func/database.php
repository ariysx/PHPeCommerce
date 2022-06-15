<?php
require "../../connect.php";

function userExist($username){
    $conn = $GLOBALS['conn'];
    // $in = can be either username or email
    $stmt = $conn->prepare("SELECT id FROM auth WHERE username = '$username' OR email = '$username'");
    $stmt->execute();
    $result = null;
    foreach(($stmt->fetchAll()) as $v) {
        $result = $v;
    }

    if(!$result == null){
        // return true if exist
        return true;
    }
    // return false if existed
    return false;
}

function userAuth($username, $password){
    $conn = $GLOBALS['conn'];
    $stmt = $conn->prepare("SELECT * FROM auth WHERE username = '$username' OR email = '$username'");
    $stmt->execute();
    $hash = null;
    foreach(($stmt->fetchAll()) as $v) {
        $hash = $v['password'];
    }

    if(password_verify($password, $hash)){
        // return true if password match
        return true;
    }

    // return false if password does not match
    return false;
}

function getUsername($username){
    $conn = $GLOBALS['conn'];
    $stmt = $conn->prepare("SELECT * FROM auth WHERE username = '$username' OR email = '$username'");
    $stmt->execute();
    $user = null;
    foreach(($stmt->fetchAll()) as $v) {
        $user = $v['username'];
    }

    return $user;
}