# Vienetinių (Unit) testų sintaksė

Vienetiniams testams rašyti dažniausiai naudojamos **testavimo bibliotekos**, tokios kaip **Jest**, **Mocha** ar **Vitest**.  
Sintaksė dažniausiai susideda iš kelių pagrindinių elementų:

## Pavyzdys su Jest

```js
// Testuojama funkcija
function add(a, b) {
    return a + b;
}

// Testas
test("add funkcija teisingai sudeda du skaičius", () => {
    const result = add(2, 3);
    expect(result).toBe(5);
});
```

## Paaiškinimas

- `test("aprašymas", () => { ... })` – apibrėžia vieną testą.  
- `expect(rezultatas)` – nurodo, ką tikriname.  
- `.toBe(5)` – patvirtinimas (assertion), kad gautas rezultatas turi būti **5**.  

---

## AAA metodas (Arrange – Act – Assert)

AAA metodas – tai rekomenduojama testų rašymo struktūra, kad testai būtų aiškūs ir nuoseklūs.

**Arrange (Paruošk)**  
   Paruošiamos pradinės sąlygos, duomenys, objektai ar funkcijos.  
   Pvz., sukurti kintamuosius, nustatyti pradinę būseną.

```js
const a = 2;
const b = 3;
```

**Act (Atlik veiksmą)**  
Atliekamas testuojamas veiksmas, kviečiama funkcija ar metodas.

```js
const result = add(a, b);
```

**Assert (Patvirtink)**  
Tikrinama, ar gautas rezultatas atitinka lūkesčius.

```js
expect(result).toBe(5);
```

---

## Pilnas AAA pavyzdys

```js
test("add funkcija teisingai sudeda du skaičius", () => {
    // Arrange
    const a = 2;
    const b = 3;

    // Act
    const result = add(a, b);

    // Assert
    expect(result).toBe(5);
});
```

---

## Kodėl AAA metodas naudingas?

- **Aiški struktūra** – testą lengva skaityti net po ilgo laiko.  
- **Mažesnė klaidų tikimybė** – aiškiai atskiriami veiksmai.  
- **Vienodas stilius** – visi testai parašyti ta pačia logika.  
- **Lengva debuginti** – greitai galima pamatyti, ar klaida yra paruošimo, veiksmo ar patvirtinimo dalyje.  

---

## Papildomas pavyzdys su asinchronine funkcija

```js
// Asinchroninė funkcija
async function fetchData() {
    return "data";
}

// Testas
test("fetchData grąžina 'data'", async () => {
    // Arrange
    // Nereikia papildomo paruošimo

    // Act
    const result = await fetchData();

    // Assert
    expect(result).toBe("data");
});
```

---

✅ **Išvada:** Unit testų sintaksė paprasta, o AAA metodas padeda laikytis aiškios ir profesionalios struktūros tiek sinchroniniuose, tiek asinchroniniuose testuose.
