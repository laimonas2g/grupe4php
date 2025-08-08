<?php

echo '<pre>'; 


$masyvas = [];
$masyvas['knygos'] = 'seni zurnalai';
$masyvas[0] = 14;
$masyvas[4] = 15;
$masyvas[] = 17;
$masyvas[''] = 'kates zaislai';
$masyvas[1] = 'bla bla';
// $masyvas += ['mano knygos', 'zurnalai' => 'seni zurnalai',
// 'zaislai' => 'kates zaislai']; 
// 'mano knygos' dingo nes key[0] jau buvo naudojamas
// ir += operatorius skips, kay jau yra toks key.

$masyvas = array_merge($masyvas, [0 => 'mano knygos', 'zurnalai' => 'seni zurnalai',
'' => 'kates zaislas']); 
/*
Numeric keys in the second array bus reindexed.
String keys in the second array overwrite the first, 
if present; kates zaislai overwritintas su kates zaislas
*/

// print_r($masyvas);
// var_dump($masyvas);

// $masyvas2 = [];
// $masyvas2['kojinės'] = [];
// $masyvas2['kojinės']['zalios'] = 'visos žalios kojinės';
// $masyvas2['kojinės']['juodos'] = 'visos juodos kojinės';
// $masyvas2['kojinės']['margos'] = 'visos margos kojinės';
// $masyvas2['pirstines'] = [];
// $masyvas2['pirstines']['kailines'] = 'mano kailinės pirštinės';
// $masyvas2['pirstines']['odines'] = 'mano odinės pirštinės';
// $masyvas2['nosines'] = 'visos mano nosinės';

$masyvas3 = [1, 23, 0, 0, 55];

print_r($masyvas);
// print_r($masyvas2);
print_r($masyvas3);

echo '<br><hr>';

// foreach eina per visus, kokie tik yra, 
// jų tvarka bus tokia, kokia buvo pridėti 
// (arba rūšiuota pagal raktus, jei masyvas pakeistas).
foreach ($masyvas as $raktas => $reiksme) {
    echo "$raktas: $reiksme\n";
}

echo '<br><hr>';

// ar yra toks indeksas masyve
if (isset($masyvas3[2])) {
    echo "$masyvas3[2]\n";
} else {
    echo "Elemento su indeksu 2 nėra";
}

echo '<br>';

// naudojant for ciklą su masyvu, 
// masyvo indeksai turi būti paeiliui 
// (pvz., 0, 1, 2, 3, ...), 
// kad galėtumėte saugiai pasiekti kiekvieną 
// elementą pagal jo numerį.
// „Saugiai“ – tai be klaidų, be perspėjimų 
// ir be papildomų patikrinimų ar sąlygų.
for ($i = 0; $i < count($masyvas3); $i++) {
    echo "$masyvas3[$i]\n";
}

echo '<br><hr>';
//count($masyvas) atlieka tą pačią funkciją 
// kaip ir .length JavaScript'e
// count PHP grąžina masyvo elementų skaičių, 
// kaip ir length JavaScript'e.
// Skirtumas tik tas, kad PHP tai funkcija, 
// o JS – savybė (property).
$masyvas4 = [1, 2, 3, 4];
echo count($masyvas4); // išves: 4

echo '<br><hr>';
/*
$keys yr mano susikurtas kintamasis, 
kuriam priskiriu PHP funkcijos 
array_keys($masyvas4) grąžinamą masyvą.
foreach ($keys as $raktas) reiškia, 
kad ciklas eis per kiekvieną $keys masyvo 
elementą ir kiekvieną jų priskirs kintamajam $raktas.

array_keys – tai PHP funkcija, kuri grąžina masyvą su raktų sąrašu.
$keys – mano kintamasis, kuriame saugomi tie raktai.
foreach ($keys as $raktas) – paprastas ciklas per mano kintamąjį $keys.

*/

print_r(array_keys($masyvas4));

$keys = array_keys($masyvas4);
foreach ($keys as $raktas) {
    echo $raktas . '<br>';
}

$masyvas4 = [1, 2, 3, 4];
$keys = array_keys($masyvas4); // $keys = [0, 1, 2, 3]
foreach ($keys as $raktas) {
    echo $raktas . '<br>'; // išves 0, 1, 2, 3 naujose eilutėse
}
/*
echo "[$i]<br>";
Naudoti, kai rezultatas bus rodomas naršyklėje (HTML puslapyje).
<br> yra HTML kodo eilutės pabaigos žyma, kuri naršyklėje 
padaro naują eilutę.

echo "[$i]\n";
Naudoti, kai rezultatas bus rodomas konsolėje 
(komandinėje eilutėje, terminale).
\n yra naujos eilutės simbolis tekstui, bet HTML puslapyje 
jis nepadarys naujos eilutės (nebent peržiūrėsite šaltinį).

Išvada:

Naršyklėje (HTML): naudoti echo "[$i]<br>";
Konsolėje (CLI): naudoti echo "[$i]\n";
Abu variantai yra „taisyklingi“, jei tinkamai 
pritaikyti kontekstui.
*/

echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';






















echo '</pre>';