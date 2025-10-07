# Praktinės užduotys: Testų sutvarkymas

Toliau pateikti keli netvarkingi testai.  
Tavo užduotis – sutvarkyti juos pagal paskaitoje aptartas taisykles:

- Testuok tik savo kodą.
- Laikykis AAA struktūros(Arrange – Act – Assert).
- Vienas testas turi turėti vieną atsakomybę.
- Pašalink perteklinius patikrinimus.

Užduotis 1: Per daug logikos viename teste. Sutvarkyk šį testą taip, kad kiekviena funkcija būtų tikrinama atskirai.

```js
test('should validate email and create user and send email', () => {
    const email = 'test@example.com';
    const user = createUser(email);

    expect(validateEmail(email)).toBe(true);
    expect(user.email).toBe(email);
    expect(sendEmail(email)).toBe('Email sent');
});
```

Užduotis 2: Testuojama trečiosios šalies biblioteka. Šis testas tikrina dayjs biblioteką, o ne mūsų kodą.  
Pataisyk testą taip, kad būtų tikrinama mūsų sukurta pagalbinė funkcija(pvz., `formatDate()`).

```js
import dayjs from 'dayjs';

test('should format date correctly', () => {
    const now = new Date('2025-01-01T10:00:00');
    const formatted = dayjs(now).format('YYYY-MM-DD HH:mm');

    expect(formatted).toBe('2025-01-01 10:00');
});
```

Užduotis 3: Per daug `expect` viename teste. Padalink šį testą į kelis mažus testus, kiekvienam veiksmui – atskirą.

```js
test('should process numbers correctly', () => {
    const numbers = [1, 2, 3, 4];

    expect(sum(numbers)).toBe(10);
    expect(average(numbers)).toBe(2.5);
    expect(max(numbers)).toBe(4);
    expect(min(numbers)).toBe(1);
});
```

Užduotis 4: Maišomas validavimas ir šalutinis efektas. Pašalink nereikalingą šalutinį efektą (`console.log`) – testas turi tikrinti tik logiką.

```js
test('should validate and log user input', () => {
    const input = 'bad_email';
    const isValid = validateEmail(input);

    expect(isValid).toBe(false);
    console.log('Input was validated'); //šalutinis efektas
});
```
