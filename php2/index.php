<?php

$petras = rand(10, 20);
$jonas = rand(5, 25);

echo "<h2>Petras: $petras Jonas: $jonas</h2>";

if($petras > $jonas) {
    echo '<h3>Laimėjo Petras</h3>';
}
elseif ($petras < $jonas) {
    echo '<h3>Laimėjo Jonas</h3>';
}
else {
    echo '<h3>Nelaimėjo niekas</h3>';
}

$vienas = 3;

$kas = $vienas == 1 ? 'Vienas' : ($vienas == 2 ? 'Du' : 'Ne 1, ne 2');

echo '<br>', $kas;

echo '<pre>';

$labas = 'Labas';

var_dump(   isset($labas)   );

unset($labas);

var_dump(   isset($labas)   );

$labas = null; // venkit naudoti null paprastam kintamajam;

var_dump(   isset($labas)   );

var_dump(   $labas === null   );

