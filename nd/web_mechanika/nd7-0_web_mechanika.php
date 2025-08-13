<?php

/* WEB mechanika (background edition) */

/* 1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, 
o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, 
o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. 
+++
*/


/* 2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) 
puslapio fono spalva pasidarytų tokios spalvos. 
+++
*/


/* 3. Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti 
mygtuku GET metodu formoje. */


/* 4. Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite atitinkamom spalvom. 
Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį orange.php. 
Pademonstruokite veikimą. */


/* 5. Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) 
naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). */


/* 6. Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. 
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, 
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. */


/* 7. Pakartokite 6 uždavinį. Papildykite jį kodu, 
kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. */


/* 8. Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. 
Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. 
Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. 
Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, 
naršyklė būtų peradresuojama į pink.php puslapį. */


/* 9. Padarykite juodą puslapį, kuriame būtų POST forma, 
mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 
Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, 
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). */


/* 10. Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. 
Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. */


/* 11. papildomas
Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. 
Šone yra rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. 
Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, 
o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). 
Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. 
Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.
*/


?>