# Testavimo Aplinka ir Jos Sudedamosios Dalys

Norint efektyviai atlikti **automatizuotą testavimą**, reikia tinkamai pasiruošti testavimo aplinką. Ji dažniausiai susideda iš kelių tarpusavyje integruotų komponentų.

---

## Pagrindinės sudedamosios dalys

| **Komponentas**         | **Aprašymas** |
|--------------------------|---------------|
| **Programos aplinka (Application Setup & Code)** | Tai yra jūsų projekto bazė – pati programa ar jos dalys, kurias ketinate testuoti. Paprastai paruošiama naudojant įrankius, tokius kaip **Webpack**, **Vite** ar kiti projektų „bundleriai“. Ji gali veikti visiškai nepriklausomai nuo testavimo įrankių. |
| **Testų paleidimo įrankis (Test Runner)** | Įrankis, kuris paleidžia testus (t. y. testavimo kodą). Jis **automatiškai aptinka testavimo failus**, paleidžia juos ir **aiškiai pateikia rezultatus**. *Pavyzdžiai:* **Jest**, **Karma**. |
| **Patvirtinimo biblioteka (Assertion Library)** | Naudojama **apibrėžti lūkesčiams** – t. y., kas turėtų įvykti, kad testas būtų laikomas sėkmingu. Ji **patikrina, ar rezultatas atitinka lūkesčius** ir palaiko įvairius darbo režimus (sinchroninį bei asinchroninį). *Pavyzdžiai:* **Chai**, **Jest** (turi savo integruotą assertion biblioteką). |

---

## Kaip veikia testavimo procesas

1. **Paruošiamas projektas**
   - Sukuriama arba importuojama programa ar jos dalis, kuri bus testuojama.
   - Pavyzdžiui, galite turėti React komponentą ar paprastą JavaScript funkciją.

2. **Parašomas testas**
   - Apibrėžiama, ką tiksliai norite patikrinti.
   - Pvz., „Funkcija `add()` turi grąžinti teisingą dviejų skaičių sumą“.

3. **Test Runner paleidžia testą**
   - Įrankis, toks kaip **Jest**, automatiškai suranda testavimo failus, paleidžia kodą ir įvertina rezultatus.

4. **Assertion biblioteka patikrina rezultatą**
   - Pvz., naudojant **Chai**:  
  
     ```js
     expect(add(2, 3)).to.equal(5);
     ```

5. **Rezultato atvaizdavimas**
   - Jei visi testai sėkmingi – matomas **žalias statusas** ✅.
   - Jei testas nepavyksta – pateikiama klaidos žinutė ❌ su nurodymu, kas nepavyko.

---

## Integruota aplinka

Nors šios dalys gali veikti **nepriklausomai**, dažniausiai jos yra **integruojamos** į vieningą sistemą.  
Pavyzdžiui:

- **Jest** gali veikti tiek kaip **Test Runner**, tiek kaip **Assertion biblioteka**.
- „Bundleris“ (**Webpack**, **Vite**) padeda paruošti programos kodą, kad testai galėtų būti paleisti įvairiose aplinkose.

> **Patogumas:** Naudojant integruotus įrankius, visą testavimo procesą galima atlikti viena komanda terminale, o rezultatus gauti greitai ir aiškiai.

---

## Automatizuotų testų privalumai

- **Greitis:** Testai vykdomi akimirksniu, palyginti su rankiniu testavimu.
- **Tikslumas:** Nėra žmogiškųjų klaidų, kurios būdingos rankiniam testavimui.
- **Pakartojamumas:** Testus galima vykdyti tiek kartų, kiek reikia, visada gaunant nuoseklius rezultatus.
- **Platus aprėpties spektras:** Galima testuoti tiek mažus kodo vienetus (unit test), tiek didelius funkcionalumus (E2E testai).
- **Integracija su CI/CD:** Automatizuotus testus galima prijungti prie nuolatinės integracijos sistemų, kad jie būtų paleidžiami automatiškai kiekvieno kodo atnaujinimo metu.

---

## Pavyzdinė testavimo aplinkos schema

Programos kodas → Test Runner (pvz., Jest) → Assertion biblioteka (pvz., Chai) → Testų rezultatai

## Išvada

Tinkamai sukonfigūruota testavimo aplinka yra būtina sąlyga **efektyviam automatizuotam testavimui**.  
Suprasdami kiekvieno komponento paskirtį, galėsite kurti patikimus testus, kurie:

- užtikrins jūsų programos kokybę,
- sutaupys laiką,
- leis greitai identifikuoti klaidas ir jas pašalinti.

> Jeigu dirbame su ECMAScript Modules - Jest nerekomenduojamas nes kol kas [eksperimentiniame lygmenyje](https://jestjs.io/docs/ecmascript-modules).
>
> [Vitest](https://vitest.dev/) veikia geriau ir jis apima Jest API.

```bash
npm install --save-dev vitest
```

```json
"scripts": {
    "test": "vitest --globals"
  },
```
