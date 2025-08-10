<?php

echo '<pre>';

echo '<br><hr>';

// while - kartoja kodo bloką tol, kol nurodyta sąlyga yra TRUE

// do...while -įvykdo kodo bloką vieną kartą, o paskui kartoja 
// tol, kol nurodyta sąlyga yra TRUE

// for - kartoja kodo bloką nustatytą skaičių kartų

// foreach - kartoja kodo bloką kiekvienam masyvo elementui

// switch - kartoja kodo bloką vieną kartą nuo pasirinktos 
// pradžios

// Kartoja kodo bloką tol, kol nurodyta sąlyga yra TRUE. 
// Ciklas naudojamas tada, kai mes iš anksto NEŽINOME kiek 
// kartų reikės kartoti ciklą

// while (sąlyga yra TRUE) {
// 	Kodo blokas;
// }

// Pavyzdys:
$sk = rand(0, 10);
while ($sk < 9) {
   echo $sk . '<br>';
   $sk = rand(0, 10);
}

echo '<br><hr>';

// do {
//     Kodo blokas;
// } while (sąlyga yra TRUE);

// Pavyzdys:
do {
   	$sk = rand(0, 10);
echo $sk . '<br>';
} while ($sk < 9);

echo '<br><hr>';

// Kartoja kodo bloką nurodytą kartų skaičių. Ciklas naudojamas tais atvejais, kai iš anksto ŽINOMA kiek ciklų reikės įvykdyti.

// Sintaksė:
// for (pradinis ciklo kintamasis; sąlyga; kintamojo keitimas) {
//     Kodo blokas;
// }

// Pavyzdys:
for ($x = 1; $x <= 5; $x++) {
   echo 'Numeris: '.$x.' <br>';
}

echo '<br><hr>';

// Ciklų while ir for palyginimas:

$x = 1;
while($x <= 5) {
   echo 'Numeris: '.$x.' <br>';
    $x++;
}


for ($x = 1; $x <= 5; $x++) {
   echo 'Numeris: '.$x.' <br>';
} 
// Lentelėje pateikti ciklai yra analogiški

// Dažnai pasitaiko, kad į vieno ciklo kartojamo kodo bloką yra įrašomas kitas ciklas. Taip atsiranda ciklas cikle. Tokio kodo pavyzdys:

for ($a = 1; $a <= 5; $a++) {
   echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
   for ($x = 1; $x <= 5; $x++) {
       echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
   }
}


// Foreach ciklas vartojamas tik su jau sukurtais masyvais. Ciklas automatiškai “pereina” per visus masyvo “stalčiukus”.

// Sintaksė:
// foreach ($masyvas as $value) {
//     Kodo blokas;
// }

// Kiekvieno ciklo metu, į kodo bloką per kintamąjį $value yra perduodama vis kito “stalčiuko” reikšmė. T.y. reikšmė yra automatiškai nuskaitoma, priskiriama kintamajam $value ir perduodama į kodo bloką.

// Pavyzdys:
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value . '<br>';
}

// Ciklas foreach taip pat gali būti panaudotas iš masyvo gauti ne tik reikšmes, bet ir indeksus.

// Sintaksė:
// foreach ($masyvas as $index => $value) {
//     Kodo blokas;
// }

// Pavyzdys:
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}


// Ciklams valdyti yra naudojami break ir continue.

// Nutraukti tolesnį ciklų vykdymą galime panaudodami komandą break.

for ($i = 1;$i <= 15;$i++){
  if (rand(0, 10)> 9){
      break;
  }
  echo $i;
  echo '<br>';
}
echo 'Ciklo pabaiga';


// Komanda break nutraukia ciklą, 
// kuriame ji būna įrašyta. 
// Jeigu turime ciklą cikle atvejį 
// ir norime nutraukti ne tik vidinį, 
// bet ir išorinį ciklą, galime 
// parašyti break 2 .

// Praleisti vieną ciklo iteraciją galime panaudodami komandą continue.
$i = 0;
for ($i = 0;$i <= 5;$i++){
   if ($i==2){
       continue;
   }
   echo $i;
   echo '<br>';
}
echo 'Ciklo pabaiga';


echo '<br><hr>';

echo '</pre>';