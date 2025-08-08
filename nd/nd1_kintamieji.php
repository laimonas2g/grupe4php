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
    echo 'Rezultatas: Kintamieji lygūs';
} elseif ($kintamasis1 > $kintamasis2) {
    echo 'Rezultatas: ' . round($kintamasis1 / $kintamasis2, 2);
} else echo 'Rezultatas: ' . round($kintamasis2 / $kintamasis1, 2);

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
    echo "Vidurinė reikšmė: $number2";
} elseif ($number1 > $number2 && $number1 > $number3 && $number3 > $number2) { 
    echo "Vidurinė reikšmė: $number3";
} else echo "Vidurinė reikšmė: $number1";

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
    echo 'Trikampį sudaryti galima!';
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
echo "n1: $n1, n2: $n2, n3: $n3, n4: $n4";
echo '<br>';

if (true) {
    echo '<br>';
}

echo '<br><hr>';
// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį 
// skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
// Pvz skaičius 3- rezultatas: <h3>3</h3>



echo '<br><hr>';
// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius 
// nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 
// 0 - raudonas, didesni už 0 mėlyni. 



echo '<br><hr>';
// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 
// 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % 
// nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą 
// ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
// Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.



echo '<br><hr>';
// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su 
// atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų 
// aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes,
// kurios yra mažesnės nei 10 arba didesnės nei 90. 
// Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki 
// sveiko skaičiaus.



echo '<br><hr>';
// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes 
// ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti 
// panaudokite funkciją rand(). Sugeneruokite skaičių 
// nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite 
// prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir 
// po sekundžių pridėjimo ir pridedamų sekundžių skaičių.



echo '<br><hr>';
// Papildomas.
// 11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius 
// su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite 
// reikšmes viename strige, išrūšiuotas nuo didžiausios iki 
// mažiausios, atskirtas tarpais. 
// Naudoti ciklų ir masyvų NEGALIMA.


echo '<br><hr>';



echo '<br><hr>';



echo '</pre>';