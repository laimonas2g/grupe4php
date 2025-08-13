<?php
    $getAnimal = $_GET['animal'] ?? 'tuščia';
    $postAnimal = $_POST['animal'] ?? 'tuščia';

    $getPlusAnimalData = $_GET['plusAnimalData'] ?? 'tuščia';

    $method = $_SERVER['REQUEST_METHOD'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Mechanika</title>
</head>
<body>
    <h1>INFO <a href="http://localhost/grupe4php/php5-js/">back</a></h1>

    <h2>Method: <?php echo $method ?></h2>

    <h2>Get Animal: <?php echo $getAnimal ?></h2>

    <h2>Body Animal: <?php echo $postAnimal ?></h2>

    <h2>Body Animal plus data: <?php echo $getPlusAnimalData ?></h2> 

</body>
</html>