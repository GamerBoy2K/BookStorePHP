<?php

    include 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $productID=$_GET['bookID'];
        $bookDetailsSQL="SELECT * from `product` where product_id='$productID'";
        $result=mysqli_query($conn,$bookDetailsSQL);

        $userRow=mysqli_num_rows($result);

        if($userRow==0){
            header("location: 404.php");
        }

        $details=mysqli_fetch_array($result);
    }else{
        echo "Error! Not a Get request";
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Book</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>


<body>

    <style>
        .formContainer{
            display: flex;
            justify-content: center;
            padding-top: 30px;
        }
    </style>


    <div class="formContainer">
        <form action="./updatedBook.php" method="POST">
        <div class="form-group">
            <label for="BookName">Book Name</label>
            <input type="text" class="form-control" name="BookName" value="<?php echo''.$details[1].''; ?>">
        </div>
        <div class="form-group">
            <label for="BookPrice">Book Price</label>
            <input type="text" class="form-control" name="BookPrice" value="<?php echo''.$details[2].''; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>