<?php 

$serverLocation="localhost";
$userName='root';
$password='';
$databaseName='bookstore';

$conn=mysqli_connect($serverLocation,$userName,$password,$databaseName);

if($conn){
    echo"Database connection done<br>";
}else{
    die("Error" . mysqli_connect_error());
}

?>