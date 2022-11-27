<?php
    session_start();
    if($_SESSION["adminLogged"]==true){
        echo"<h3>Hello Admin ". $_SESSION["username"] ."</h3>";
    }else{
        header("location: adminLogin.php");
        exit;
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated Book</title>
</head>
<body>
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
    </style>

    <?php

    include 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $actionButton=$_POST['action'];
        $bookID=$_POST['bookID'];
        if($actionButton=="delete"){
            $bookUpdateSQL="DELETE FROM `product` WHERE `product`.`product_id` = $bookID;";
            $result=mysqli_query($conn,$bookUpdateSQL);

            echo '
            
            <div class="container">
                <h1>Book Deleted</h1>
            </div>
            
            ';
            exit;
        }
        
        
        $bookName=$_POST['BookName'];
        $bookPrice=$_POST['BookPrice'];
        $bookCategory=$_POST['category'];

        $bookUpdateSQL="UPDATE product SET title='$bookName', price=$bookPrice, category=$bookCategory WHERE product_id = $bookID;";
        $result=mysqli_query($conn,$bookUpdateSQL);

        echo '
            
            <div class="container">
                <h1>Book Updated</h1>
            </div>
            
            ';

    }else{
        echo "Error! Not a Get request";
    }

    ?>

</body>
</html>