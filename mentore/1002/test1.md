# Blogos funkcijos pavyzdys

Toliau pateikiama **bloga funkcija** — jos apimtis panaši kaip ankstesnio `processNumber` pavyzdžio.  
Problemos šiame kode:

- Funkcija daro **kelis dalykus vienu metu** (validacija, konversija, formatavimas).

- Naudojami **blogi pavadinimai**.
- Nėra aiškaus išskaidymo į mažesnius žingsnius.

---

## Blogas kodas

<!-- ```js -->
function handleInput(x) {
  if (typeof x !== 'string') {
    throw new Error('Wrong type');
  }

  let num = parseInt(x);
  if (isNaN(num)) {
    throw new Error('Not a number');
  }

  num = num * 3;
  num = num - 7;
  num = num / 2;

  return 'Final is ' + num;
}
<!-- ``` -->

---

## Kas blogai?

1. **Blogas pavadinimas** – `handleInput` nepasako, ką funkcija tikrai daro.  
2. **Per daug atsakomybių** vienoje vietoje:
   - Validuoja įvestį,
   - Konvertuoja į skaičių,
   - Skaičiuoja,
   - Formatuoja rezultatą.  
3. **Neaiškūs klaidų pranešimai** – `"Wrong type"`, `"Not a number"` nėra informatyvūs.  
4. Sunku parašyti **skaidrius testus**, nes viskas suplakta į vieną funkciją.  

---

👉 Tavo užduotis galėtų būti:

- Išskaidyti į **3 mažas funkcijas** (pvz., `validateInput`, `transformNumber`, `formatResult`).

- Pakeisti klaidų pranešimus į aiškius.  
- Pakeisti pavadinimus į aiškesnius.
