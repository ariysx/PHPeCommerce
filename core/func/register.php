<?php
include "../../connect.php";
include "database.php";
include "../core.php";

//echo "register.php";

function register($username, $password, $email) {
    if(userExist($username) || userExist($email)){
        // user already exist
        exit;
    }

    // hash
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // default values
    $role = "user";
    $date = date("Y-m-d");
    $activated = 0;

    try {
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `role`, `reg_date`, `activated`) 
        VALUES ('$username', '$hash', '$email', '$role', '$date', '$activated');";
        // use exec() because no results are returned
        $conn = $GLOBALS['conn'];
        $conn->exec($sql);
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['toast'] = array("las la-check-circle", "Success", "You've been registered and logged in!");
        toPage("index.php");
        exit;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}