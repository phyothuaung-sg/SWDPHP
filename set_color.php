<?php
    $color = "blue";
    setcookie("favorite_color", $color, time() + (86400 * 30)); //30days
    echo "Favorite color cookie set!";
?>