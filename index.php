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

    <div class="wrapper">
        <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fa fa-bars"></i></label>
        <div class="content">
        <div class="logo"><a href="#">Book Me</a></div>
            <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li>
                <a href="#" class="desktop-link">Features</a>
                <input type="checkbox" id="show-features">
                <label for="show-features">Features</label>
                <ul>
                <li><a href="#">Drop Menu 1</a></li>
                <li><a href="#">Drop Menu 2</a></li>
                <li><a href="#">Drop Menu 3</a></li>
                <li><a href="#">Drop Menu 4</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="desktop-link">Services</a>
                <input type="checkbox" id="show-services">
                <label for="show-services">Services</label>
                <ul>
                <li><a href="#">Drop Menu 1</a></li>
                <li><a href="#">Drop Menu 2</a></li>
                <li><a href="#">Drop Menu 3</a></li>
                <li>
                    <a href="#" class="desktop-link">More Items</a>
                    <input type="checkbox" id="show-items">
                    <label for="show-items">More Items</label>
                    <ul>
                    <li><a href="#">Sub Menu 1</a></li>
                    <li><a href="#">Sub Menu 2</a></li>
                    <li><a href="#">Sub Menu 3</a></li>
                    </ul>
                </li>
                </ul>
            </li>
            <li><a href="#">Feedback</a></li>
            </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fa fa-search"></i></label>
        <form action="#" class="search-box">
            <input type="text" placeholder="Type Something to Search..." required>
            <button type="submit" class="go-icon"><i class="fa fa-long-arrow-right"></i></button>
        </form>

        <a href="#" ><i class="fa fa-user-circle" style="color: white; padding-right: 1.5rem;"></i></a>
        </nav>
    </div>


    <div class="mainPage" style="padding-top: 80px;>
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