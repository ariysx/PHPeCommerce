<?php
include "config.php";
echo $_SERVER['HTTP_HOST'] . "/" . $homepage;
echo "<br>";
echo "Location: https://" . $_SERVER['HTTP_HOST'] . "/".$homepage."/". $page;
echo "<br>";
echo __DIR__;
echo "<br>";
echo explode("\\", __DIR__)[count(explode("\\", __DIR__))-1];
echo "<br>";