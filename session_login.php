<?php
 session_start();

 $_SESSION['loggedin'] = true;
 echo "User is logged in.";
?>