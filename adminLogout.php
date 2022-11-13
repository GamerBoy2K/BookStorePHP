<?php
    session_start();

    if($_SESSION["adminLogged"]==true){
        // Unset all of the session variables.
        $_SESSION = array();

        // Finally, destroy the session.
        session_destroy();
        header("location: adminLogin.php");
    }else{
        header("location: adminLogin.php");

    }

?>