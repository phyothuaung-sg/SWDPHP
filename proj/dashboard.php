<?php // login start
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: index.php");
        exit();
    } //login end

    //theme setup start
    $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
    $bg = $theme == 'dark' ? '#222' : '#fff';
    $color = $theme == 'dark' ? '#fff' : '#222';
    //theme setup end
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<!-- theme setup line 23 -->
<body style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>;"> 
    <h1>Welcome to Dashboard,</h1> 

    <!-- logout start -->
    <?php echo $_SESSION['username'];?>! |
    <a href="logout.php">Logout</a> |
    <!-- logout end -->
    
    <!-- theme switch start -->
    <form action="set_theme.php" method="post"><br><br>
        <select name="theme" id="theme">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
        <input type="submit" value="Save theme">
    </form><br><br>
    <!-- them switch end -->
     
    

    <?php
        $students = [
            ["name" => "John", "grade" => 85],
            ["name" => "Wong", "grade" => 67],
            ["name" => "Kelly", "grade" => 45],
            ["name" => "Andrea", "grade" => 92],
            ["name" => "Nollel", "grade" => 55],
        ];
    ?>
    
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['name'] ?></td>
            <td><?= $student['grade'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>