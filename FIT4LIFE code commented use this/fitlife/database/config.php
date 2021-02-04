<?php session_start();
ob_start();
defined("DB_HOST") ? null : define("DB_HOST", "phpmyadmin.ecs.westminster.ac.uk");
defined("DB_USER") ? null : define("DB_USER","w1552093" );
defined("DB_PASS") ? null : define("DB_PASS", "T4diImbih0Cv" );
defined("DB_NAME") ? null : define("DB_NAME","w1552093_0" );
$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);
require_once("functions.php");
?>