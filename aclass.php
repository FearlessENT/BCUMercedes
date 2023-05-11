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

    <h1>A Class Models </h1>

    <h2>View our A Class cars below</h2>
</div>





<div id = "homeslide" class = "homeslide">
    <img src = "images/aclass.jpg">
</div>




<?php 




// search query 
$sql = "SELECT * from cars WHERE class = 'A' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
}
?>







<?php
    while($row = $result->fetch_assoc()) {
?>


<div class = "listcars">
    <img width = "500" src = <?= $row["imagePath"];?>>
    
    <span>
        <h2><?= $row["model"];?>
        <table>  
            <tr>
                <th>Colour: </th>
                <th><?= $row["colour"];?></th>
            </tr>

            <tr>
                <th>Year: </th>
                <th><?= $row["dateyear"];?></th>
            </tr>
            <tr>
                <th>Engine Type: </th>
                <th><?= $row["engine"];?></th>
            </tr>
            <tr>
                <th>Litres: </th>
                <th><?= $row["litre"];?></th>
            </tr>
            <tr>
                <th>Horsepower: </th>
                <th><?= $row["horsepower"];?></th>
            </tr>
            <tr>
                <th>Doors: </th>
                <th><?= $row["doors"];?></th>
            </tr>
            <tr>
                <th>Class: </th>
                <th><?= $row["class"];?></th>
            </tr>

            <tr>
                <th>Price: </th>
                <th>£<?= $row["price"];?></th>
            </tr>
        </table>
        
        
    </span>
</div>


<?php
    }
?>















</body>
</html>
