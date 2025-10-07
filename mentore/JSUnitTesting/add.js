export function add(numbers) {
    let sum = 0;

    if (typeof numbers !== 'object') {
        throw new Error('Kazkas blogai');
    }

    for (const number of numbers) {
        sum += +number;
    }
    return sum;
}