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
    <title>Manage All Order</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        
<?php include 'adminNavBar.php' ?>

        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Status</th>
            <th scope="col">User Name</th>
            <th scope="col">Product ID</th>
            <th scope="col">Date Time</th>
            <th scope="col">Shipping Name</th>
            <th scope="col">Email ID</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Price</th>
            <th scope="col">Edit</th>
            </tr>
        </thead>

        <tbody>
    <?php    
        include 'dbConnect.php';
        $SQL='select * from order_details where statusOrder=3';
        $result=mysqli_query($conn,$SQL);

        while ($row = mysqli_fetch_array($result))  {
            if($row[3]==0){
                $statusOrder="Canceled";
            }elseif($row[3]==1){
                $statusOrder="Processing";
            }elseif($row[3]==2){
                $statusOrder="Shipped";
            }elseif($row[3]==3){
                $statusOrder="Delivered";
            }
            echo'
                <tr>
                    <th scope="row">'. $row[0].'</th>
                    <td>'. $statusOrder.'</td>
                    <td>'. $row[1].'</td>
                    <td>'. $row[2].'</td>
                    <td>'. $row[4].'</td>
                    <td>'. $row[5].'</td>
                    <td>'. $row[6].'</td>
                    <td>'. $row[7].'</td>
                    <td>'. $row[8].'</td>
                    <td>'. $row[9].'</td>
                    <td><a href="./updateOrder.php?orderID=' . $row[0].'">Update</a></td>
                </tr>
            
            ';

            

        }
    ?>


        </tbody>
        </table>


</body>
</html>