
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BCU Mercedes</title>

    <link rel = "stylesheet" href = "css/style.css">
    <?php include "connect.php"; ?>
    
</head>


<body class = "homebody">

<div id = "navbar" class = "navbar">
    <ul>
        <li><a href = "index.php">Home</a></li>
        <li><a href = "aclass.php">A Class</a></li>
        <li><a href = "cclass.php">C Class</a></li>
        <li><a href = "amg.php">AMG</a></li>
        <li><a href = "blackseries.php">Black Series</a></li>
        <li style = "float:right"><a href = "read.php">Editor</a></li>
        <li style = "float:right"><a href = "contact.php">Contact Us</a></li>
    </ul>
</div>



<div id = "title" class = "title">




    <h1>Deleted listing.</h1>

    <div class = "read_listings">
        <a href = "read.php"> Back </a>
    </div>
    
</div>













<?php

// include database connection
include "connect.php";
 
try {
 
    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    $sql = "SELECT * from cars WHERE carID = '$id' ";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $image_path = $data["imagePath"];
    unlink($image_path);



 
    // delete query
    $query = "DELETE FROM cars WHERE carID = '$id'";
    if(!$result = $conn->query($query)){
        die('Error occured [' . $conn->error . ']');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>