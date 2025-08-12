<!-- Masyvai daugiamačiai

1. Sugeneruokite masyvą iš 10 elementų, 
kurio elementai būtų masyvai 
iš 5 elementų su reikšmėmis nuo 5 iki 25.

2. Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b) Raskite didžiausio elemento reikšmę;
c) Suskaičiuokite kiekvieno antro lygio 
masyvų su vienodais indeksais sumas 
(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d) Visus antro lygio masyvus “pailginkite” iki 7 elementų
e) Suskaičiuokite kiekvieno iš antro lygio masyvų 
elementų sumą atskirai ir sumas panaudokite kaip 
reikšmes sukuriant naują masyvą. T.y. pirma naujo 
masyvo reikšmė turi būti lygi mažesnio masyvo, 
turinčio indeksą 0 dideliame masyve, visų elementų sumai 

3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo 
elementas turi būti masyvas su atsitiktiniu kiekiu 
nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai 
parinktos raidės iš intervalo A-Z. 
Išrūšiuokite antro lygio masyvus pagal abėcėlę 
(t.y. tuos kur su raidėm).

4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
kad elementai kurių masyvai trumpiausi eitų pradžioje. 
Masyvai kurie turi bent vieną “K” raidę, visada būtų 
didžiojo masyvo visai pradžioje.

5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo 
elementas yra masyvas 
[user_id => xxx, place_in_row => xxx] 
user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, 
place_in_row atsitiktinis skaičius nuo 0 iki 100. 

6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia 
tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia 
tvarka.

7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite 
dar du elementus: name ir surname. Elementus užpildykite 
stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, 
kurių ilgiai nuo 5 iki 15.

8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes 
užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo 
nekurkite. Antro lygio masyvo reikšmes užpildykite 
atsitiktiniais skaičiais nuo 0 iki 10. 
Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite 
tiesiogiai.

9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą 
ir išrūšiuokite masyvą taip, kad pirmiausiai eitų 
mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, 
to masyvo reikšmių sumos.

10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai 
iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem 
elementais value ir color. Reikšmė value vienas iš atsitiktinai 
parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai 
sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų 
atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės 
nuspalvintos spalva color.

11. Duotas kodas, generuojantis masyvą:
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis 
matematika.
NEGALIMA! naudoti jokių palyginimo operatorių 
(if-else, match, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir 
matematinėmis funkcijomis iš skyrelio: 
https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti 
įvairias funkcijas, bet sprendimo pagrindas 
turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' 
    kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

Kur rudi skaičiai yra pakeisti skaičiais $a ir $b 
generuojamais kodo. 
-->


<?php
echo '<pre>';


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