<?php

$host   = "127.0.0.1";
$user   = "root";
$pass   = "";
$db     = "db_rs";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
