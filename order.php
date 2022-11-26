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
        $productID=$_POST['product'];
        $bookDetailsSQL="SELECT * from `product` where product_id='$productID'";
        $result=mysqli_query($conn,$bookDetailsSQL);
        $details=mysqli_fetch_array($result);
    }else{
        echo "Error! Not a POST request";
    }

?>


<style>
    .container{
        padding-top: 15vh;
        max-width: 50%;
    }

    .customerData{
        padding: 5px 0%;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .customerData > label{
        padding: 0.5em 1em 0.5em 0;
        flex: 1;
    }

    /*label {
    
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
    }*/


</style>

<div class="container">
    <?php 
    echo'
        <h2>You have Selected. ' .$details[1]. '</h2>
        <h3>Price: ' .$details[2]. '</h3>
        '
    ?>

    <form action="./orderConfirm.php" method="post">
        <div class="customerData">
            <label for="customerName">Customer Full Name</label>
            <input type="text" name="customerName" placeholder="Enter The Cusomer Name" id="customerName" required>   
        </div>
        
        <div class="customerData">
            <label for="customerEmail">Customer Email</label>
            <input type="email" name="customerEmail" placeholder="Enter Billing Email Address" id="customerEmail" required>
        </div>
        
        <div class="customerData">
            <label for="customerPhone">Customer Phone Number</label>
            <input type="tel" name="customerPhone" id="customerPhone" placeholder="Enter shipping Phone Number" required>
        </div>
        
        <div class="customerData">
            <label for="customerAddress">Full Shipping Address</label>
            <textarea name="customerAddress" id="customerAddress" cols="30" rows="10" required></textarea>
        </div>

        <input type="hidden" name="product_id" value="<?php echo $productID?>">
        <input type="hidden" name="product_price" value="<?php echo $details[2]?>">
        <div class="submitButton">
            <input type="submit" value="Place Order">
        </div>

    </form>

</div>
    


<?php
    include 'footer.php'
?>