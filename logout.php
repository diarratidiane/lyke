<?php
// start the session 
session_start();

// Destroy the session.
if (session_destroy()) {
    // redirect to the loging page
    header("Location:Loging.php");
    exit;
}
?>