<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BCU Mercedes</title>

    <?php include "connect.php"; ?>
    <link rel = "stylesheet" href = "css/style.css">


    <script type='text/javascript'>
        // confirm record deletion
        function delete_user( id ){
        
            var answer = confirm('Are you sure?');
            if (answer){
                // if user clicked ok,
                // pass the id to delete.php and execute the delete query
                window.location = 'delete.php?id=' + id;
            }
        }
    </script>



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

    <h1>
        View and Edit all Listings
    </h1>

</div>


<div class = "read_listings">
    <a href = "create.php">Create new listing </a>
</div>
<br>

<br>






<div class = "contact2">



    <?php
    
    // delete message prompt will be here
    $action = isset($_GET['action']) ? $_GET['action'] : "";
 
    // if it was redirected from delete.php
    if($action=='deleted'){
        echo "<div class='alert alert-success'>Record was deleted.</div>";
    }
    



    // select all data
    $query = "SELECT carID, model, price FROM cars ORDER BY carID DESC";
    $query = "SELECT * from cars";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->store_result();
    $stmt->fetch();         
    $result = $conn->query($query);


    ?>


    <div class = "read_listings">

        
        <table class = "read_listings">
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Colour</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

        
            <?php
                while($row = $result->fetch_assoc()) {
            ?>




            <tr>
                <td><?= $row["carID"];?></td>
                <td><?= $row["model"];?></td>
                <td><?= $row["colour"];?></td>
                <td>£<?= $row["price"];?></td>
                <td>
                    <a href='read_one.php?id=<?= $row["carID"];?>'>Read</a>

                    <a href='update.php?id=<?= $row["carID"];?>'>Edit</a>

                    <!-- <a href='delete_user.php?id=<?= $row["carID"];?>'>Delete</a> -->
                    <a href = "#" onclick = 'delete_user(<?= $row["carID"];?>);'> Delete</a>

                <br>
            </tr>


        
            <?php
            }
            ?>

        </table>
    </div>
        
        

    



    
















<!-- 
<?php



    // if(!$result = $conn->query($query)){
    //     die('Error occured [' . $conn->error . ']');
    // }

    // $stmt = $result;
    // this is how to get number of rows returned
    $num = $stmt->num_rows;
    // $num = $stmt->rowCount();
    
    // link to create record form
    echo "<a href='create.php'>Create New Product</a>";
    
    //check if more than 0 record found
    if($num>0){

        echo "<table>";
        
            echo "<tr>
                <th>ID</th>
                <th>Model</th>
                <th>Price</th>
                <th>Action</th>
            </tr>";


            
            $row = $stmt->fetch();
            echo $row;
            while ($row = $stmt->fetch()){
                // extract row
                // this will make $row['firstname'] to
                // just $firstname only
                echo($row);
                extract($row);
             
                // creating new table row per record
                echo "<tr>
                    <td>{$carID}</td>
                    <td>{$model}</td>
                    <td>${$price}</td>
                    <td>";
                        // read one record
                        echo "<a href='read_one.php?id={$carID}' class='btn btn-info m-r-1em'>Read</a>";
             
                        // we will use this links on next part of this post
                        echo "<a href='update.php?id={$carID}' class='btn btn-primary m-r-1em'>Edit</a>";
             
                        // we will use this links on next part of this post
                        echo "<a href='#' onclick='delete_user({$carID});'  class='btn btn-danger'>Delete</a>";
                    echo "</td>";
                echo "</tr>";
            }
        










        echo "</table>";


    }






    
    
    
    // if no records found
    else{
        echo "<div>No records found.</div>";
    }
?> -->











</div>















































