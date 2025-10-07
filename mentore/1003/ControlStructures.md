# Control Structures (Valdymo struktūros)

## Turinys

- [If...else](#ifelse)
- [Switch](#switch)
- [Ternary operatorius](#ternary-operatorius)   
- [For ciklas](#for-ciklas)
- [While ciklas](#while-ciklas)
- [Do...while ciklas](#dowhile-ciklas)
- [Break ir continue](#break-ir-continue)
- [Try...catch](#trycatch)
- [Throw](#throw)
- [Finally](#finally)
- [Return](#return)
- [Yield](#yield)
- [Await](#await)
- [Async](#async)
- [Conclusion](#conclusion)

## If...else

## Switch

## Ternary operatorius

## For ciklas

## While ciklas

## Do...while ciklas

## Break ir continue

## Try...catch

## Throw

## Finally

## Return

## Yield

## Await

## Async

## Conclusion

Šiame skyriuje aptarsime įvairias valdymo struktūras, kurios padeda kontroliuoti programos srautą ir logiką. Valdymo struktūros leidžia vykdyti skirtingas kodo dalis priklausomai nuo tam tikrų sąlygų ar įvykių.

Kiekviena valdymo struktūra turi savo specifinę paskirtį ir naudojimo atvejus. Pavyzdžiui, `if...else` struktūra leidžia vykdyti skirtingas kodo dalis priklausomai nuo sąlygų, o `switch` struktūra yra naudinga, kai reikia palyginti vieną reikšmę su keliomis galimomis reikšmėmis.

Ternary operatorius yra trumpesnis būdas rašyti paprastą `if...else` struktūrą, o ciklai, tokie kaip `for`, `while` ir `do...while`, leidžia kartoti kodo bloką kelis kartus.

Break ir continue yra naudojami cikluose, kad būtų galima nutraukti ciklą arba praleisti tam tikrą iteraciją. Try...catch struktūra leidžia tvarkyti klaidas ir išimtis, o throw yra naudojamas klaidų metimui.

Finally blokas yra vykdomas nepriklausomai nuo to, ar buvo sugauta klaida, ar ne. Return yra naudojamas funkcijose, kad grąžintų reikšmę, o yield yra naudojamas generatoriuose, kad sustabdytų ir vėl paleistų funkciją. Await ir async yra naudojami asinchroniniam kodui valdyti, leidžiant laukti asinchroninių operacijų pabaigos.
Šios valdymo struktūros yra esminės programavimo kalbų dalys ir padeda kurti efektyvų, skaitomą ir lengvai prižiūrimą kodą.

## If...else

`If...else` struktūra yra viena iš pagrindinių valdymo struktūrų, leidžiančių vykdyti skirtingas kodo dalis priklausomai nuo tam tikrų sąlygų. Pavyzdžiui:

```php
if ($x > $y) {
    echo "$x yra didesnis už $y";
} else {
    echo "$x yra mažesnis arba lygus $y";
}
```

Ši struktūra leidžia patikrinti sąlygą (šiuo atveju, ar `$x` yra didesnis už `$y`) ir vykdyti atitinkamą kodo bloką, priklausomai nuo to, ar sąlyga yra teisinga, ar ne.

## Switch

`Switch` struktūra yra naudinga, kai reikia palyginti vieną reikšmę su keliomis galimomis reikšmėmis. Pavyzdžiui:

```php
switch ($day) {
    case 'Monday':
        echo "Šiandien yra pirmadienis";
        break;
    case 'Tuesday':
        echo "Šiandien yra antradienis";
        break;
    default:
        echo "Tai nėra pirmadienis ar antradienis";
}
```
