# Integraciniai testai

**Integraciniai testai** tikrina visų dalių bendradarbiavimą vienoje vietoje.  

Kad būtų lengviau suprasti, pažiūrėkime į **paprastą funkciją**.  
Ji priima argumentą, patikrina ar tai skaičius, tada su juo padaro kelis veiksmus ir galiausiai grąžina tekstą `Rezultatas: ...`.

---

## 1. Blogas variantas (viena didelė funkcija)

Problemos:

- Validacija, skaičiavimas ir atsakymo formatavimas yra **vienoje vietoje**.
- Sunku testuoti atskiras dalis.

```js
function processNumber(input) {
  if (typeof input !== 'number' || isNaN(input)) {
    throw new Error('Argumentas turi būti skaičius!');
  }

  let result = input * 2;
  result = result + 10;
  result = result / 2;

  return `Rezultatas: ${result}`;
}
```

---

## 2. Refaktoringas (išskaidymas į mažesnes dalis)

Tikslas:

- Kiekviena funkcija turi vieną aiškią atsakomybę.
- Galima rašyti atskirus testus kiekvienai daliai.
- Aukšto lygio funkcija tampa **skaitymo scenarijumi**.

### Domeno logika

**`src/domain/validateNumber.js`**  

```js
export function validateNumber(value) {
  if (typeof value !== 'number' || isNaN(value)) {
    throw new Error('Argumentas turi būti skaičius!');
  }
}
```

**`src/domain/calculate.js`**  

```js
export function calculate(value) {
  let result = value * 2;
  result = result + 10;
  result = result / 2;
  return result;
}
```

**`src/domain/formatResult.js`**  

```js
export function formatResult(value) {
  return `Rezultatas: ${value}`;
}
```

### Aukšto lygio funkcija

**`src/app/processNumber.js`**  

```js
import { validateNumber } from '../domain/validateNumber.js';
import { calculate } from '../domain/calculate.js';
import { formatResult } from '../domain/formatResult.js';

export function processNumber(input) {
  validateNumber(input);
  const result = calculate(input);
  return formatResult(result);
}
```

---

## 3. Integraciniai testai

Tikslas: patikrinti, kad **visa grandinė veikia kartu**.

**`tests/integration/processNumber.int.test.js`**  

```js
import { processNumber } from '../../src/app/processNumber.js';

describe('Integration: processNumber', () => {
  test('correct input returns formatted result', () => {
    const result = processNumber(10);
    expect(result).toBe('Rezultatas: 15');
  });

  test('throws error on invalid input', () => {
    expect(() => processNumber('not-a-number')).toThrow('Argumentas turi būti skaičius!');
  });
});
```

---

## Santrauka

- **Blogas kodas**: viena didelė funkcija daro viską.  
- **Geras kodas**: validacija, skaičiavimas ir formatavimas yra atskiros funkcijos.  
- **Integraciniai testai** tikrina visų dalių bendradarbiavimą vienoje vietoje.  
