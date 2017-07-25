<?php

$serverName = "localhost";
$userName = "root";
$password = "mysql";
$dbName = "Events";

$conn = new mysqli($serverName,$userName, $password, $dbName) or die("not connected");
?>