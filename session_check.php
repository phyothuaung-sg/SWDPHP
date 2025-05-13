<?php
 session_start();

 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    echo "Welcome back! You are still logged in.";
 } else {
    echo "You are not logged in.";
 }
?>