<?php

// connection to the database script



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "20120284";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}



?>