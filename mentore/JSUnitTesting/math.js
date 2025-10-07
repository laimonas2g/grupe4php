export function add(numbers) {
    let sum = 0; // let sum;

    // throw new Error('Something went wrong');

    for (const number of numbers) {
        sum += number; //+numbers
    }
    return sum;
}