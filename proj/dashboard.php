<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1> Welcome, Dashboard</h1>

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