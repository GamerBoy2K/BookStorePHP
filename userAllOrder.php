<?php
    session_start();
    if($_SESSION["logged"]==true){
        echo"<h3>Hello User ". $_SESSION["username"] ."</h3>";
    }else{
        header("location: userLogin.php");
        exit;
    }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Order</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        


        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Date Time</th>
            <th scope="col">Shipping Name</th>
            <th scope="col">Email ID</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Price</th>
            </tr>
        </thead>

        <tbody>
    <?php    
        $username=$_SESSION["username"];
        //echo $username.'dfghjk';
        include 'dbConnect.php';
        $SQL='select * from order_details where user_id="'.$username.'"';
        $result=mysqli_query($conn,$SQL);

        while ($row = mysqli_fetch_array($result))  {
            $productNameSQL='select * from product where product_id='.$row[2].'';
            $productResult=mysqli_query($conn,$productNameSQL);
            $productArray=mysqli_fetch_array($productResult);
            echo'
                <tr>
                    <th scope="row">'. $row[0].'</th>
                    <td>'. $productArray[1].'</td>
                    <td>'. $row[4].'</td>
                    <td>'. $row[5].'</td>
                    <td>'. $row[6].'</td>
                    <td>'. $row[7].'</td>
                    <td>'. $row[8].'</td>
                    <td>'. $row[9].'</td>
                </tr>
            
            ';

            

        }
    ?>


        </tbody>
        </table>


</body>
</html>