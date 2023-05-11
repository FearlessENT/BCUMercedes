<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BCU Mercedes</title>

    <?php include "connect.php"; ?>
    <link rel = "stylesheet" href = "css/style.css">
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

    <h1>Edit Listings</h1>

</div>

<!--
 form to select the database record
-->




<div class = "contact2" id = "contact2">


    <form class = contact name = "contact" method = "post" action = "updateRecord.php">


        <label for = "recordID">Select record ID to edit: </label>
        <input name = "recordID" type = "text">
        <br>


        <input type = "submit" value = "Select" name = "selectRecord">

    </form>

</div>



<?php
// include database connection
include 'config/database.php';
 
// delete message prompt will be here
 
// select all data
$query = "SELECT carID, model, colour, price FROM products ORDER BY id DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 
// link to create record form
echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";
 
//check if more than 0 record found
if($num>0){
 
    // data from database will be here
 
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}
?>



















</body>
</html>