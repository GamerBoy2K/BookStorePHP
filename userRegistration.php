<?php 
include 'header.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'dbConnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    $alreadyUser=false;


    if(($password==$cpassword) && ($alreadyUser==false)){
        $insert_sql="INSERT INTO `user` (`user_id`, `email_id`, `password`) VALUES (NULL, '$username', '$password' )";
        $results=mysqli_query($conn,$insert_sql);

        if($results){
            echo"User added done";
        }else{
            die("Error" . mysqli_connect_error());
        }
    }else{
        echo"Password Mismatch or Already have an account";
    }

}
?>


<style>
    form{
        margin-top: 100px;

    }

    label{
        padding-top: 25px;
    }
</style>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h3>User Registration Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <label for="cpassword">Confirm Password</label>
        <input type="password" placeholder="Retype your Password" id="cpassword" name="cpassword">

        <button>Sign Up</button>

        <div class="signup">
            <a href="#">Already have an account? login now</a>
        </div>
    </form>




    <?php include 'footer.php'; ?>