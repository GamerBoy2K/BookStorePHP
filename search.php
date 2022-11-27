<?php
    include 'header.php';
?>




<div class="newBooks">
    <h3 class="topic">Searched Books</h3>
    <div class="bookItems">

        <?php

            include 'dbConnect.php';
            if($_SERVER["REQUEST_METHOD"] == "GET"){
                $searchString=$_GET['searchItem'];
                $bookDetailsSQL="select * from product where title like '%$searchString%'";
                $result=mysqli_query($conn,$bookDetailsSQL);

            }else{
                echo "Error! Not a Get request";
            }


            while ($row = mysqli_fetch_array($result))  {
                            
                echo '
                <a href="./productDetails.php?product='.$row[0].'">
                    <div class="bookDetails">
                        <div class="bookImgContainer">
                            <div class="bookImg">
                                <img src="./'.$row[3].'" alt="" style="max-height: 150px; max-width: 150px;">
                            </div>
                        </div>
                        <div class="bookName">
                            '.$row[1].'
                        </div>
                        <div class="bookPrice">
                            INR: '.$row[2].'
                        </div>
                    </div>
                </a>
                ' ;
            }

        ?>

    </div>
</div>

<?php
    include 'footer.php';
?>