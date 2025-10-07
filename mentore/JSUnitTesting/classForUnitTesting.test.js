// - Klasės testuojamos kaip ir paprastos funkcijos – tikriname viešus metodus.  
// - Šiame pavyzdyje nėra priklausomybių, todėl nereikia naudoti mock’ų.  
// - Testai turi būti aiškūs, vienas testas → viena atsakomybė.  

import { test, describe, expect } from 'vitest';
import { Counter } from './classForUnitTesting';

describe('Counter', () => {
    test('initial value defaults to 0', () => {
        const counter = new Counter();
        expect(counter.getValue()).toBe(0);
    });

    test('initial value can be set', () => {
        const counter = new Counter(5);
        expect(counter.getValue()).toBe(5);
    });

    test('increment increases value by 1', () => {
        const counter = new Counter();
        counter.increment();
        expect(counter.getValue()).toBe(1);
    });

    test('decrement decreases value by 1', () => {
        const counter = new Counter(3);
        counter.decrement();
        expect(counter.getValue()).toBe(2);
    });

    test('reset sets value to 0', () => {
        const counter = new Counter(10);
        counter.reset();
        expect(counter.getValue()).toBe(0);
    });

    test('increment and decrement work together', () => {
        const counter = new Counter(5);
        counter.increment();
        counter.decrement();
        counter.decrement();
        expect(counter.getValue()).toBe(4);
    });
});