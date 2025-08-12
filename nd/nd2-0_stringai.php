<!-- 2. Stringai (movie edition)

1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

Papildomas.
11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo) -->

<?php
echo '<pre>';

// 1. Sukurti du kintamuosius. Jiems priskirti savo 
// mylimo aktoriaus vardą ir pavardę kaip stringus 
// (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

$aktoriausVardas  = 'Gary';
$aktoriausPavarde = 'Oldman';

if (strlen($aktoriausVardas) < strlen($aktoriausPavarde)) {
    echo "Aktorius: $aktoriausVardas";
} else {
    echo "Aktorius: $aktoriausPavarde";
}

echo '<br><hr>';
// 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo 
// aktoriaus vardą ir pavardę kaip stringus. 
// Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

echo "Vardas: " . strtoupper($aktoriausVardas), ", Pavarde: " . strtolower($aktoriausPavarde);

echo '<br><hr>';
// 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo 
// aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią 
// kintamąjį ir jam priskirti stringą, sudarytą iš 
// pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$pirmosRaides = substr($aktoriausVardas, 0, 1) . substr($aktoriausPavarde, 0, 1);
echo $pirmosRaides;

echo '<br><hr>';
// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo 
// aktoriaus vardą ir pavardę kaip stringus. Sukurti 
// trečią kintamąjį ir jam priskirti stringą, 
// sudarytą iš trijų paskutinių vardo ir pavardės 
// kintamųjų raidžių. Jį atspausdinti.

$paskutinesRaides = substr($aktoriausVardas, -3) . substr($aktoriausPavarde, -3);
echo $paskutinesRaides;

echo '<br><hr>';
// 5. Sukurti kintamąjį su stringu: “An American in Paris”. 
// Jame visas “a” (didžiąsias ir mažąsias) pakeisti 
// žvaigždutėm “*”.  Rezultatą atspausdinti.

$stringas5 = 'An American in Paris';

echo strtr($stringas5, ['a' => '*', 'A' => '*']);

echo '<br><hr>';
// 6. Sukurti kintamąjį su stringu: “An American in Paris”. 
// Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
// Rezultatą atspausdinti.

$stringas6 = 'An American in Paris';

echo "A: ", substr_count($stringas6, 'A'), ", a: " . substr_count($stringas6, 'a');

echo '<br><hr>';
// 7. Sukurti kintamąjį su stringu: “An American in Paris”. 
// Jame ištrinti visas balses. Rezultatą atspausdinti. 
// Kodą pakartoti su stringais: “Breakfast at 
// Tiffany's”, “2001: A Space Odyssey” ir 
// “It's a Wonderful Life”.

function istrintiBalses($string) {
    $balses = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    return str_replace($balses, '', $string);
}

$stringas7 = 'An American in Paris';
$stringas8 = "Breakfast at Tiffany's";
$stringas9 = '2001: A Space Odyssey';
$stringas10 = "It's a Wonderful Life";

echo istrintiBalses($stringas7) . "\n";
echo istrintiBalses($stringas8) . "\n";
echo istrintiBalses($stringas9) . "\n";
echo istrintiBalses($stringas10) . "\n";

echo '<br><hr>';
// 8. Stringe, kurį generuoja toks kodas: 
// 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
// Surasti ir atspausdinti epizodo numerį.




echo '<br><hr>';
// 9. Suskaičiuoti kiek stringe 
// “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
// yra žodžių trumpesnių arba lygių nei 5 raidės. 
// Pakartokite kodą su stringu 
// “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.




echo '<br><hr>';
// 10. Parašyti kodą, kuris generuotų atsitiktinį stringą 
// iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.


echo '<br><hr>';
// Papildomas.
// 11. Parašykite kodą, kuris generuotų 
// atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
// o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. 
// Žodžiai neturi kartotis. (reikės masyvo) -->


echo '</pre>';