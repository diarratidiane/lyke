<?php
// start the session
session_start();

// if user is already logged in then redirect user to welcome page
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true ) {
    header("location: welcome.php");
    EXIT;

}
?>