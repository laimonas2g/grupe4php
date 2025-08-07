<?php

echo '<pre>';

for ($i = 1; $i < 6; $i++) {
    echo $i. '*';
}
echo '<br>';

foreach(range(1, 5) as $i) {
   echo $i. '*'; 
}

print_r(range(1, 5));
print_r(range('a', 'j'));
print_r(range('a', 'Z'));

echo '<br>';

// $mas5X5 = [];

// for($i = 0; $i < 5; $i++) {
//     $mas5X5[] = [];
//     $ilgis = rand(0, 4);
//     if ($ilgis) {
//     for($j = 0; $j < $ilgis; $j++) {
//       $mas5X5[$i][] = rand(10, 99);
//     }
// } else {
//     $mas5X5 = rand(10, 99);
// }
// }

// print_r($mas5X5);

// $sum1 = 0;

// foreach($mas5X5 as $v1) {
//     if(is_array($v1)) {
//     foreach($v1 as $v2) {
//         $sum1 += $v2;
//     }
//     }
//     else {
//         $sum1 += $v1;
//     }
// }

echo "<h2>Suma: $sum1 </h2>";

// 1. Padaryti rand raidžių nuo "a" iki "k" generatorių;

$raide = range('a', 'k')[rand(0, 10)];

$r = range('a', 'k');
shuffle($r);
$raide2 = array_shift($r);

echo "<h2>Raide: $raide $raide2</h2>";

// 2. Sukurti masyvą iš 51 atsitiktinės raidės nuo "a" iki "z";

echo '<pre>';

$masyvas1 = [];
for ($i = 0; $i < 51; $i++) {
    $masyvas1[] = range('a', 'k')[rand(0, 10)];
}

print_r($masyvas1);

$raides = range('a', 'z');
$kiekis = count($raides) - 1;
$raidMas = [];

for ($i = 0; $i < 51; $i++) {
    $raidMas[] = $raides[rand(0, $kiekis)];
}

print_r($raidMas);

// 3. rasti kokių raidžių yra daugiausia

$counts = array_count_values($raidMas);
$maxCount = max($counts);
$mostFrequent = array_keys($counts, $maxCount);

echo "<h2>Daugiausia pasikartojanti(-os) raidė(-ės): " . implode(', ', $mostFrequent) . " ($maxCount kartų)</h2>";

/*
3. Rasti kokių raidžių yra daugiausia
Jūsų jau pateiktas sprendimas:
$counts = array_count_values($raidMas);
$maxCount = max($counts);
$mostFrequent = array_keys($counts, $maxCount);
*/

// a būdas: Naudojant array_count_values ir max
$counts1 = array_count_values($raidMas);
$max1 = max($counts1);
$most1 = array_keys($counts1, $max1);
echo "<h3>1 būdas: " . implode(', ', $most1) . " ($max1 kartų)</h3>";

// b būdas: Rūšiuojant masyvą ir skaičiuojant rankiniu būdu
sort($raidMas);
$current = null;
$currentCount = 0;
$maxCount2 = 0;
$most2 = [];
foreach ($raidMas as $r) {
    if ($r === $current) {
        $currentCount++;
    } else {
        $current = $r;
        $currentCount = 1;
    }
    if ($currentCount > $maxCount2) {
        $maxCount2 = $currentCount;
        $most2 = [$current];
    } elseif ($currentCount === $maxCount2 && !in_array($current, $most2)) {
        $most2[] = $current;
    }
}
echo "<h3>2 būdas: " . implode(', ', $most2) . " ($maxCount2 kartų)</h3>";

// c būdas: Naudojant array_reduce
$counts3 = array_reduce($raidMas, function($carry, $item) {
    $carry[$item] = ($carry[$item] ?? 0) + 1;
    return $carry;
}, []);
$max3 = max($counts3);
$most3 = array_keys($counts3, $max3);
echo "<h3>3 būdas: " . implode(', ', $most3) . " ($max3 kartų)</h3>";

// d būdas: Naudojant array_unique ir array_filter
$unique = array_unique($raidMas);
$maxCount4 = 0;
$most4 = [];
foreach ($unique as $u) {
    $count = count(array_filter($raidMas, fn($v) => $v === $u));
    if ($count > $maxCount4) {
        $maxCount4 = $count;
        $most4 = [$u];
    } elseif ($count === $maxCount4) {
        $most4[] = $u;
    }
}
echo "<h3>4 būdas: " . implode(', ', $most4) . " ($maxCount4 kartų)</h3>";
/*
3. Rasti kokių raidžių yra daugiausia
1 būdas (naudojant array_count_values ir max):
*/
$counts = array_count_values($raidMas);
$maxCount = max($counts);
$mostFrequent = array_keys($counts, $maxCount);
echo "<h2>3. Daugiausia pasikartojanti(-os) raidė(-ės): " . implode(', ', $mostFrequent) . " ($maxCount kartų)</h2>";

/*
2 būdas (rūšiuojant masyvą ir skaičiuojant rankiniu būdu):
*/
sort($raidMas);
$current = null;
$currentCount = 0;
$maxCount2 = 0;
$most2 = [];
foreach ($raidMas as $r) {
    if ($r === $current) {
        $currentCount++;
    } else {
        $current = $r;
        $currentCount = 1;
    }
    if ($currentCount > $maxCount2) {
        $maxCount2 = $currentCount;
        $most2 = [$current];
    } elseif ($currentCount === $maxCount2 && !in_array($current, $most2)) {
        $most2[] = $current;
    }
}
echo "<h2>3. (2 būdas) Daugiausia pasikartojanti(-os) raidė(-ės): " . implode(', ', $most2) . " ($maxCount2 kartų)</h2>";

// 4. rasti kokių raidžių yra daugiausia

$raidesKiekis = [];

foreach($raidMas as $raid) {
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

echo '<h2>Daugiausiai yra: '. array_key_first($raidesKiekis) .'</h2>';


$zve = 'Bebras';

switch($zve) {
    case 'Bebras':
        echo '<h3>Piktas Bebras</h3>';
        break;
            case 'Barsukas':
        echo '<h3>Greitas Barsukas</h3>';
        break;
            case 'Briedis':
        echo '<h3>Misko Briedis</h3>';
        break;
        default: 
        echo '<h3>Neaisku kas</h3>';
};

$kas = match ($zve) {
    'Bebras' => '<h3>Piktas Bebras</h3>',
    'Barsukas' => '<h3>Greitas Barsukas</h3>',
    'Briedis'=> '<h3>Misko Briedis</h3>',
    default => '<h3>Neaisku kas</h3>'
};

echo $kas;

$skaicius = 70;

$koks = match (true) {
    $skaicius <= 10 => '<h3>Maziau nei 10 arba lygu</h3>',
    $skaicius > 100 => '<h3>Daugiau nei 100</h3>',
    default => '<h3>Daugiau nei 10</h3>'
};

echo $koks;

$fun = match (true) {
    $skaicius < 10 => function (){return '<h3>Maziau nei 10 arba lygu </h3>';},
    default => function (){return '<h3>Daugiau nei 10</h3>';}
};

echo $fun();