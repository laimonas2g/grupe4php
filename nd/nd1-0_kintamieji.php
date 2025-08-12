<!-- Kintamieji ir sąlygos

Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų 
funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, 
pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų 
jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir 
naudodamiesi funkcija rand() jiems priskirkite atsitiktines 
reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po 
kablelio.

3. Naudokite funkcija rand(). Sukurkite tris kintamuosius 
ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines 
reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį
turintį vidurinę reikšmę.

4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, 
trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti 
trikampį ir atsakymą atspausdintų. 

5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija 
sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite 
kiek yra nulių, vienetų ir dvejetų. 
(sprendimui masyvo nenaudoti).

6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį 
skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
Pvz skaičius 3- rezultatas: <h3>3</h3>

7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius 
nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 
0 - raudonas, didesni už 0 mėlyni. 

8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 
1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % 
nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą 
ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su 
atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų 
aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes,
kurios yra mažesnės nei 10 arba didesnės nei 90. 
Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki 
sveiko skaičiaus.

10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes 
ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti 
panaudokite funkciją rand(). Sugeneruokite skaičių 
nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite 
prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir 
po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

Papildomas.
11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius 
su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite 
reikšmes viename strige, išrūšiuotas nuo didžiausios iki 
mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų NEGALIMA.
 -->

<?php
echo '<pre>';
// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, 
// pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
// Parašykite kodą, kuris pagal gimimo metus paskaičiuotų 
// jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

$vardas  = 'Anonimas';
$pavarde = 'Anonimiskas';
$gimMetai = 2000;
$dabartiniaiMetai = 2025;

echo "Aš esu $vardas $pavarde. Man yra " . ($dabartiniaiMetai - $gimMetai) . " metai(ų)";
echo '<br><hr>';
// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir 
// naudodamiesi funkcija rand() jiems priskirkite atsitiktines 
// reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
// Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po 
// kablelio.

$kintamasis1 = rand(0, 4);
$kintamasis2 = rand(0, 4);
echo "K1 = $kintamasis1, K2 = $kintamasis2 ";

if ($kintamasis1 == 0 || $kintamasis2 == 0) {
    echo 'Rezultatas: Nulis'; 
} elseif ($kintamasis1 == $kintamasis2) { 
    echo 'Rezultatas: Kintamieji lygus';
} elseif ($kintamasis1 > $kintamasis2) {
    echo 'Rezultatas: ' . round($kintamasis1 / $kintamasis2, 2);
} else {
    echo 'Rezultatas: ' . round($kintamasis2 / $kintamasis1, 2);
}

echo '<br><hr>';
// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius 
// ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines 
// reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį
// turintį vidurinę reikšmę.

$number1 = rand(0, 25);
$number2 = rand(0, 25);
$number3 = rand(0, 25);
echo "n1: $number1, n2: $number2, n3: $number3";
echo '<br>';

if ($number1 > $number2 && $number1 > $number3 && $number2 > $number3) {
    echo "Vidurine reiksme: $number2";
} elseif ($number1 > $number2 && $number1 > $number3 && $number3 > $number2) { 
    echo "Vidurine reikmse: $number3";
} else {
    echo "Vidurinė reikšmė: $number1";
}

echo '<br><hr>';
// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, 
// trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
// Parašykite PHP programą, kuri nustatytų, ar galima sudaryti 
// trikampį ir atsakymą atspausdintų. 

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "a: $a, b: $b, c: $c";
echo '<br>';

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Trikampi sudaryti galima';
} else {
    echo 'Trikampio sudaryti negalima!';
}

echo '<br><hr>';
// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija 
// sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite 
// kiek yra nulių, vienetų ir dvejetų. 
// (sprendimui masyvo nenaudoti).

$n1 = rand(0, 2);
$n2 = rand(0, 2);
$n3 = rand(0, 2);
$n4 = rand(0, 2);

echo "n1: $n1, n2: $n2, n3: $n3, n4: $n4<br>";

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($n1 === 0) $nuliai++;
if ($n2 === 0) $nuliai++;
if ($n3 === 0) $nuliai++;
if ($n4 === 0) $nuliai++;

if ($n1 === 1) $vienetai++;
if ($n2 === 1) $vienetai++;
if ($n3 === 1) $vienetai++;
if ($n4 === 1) $vienetai++;

if ($n1 === 2) $dvejetai++;
if ($n2 === 2) $dvejetai++;
if ($n3 === 2) $dvejetai++;
if ($n4 === 2) $dvejetai++;

echo "Nuliu: $nuliai <br>";
echo "Vienetu: $vienetai<br>";
echo "Dvejetu: $dvejetai<br>";

echo '<br><hr>';
// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį 
// skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
// Pvz skaičius 3- rezultatas: <h3>3</h3>

$atsitiktinisSkaicius = rand(1, 6);

echo "<h$atsitiktinisSkaicius> $atsitiktinisSkaicius </h$atsitiktinisSkaicius>";

echo '<br><hr>';
// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius 
// nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 
// 0 - raudonas, didesni už 0 mėlyni. 

$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);

if ($sk1 < 0) {
    echo "<span style='color:green;'>$sk1</span> ";
} elseif ($sk1 == 0) {
    echo "<span style='color:red;'>$sk1</span> ";
} else {
    echo "<span style='color:blue;'>$sk1</span> ";
}

if ($sk2 < 0) {
    echo "<span style='color:green;'>$sk2</span>";
} elseif ($sk2 == 0) {
    echo "<span style='color:red;'>$sk2</span> ";
} else {
    echo "<span style='color:blue;'>$sk2</span> ";
}

if ($sk3 < 0) {
    echo "<span style='color:green;'>$sk3</span> ";
} elseif ($sk3 == 0) {
    echo "<span style='color:red;'>$sk3</span> ";
} else {
    echo "<span style='color:blue;'>$sk3</span> ";
}

echo '<br><hr>';
// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 
// 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % 
// nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą 
// ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
// Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

$zvakesKaina = 1;
$zvakiuKiekis = rand(5, 3000);
echo 'Žvakių kiekis: ' . $zvakiuKiekis . '<br>';
$sumaBeNuolaidos = $zvakesKaina * $zvakiuKiekis;

if ($sumaBeNuolaidos > 2000) {
    $galutineSuma = $sumaBeNuolaidos * 0.96;
    echo 'Galutine suma: ' . $galutineSuma . ' EUR';
} elseif ($sumaBeNuolaidos > 1000) {
    $galutineSuma = $sumaBeNuolaidos * 0.97;
    echo 'Galutinr suma: ' . $galutineSuma . ' EUR';
} else {
    echo 'Galutine suma: ' . $sumaBeNuolaidos . ' EUR';
}

echo '<br><hr>';
// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su 
// atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų 
// aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes,
// kurios yra mažesnės nei 10 arba didesnės nei 90. 
// Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki 
// sveiko skaičiaus.
$kint1 = rand(0, 100);
$kint2 = rand(0, 100);
$kint3 = rand(0, 100);

echo "$kint1, $kint2, $kint3. Aritmetinis vidurkis: ";
$aritmetinisVidurkis = round(($kint1 + $kint2 + $kint3) / 3);
echo $aritmetinisVidurkis;

echo '<br><hr>';

$suma = 0;
$kiekis = 0;

if ($kint1 >= 10 && $kint1 <= 90) {
    $suma += $kint1;
    $kiekis++;
}
if ($kint2 >= 10 && $kint2 <= 90) {
    $suma += $kint2;
    $kiekis++;
}
if ($kint3 >= 10 && $kint3 <= 90) {
    $suma += $kint3;
    $kiekis++;
}

if ($kiekis > 0) {
    echo "Patobulintas aritmetinis vidurkis: ";
    $vidurkis2 = round($suma / $kiekis);
    echo $vidurkis2;
} else {
    echo "0 => Visos reiksmes mazesnes nei 10 arba didesnes nei 90!";
}

echo '<br><hr>';
// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes 
// ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti 
// panaudokite funkciją rand(). Sugeneruokite skaičių 
// nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite 
// prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir 
// po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
$valanda = rand(0, 23);
$minute = rand(0, 59);
$sekunde = rand(0, 59);
$randomNumber = rand(0, 300);

function duSk($num) {
    return ($num < 10 ? '0' : '') . $num;
}

echo 'Laikrodis_1: <br>';
echo duSk($valanda) . ' : ' . duSk($minute) . ' : ' . duSk($sekunde) . '<br>';

$sekunde += $randomNumber;

if ($sekunde >= 60) {
    $ekstraMinutes = 0;
    while ($sekunde >= 60) {
        $sekunde -= 60;
        $ekstraMinutes++;
    }
    $minute += $ekstraMinutes;
}
if ($minute >= 60) {
    $ekstraValandos = 0;
    while ($minute >= 60) {
        $minute -= 60;
        $ekstraValandos++;
    }
    $valanda += $ekstraValandos;
}

if ($valanda >= 24) {
    while ($valanda >= 24) {
        $valanda -= 24;
    }
}

echo "Laikrodis_2 +$randomNumber"."s:<br>";
echo duSk($valanda) . ' : ' . duSk($minute) . ' : ' . duSk($sekunde);

echo '<br><hr>';
// Papildomas.
// 11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius 
// su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite 
// reikšmes viename strige, išrūšiuotas nuo didžiausios iki 
// mažiausios, atskirtas tarpais. 
// Naudoti ciklų ir masyvų NEGALIMA.
$kint1 = rand(1000, 9999);
$kint2 = rand(1000, 9999);
$kint3 = rand(1000, 9999);
$kint4 = rand(1000, 9999);
$kint5 = rand(1000, 9999);
$kint6 = rand(1000, 9999);
echo "$kint1 $kint2 $kint3 $kint4 $kint5 $kint6 <br>\n";

if ($kint1 < $kint2) { $laikinas = $kint1; $kint1 = $kint2; $kint2 = $laikinas; }
if ($kint1 < $kint3) { $laikinas = $kint1; $kint1 = $kint3; $kint3 = $laikinas; }
if ($kint1 < $kint4) { $laikinas = $kint1; $kint1 = $kint4; $kint4 = $laikinas; }
if ($kint1 < $kint5) { $laikinas = $kint1; $kint1 = $kint5; $kint5 = $laikinas; }
if ($kint1 < $kint6) { $laikinas = $kint1; $kint1 = $kint6; $kint6 = $laikinas; }

if ($kint2 < $kint3) { $laikinas = $kint2; $kint2 = $kint3; $kint3 = $laikinas; }
if ($kint2 < $kint4) { $laikinas = $kint2; $kint2 = $kint4; $kint4 = $laikinas; }
if ($kint2 < $kint5) { $laikinas = $kint2; $kint2 = $kint5; $kint5 = $laikinas; }
if ($kint2 < $kint6) { $laikinas = $kint2; $kint2 = $kint6; $kint6 = $laikinas; }

if ($kint3 < $kint4) { $laikinas = $kint3; $kint3 = $kint4; $kint4 = $laikinas; }
if ($kint3 < $kint5) { $laikinas = $kint3; $kint3 = $kint5; $kint5 = $laikinas; }
if ($kint3 < $kint6) { $laikinas = $kint3; $kint3 = $kint6; $kint6 = $laikinas; }

if ($kint4 < $kint5) { $laikinas = $kint4; $kint4 = $kint5; $kint5 = $laikinas; }
if ($kint4 < $kint6) { $laikinas = $kint4; $kint4 = $kint6; $kint6 = $laikinas; }

if ($kint5 < $kint6) { $laikinas = $kint5; $kint5 = $kint6; $kint6 = $laikinas; }

echo 'Išrūšiuotas nuo didžiausios iki mažiausios: <br>';
echo "$kint1 $kint2 $kint3 $kint4 $kint5 $kint6";

echo '<br><hr>';


echo '</pre>';
?>