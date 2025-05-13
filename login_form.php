<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form</title>
</head>
<body>
    <form action="login_form.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="login">
    </form>
</body>
</html>


<?php
    // collect form data
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        //validate form data
        if($username == "admin" && $password == "123456") {
            //login successful
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: profile.php");
            exit();
        } else {
            //login failed
            echo "Login failed";
        }
    }
?>