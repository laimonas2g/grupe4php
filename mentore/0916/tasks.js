// 1) Paprasta funkcija su pasirenkamu parametru ir pavyzdžiu
// Aprašyk sumWithDiscount(a, b, discount) JSDoc: du privalomi skaičiai, vienas pasirenkamas su numatytąja reikšme.Grąžina skaičių ir pateikia bent vieną @example.
 
/**
 * Adds two numbers and returns the sum of a and b with a discount.
 * @param {number} a - First number.
 * @param {number} b - Second number.
 * @param {number} [discount=0] - Third number, discount.
 * @returns {number} - sum of a and b with a discount.
 */

function sumWithDiscount(a, b, discount = 0) {
    const sum = a + b;
    return sum - sum * discount;
}
console.log(sumWithDiscount(50, 50, 0.21));
 
// 2) Objektų destruktūrizavimas, privalomos ir pasirenkamos savybės, @throws
// Aprašyk JSDoc greet({ name, age }).name privaloma, age pasirenkama.Išmeta klaidą, jei name tuščias.Grąžina tekstą.
 
/**
 * function that greets client with their name and optionally their age.
 * @param {Object} Object containing name and age.
 * @param {string} name of the client.
 * @param {number} age of the client (optional).
 * @returns {string} - greeting text.
 * @throws {Error} - if name is empty, throws error.
 */

function greet({ name, age }) {
    if (!name) throw new Error("Name is required");
    return age ? `Hello, ${name} (${age})!` : `Hello, ${name}!`;
}

 
// 3) Async funkcija su @template(generinis tipas)
// Aprašyk JSDoc fetchJson(url) taip, kad grąžintų Promise < T >, kur T – generinis tipas pagal faktinį JSON.
 
async function fetchJson(url) {
    const res = await fetch(url);
    if (!res.ok) throw new Error(`HTTP ${res.status}`);
    return res.json();
}
 
// 4) Callback tipas su @callback ir @param funkcijai
// Sukurk @callback tipą Iteratee, naudok jį mapAsync(arr, iteratee), kuri grąžina Promise su nauju masyvu.
 
async function mapAsync(arr, iteratee) {
    const out = [];
    for (const [i, v] of arr.entries()) {
        out.push(await iteratee(v, i, arr));
    }
    return out;
}
 
// 5) @enum pavyzdys
// Aprašyk Status kaip @enum { number } su reikšmėmis IDLE = 0, RUNNING = 1, DONE = 2. Funkcija isDone(s) grąžina boolean.
 
const Status = {
    IDLE: 0,
    RUNNING: 1,
    DONE: 2
};
 
function isDone(s) {
    return s === Status.DONE;
}
 
// 6) Klasė su @template, konstruktorius ir metodai
// Aprašyk generinę eilę Queue su metodais enqueue(item), dequeue(), size().
 
class Queue {
    constructor() {
        this._items = [];
    }
    enqueue(item) { this._items.push(item); }
    dequeue() { return this._items.shift(); }
    size() { return this._items.length; }
}
 
// 7) @this kontekstas paprastai funkcijai
// Aprašyk increment taip, kad this būtų objektas su { value: number }. Funkcija padidina value ir grąžina naują reikšmę.
 
function increment(step = 1) {
    this.value += step;
    return this.value;
}
 
// 8) Funkcijos perkrovos su @overload
// Aprašyk range(a, b, step) su dviem naudosenomis:
// - range(end) → nuo 0 iki end(neįskaitytinai),
// - range(start, end, step = 1) → nuo start iki end(neįskaitytinai).
 
function range(a, b, step = 1) {
    let start, end;
    if (b === undefined) { start = 0; end = a; }
    else { start = a; end = b; }
    const out = [];
    for (let x = start; x < end; x += step) out.push(x);
    return out;
}
 
// 9) Modulis ir eksportai su @module / @exports
// Pažymėk modulį ir jo eksportuojamas dalis: makeId(prefix) ir ID_RE.Nenaudok realių importų – tik JSDoc.
 
const ID_RE = /^[a-z]+-\d+$/i;
 
function makeId(prefix) {
    const n = Math.floor(Math.random() * 1e6);
    return `${prefix}-${n}`;
}
 
// export { makeId, ID_RE };
 
// 10) @deprecated, @since, @see ir @typedef
// Aprašyk tipą User su id: string, name: string.Funkcija getUserName(u) pasenusi – nurodyk alternatyvą formatUser(u).Įrašyk @since.
 
function getUserName(u) {
    return u.name;
}
 
function formatUser(u) {
    return `${u.name} <${u.id}>`;
}