<?php

echo '<pre>';

for ($a = 1; $a <= 5; $a++) {
   echo "<h3>$a</h3>";
}


$mas1 = [5, 8, 25 => 77, 'A' => 88, 777];

print_r($mas1);

foreach($mas1 as $indeksas => $reiksme) {
    echo "<h3>$indeksas: $reiksme</h3>";
    if ($reiksme == 77) {
        break;
    }
}

foreach($mas1 as $reiksme) {
    echo "<h3>$reiksme</h3>";
}

echo '<hr><br>';

foreach($mas1 as $indeksas => $reiksme) {
    $mas1[$indeksas] = $reiksme + 1;
}


print_r($mas1);

foreach($mas1 as &$reiksme) {
    $reiksme++;
}

print_r($mas1);


$spalvos = ['Raudona', 'Geltona', 'Balta'];

print_r($spalvos);

foreach($spalvos as &$spalva) {}

unset($spalva); // uzmusam tik nuoroda, ne realia reiksme

// spalva === $spalvos[2]

foreach($spalvos as $spalva) {
    echo "<h4>$spalva</h4>";
}

print_r($spalvos);

$mas8 = [];

for($i = 0; $i < 10; $i++) {
    $mas8[rand(10, 99)] = rand(10, 99);
}

print_r($mas8);

$mas10X10 = [];

for($i = 0; $i < 10; $i++) {
    $mas10X10[] = [];
    for($j = 0; $j < 10; $j++) {
      $mas10X10[$i][] = rand(10, 99);
    }
}

print_r($mas10X10);