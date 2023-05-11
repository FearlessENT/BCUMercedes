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

    <div class = "read_listings">
        <a href = "read.php"> Back </a>
    </div>

    <h1>Update Listing </h1>

    
</div>





<?php 
$id = $_GET["id"];

// search query 
$sql = "SELECT * from cars WHERE carID = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();




?>

<div class = "contact2">


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id");?>" method="post">
            


        <label for = "model"> Model: </label>
        <input name = "model" type = "text" value = "<?= $data["model"];?>">
        <br>


        <label for = "colour"> Colour: </label>
        <input name = "colour" type = "text" value = "<?= $data["colour"];?>">
        <br>


        <label for = "litre"> Litre: </label>
        <input name = "litre" type = "text" value = "<?= $data["litre"];?>">
        <br>


        <label for = "dateyear"> Year: </label>
        <input name = "dateyear" type = "text" value = "<?= $data["dateyear"];?>">
        <br>


        <label for = "doors"> Doors: </label>
        <input name = "doors" type = "text" value = "<?= $data["doors"];?>">
        <br>


        <label for = "class"> Class: </label>
        <input name = "class" type = "text" value = "<?= $data["class"];?>">
        <br>


        <label for = "amg"> AMG? yes / no </label>
        <input name = "amg" type = "text" value = "<?= $data["amg"];?>">
        <br>


        <label for = "engine"> Engine: </label>
        <input name = "engine" type = "text" value = "<?= $data["engine"];?>">
        <br>


        <label for = "horsepower"> Horsepower: </label>
        <input name = "horsepower" type = "text" value = "<?= $data["horsepower"];?>">
        <br>


        <label for = "price"> Price: </label>
        <input name = "price" type = "text" value = "<?= $data["price"];?>">
        <br>


        <label for = "blackseries"> Black Series? yes / no </label>
        <input name = "blackseries" type = "text" value = "<?= $data["blackseries"];?>">
        <br>


        <input type='submit' value='Save'/>
        <br>
        <div class = "read_listings">
            <a href='read.php'>Back to read products</a>
        </div>
            
    </form>





</div>

<?php
 
// check if form was submitted
if($_POST){
 
    try{
 
        // write update query
        // in this case, it seemed like we have so many fields to pass and
        // it is better to label them and not use question marks
        // $query = "UPDATE products
        //             SET name=:name, description=:description, price=:price
        //             WHERE id = :id";
 
        // prepare query for excecution
        // $stmt = $con->prepare($query);
 
        // posted values
        $model=htmlspecialchars(strip_tags($_POST['model']));
        $colour=htmlspecialchars(strip_tags($_POST['colour']));
        $price=htmlspecialchars(strip_tags($_POST['price']));
        $litre=htmlspecialchars(strip_tags($_POST['litre']));
        $dateyear=htmlspecialchars(strip_tags($_POST['dateyear']));
        $doors=htmlspecialchars(strip_tags($_POST['doors']));
        $amg=htmlspecialchars(strip_tags($_POST['amg']));
        $engine=htmlspecialchars(strip_tags($_POST['engine']));
        $horsepower=htmlspecialchars(strip_tags($_POST['horsepower']));
        $blackseries=htmlspecialchars(strip_tags($_POST['blackseries']));
        $class=htmlspecialchars(strip_tags($_POST['class']));


        $query = "INSERT INTO cars SET model='$model', colour='$colour', litre='$litre', dateyear='$dateyear', doors='$doors', class='$class', amg='$amg', engine='$engine', horsepower='$horsepower', price='$price', blackseries='$blackseries'";
        $query = "UPDATE cars SET model='$model', colour='$colour', litre='$litre', dateyear='$dateyear', doors='$doors', class='$class', amg='$amg', engine='$engine', horsepower='$horsepower', price='$price', blackseries='$blackseries' WHERE carID = '$id'";
        if(!$result = $conn->query($query)){
            die('Error occured [' . $conn->error . ']');
        }





 
        // // bind the parameters
        // $stmt->bindParam(':name', $name);
        // $stmt->bindParam(':description', $description);
        // $stmt->bindParam(':price', $price);
        // $stmt->bindParam(':id', $id);
 
        // // Execute the query
        // if($stmt->execute()){
        //     echo "<div class='alert alert-success'>Record was updated.</div>";
        // }else{
        //     echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
        // }
 
    }
 
    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>