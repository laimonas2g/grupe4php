<?php

/* 
Objektiniai uždaviniai 
// Example 1: Basic class with constructor
class User {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

// Example 2: Class with multiple constructor arguments
class Product {
    public $id;
    public $title;
    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }
}

// Example 3: Constructor with default value
class Car {
    public $brand;
    public function __construct($brand = "Toyota") {
        $this->brand = $brand;
    }
}

// Example 4: Constructor initializing an array property
class Order {
    public $items;
    public function __construct($items = []) {
        $this->items = $items;
    }
}

// Example 5: Constructor using type hints
class Customer {
    public string $email;
    public function __construct(string $email) {
        $this->email = $email;
    }
}
*/

/* 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. 
Parašyti šiai savybei metodus 
prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). 
Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą. */

class Kibiras1 {

    private $akmenuKiekis = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        
    }

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }
}

$kibiras = new Kibiras1();
$kibiras->prideti1Akmeni();
$kibiras->pridetiDaugAkmenu(5);
echo 'Pririnkta akmenų: ' . $kibiras->kiekPririnktaAkmenu();

/* 2. Sukurti klasę Pinigine. 
Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. 
Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, 
jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), 
kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
Sukurti klasės objektą ir pademonstruoti veikimą. 
Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje. */

class Pinigine {

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis) {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti() {
        echo 'Popieriniai: ' . $this->popieriniaiPinigai . ', Metaliniai: ' . $this->metaliniaiPinigai . '<br>';
    }
}

$pinigine = new Pinigine();
$pinigine->ideti(1);
$pinigine->ideti(5);
$pinigine->ideti(2);
$pinigine->skaiciuoti();

/* 3. (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. 
Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. 
Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. 
Sukurkite geterį objekte, ir statinį geterį klasėje, 
kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. 
Sukurkite tris kibirus ir pademonstruokite veikimą. */

class Kibiras2 {

    private $akmenuKiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }

    public static function kiekVisuoseKibiruose() {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}

$kibirasA = new Kibiras2();
$kibirasB = new Kibiras2();
$kibirasC = new Kibiras2();

$kibirasA->prideti1Akmeni();
$kibirasA->pridetiDaugAkmenu(3);
$kibirasB->pridetiDaugAkmenu(5);
$kibirasC->prideti1Akmeni();

echo 'Kibiras A: ' . $kibirasA->kiekPririnktaAkmenu() . '<br>';
echo 'Kibiras B: ' . $kibirasB->kiekPririnktaAkmenu() . '<br>';
echo 'Kibiras C: ' . $kibirasC->kiekPririnktaAkmenu() . '<br>';
echo 'Visuose kibiruose: ' . Kibiras2::kiekVisuoseKibiruose() . '<br>';

/* 4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. 
Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. 
KibirasNePo1 turi naudoti visus tėvinius metodus, 
bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. 
Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą. */

class Kibiras3 {

    private $akmenuKiekis = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }
}

class KibirasNePo1 extends Kibiras3 {

    public function prideti1Akmeni() {
        $kiekis = rand(2, 5);
        $this->pridetiDaugAkmenu($kiekis);
    }
}

$kibirasNePo1 = new KibirasNePo1();
$kibirasNePo1->prideti1Akmeni();
$kibirasNePo1->pridetiDaugAkmenu(7);
echo 'KibirasNePo1 pririnkta akmenų: ' . $kibirasNePo1->kiekPririnktaAkmenu() . '<br>';

/* 5. Create a class called BookShelf in PHP.
The class should have a private property $books 
representing the number of books on the shelf (default is 0).
Add a static private property $totalBooksOnAllShelves 
to track the total number of books on all shelves.
Implement a method addBooks($count) 
that adds a specified number of books to the shelf and 
increases the static total accordingly.
Create a getter for the object's book count, 
and a static getter for the total count on all shelves.
Demonstrate the functionality by creating three BookShelf objects, 
adding books to each, and displaying the count for each shelf and the overall total. */

class BookShelf {

    private $books = 0;
    private static $totalBooksOnAllShelves = 0;

    public function addBooks($count) {
        $this->books += $count;
        self::$totalBooksOnAllShelves += $count;
    }

    public function getBooks() {
        return $this->books;
    }

    public static function getTotalBooks() {
        return self::$totalBooksOnAllShelves;
    }
}

$shelf1 = new BookShelf();
$shelf2 = new BookShelf();
$shelf3 = new BookShelf();

$shelf1->addBooks(10);
$shelf2->addBooks(7);
$shelf3->addBooks(5);

echo 'Shelf 1: ' . $shelf1->getBooks() . '<br>';
echo 'Shelf 2: ' . $shelf2->getBooks() . '<br>';
echo 'Shelf 3: ' . $shelf3->getBooks() . '<br>';
echo 'Total books on all shelves: ' . BookShelf::getTotalBooks() . '<br>';

/* 6. Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. 
Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. 
Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. 
Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, 
tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 
200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, 
o mažesnę į dar mažesnę. */

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis) {
        $this->turis = $turis;
    }

    public function ipilti($kiekis) {
        $this->kiekis += $kiekis;
        if ($this->kiekis > $this->turis) {
            $this->kiekis = $this->turis;
        }
    }

    public function ispilti() {
        $islieta = $this->kiekis;
        $this->kiekis = 0;
        return $islieta;
    }

    public function getKiekis() {
        return $this->kiekis;
    }
}

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1->ipilti(200);
$likutis = $stikline1->ispilti();
$stikline2->ipilti($likutis);
$likutis = $stikline2->ispilti();
$stikline3->ipilti($likutis);

echo 'Stiklinė 1: ' . $stikline1->getKiekis() . '<br>';
echo 'Stiklinė 2: ' . $stikline2->getKiekis() . '<br>';
echo 'Stiklinė 3: ' . $stikline3->getKiekis() . '<br>';

/* 7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. 
Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. 
Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: 
valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. 
Eiti grybauti, t.y. Kurti naujus Grybas objektus, 
jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, 
kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų 
(gali būti biški daugiau nei DYDIS). */


/* 8. Patobulinti 2 uždavinio piniginę taip, 
kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. 
Parašyti metodą monetos(), 
kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - 
popierinių pinigų skaičiavimui. */


/* 9. (STATIC) Sukurkite klasę MarsoPalydovas.  
Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. 
Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. 
Pirmam sukuriamam objektui įrašykite privačią savybę vardas lygią stringui “Deimas”, 
o antram tokią pat savybę tik lygią stringui “Fobas”. 
Bandant sukurti trečią objektą, 
turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka. */


/* 10. (STATIC) Sukurti klasę Tenisininkas. Klasė Tenisininkas turi privačią savybę vardas, 
privačią savybę kamuoliukas  (true jei turi ir false jei ne) 
privačią static savybę zaidejas1, 
privačią static savybę zaidejas2 (žaidėjų objektams saugoti)  
Klasė turi tokius metodus: 
A. Public arTuriKamuoliuka();
B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas objektui;
C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam žaidėjo objektui;
Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas. 
Iškviesti statinį metodą zaidimoPradzia() ir kažkuriam žaidėjui priskirti kamuoliuką. 
Žaidėjo objekto metodu perduotiKamuoliuka() perduoti kamuoliuką kitam žaidėjui. 
Žaidėjas, kuris neturi kamuoliuko, perduoti kitam negali. */



?>