<?php
    session_start();
    if($_SESSION["adminLogged"]==true){
        echo"<h3>Hello Admin ". $_SESSION["username"] ."</h3>";
    }else{
        header("location: adminLogin.php");
        exit;
    }

?>


<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'dbConnect.php';

        $product_title = $_POST["title"];
        $product_price = $_POST["product_price"];
        $productCategory = $_POST["category"];

        if(file_exists($_FILES['fileToUpload']['tmp_name']) || is_uploaded_file($_FILES['fileToUpload']['tmp_name'])){            
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                    $insert_sql="INSERT INTO `product` (`product_id`, `title`, `price`, `file_name`, `category`) VALUES (NULL, '$product_title', '$product_price', '$target_file', '$productCategory' )";
                    $results=mysqli_query($conn,$insert_sql);

                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            $insert_sql="INSERT INTO `product` (`title`, `price`, `category`) VALUES ('$product_title', '$product_price', '$productCategory')";
            $results=mysqli_query($conn,$insert_sql);
            echo "Done, but there was no Image.";
            
        }
        
    }
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<?php include 'adminNavBar.php' ?>
<style>
    .container{
        padding: 5%;
    }

    .btn-primary{
        margin-top: 2%;
    }
</style>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="form-group">

    <label for="title">Title</label>
    <input class="form-control" type="text" placeholder="Enter the book name" id="title" name="title" minlength="3" maxlength="200">

    <label for="product_price">Price</label>
    <input class="form-control" type="text" placeholder="Enter the book price" id="product_price" name="product_price" minlength="1" maxlength="10">


    <label for="fileToUpload">Select image to upload:</label>
    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">


    <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="exampleRadios1" value="1" checked required>
        <label class="form-check-label" for="exampleRadios1">
            For Child
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="exampleRadios2" value="2">
        <label class="form-check-label" for="exampleRadios2">
            For Teenage
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="exampleRadios3" value="3">
        <label class="form-check-label" for="exampleRadios3">
            For Adult
        </label>
    </div>

    <input class="btn btn-primary" type="submit" value="Submit data" name="submit">
    </form>
</div>

    
</body>
</html>