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

    <div class = "read_listings">
        <a href = "read.php"> Back </a>
    </div>

    <h1>Create a listing</h1>

</div>




















<div class = "contact2"> 


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class = "create" enctype = "multipart/form-data">
        
    
    
        <label for = "model"> Model: </label>
        <input name = "model" type = "text"/>
        <br>


        <label for = "colour"> Colour: </label>
        <input name = "colour" type = "text"/>
        <br>


        <label for = "litre"> Litre: </label>
        <input name = "litre" type = "text"/>
        <br>


        <label for = "dateyear"> Year: </label>
        <input name = "dateyear" type = "text"/>
        <br>


        <label for = "doors"> Doors: </label>
        <input name = "doors" type = "text"/>
        <br>


        <label for = "class"> Class: </label>
        <input name = "class" type = "text"/>
        <br>


        <label for = "amg"> AMG? yes / no </label>
        <input name = "amg" type = "text"/>
        <br>


        <label for = "engine"> Engine: </label>
        <input name = "engine" type = "text"/>
        <br>


        <label for = "horsepower"> Horsepower: </label>
        <input name = "horsepower" type = "text"/>
        <br>


        <label for = "price"> Price: </label>
        <input name = "price" type = "text"/>
        <br>


        <label for = "blackseries"> Black Series? yes / no </label>
        <input name = "blackseries" type = "text"/>
        <br>


        <label for = "image">Image </label>
        <input type="file" name="image" />
        <br>


        <input type='submit' value='Save'/>
        <br>
        <div class = "read_listings">
            <a href='read.php'>Back to read products</a>
        </div>
                
    </form>



</div>





<?php
if($_POST){

 
    try{
 
        // insert query
        // $query = "INSERT INTO cars SET model=:model, colour=:colour, litre=:litre, dateyear=:dateyear, doors=:doors, class=:class, amg=:amg, engine=:engine, horsepower=:horsepower, price=:price, blackseries=:blackseries";
        
        // prepare query for execution
        // $stmt = $conn->prepare($query);
 
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

        $image=!empty($_FILES["image"]["name"])
            ? "image" . "-" . basename($_FILES["image"]["name"])
            : "";
        $image=htmlspecialchars(strip_tags($image));
        // $image = "uploads/" . $image;
        $image_path = "uploads/" . $image;


        
        $query = "INSERT INTO cars SET model='$model', colour='$colour', litre='$litre', dateyear='$dateyear', doors='$doors', class='$class', amg='$amg', engine='$engine', horsepower='$horsepower', price='$price', blackseries='$blackseries', imagePath='$image_path'";
        if(!$result = $conn->query($query)){
            die('Error occured [' . $conn->error . ']');
        }


        // now, if image is not empty, try to upload the image
        if($image){
        
            // sha1_file() function is used to make a unique file name
            $target_directory = "uploads/";
            $target_file = $target_directory . $image;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        
            // error message is empty
            $file_upload_error_messages="";

            // make sure that file is a real image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check!==false){
                // submitted file is an image
            }else{
                $file_upload_error_messages.="<div>Submitted file is not an image.</div>";
            }
            // make sure certain file types are allowed
            $allowed_file_types=array("jpg", "jpeg", "png", "gif");
            if(!in_array($file_type, $allowed_file_types)){
                $file_upload_error_messages.="<div>Only JPG, JPEG, PNG, GIF files are allowed.</div>";
            }
            // make sure file does not exist
            if(file_exists($target_file)){
                $file_upload_error_messages.="<div>Image already exists. Try to change file name.</div>";
            }
            // make sure submitted file is not too large, can't be larger than 1 MB
            if($_FILES['image']['size'] > (1024000)){
                $file_upload_error_messages.="<div>Image must be less than 1 MB in size.</div>";
            }
        }
        // if $file_upload_error_messages is still empty
        if(empty($file_upload_error_messages)){
            // it means there are no errors, so try to upload the file
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                // it means photo was uploaded
            }else{
                echo "<div class='alert alert-danger'>
                    <div>Unable to upload photo.</div>
                    <div>Update the record to upload photo.</div>
                </div>";
            }
        }
        
        // if $file_upload_error_messages is NOT empty
        else{
            // it means there are some errors, so show them to user
            echo "<div class='alert alert-danger'>
                <div>{$file_upload_error_messages}</div>
                <div>Update the record to upload photo.</div>
            </div>";
        }
        



 
        // bind the parameters
        // $stmt->bindParam(':model', $model);
        // $stmt->bindParam(':colour', $colour);
        // $stmt->bindParam(':price', $price);
        // $stmt->bindParam(':litre', $litre);
        // $stmt->bindParam(':year', $year);
        // $stmt->bindParam(':doors', $doors);
        // $stmt->bindParam(':amg', $amg);
        // $stmt->bindParam(':engine', $engine);
        // $stmt->bindParam(':horsepower', $horsepower);
        // $stmt->bindParam(':blackseries', $blackseries);
 
        // specify when this record was inserted to the database
        // $created=date('Y-m-d H:i:s');
        // $stmt->bindParam(':created', $created);
 
        // Execute the query
        // if($stmt->execute()){
        //     echo "<div class='alert alert-success'>Record was saved.</div>";
        // }else{
        //     echo "<div class='alert alert-danger'>Unable to save record.</div>";
        // }
 
    }
 
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
