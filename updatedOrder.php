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
    <title>Updated Order</title>
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
        $orderID=$_POST['orderID'];
        $orderStatus=$_POST['updateOrder'];

        $bookUpdateSQL="UPDATE order_details SET statusOrder=$orderStatus WHERE id = $orderID;";
        $result=mysqli_query($conn,$bookUpdateSQL);

        echo '
            
            <div class="container">
                <h1>Order Updated</h1>
            </div>
            
            ';

    }else{
        echo "Error! Not a Get request";
    }

    ?>

</body>
</html>