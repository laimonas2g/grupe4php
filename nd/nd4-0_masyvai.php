<!-- Masyvai -->

<?php
echo '<pre>';

echo '<br><hr>';

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
// kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

// $masyvas = [];
// for ($i = 0; $i < 30; $i++) {
//     $masyvas[] = rand(5, 25);
// }
// print_r($masyvas);
// echo '<br><hr>';

$masyvas = [];
foreach (range(0, 29) as $i) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br><hr>';

/*
2. Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba 
indeksus jeigu yra keli;
c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio 
masyvo reikšmes minus tos reikšmės indeksas;
e) Papildykite masyvą papildomais 10 elementų su reikšmėmis 
nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
f) Iš masyvo elementų sukurkite du naujus masyvus. 
Vienas turi būti sudarytas iš neporinių indekso reikšmių, 
o kitas iš porinių;
g) Pirminio masyvo elementus su poriniais indeksais padarykite 
lygius 0 jeigu jie didesni už 15;
h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė 
didesnė už 10;
i) Naudodami funkciją unset() iš masyvo ištrinkite visus 
elementus turinčius porinį indeksą;
*/

// 2. a)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$reiksmesDidesnesUz10 = array_filter($masyvas, function($value) {
    return $value > 10;
});
print_r($reiksmesDidesnesUz10);
echo '<br><hr>';

$reiksmesDidesnesUz10_kiekis = count($reiksmesDidesnesUz10);
echo "Kiekis : $reiksmesDidesnesUz10_kiekis";
echo '<br><hr>';

// 2. b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba 
// indeksus jeigu yra keli;



echo '<br><hr>';

// 2. c) Suskaičiuokite visų porinių (lyginių) indeksų 
// reikšmių sumą;
echo "Lyginiai indeksai:\n";
$lyginiaiIndeksai = array_filter($masyvas, fn($x) => $x % 2 === 0, ARRAY_FILTER_USE_KEY);
print_r($lyginiaiIndeksai);

echo "Suma reiksmiu:\n";
$sumaLygReiksmiu = array_reduce($lyginiaiIndeksai, fn($a, $b) => $a + $b, 0);
print_r($sumaLygReiksmiu);

echo '<br><hr>';

// foreach($masyvas as $indeksas => $reiksme) {
//     echo 'Indeksas: '.$indeksas.' Reiksme: '.$reiksme. '<br>';
// }

// 2. d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio 
// masyvo reikšmes minus tos reikšmės indeksas;

// echo "Masyvo reikšmes minus seni indeksai:\n";
// $naujasMasyvasReiksmes = array_values($masyvas);
// print_r($naujasMasyvasReiksmes);

echo "Masyvo reikšmes minus seni indeksai:\n";
$naujasMasyvasReiksmes = [];

foreach ($masyvas as $indeksas => $reiksme) {
    $naujasMasyvasReiksmes[] = $reiksme - $indeksas;
}
print_r($naujasMasyvasReiksmes);
echo '<br><hr>';

// 2. e) Papildykite masyvą papildomais 10 elementų su reikšmėmis 
// nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for ($i = 0; $i < 10; $i++) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);

echo '<br><hr>';

// 2. f) Iš masyvo elementų sukurkite du naujus masyvus. 
// Vienas turi būti sudarytas iš neporinių indekso reikšmių, 
// o kitas iš porinių;

// $neporinisMasyvas = [];
// $porinisMasyvas = [];

$porinisMasyvas = array_filter($masyvas, fn($reiksme) => $reiksme % 2 === 0);
$neporinisMasyvas  = array_filter($masyvas, fn($reiksme) => $reiksme % 2 !== 0);

echo 'Porinis: ';
print_r($porinisMasyvas);
echo 'Neporinis: ';
print_r($neporinisMasyvas);

echo '<br><hr>';

// 2. g) Pirminio masyvo elementus su poriniais indeksais padarykite 
// lygius 0 jeigu jie didesni už 15;

$poriniuIndeksuMasyvas = array_filter($porinisMasyvas, fn($indeksas) => $indeksas % 2 === 0, ARRAY_FILTER_USE_KEY);

$reiksmesDidesnesUz15 = array_map(fn($reiksme) => $reiksme > 15 ? 0 : $reiksme, $poriniuIndeksuMasyvas);

echo 'Reiksmes didesnes uz 15 = 0: ';
print_r($reiksmesDidesnesUz15);

echo '<br><hr>';

// 2. h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė 
// didesnė už 10;

// $maziausiasIndeksas = array_search($needle, $reiksmesDidesnesUz15);

$reiksmeDidesneUz10 = array_filter($reiksmesDidesnesUz15, fn($reiksme) => $reiksme > 10);
$maziausiasIndeksas = array_key_first($reiksmeDidesneUz10);

echo 'Pirmas mažiausias indeksas: ';
print_r($maziausiasIndeksas);

echo '<br><hr>';

// 2. i) Naudodami funkciją unset() iš masyvo ištrinkite visus 
// elementus turinčius porinį indeksą;

// // destroy a single element of an array
// unset($reiksmeDidesneUz10['quux']);

// // destroy more than one variable
// unset($foo1, $foo2, $foo3);

foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 === 0) {
        unset($masyvas[$indeksas]);
    }
}
echo 'Masyvas be poriniu indeksu: ';
print_r($masyvas);

echo '<br><hr>';

// 3. Sugeneruokite masyvą, kurio reikšmės 
// atsitiktinės raidės A, B, C ir D, o ilgis 200. 
// Suskaičiuokite kiek yra kiekvienos raidės.


$raides = range('A', 'D');
$kiekis = count($raides) - 1;
$raidMas = [];

for ($i = 0; $i < 200; $i++) {
    $raidMas[] = $raides[rand(0, $kiekis)];
}
print_r($raidMas);


$kiekiai = array_count_values($raidMas);

echo 'Raidziu kiekiai:';
echo '<br>';
foreach ($raides as $raide) {
    $kiekis = $kiekiai[$raide];
    echo "$raide: $kiekis ";
}

echo '<br><hr>';

// 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

function paprastai($a, $b) {
    return $a <=> $b;
}

uasort($raidMas, 'paprastai');
print_r($raidMas);


echo '<br><hr>';


// 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
// Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
// Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
// reikšmių ir kiek unikalių kombinacijų gavote.

$masyvas2 = [];
for ($i = 0; $i < 3; $i++) {
    $masyvas2[$i] = [];
    for ($j = 0; $j < 200; $j++) {
        $masyvas2[$i][] = $raides[rand(0, 3)];
    }
}
print_r($masyvas2);

$sudetiMas = [];
for ($i = 0; $i < 200; $i++) {
    $sudetiMas[] = $masyvas2[0][$i] . $masyvas2[1][$i] . $masyvas2[2][$i];
}
print_r($sudetiMas);

$unikaliosKombinacijos = array_unique($sudetiMas);
echo 'Unikaliu kombinacijiy: ' . count($unikaliosKombinacijos) . '<br>';

$kombinacijuKiekiai = array_count_values($sudetiMas);
$unikaliosReiksmes = 0;
foreach ($kombinacijuKiekiai as $kiekis) {
    if ($kiekis == 1) {
        $unikaliosReiksmes++;
    }
}
echo "Unikaliu reiksmiu: $unikaliosReiksmes<br>";

echo '<br><hr>';

// 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai 
// skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės 
// turi būti unikalios savo masyve (t.y. neturi kartotis).

echo '<br><hr>';

// 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
// kurios yra pirmame 6 uždavinio masyve, bet nėra 
// antrame 6 uždavinio masyve.

echo '<br><hr>';

// 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 
// uždavinio masyvuose.


echo '<br><hr>';

// 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 
// uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.


echo '<br><hr>';

// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
// Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
// Penktas trečio ir ketvirto suma ir t.t.

echo '<br><hr>';

// 11. Sugeneruokite 101 elemento masyvą su atsitiktiniais 
// skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra 
// ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės 
// masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo 
// didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos 
// link masyvo pradžios ir pabaigos reikšmės mažėtų. 
// Paskaičiuokite pirmos ir antros masyvo dalies sumas 
// (neskaičiuojant vidurinės). Jeigu sumų skirtumas 
// (modulis, absoliutus dydis) yra didesnis 
// nei | 30 | rūšiavimą kartokite. 
// (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)



echo '<br><hr>';


echo '</pre>';