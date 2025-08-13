<?php

session_start();

$method = $_SERVER['REQUEST_METHOD'];

if (!isset($_SESSION['storedData'])) {
    $_SESSION['storedData'] = [];
}

$storedData = $_SESSION['storedData'];

if ($method == 'POST') {
    $task = $_POST['todo'];
    if ($task != '') {
        $storedData[] = $task;
        $_SESSION['storedData'] = $storedData;
    }
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToDo</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="todo" placeholder="Enter Text Here" value="">
        <button type="submit">Add</button>
        <ul>
            <?php foreach ($storedData as $task) {
                echo "<li>$task</li>";
            } ?>
        </ul>
    </form>
</body>

</html>