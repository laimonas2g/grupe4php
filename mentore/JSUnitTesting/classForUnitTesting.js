// Ši klasė:
// - Turi vieną lauką`value`,
// - Leidžia:
//     - padidinti(`increment`),
//     - sumažinti(`decrement`),
//     - nustatyti pradinę reikšmę(`reset`),
//     - gauti dabartinę reikšmę(`getValue`).

export class Counter {
    constructor(startValue = 0) {
        this.value = startValue;
    }

    increment() {
        this.value++;
    }

    decrement() {
        this.value--;
    }

    reset() {
        this.value = 0;
    }

    getValue() {
        return this.value;
    }
}