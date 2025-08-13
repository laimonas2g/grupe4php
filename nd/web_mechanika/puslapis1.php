<!-- 1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, 
o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, 
o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->

<?php


$backgroundColor = (isset($_GET['color']) && $_GET['color'] == 1) ? 'red' : 'black';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>body { background-color: <?php echo $backgroundColor; ?>; }</style>
    <title>1 Uzduotis</title>
</head>
<body>
    
    <h1><a href="http://localhost/grupe4php/nd/web_mechanika/puslapis1.php">back</a></h1>
    <h1><a href="http://localhost/grupe4php/nd/web_mechanika/puslapis1.php?color=1">1</a></h1>

</body>
</html>