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

    <h1>Thank you</h1>
    <h2>We will get back to you as soon as we can</h2>
    
</div>



<?php


include "connect.php";

if((isset($_POST['submit']))) {


    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $message = $conn -> real_escape_string($_POST['subject']);


    $sql = "INSERT INTO contactus (name, email, message) VALUES ('".$name."','".$email."', '".$message."')";


    if(!$result = $conn->query($sql)){
        die('Error occured [' . $conn->error . ']');
    }
    
}


?>