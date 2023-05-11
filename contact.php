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

    <h1>Contact US </h1>

    
</div>






<div class = "contact2" id = "contact2">


    <form class = "contact" name = "contact" method = "post" action = "contactform.php">


        <label for = "name"> Name: </label>
        <input name = "name" type = "text">
        <br>

        <label for = "email">Email: </label>
        <input name = "email" type = "text">
        <br>

        <label for = "subject">Subject</label>
        <textarea id = "subject" name = "subject">
        </textarea>
        <br>
        <br>


        <input type = "submit" value = "Submit" name = "submit">

    </form>







</div>







</body>
</html>
