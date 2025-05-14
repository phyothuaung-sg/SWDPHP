<?php
    if (isset($_COOKIE["favorite_color"])) {
        echo "Your favorite color is: " . $_COOKIE['favorite_color'];
    } else {
        echo "No favorite color set.";
    }
?>