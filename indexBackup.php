
<?php include 'header.php';?>

<div class="mainPage" style="padding-top: 80px;">
    <div class="log">
        <?php
            echo "Checking the PHP\nHello";
        ?>
    </div>

    <div class="banner">
        <img class="bannerImg" src="./img/banner.jpg" alt="">
    </div>

    <div class="newBooks">
        <h3 class="topic">New Books</h3>
        <div class="bookItems">

            <div class="bookDetails">
                <div class="bookImgContainer">
                    <div class="bookImg">
                        <img src="./img/books/void.jpg" alt="" style="height: 150px; width: 150px;">
                    </div>
                </div>
                <div class="bookName">
                    A demo Book : By a not so famous writter
                </div>
                <div class="bookPrice">
                    INR: 100
                </div>
            </div>

            <div class="bookDetails">
                <div class="bookImgContainer">
                    <div class="bookImg">
                        <img src="./img/books/void.jpg" alt="" style="height: 150px; width: 150px;">
                    </div>
                </div>
                <div class="bookName">
                    Another demo Book : famous writter
                </div>
                <div class="bookPrice">
                    INR: 500
                </div>
            </div>
            
        </div>
    </div>







    <div class="newBooks">
        <h3 class="topic">Old Books</h3>
        <div class="bookItems">


        <?php 

            include 'dbConnect.php';
            $all_books_sql="select * from product";
            $result=mysqli_query($conn,$all_books_sql);

            while ($row = mysqli_fetch_array($result))  {
                
                echo '
                <a href="./productDetails.php?product='.$row[0].'">
                    <div class="bookDetails">
                        <div class="bookImgContainer">
                            <div class="bookImg">
                                <img src="./'.$row[3].'" alt="" style="height: 150px; width: 150px;">
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
            

            <div class="bookDetails">
                <div class="bookImgContainer">
                    <div class="bookImg" >
                        <img src="./img/books/void.jpg" alt="" style="height: 150px; width: 150px;">
                    </div>
                </div>
                <div class="bookName">
                    Another demo Book : famous writter
                </div>
                <div class="bookPrice">
                    INR: 500
                </div>
            </div>
            
        </div>
    </div>
</div>


<?php include 'footer.php';?>