<!-- Masyvai

1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

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

3. Sugeneruokite masyvą, kurio reikšmės 
atsitiktinės raidės A, B, C ir D, o ilgis 200. 
Suskaičiuokite kiek yra kiekvienos raidės.

4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
reikšmių ir kiek unikalių kombinacijų gavote.

6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai 
skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės 
turi būti unikalios savo masyve (t.y. neturi kartotis).

7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio masyve, bet nėra 
antrame 6 uždavinio masyve.

8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 
uždavinio masyvuose.

9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 
uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
Penktas trečio ir ketvirto suma ir t.t.

11. Sugeneruokite 101 elemento masyvą su atsitiktiniais 
skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra 
ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės 
masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo 
didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos 
link masyvo pradžios ir pabaigos reikšmės mažėtų. 
Paskaičiuokite pirmos ir antros masyvo dalies sumas 
(neskaičiuojant vidurinės). Jeigu sumų skirtumas 
(modulis, absoliutus dydis) yra didesnis 
nei | 30 | rūšiavimą kartokite. 
(Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)
 -->

 
<?php
echo '<pre>';
// 1. Sugeneruokite masyvą iš 30 elementų 
// (indeksai nuo 0 iki 29), 
// kurių reikšmės yra atsitiktiniai skaičiai 
// nuo 5 iki 25.
echo '<br><hr>';

$masyvas = [];
for ($i = 0; $i < 30; $i++) {
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);
echo '<br><hr>';

$masyvas1 = [];
foreach (range(0, 29) as $i) {
    $masyvas1[] = rand(5, 25);
}
print_r($masyvas1);
echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '<br><hr>';



echo '</pre>';