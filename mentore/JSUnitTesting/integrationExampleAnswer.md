# Refaktoringas ir testai (paprastas pavyzdys)

Žemiau – tvarkingas refaktoringas „blogos“ funkcijos, kuri:

1) patikrina, ar argumentas yra **string**, iš kurio galima gauti **skaičių**,  
2) su skaičiumi atlieka kelis veiksmus,  
3) grąžina **formatuotą** rezultatą: `Rezultatas: ${...}`.

Taip pat – **unit** testai kiekvienai mažai funkcijai ir **integracinis** testas visai grandinei.

---

## Katalogų struktūra

```md
src/
├─ app/
│  └─ processInput.js
└─ domain/
   ├─ validateAndParse.js
   ├─ transformNumber.js
   └─ formatResult.js

tests/
├─ unit/
│  ├─ validateAndParse.unit.test.js
│  ├─ transformNumber.unit.test.js
│  └─ formatResult.unit.test.js
└─ integration/
   └─ processInput.int.test.js
```

---

## Refaktoringas (3 mažos funkcijos + orkestratorius)

**1. Validacija ir konversija** – priima `string`, grąžina `number`, meta aiškias klaidas.

```js
// src/domain/validateAndParse.js
export function validateAndParse(input) {
  if (typeof input !== 'string') {
    throw new Error('Įvestis turi būti tekstas (string).');
  }

  const num = Number.parseFloat(input);
  if (Number.isNaN(num)) {
    throw new Error('Tekstas turi reprezentuoti skaičių.');
  }

  return num;
}
```

**2. Transformacija** – visi skaičiavimai vienoje vietoje (lengva testuoti, keisti taisykles).

```js
// src/domain/transformNumber.js
export function transformNumber(value) {
  let result = value * 3;
  result = result - 7;
  result = result / 2;
  return result;
}
```

**3. Formatavimas** – vienintelė atsakomybė: grąžinti „Rezultatas: X“.

```js
// src/domain/formatResult.js
export function formatResult(value) {
  return `Rezultatas: ${value}`;
}
```

**4. Orkestratorius** – „skaitymo istorija“: validate → transform → format.

```js
// src/app/processInput.js
import { validateAndParse } from '../domain/validateAndParse.js';
import { transformNumber } from '../domain/transformNumber.js';
import { formatResult } from '../domain/formatResult.js';

export function processInput(raw) {
  const parsed = validateAndParse(raw);
  const transformed = transformNumber(parsed);
  return formatResult(transformed);
}
```

---

## Unit testai

**A. `validateAndParse`**

```js
// tests/unit/validateAndParse.unit.test.js
import { validateAndParse } from '../../src/domain/validateAndParse.js';

describe('validateAndParse', () => {
  test('parses numeric string to number', () => {
    expect(validateAndParse('42')).toBe(42);
    expect(validateAndParse('3.14')).toBe(3.14);
    expect(validateAndParse('-5')).toBe(-5);
  });

  test('throws if input is not string', () => {
    expect(() => validateAndParse(10)).toThrow('Įvestis turi būti tekstas (string).');
    expect(() => validateAndParse(null)).toThrow('Įvestis turi būti tekstas (string).');
    expect(() => validateAndParse(undefined)).toThrow('Įvestis turi būti tekstas (string).');
  });

  test('throws if string is not numeric', () => {
    expect(() => validateAndParse('abc')).toThrow('Tekstas turi reprezentuoti skaičių.');
    expect(() => validateAndParse('')).toThrow('Tekstas turi reprezentuoti skaičių.');
    expect(() => validateAndParse('--5')).toThrow('Tekstas turi reprezentuoti skaičių.');
  });
});
```

**B. `transformNumber`**

```js
// tests/unit/transformNumber.unit.test.js
import { transformNumber } from '../../src/domain/transformNumber.js';

describe('transformNumber', () => {
  test('applies the formula ((v * 3) - 7) / 2 for positive', () => {
    // ((10 * 3) - 7) / 2 = (30 - 7)/2 = 11.5
    expect(transformNumber(10)).toBe(11.5);
  });

  test('works with zero', () => {
    // ((0 * 3) - 7) / 2 = -3.5
    expect(transformNumber(0)).toBe(-3.5);
  });

  test('works with negative', () => {
    // ((-4 * 3) - 7) / 2 = (-12 - 7)/2 = -9.5
    expect(transformNumber(-4)).toBe(-9.5);
  });

  test('works with float', () => {
    // ((2.5 * 3) - 7) / 2 = (7.5 - 7)/2 = 0.25
    expect(transformNumber(2.5)).toBe(0.25);
  });
});
```

**C. `formatResult`**

```js
// tests/unit/formatResult.unit.test.js
import { formatResult } from '../../src/domain/formatResult.js';

describe('formatResult', () => {
  test('formats integer', () => {
    expect(formatResult(15)).toBe('Rezultatas: 15');
  });

  test('formats float', () => {
    expect(formatResult(0.25)).toBe('Rezultatas: 0.25');
  });

  test('formats negative', () => {
    expect(formatResult(-9.5)).toBe('Rezultatas: -9.5');
  });
});
```

---

## Integracinis testas (visa grandinė)

```js
// tests/integration/processInput.int.test.js
import { processInput } from '../../src/app/processInput.js';

describe('Integration: processInput', () => {
  test('happy path: string -> number -> transform -> formatted', () => {
    // input '10' → parsed 10 → transformed 11.5 → "Rezultatas: 11.5"
    const out = processInput('10');
    expect(out).toBe('Rezultatas: 11.5');
  });

  test('throws on non-string input', () => {
    expect(() => processInput(10)).toThrow('Įvestis turi būti tekstas (string).');
  });

  test('throws on non-numeric string', () => {
    expect(() => processInput('abc')).toThrow('Tekstas turi reprezentuoti skaičių.');
  });
});
```

---

## Santrauka

- **Blogą** monolitinę funkciją pakeitėme **trimis mažomis**: validacija/konversija, transformacija, formatavimas.
- Orkestratorius `processInput` **skaitosi kaip istorija** ir neturi žemo lygio detalių.
- **Unit** testai tikrina **vieną atsakomybę**, **integracinis** – visą **srautą kartu**.

> Jei norėsi, galiu pridėti **TypeScript** tipizacijas ar **Vitest** konfigūraciją alternatyvai Jest.
