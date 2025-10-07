export function validateNumber(value) {
    if (typeof value !== 'number' || isNaN(value)) {
        throw new Error('Argumentas turi būti skaičius!');
    }
}