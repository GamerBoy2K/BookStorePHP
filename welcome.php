<?php
    session_start();
    if($_SESSION["logged"]==true){
        echo"<h3>Hello User ". $_SESSION["username"] ."</h3>";
    }else{
        header("location: userLogin.php");
        exit;
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wecome - <?php echo"$username" ?></title>
</head>


<body>

<style>
    *{
        /*background-color: antiquewhite;*/
    }
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
        margin: 15px;
        min-width: 100px;
        display: flex;
        justify-content: space-around;
    }


</style>

    <div class="adminContainer">
        <div class="managementBox">
            <a href="index.php">Home</a>
        </div>

        <div class="managementBox">
            <a href="./userAllOrder.php">Order History</a>
        </div>

        <div class="managementBox">
            <a href="userLogout.php">Log Out</a>
        </div>
    </div>
</body>
</html>