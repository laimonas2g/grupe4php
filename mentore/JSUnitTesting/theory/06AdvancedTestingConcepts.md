# Advanced Topics

## Kada toBe(), o kada toEqual()?

### toBe()

toBe() tikrina griežtą lygybę (===) — t. y. ar dvi reikšmės yra identiškos.

Tai reiškia:

- Naudojamas primityviems tipams (number, string, boolean, undefined, null).
- Negalima naudoti tiesiogiai su objektais ar masyvais, nes jie lyginami pagal nuorodą, o ne turinį.

---

✅ Tinka:  

- expect(5).toBe(5);  
- expect("abc").toBe("abc");  
- expect(true).toBe(true);

❌ Netinka objektams:
expect({ a: 1 }).toBe({ a: 1 }); // ❌ Klaida, nes tai du skirtingi objektai atmintyje

toBe() – galvok kaip „ar tai ta pati reikšmė atmintyje?“

---

### toEqual()

toEqual() tikrina turinio lygybę — ar objektai ar masyvai turi tas pačias reikšmes.

Tai reiškia:

- Naudojamas objektams, masyvams, sudėtiniams duomenų tipams.
- Patikrina rekursyviai visus laukus / elementus.

✅ Tinka objektams:
expect({ a: 1 }).toEqual({ a: 1 }); // ✅ OK
expect([1, 2, 3]).toEqual([1, 2, 3]); // ✅ OK

✅ Veikia ir su primityvais (kaip toBe()):
expect(10).toEqual(10);

> Trumpai:
>
> - toBe() – ar tai ta pati reikšmė?
> - toEqual() – ar turinys toks pats?

## Unit testavimas su asinchroninėmis funkcijomis

Asinchroninės funkcijos (`async/await`, `Promise`, `setTimeout`, HTTP užklausos ir pan.) yra dažna realaus kodo dalis.  
Todėl labai svarbu mokėti jas teisingai testuoti — nes **asinchroninis kodas veikia ne iš karto**.

---

## 1️⃣ Kas yra asinchroninis testas?

Kai funkcija **negrąžina rezultato iš karto**, testas turi **laukti**, kol operacija bus užbaigta.

Pvz., ši funkcija:

```js
function fetchUser() {
  return new Promise((resolve) => {
    setTimeout(() => resolve({ name: "Jonas" }), 1000);
  });
}
```

### Blogas testas

```js
function fetchUser() {
  return new Promise((resolve) => {
    setTimeout(() => resolve({ name: "Jonas" }), 1000);
  });
}
```

### Teisingas testas - naudojame async/await, kad testas palauktų, kol Promise bus išspręstas

```js
import { test, expect } from "vitest";

test("fetchUser grąžina duomenis", async () => {
  const result = await fetchUser();
  expect(result).toEqual({ name: "Jonas" });
});

```

## 3 būdai testuoti asinchroninį kodą

1. async/await - moderniausias, aiškiausias būdas

```js
import { test, expect } from "vitest";

async function getData() {
  return "OK";
}

test("getData grąžina OK", async () => {
  const result = await getData();
  expect(result).toBe("OK");
});
```

2. Naudojant return Promise  

Galima grąžinti Promise iš test() funkcijos — Jest, Vitest ar Mocha palauks, kol ji bus įvykdyta.

```js
import { test, expect } from "vitest";

function delayedValue() {
  return new Promise((resolve) => {
    setTimeout(() => resolve(42), 300);
  });
}

test("delayedValue grąžina 42", () => {
  return delayedValue().then((value) => {
    expect(value).toBe(42);
  });
});
```

3. Naudojant done callback  
Senesnis būdas, kai reikia tiksliai nurodyti, kada testas baigtas.

```js
import { test, expect } from "vitest";

function fetchData(cb) {
  setTimeout(() => cb("OK"), 200);
}

test("fetchData grąžina OK", (done) => {
  fetchData((data) => {
    expect(data).toBe("OK");
    done(); // pasakome Vitest, kad testas baigtas
  });
});
```

## Testavimas, kai asinchroninė funkcija meta klaidą

Pvz. – klaidos atvejis su async/await:

```js
import { test, expect } from "vitest";

async function fetchUser() {
  throw new Error("Network Error");
}

test("fetchUser meta klaidą", async () => {
  await expect(fetchUser()).rejects.toThrow("Network Error");
});
```

Pvz. – klaidos atvejis su Promise

```js
import { test, expect } from "vitest";

function fetchUser() {
  return Promise.reject(new Error("Network Error"));
}

test("fetchUser meta klaidą", () => {
  return expect(fetchUser()).rejects.toThrow("Network Error");
});
```

### Kaip testuoti setTimeout ir setInterval naudojant „fake timers“ (Vitest)

Testas su „fake timers“:

```js
function runLater(callback) {
  setTimeout(() => callback("done"), 1000);
}

import { test, expect, vi } from "vitest";

test("runLater iškviečia callback", () => {
  vi.useFakeTimers();              // aktyvuojame fake laiką
  const callback = vi.fn();

  runLater(callback);

  vi.advanceTimersByTime(1000);    // prasukame 1s į priekį
  expect(callback).toHaveBeenCalledWith("done");

  vi.useRealTimers();              // grąžiname realų laiką
});
```

## Testų „Hooks“ su Vitest

Testavimo „hooks“ (arba **gyvavimo ciklo funkcijos**) leidžia vykdyti tam tikrą kodą **prieš arba po testų**.  
Tai naudinga, kai reikia **paruošti**, **išvalyti** arba **pakartotinai panaudoti** tą pačią logiką keliuose testuose.

---

## 🧩 Kas yra testų „hooks“?

Vitest suteikia galimybę valdyti testų gyvavimo ciklą naudojant šias funkcijas:

| Hook           | Kada vykdomas         | Dažniausias panaudojimas                              |
|----------------|-----------------------|-------------------------------------------------------|
| `beforeAll()`  | Prieš visus testus    | Vienkartinis paruošimas (pvz., duomenų bazės jungtis) |
| `beforeEach()` | Prieš kiekvieną testą | Inicializavimas prieš kiekvieną testą                 |
| `afterAll()`   | Po visų testų         | Uždaromos jungtys, išvalomi resursai                  |
| `afterEach()`  | Po kiekvieno testo    | Išvalomi duomenys po kiekvieno testo                  |

---

### 🧠 Paprastas pavyzdys, hook'ų vykdymo tvarka

```js
describe("A", () => {
  beforeAll(() => console.log("A - beforeAll"));
  beforeEach(() => console.log("A - beforeEach"));
  afterEach(() => console.log("A - afterEach"));
  afterAll(() => console.log("A - afterAll"));

  test("test 1", () => console.log("A test 1"));
  test("test 2", () => console.log("A test 2"));
});

```

🧭 Vykdymo eiga:  
A - beforeAll  
A - beforeEach  
A test 1  
A - afterEach  
A - beforeEach  
A test 2  
A - afterEach  
A - afterAll  

| Hook           | Kada vykdomas                  | Pagrindinis tikslas                           |
| -------------- | ------------------------------ | --------------------------------------------- |
| `beforeAll()`  | Vieną kartą prieš visus testus | Globalus pasiruošimas                         |
| `beforeEach()` | Prieš kiekvieną testą          | Pradinių reikšmių nustatymas                  |
| `afterEach()`  | Po kiekvieno testo             | Išvalymas                                     |
| `afterAll()`   | Vieną kartą po visų testų      | Baigiamieji veiksmai (pvz., uždaryti jungtis) |
