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
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $orderID=$_GET['orderID'];
        $bookDetailsSQL="SELECT * from `order_details` where id='$orderID'";
        $result=mysqli_query($conn,$bookDetailsSQL);

        $userRow=mysqli_num_rows($result);

        if($userRow==0){
            header("location: 404.php");
        }

        $details=mysqli_fetch_array($result);
    }else{
        echo "Error! Not a Get request";
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update an Order</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>


<body>

    <style>
        .formContainer{
            display: flex;
            justify-content: center;
            padding-top: 30px;
        }
    </style>


    <div class="formContainer">
        <form action="./updatedOrder.php" method="POST">
        <div class="form-group">
            <label for="BookName">Name</label>
            <input type="text" class="form-control" name="BookName" value="<?php echo''.$details[5].''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="shippingPhone">Phone</label>
            <input type="text" class="form-control" name="shippingPhone" value="<?php echo''.$details[7].''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="shippingEmail">Email</label>
            <input type="text" class="form-control" name="shippingEmail" value="<?php echo''.$details[6].''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="productID">Book ID</label>
            <input type="text" class="form-control" name="productID" value="<?php echo''.$details[2].''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="BookPrice">Book Price</label>
            <input type="text" class="form-control" name="BookPrice" value="<?php echo''.$details[9].''; ?>" readonly>
        </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" name="updateOrder" id="exampleRadios1" value="1" checked required>
            <label class="form-check-label" for="exampleRadios1">
                Processing
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="updateOrder" id="exampleRadios2" value="2">
            <label class="form-check-label" for="exampleRadios2">
                Shipped
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="updateOrder" id="exampleRadios3" value="3">
            <label class="form-check-label" for="exampleRadios3">
                Delivered
            </label>      
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="updateOrder" id="exampleRadios4" value="0">
            <label class="form-check-label" for="exampleRadios4">
                Cancel
            </label>
            </div>

        <input type="hidden" name="orderID" value="<?php echo $orderID ?>">

        <button type="submit" name="action" value="update" class="btn btn-primary">Update</button>
        
        </form>
    </div>
    
</body>
</html>