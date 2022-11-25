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
    <title>Manage All books</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        


        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Book ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Price</th>
            <th scope="col">Total Sold</th>
            <th scope="col">Edit</th>
            </tr>
        </thead>

        <tbody>
        <?php    
        include 'dbConnect.php';
        $SQL='select * from product';
        $result=mysqli_query($conn,$SQL);

        while ($row = mysqli_fetch_array($result))  {
            echo'
                <tr>
                    <th scope="row">'. $row[0].'</th>
                    <td>'. $row[1].'</td>
                    <td>'. $row[2].'</td>
                    <td>'. $row[4].'</td>
                    <td><a href="./updateBook.php?bookID=' . $row[0].'">EDIT</a></td>
                </tr>
            
            ';

            

        }
        ?>


        </tbody>
        </table>


</body>
</html>