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
    <a href="index.php">home</a>
    <a href="#">Order History</a>
    <a href="userLogout.php">Log Out</a>
</body>
</html>