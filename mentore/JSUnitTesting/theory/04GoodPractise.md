# Kaip rašyti gerus testus

Šioje paskaitoje remsimės skaidrėse pateiktomis pagrindinėmis idėjomis apie tai,  
ką verta testuoti, o ko geriau vengti, bei kokie yra gero testo principai.

---

## Ką reikėtų ir ko nereikėtų testuoti

### ✅ Testuokite

- **Tik savo kodą** – t. y. tai, ką jūs parašėte ir valdote.
- **Kliento pusės reakcijas** į įvairias serverio užklausas bei klaidas.  
  Pvz., kaip elgiasi aplikacija, kai `fetch()` grąžina klaidą ar tuščią atsakymą.

### ❌ Nereikėtų testuoti

- **Trečiųjų šalių bibliotekų** – jos turi savo testus.
- **To, ko negalite pakeisti** – pvz., naršyklės ar Node.js vidinių mechanizmų.
- **Serverio kodo per kliento kodą** – vietoj to reikia rašyti atskirus backend testus.

> **Svarbu:** testuokite tik savo programos logiką ir elgesį, o ne tai, ką jau yra patikrinę kiti.

---

## Kaip rašyti gerus testus

### 1. Arrange – Act – Assert (AAA principas)

- **Arrange (paruošimas):** pasiruoškite reikalingus duomenis, aplinką ar objektus.
- **Act (veiksmas):** iškvieskite testuojamą funkciją ar atlikite veiksmą.
- **Assert (patvirtinimas):** patikrinkite, ar gautas rezultatas atitinka lūkesčius.

### 2. Testuokite tik vieną dalyką

- Viename teste turėtų būti tik **vienas scenarijus / viena funkcija**.
- Pvz.: arba tikriname **įvesties validaciją**, arba tikriname **duomenų transformaciją** – bet ne abu kartu.

### 3. Laikykite mažą `expect` kiekį

- Kuo daugiau patikrinimų viename teste, tuo sunkiau suprasti, kas iš tikrųjų sugedo.
- Geriau parašyti kelis mažus testus nei vieną didelį „viską tikrinantį“.

---

## Pavyzdžiai

### Blogas testas (tikrina per daug dalykų vienu metu)

```js
test('should validate input and transform data correctly', () => {
  const input = 'test@example.com';
  const result = transformData(input);

  expect(validateEmail(input)).toBe(true);
  expect(result).toBe('TEST@EXAMPLE.COM');
});
```

Problemos:

- Vienas testas tikrina dvi skirtingas funkcijas (`validateEmail` ir `transformData`).
- Jei testas nepavyks, bus sunku suprasti, dėl kurios priežasties.

---

### Geras testas (vienas testas – viena atsakomybė)

```js
test('should validate email correctly', () => {
  const input = 'test@example.com';
  expect(validateEmail(input)).toBe(true);
});

test('should transform email to uppercase', () => {
  const input = 'test@example.com';
  expect(transformData(input)).toBe('TEST@EXAMPLE.COM');
});
```

Privalumai:

- Kiekvienas testas turi aiškią atsakomybę.
- Lengva suprasti, kas neveikia, jei testas sugedo.

---

## Santrauka

- **Testuokite tik savo kodą.**
- **Nerašykite testų trečiųjų šalių bibliotekoms.**
- **Naudokite AAA struktūrą (Arrange – Act – Assert).**
- **Vienas testas = viena atsakomybė.**
- **Laikykite testus trumpus, aiškius ir fokusuotus.**

> **Tikslas:** testai turi padėti jums **greitai ir aiškiai suprasti**, ar jūsų kodas veikia taip, kaip numatyta.
