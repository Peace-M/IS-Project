<?php

$serverName = "127.0.0.1:3307";
$dbUsername= "root";
$dbPassword = "";
$dbName = "salonmanagement";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);


if (!$conn) {
    die ("connection failed: " . mysqli_connect_error());
}