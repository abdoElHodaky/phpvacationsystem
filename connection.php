<?php

$dbhost = "sql.db4free.net";
$dbuser = "abdo_phpvacation";
$dbpass = "arh27934";
$dbname = "phpvactions";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>
