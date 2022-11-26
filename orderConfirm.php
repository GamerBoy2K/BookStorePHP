<?php 
    include 'header.php';
?>

<?php
    if($_SESSION["logged"]!=true){
        header("location: userLogin.php");
        exit;
    }

?>


<?php

    include 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $productID=$_POST['product_id'];
        $shippingPhone=$_POST['customerPhone'];
        $shippingName=$_POST['customerName'];
        $shippingEmail=$_POST['customerEmail'];
        $shippingAddress=$_POST['customerAddress'];
        $productPrice=$_POST['product_price'];
        $userName=$_SESSION["username"];

        $insert_sql="INSERT INTO `order_details` (`user_id`, `product_id`, `shipping_name`, `email_id`, `phone`, `address`, `value`) VALUES ('$userName', '$productID', '$shippingName', '$shippingEmail', '$shippingPhone', '$shippingAddress', '$productPrice')";
        $results=mysqli_query($conn,$insert_sql);
    }else{
        echo "Error! Not a POST request";
    }

?>

<div class="container">
    <h1>Order Placed.</h1>
    <h2></h2>
</div>

<?php
    include 'footer.php';
?>