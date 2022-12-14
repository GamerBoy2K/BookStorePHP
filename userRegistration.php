<?php 
include 'header.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'dbConnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    if(preg_match( '/[^a-z_\-0-9]/i', $username)){
        echo"<div style='padding-top:10vh;color:red;'>
            
            <h3>Error! Can not be blank</h3>
            
            </div>";
    }else{
        $alreadyUser=false;

        $fetchUser="SELECT * from `user` where email_id='$username'";
        $userResult=mysqli_query($conn,$fetchUser);
        $userRow=mysqli_num_rows($userResult);

        if($userRow!=0){
            $alreadyUser=true;
            echo"<div style='padding-top:10vh;color:red;'>
                
                <h3>Error! Already an user</h3>
                
                </div>";
        }

        if(($password==$cpassword) && ($alreadyUser==false)){
            
            $insert_sql="INSERT INTO `user` (`user_id`, `email_id`, `password`) VALUES (NULL, '$username', '$password' )";
            $results=mysqli_query($conn,$insert_sql);

            if($results){
                echo"<div style='padding-top:10vh;color:green;'>
                
                <h3>User added</h3>
                
                </div>";
            }else{
                die("Error" . mysqli_connect_error());
            }
        }if($password!=$cpassword){
            echo"<div style='padding-top:10vh;color:red;'>
                
                <h3>Error! Password missmatched!</h3>
                
                </div>";
        }
    }

}
?>


<style>
    form{
        margin-top: 100px;
        border: black solid 2px;
        border-radius: 5%;
        padding: 15px;

    }

    .container{
        display: flex;
        justify-content: center;
    }

    .inputBox{
        display: flex;
        padding: 1em;
        justify-content: space-between;
    }

    .buttonUp{
        display: flex;
        background-color: #303030;
        color: white;
        padding: 5%;
        border-radius: 10px;
    }
</style>


<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3>User Registration Here</h3>

            <div class="inputBox">
                <label for="username" >Username</label>
                <input type="text" placeholder="Username" id="username" name="username" minlength="3" maxlength="20" required>
            </div>

            <div class="inputBox">
                <label for="password" >Password</label>
                <input type="password" placeholder="Password" id="password" name="password" minlength="3" maxlength="30" required>
            </div>

            <div class="inputBox">
                <label for="cpassword" >Confirm Password</label>
                <input type="password" placeholder="Retype your Password" id="cpassword" name="cpassword" maxlength="30" required>
            </div>
            
            <button class="buttonUp">Sign Up</button>

            <div class="inputBox">
                <a href="./userLogin.php">Already have an account? login now</a>
            </div>
    </form>
</div>





    <?php include 'footer.php'; ?>