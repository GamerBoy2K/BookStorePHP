<?php
    session_start();
    if($_SESSION["adminLogged"]==true){
        echo"<h3>Hello Admin ". $_SESSION["username"] ."</h3>";
    }else{
        header("location: adminLogin.php");
        exit;
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Wecome Admin</title>
</head>


<style>
    .adminContainer{
        display: flex;
        background-color: antiquewhite;
        max-width: 90%;
        max-height: 100%;
        flex-wrap: wrap;
    }

    .managementBox{
        padding: 5%;
        background-color: #d9d0d0;
        margin: 50px;
        min-width: 150px;
    }


</style>


<body>

    <div class="adminContainer">
        <div class="managementBox">
            <a href="#">Pending Orders</a>
        </div>

        <div class="managementBox">
            <a href="#">Ongoing Orders</a>
        </div>

        <div class="managementBox">
            <a href="#">Past Orders</a>
        </div>

        <div class="managementBox">
            <a href="#">Manage Books</a>
        </div>

        <div class="managementBox">
            <a href="./addBook.php">Add a Book</a>
        </div>

        <div class="managementBox">
            <a href="adminLogout.php">Log Out</a>
        </div>
    </div>
    
</body>
</html>