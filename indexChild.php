
<?php include 'header.php';?>

<div class="mainPage"  >
    <div class="log">
        <?php
            //echo "Checking the PHP\nHello";
        ?>
    </div>

    <div class="banner">
        <img class="bannerImg" src="./img/Chlidren_banner_2.jpg" alt="">
    </div>

    <div class="newBooks">
        <h3 class="topic"><span>New Added Books</span></h3>
        <div class="bookItems">

            <?php 

            include 'dbConnect.php';
            $all_books_sql="select * from product where category=1 ORDER BY date_time DESC LIMIT 6";
            $result=mysqli_query($conn,$all_books_sql);

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







    <div class="newBooks">
    <h3 class="topic"><span>Most Selling Books</span></h3>
        <div class="bookItems">


        <?php 
            $all_books_sql="select * from product where category=1 ORDER BY total_sold DESC LIMIT 6";
            $result=mysqli_query($conn,$all_books_sql);

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


    <div class="newBooks">
    <h3 class="topic"><span>All Books</span></h3>
        <div class="bookItems">


        <?php 
            $all_books_sql="select * from product where category=1";
            $result=mysqli_query($conn,$all_books_sql);

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
</div>


<?php include 'footer.php';?>