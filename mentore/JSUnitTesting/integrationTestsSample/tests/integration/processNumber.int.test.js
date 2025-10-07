import { test, expect, describe } from 'vitest'; // it or test
import { processNumber } from '../../src/app/processNumber.js';

describe('Integration: processNumber()', () => {
    test('correct input returns formatted result', () => {
        const result = processNumber(10);
        expect(result).toBe('Rezultatas: 15');
    });

    test('throws error on invalid input', () => {
        expect(() => processNumber('not-a-number')).toThrow('Argumentas turi būti skaičius!');
    });
});