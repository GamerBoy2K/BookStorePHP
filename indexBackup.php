<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>

    <nav>
        <div class="logo">
            Phone Shop
        </div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a>
                <ul>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Romantic</a></li>
                    <li><a href="#">Child</a></li>
                </ul>
            </li>
            <li><a href="#">Best Seller</a></li>
        </ul>
    </nav>


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

                </div>

            </div>
            
        </div>
    </div>
    

    <footer>
        <div class="footer-details">
            <h3>Sounak Pal</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nostrum vero maiores dolores nulla.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>

        <div class="footer-end">
            <p>Copyright &copy; 2022 : <span>Sounak Pal</span></p>
        </div>
    </footer>

</body>
</html>