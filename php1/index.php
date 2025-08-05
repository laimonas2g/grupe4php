<?php


$str1 = 'Labas';
$str2 = '   ka tu?';

$str3 = $str1 . $str2; //stringu sujungimas

echo $str3;
echo '<br>';

$str4 = '--- $str1 ---';
$str5 = "--- $str1 ---"; // analogas ` JS

echo $str4;
echo '<br>';

echo $str5;
echo '<br>';

unset($str5); // panaikina kintam
echo $str5;
echo '<br>';

$labas = 'kit';
$labas2 = 'as';

$pirmas = 'antras';
$antras = "$labas$labas2";
$kitas = 'Bla Bla';
echo $$$pirmas;
echo '<br>';

print $labas;
echo $pirmas, $antras;
echo '<br>';

$str6 = 'Pelė';

$mas = [1, 2, 3];
echo '<pre>';
var_dump($mas);
// echo $mas;
print_r($mas);

echo '</pre>';

echo '<br>';
$k = 'b';
var_dump(++$k);

phpinfo();