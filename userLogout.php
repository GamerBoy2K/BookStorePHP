<?php
    session_start();

    if($_SESSION["logged"]==true){
        // Unset all of the session variables.
        $_SESSION = array();

        // Finally, destroy the session.
        session_destroy();
        header("location: index.php");
    }else{
        header("location: login.php");

    }

?>