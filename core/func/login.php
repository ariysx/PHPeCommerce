<?php
include "../../connect.php";
include "database.php";
include "../core.php";

function login($username, $password){

    session_start();

    if(empty($_SESSION['username'])){
        if(userExist($username)){
            if(userAuth($username, $password)){
                $_SESSION['username'] = getUsername($username);
                $_SESSION['toast'] = array("la-check-circle", "Success", "You've been logged in!");
                toPage("index.php");
            }
        } else {
            $_SESSION['toast'] = array("la-exclamation-circle", "Error", "Could not authenticate!");
            toPage("login.php");
        }
    }
    else {
        $_SESSION['toast'] = array("la-exclamation-circle", "Error", "User does not exist!");
        toPage("index.php");
    }
}
