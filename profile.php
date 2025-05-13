<?php
    session_start();

    if(!isset($_SESSiON['login'])) {
        header("Location: login_form.php");
        exit();
    } else {
        $username = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Username: <?= $username ?></p>
    <p>You are Logined</p>
</body>
</html>