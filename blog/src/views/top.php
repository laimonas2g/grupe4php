<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $url ?>style.css">
    <title><?= $title ?? 'Bebro Blogas' ?></title>
</head>
<body>
    <?php
    if (($title ?? '') != '404 Not Found' && ($title ?? '') != 'Login' && ($title ?? '') != 'Register') {
        include __DIR__ . '/menu.php';
    }
    ?>
    <?php include __DIR__ . '/message.php' ?>