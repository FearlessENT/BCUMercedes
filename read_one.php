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




<?php 
$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
$id = $_GET["id"];

// search query 
$sql = "SELECT * from cars WHERE carID = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

// echo $result;
?>




<div id = "title" class = "title">

    <div class = "read_listings">
        <a href = "read.php"> Back </a>
    </div>
    <h1>View Listing </h1>
    <h2>ID: <?= $data["carID"];?></h2>
    <h2>Model: <?= $data["model"];?></h2>

</div>





<div class = "listcars">
    <img width = "500" src = <?= $data["imagePath"];?>>
    
    <span>
        <h2><?= $data["model"];?>
        <table>  
            <tr>
                <th>Colour: </th>
                <th><?= $data["colour"];?></th>
            </tr>

            <tr>
                <th>Year: </th>
                <th><?= $data["dateyear"];?></th>
            </tr>
            <tr>
                <th>Engine Type: </th>
                <th><?= $data["engine"];?></th>
            </tr>
            <tr>
                <th>Litres: </th>
                <th><?= $data["litre"];?></th>
            </tr>
            <tr>
                <th>Horsepower: </th>
                <th><?= $data["horsepower"];?></th>
            </tr>
            <tr>
                <th>Doors: </th>
                <th><?= $data["doors"];?></th>
            </tr>
            <tr>
                <th>Class: </th>
                <th><?= $data["class"];?></th>
            </tr>

            <tr>
                <th>Price: </th>
                <th>£<?= $data["price"];?></th>
            </tr>
            <tr>
                <th>Image Path: </th>
                <th><?= $data["imagePath"];?></th>
            </tr>
            
        </table>
        
        
    </span>
</div>






















</body>
</html>