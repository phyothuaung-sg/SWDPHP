<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: index.php");
        exit();
    }

    //theme setup
    $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
    $bg = $theme == 'dark' ? '#222' : '#fff';
    $color = $theme == 'dar' ? '#fff' : '#222';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="background-color: <?php echo $bg; ?>; coor: <?php echo $color; ?>;">
    <h1>Welcome to Dashboard,</h1> 
    <?php echo $_SESSION['username'];?>! |
    <a href="logout.php">Logout</a> |<!-- logout -->
    <form action="set_theme.php" method="post"><br><br>
    
    <select name="theme" id="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <input type="submit" value="Save theme">
    </form><br><br>
     
    

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