<?php
include "../config.php";

function toPage($page){
    global $homepage;
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/".$homepage."/". $page);
//    echo "Location: http://" . $_SERVER['HTTP_HOST'] . "/".$homepage."/". $page;
}
