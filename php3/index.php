<?php

echo '<pre>';

for ($i = 1; $i < 6; $i++) {
    echo $i . '*';
}
echo '<br>';

foreach(range(1, 5) as $i) {
    echo $i . '*';
}

// print_r(range(1, 5));
// print_r(range('a', 'j'));
// print_r(range('a', 'Z'));

$mas5X5 = [];

for ($i = 0; $i < 5; $i++) {
    $mas5X5[$i] = [];
    $ilgis = rand(0, 4);
    if ($ilgis) {
        for ($j = 0; $j < $ilgis; $j++) {
            $mas5X5[$i][] = rand(10, 99);
        }
    }
    else {
        $mas5X5[$i] = rand(10, 99);
    }
}

// print_r($mas5X5);

$sum1 = 0;


foreach($mas5X5 as $v1) {
    if (is_array($v1)) {
        foreach($v1 as $v2) {
            $sum1 += $v2;
        }
    }
    else {
        $sum1 += $v1;
    }
}

echo "<h2>Suma: $sum1 </h2>";


// Padaryti random raidžių nuo "a" iki "k" generatorių;

$raide = range('a', 'k')[rand(0, 10)];

$r = range('a', 'k');
shuffle($r);
$raide2 = array_shift($r);

echo "<h2>Raide: $raide $raide2 </h2>";


// sukurti masyva is 51 atsitiktines raides nuo "a" iki "z"

$raides = range('a', 'z');
$kiekis = count($raides) - 1;
$raidMas = [];

for ($i = 0; $i < 51; $i++) {
    $raidMas[] = $raides[rand(0, $kiekis)];
}

print_r($raidMas);

// rasti kokių raidžių yra daugiausia

$raidesKiekis = [];

foreach ($raidMas as $raid) {
    if (isset($raidesKiekis[$raid])) {
        $raidesKiekis[$raid]++;
    }
    else {
        $raidesKiekis[$raid] = 1;
    }
}

function paprastai($a, $b) {
    return $b <=> $a;
}

uasort($raidesKiekis, 'paprastai');

print_r($raidesKiekis);

echo '<h2>daugiausiai yra: '. array_key_first($raidesKiekis) . '</h2>';


$zve = 'Barsukas';

switch($zve) {
    case 'Bebras':
        echo '<h3>Piktas Bebras</h3>';
        break;
    case 'Barsukas':
        echo '<h3>Greitas Barsukas</h3>';
        break;
    case 'Briedis':
        echo '<h3>Miško Briedis</h3>';
        break;
    default: 
        echo '<h3>Neaišku kas</h3>';
}

$kas = match ($zve) {
    'Bebras' => '<h3>Piktas Bebras</h3>',
    'Barsukas' => '<h3>Greitas Barsukas</h3>',
    'Briedis' => '<h3>Miško Briedis</h3>',
    default => '<h3>Neaišku kas</h3>'
};

echo $kas;

$skaicius = 70;

// $koks = match (true) {
//     $skaicius <= 10 => '<h3>Mažiau nei 10 arba lygu</h3>',
//     $skaicius > 100 => '<h3>Daugiau nei 100</h3>',
//     default => '<h3>Daugiau nei 10</h3>'
// };

// echo $koks;


$fun = match (true) {
    $skaicius < 10 => function(){return '<h3>Mažiau nei 10</h3>';},
    default => function(){return '<h3>Daugiau nei 10</h3>';}
};

echo $fun();