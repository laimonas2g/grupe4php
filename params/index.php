<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>

<body>
    <h1>INDEX</h1>
    <pre>
    <?php
    $uri = $_SERVER['REQUEST_URI'];
    $serverHome = '/grupe4php/params';

    $params = str_replace($serverHome, '', $uri);

    $params = explode('/', $params);
    array_shift($params);

    // print_r($params);

    ?>
    </pre>


    <?php if ($params[0] == 'suma'): ?>

        <h3><?= $params[1] ?> + <?= $params[2] ?> = <?= intval($params[1]) +  intval($params[2])?></h3>

    <?php endif ?>

    <?php if ($params[0] == 'daugyba'): ?>

        <h3><?= $params[1] ?> * <?= $params[2] ?> = <?= intval($params[1]) *  intval($params[2])?></h3>


    <?php endif ?>




</body>

</html>