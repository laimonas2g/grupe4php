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

it('turi mesti klaidą, jeigu paduodamas ne masyvas', () => {
    const num1 = 1;

    const resultFn = () => {
        add(num1);
    };

    expect(resultFn).toThrow();
});

