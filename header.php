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
        <div class="logo"><a href="index.php">Last Chapter</a></div>
            <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="./about.php">About</a></li>
            <li>
                <a href="#" class="desktop-link">Category</a>
                <input type="checkbox" id="show-features">
                <label for="show-features">Category</label>
                <ul>
                <li><a href="./indexChild.php">Children Books</a></li>
                <li><a href="./indexTeen.php">Teenager Books</a></li>
                <li><a href="./indexAdult.php">Adult Books</a></li>
                </ul>
            </li>

            <!-- <li>
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

            <li><a href="#">Feedback</a></li> -->
            </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fa fa-search"></i></label>
        <form action="./search.php" class="search-box" method="GET">
            <input type="text" name="searchItem" placeholder="Type Something to Search..." required>
            <button type="submit" class="go-icon"><i class="fa fa-long-arrow-right"></i></button>
        </form>


        <?php 
            session_start();
            if(isset($_SESSION["logged"])){
                echo '<a href="./welcome.php" ><i class="fa fa-user-circle" style="color: white; padding-right: 1.5rem;"></i></a>';
            }else{echo '<a href="./userLogin.php" ><i class="fa fa-user-circle" style="color: white; padding-right: 1.5rem;"></i></a>';
            }
        ?>
        <!--<a href="./userLogin.php" ><i class="fa fa-user-circle" style="color: white; padding-right: 1.5rem;"></i></a>-->    
    
        </nav>
    </div>