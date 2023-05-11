<?php





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dealership";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}


// search query 
$sql = "SELECT imagePath from cars";
$result = $conn->query($sql);

$image_path = $row["imagePath"];

header("content type: image/jpg");
readfile($image_path)

?>