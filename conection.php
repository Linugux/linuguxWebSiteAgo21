<?php

$hostname = "localhost";
$username = "pi";
$password = "my";
$db = "webServer";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
    }
?>