<!-- 2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su 
RGB spalvos kodu (pvz color=ff1234) 
puslapio fono spalva pasidarytų tokios spalvos. -->

<?php

if (isset($_GET['color']) && preg_match('/^[a-fA-F0-9]{6}$/', $_GET['color'])) {
    $backgroundColor = "#" . $_GET['color'];
} else {
    $backgroundColor = "#ff1234";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> body {background-color: <?php echo $backgroundColor; ?>;} </style>
    <title>2 Uzduotis</title>
</head>
<body>
    <a href="puslapis2.php">Back</a>
    <a href="?color=00ff00"><button>Green</button></a>
</body>
</html>