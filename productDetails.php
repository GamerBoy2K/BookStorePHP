<?php 
    include 'header.php';
?>



<?php

    include 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $productID=$_GET['product'];
        $bookDetailsSQL="SELECT * from `product` where product_id='$productID'";
        $result=mysqli_query($conn,$bookDetailsSQL);
        $details=mysqli_fetch_array($result);
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

<?php

    echo'
    
        <div class="container">
            <div class="productImage">
                <img src="'.$details[3].'" alt="Img">
            </div>

            <div class="productInfo">
                <div class="productTitle">
                    <h2>'.$details[1].'</h2>
                </div>

                <div class="productPrice">
                    <h3>INR: '.$details[2].'</h3>
                </div>

                <div class="buttonBuy">
                    <div class="buyNow">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    
    
    ';


?>


<?php
    include 'footer.php'
?>