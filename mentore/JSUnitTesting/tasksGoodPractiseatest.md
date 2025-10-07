# Atsakymai(sutvarkyti testai)

## Užduotis 1 (sutvarkyta)

```js
test('should validate email correctly', () => {
    const email = 'test@example.com';
    const result = validateEmail(email);
    expect(result).toBe(true);
});

test('should create user with given email', () => {
    const email = 'test@example.com';
    const user = createUser(email);
    const result = user.email;
    expect(result).toBe(email);
});

test('should send email successfully', () => {
    const email = 'test@example.com';
    const result = sendEmail(email);
    expect(result).toBe('Email sent');
});
```

## Užduotis 2 (sutvarkyta)

Sukurkime savo pagalbinę funkciją `formatDate()` ir ją testuokime:

```js
function formatDate(date) {
    return date.toISOString().slice(0, 16).replace('T', ' ');
}

test('should format date correctly', () => {
    const now = new Date('2025-01-01T10:00:00');
    const result = formatDate(now);
    expect(result).toBe('2025-01-01 10:00');
});
```

## Užduotis 3 (sutvarkyta)

```js
test('should calculate sum correctly', () => {
    const numbers = [1, 2, 3, 4];
    const result = sum(numbers);
    expect(result).toBe(10);
});

test('should calculate average correctly', () => {
    const numbers = [1, 2, 3, 4];
    const result = average(numbers);
    expect(result).toBe(2.5);
});

test('should find max correctly', () => {
    const numbers = [1, 2, 3, 4];
    const result = max(numbers);
    expect(result).toBe(4);
});

test('should find min correctly', () => {
    const numbers = [1, 2, 3, 4];
    const result = min(numbers);
    expect(result).toBe(1);
});
```

## Užduotis 4 (sutvarkyta)

```js
test('should invalidate incorrect email', () => {
    const input = 'bad_email';
    const result = validateEmail(input);
    expect(result).toBe(false);
});
```
