<?php

/* Funkcijos */

/* 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; */
function tagH1text(string $text) : string 
{
return "<h1>$text</h1>";
}

echo tagH1text("Tekstas!");

/* 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, 
o antrasis tago numeris (1-6). 
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją; */

function tagTextNumber(string $text, int $number): string
{
    if ($number < 1 || $number > 6) {
        throw new InvalidArgumentException("Number must be between 1 and 6.");
    }
    return "<h$number>$text</h$number>";
}

echo tagTextNumber("Tekstas!", 2);

/* 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, 
juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback(); */

// // this text was used in 2002
// // we want to get this up to date for 2003
// $text = "April fools day is 04/01/2002\n";
// $text.= "Last christmas was 12/24/2001\n";
// // the callback function
// function next_year($matches)
// {
//   // as usual: $matches[0] is the complete match
//   // $matches[1] the match for the first subpattern
//   // enclosed in '(...)' and so on
//   return $matches[1].($matches[2]+1);
// }
// echo preg_replace_callback(
//             "|(\d{2}/\d{2}/)(\d{4})|",
//             "next_year",
//             $text);
$randomString = md5(time());

function md5ToTag(string $text) :string {
    return preg_replace_callback(
        '/\d+/',
        function ($matches) {
            return "<h1>$matches[0]</h1>";
        },
        $text
    );
}

echo md5ToTag($randomString);

/* 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
(išskyrus vienetą ir patį save) 
Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių; */


/* 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją. */


/* 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. 
Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius. */


/* 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, 
elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, 
kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. 
Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0; */


/* 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
Skaičiuoti reikia visuose masyvuose ir submasyvuose. */


/* 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. 
Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, 
prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. 
Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. 
Kartokite, kol sąlyga nereikalaus pridėti elemento. */


/* 10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, 
kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 
Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, 
suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 
Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. */


/* 11. Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. 
Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai. 
Santykis skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. 
Reikšmių masyvų ilgis nuo 1 iki 5, o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, 
o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai. 
Suskaičiuoti kiek elementų turi masyvas. Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. 
Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . 
Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. 
Kiekvienas div elementas turi savo unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota). 
pvz: <div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 </div> </div> */

?>