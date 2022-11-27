<?php
    session_start();
    if($_SESSION["adminLogged"]==true){
        echo"<h3>Hello Admin ". $_SESSION["username"] ."</h3>";
    }else{
        header("location: adminLogin.php");
        exit;
    }

?>

<?php

    include 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $bookID=$_POST['bookID'];
        $bookName=$_POST['BookName'];
        $bookPrice=$_POST['BookPrice'];
        $bookCategory=$_POST['category'];

        $bookUpdateSQL="UPDATE product SET title='$bookName', price=$bookPrice, category=$bookCategory WHERE product_id = $bookID;";
        $result=mysqli_query($conn,$bookUpdateSQL);

    }else{
        echo "Error! Not a Get request";
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


    <div class="container">
        <h1>Book Updated</h1>
    </div>
</body>
</html>