<?php session_start();

ob_start(); //This function will turn output buffering on

//use for start session

// session_destroy();//use for destroy session



defined("DB_HOST") ? null : define("DB_HOST", "localhost");



defined("DB_USER") ? null : define("DB_USER","bartwkhs_root");



defined("DB_PASS") ? null : define("DB_PASS", "C.qdrU,v{Uvj");



defined("DB_NAME") ? null : define("DB_NAME","bartwkhs_barterunit");



// defined("DB_USER") ? null : define("DB_USER","root" );



// defined("DB_PASS") ? null : define("DB_PASS", "" );



// defined("DB_NAME") ? null : define("DB_NAME","barter_unit" );



$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);



require_once("functions.php");



?>