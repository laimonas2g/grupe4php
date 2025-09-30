// Unit testavimo užduotys su Vitest
 
// Žemiau pateiktos funkcijos skirtos praktikuotis vienetinių testų rašyme.  
// Kiekvienai funkcijai parašyk bent 2–3 testus su Vitest , patikrindamas teisingus ir neteisingus scenarijus.
 
// 1. Sudėtis
export function add(a, b) {
    return a + b;
}
 
// Užduotis:
// - Patikrink, ar`add(2, 3)` grąžina`5`.  
// - Patikrink, ar`add(-1, 1)` grąžina`0`.
 
// 2. Skaičiaus lyginis tikrinimas
export function isEven(n) {
    return n % 2 === 0;
}
 
// Užduotis:
// - Patikrink, ar`isEven(4)` yra`true`.  
// - Patikrink, ar`isEven(5)` yra`false`.
 
// 3. Didžiausio skaičiaus radimas
export function max(a, b) {
    return a > b ? a : b;
}
 
// Užduotis:
// - Patikrink, ar`max(10, 7)` grąžina`10`.  
// - Patikrink, ar`max(3, 9)` grąžina`9`.
 
// 4. Teksto ilgis
export function stringLength(str) {
    return str.length;
}
 
// Užduotis:
// - Patikrink, ar`stringLength("test")` yra`4`.  
// - Patikrink, ar`stringLength("")` yra`0`.
 
// 5. Masės konvertavimas į kilogramus
export function gramsToKg(grams) {
    return grams / 1000;
}
 
// Užduotis:
// - Patikrink, ar`gramsToKg(2000)` yra`2`.  
// - Patikrink, ar`gramsToKg(0)` yra`0`.
 
// 6. Pirmoji masyvo reikšmė
export function firstElement(arr) {
    return arr[0];
}
 
// Užduotis:
// - Patikrink, ar`firstElement([10, 20, 30])` yra`10`.  
// - Patikrink, ar`firstElement([])` grąžina`undefined`.
 
// 7. Apverstas tekstas
export function reverseString(str) {
    return str.split("").reverse().join("");
}
 
// Užduotis:
// - Patikrink, ar`reverseString("abc")` yra`"cba"`.  
// - Patikrink, ar`reverseString("")` yra`""`.
 
// 8. Skaičiaus pakėlimas kvadratu
export function square(n) {
    return n * n;
}
 
// Užduotis:
// - Patikrink, ar`square(5)` yra`25`.  
// - Patikrink, ar`square(0)` yra`0`.
 
// 9. Skaičiaus faktorialas
export function factorial(n) {
    if (n === 0) return 1;
    return n * factorial(n - 1);
}
 
// Užduotis:
// - Patikrink, ar`factorial(4)` yra`24`.  
// - Patikrink, ar`factorial(0)` yra`1`.
 
// 10. Ar tekstas prasideda didžiąja raide
export function startsWithUpperCase(str) {
    return /^[A-Z]/.test(str);
}
 
// Užduotis:
// - Patikrink, ar`startsWithUpperCase("Hello")` yra`true`.
// - Patikrink, ar`startsWithUpperCase("world")` yra`false`.