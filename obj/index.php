<?php

// echo __DIR__ . '/Zveris.php';

echo '<pre>';

require __DIR__ . '/Zveris.php'; // konstruktas, kaip echo neturi skliausteliu

$z1 = new Zveris(10);
$z2 = new Zveris(30);
$z3 = $z1;

$z1->uodega = 74;

var_dump($z1);
var_dump($z2);
var_dump($z3);

echo '<hr>';

echo $z2->kasTu;

echo '<br>';

echo $z3->uodega;

echo '<br>';

$z3->realiaiKasTu2 = 'MI5.5';

echo $z3->realiaiKasTu2;

echo '<br>';