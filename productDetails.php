<?php 
    include 'header.php';
?>



<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $productID=$_GET['product'];

    }else{
        echo "Error! Not a Get request";
    }

?>

<style>
    .container{
        padding: 3% 5% 3% 2%;
        display: flex;
        flex-wrap: wrap;
        max-height: 70%;
    }

    .productImage{
        max-width: 50%;
        max-height: 60%;
    }

    .productImage img{
        max-width: 90%;
        max-height: 90%;
    }


    .productInfo{
        max-width: 90%;
    }

    .productTitle{
        max-width: 90%;
    }

    .buyNow{
        padding: 20px 15px;
        background-color: #4a40ad;
        max-width: 40%;
        text-align: center;
        font-weight: bolder;
        color: white;
    }

</style>

<div class="container">
    <div class="productImage">
        <img src="./upload/void.jpg" alt="">
    </div>

    <div class="productInfo">
        <div class="productTitle">
            <h2>This is a Demo title of this book</h2>
        </div>

        <div class="productPrice">
            <h3>INR: 100.95</h3>
        </div>

        <div class="buttonBuy">
            <div class="buyNow">
                Buy Now
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php'
?>